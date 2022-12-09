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
        Schema::create('pengenalan_babis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemilik')->nullable();
            $table->string('kenderaan')->nullable();
            $table->string('masa_tiba')->nullable();
            $table->string('masa_disembelih')->nullable();
            $table->string('permit')->nullable();
            $table->string('spesis')->nullable();
            $table->string('bil_ternakan_skv')->nullable();
            $table->string('id_permis')->nullable();
            $table->string('nama_premis')->nullable();
            $table->string('alamat_premis')->nullable();
            //pemeriksaan
            $table->string('bil_ternakan_diterima')->nullable();
            $table->string('ternakan_mati_semasa_tiba')->nullable();
            $table->string('jumlah_ternakan_diperiksa')->nullable();
            $table->string('jumlah_binatang_layak_disembelih')->nullable();
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
        Schema::dropIfExists('pengenalan_babis');
    }
};
