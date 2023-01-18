<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perakuan_susu_tepungs', function (Blueprint $table) {
            $table->id();
            $table->string('syarikat')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kg')->nullable();
            $table->string('batch')->nullable();
            $table->string('proses')->nullable();
            $table->string('pengendalian')->nullable();
            $table->string('penyimpanan')->nullable();
            $table->string('pembungkusan')->nullable();
            $table->string('lain')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perakuan_susu_tepungs');
    }
};
