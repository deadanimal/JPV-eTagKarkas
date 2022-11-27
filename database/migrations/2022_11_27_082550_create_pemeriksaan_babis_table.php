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
        Schema::create('pemeriksaan_babis', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_ternakan_babi')->nullable();
            $table->string('baka_ternakan_babi')->nullable();
            $table->string('jumlah_diperiksa_babi')->nullable();
            $table->string('ternakan_diterima_babi')->nullable();
            $table->string('ternakan_mati_tiba_babi')->nullable();
            $table->string('jumlah_sembelih_babi')->nullable();
            $table->string('jumlah_layak_babi')->nullable();
            $table->string('pemeriksaan_rapi_babi')->nullable();
            $table->string('baki_belum_babi')->nullable();
            $table->string('catatan_pemeriksaan_babi')->nullable();

            $table->foreignId('babi_id')->references('id')->on('babis') ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('rumah_sembelih_id')->references('id')->on('rumah_sembelihs') ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('pemeriksaan_babis');
    }
};
