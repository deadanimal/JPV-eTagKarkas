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
        Schema::create('borang_pensampelans', function (Blueprint $table) {
            $table->id();
            $table->string('makmal')->nullable();
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('telefon')->nullable();
            $table->string('faks')->nullable();
            $table->string('emel')->nullable();
            $table->string('handphone')->nullable();
            $table->string('options')->nullable();
            $table->string('id_premis')->nullable();
            $table->string('nama_premis')->nullable();
            $table->string('alamat_premis')->nullable();

            // page 2
            $table->string('ladang')->nullable();
            $table->string('alamat_ladang')->nullable();
            $table->string('id_ladang')->nullable();
            $table->string('telefon_ladang')->nullable();
            $table->string('gps_ladang')->nullable();
            $table->string('options_ladang')->nullable();
            $table->string('tarikh_kutip')->nullable();
            $table->string('id_sampel')->nullable();
            $table->string('jenis_sampel')->nullable();
            $table->string('maklumat')->nullable();

            // page 3
            $table->string('kebersihan')->nullable();
            $table->string('patogen')->nullable();
            $table->string('kualiti')->nullable();
            $table->string('pestisid')->nullable();
            $table->string('aditif')->nullable();
            $table->string('logam')->nullable();
            $table->string('mineral')->nullable();
            $table->string('identifikasi')->nullable();
            $table->string('ketulenan')->nullable();
            $table->string('ubatan')->nullable();
            $table->string('hormon')->nullable();



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
        Schema::dropIfExists('borang_pensampelans');
    }
};
