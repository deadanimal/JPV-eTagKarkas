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
        Schema::create('pemeriksaan_harians', function (Blueprint $table) {
            $table->id();
            $table->string('bilangan_diasingkan_pemeriksaan_rapi')->nullable();
            $table->string('jumlah_binatang_disembelih_kecemasan')->nullable();
            $table->string('jumlah_disembelih')->nullable();
            $table->string('baki_ternakan_belum_disembelih')->nullable();
            $table->string('catatan')->nullable();
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
        Schema::dropIfExists('pemeriksaan_harians');
    }
};
