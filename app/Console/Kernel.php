<?php

namespace App\Console;

use App\Models\Notifikasi;
use App\Models\PostMortemRuminan;
use App\Models\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Auth;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            $this->update_noti();
        })->dailyAt('8:00');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    public function update_noti()
    {
        $pengguna = User::all();

        foreach ($pengguna as $key => $p) {
            $post_mortem = PostMortemRuminan::where('user_id', $p->id)->where('status', 0)->get();
            $kira_pm = count($post_mortem);

            if ($kira_pm != 0) {
                $noti = new Notifikasi;
                $noti->user_id = $p->id;
                $noti->mesej = $kira_pm . ' Laporan belum dihantar';
                $noti->read = "0";
                $noti->save();
            }
        }
    }
}
