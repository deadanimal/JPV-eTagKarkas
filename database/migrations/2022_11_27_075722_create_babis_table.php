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
        Schema::create('babis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemilik_babi')->nullable();
            $table->string('kenderaan_babi')->nullable();
            $table->string('masa_tiba_babi')->nullable();
            $table->string('id_premis_babi')->nullable();
            $table->string('bilangan_ternakan_diterima_babi')->nullable();
            $table->string('ternakan_mati_semasa_tiba_babi')->nullable();
            $table->string('jumlah_diperiksa_babi')->nullable();
            $table->string('bilangan_rapi_babi')->nullable();
            $table->string('jumlah_disembelih_kecemasan_babi')->nullable();
            $table->string('jumlah_dikondem_babi')->nullable();
            $table->string('jumlah_disembelih_babi')->nullable();
            $table->string('baki_belum_disembelih_babi')->nullable();
            $table->string('catatan_babi')->nullable();
            $table->foreignId('rumah_sembelih_id')->references('id')->on('rumah_sembelihs') ->onUpdate('cascade')
            ->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('babis');
    }
};
