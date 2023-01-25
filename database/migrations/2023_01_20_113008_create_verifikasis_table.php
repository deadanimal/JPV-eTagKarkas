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
        Schema::create('verifikasis', function (Blueprint $table) {
            $table->id();
            $table->string('tarikh')->nullable();
            $table->string('rujukan')->nullable();
            $table->string('syarikat')->nullable();
            $table->string('telefon')->nullable();
            $table->string('faks')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nama')->nullable();
            $table->string('nama2')->nullable();
            $table->string('establihment')->nullable();
            $table->string('tahun')->nullable();
            $table->string('tahun_operasi')->nullable();
            $table->string('premis')->nullable();
            $table->string('milikan')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('pemeriksa_dvs')->nullable();
            $table->string('pemeriksa1')->nullable();
            $table->string('pemeriksa2')->nullable();
            $table->string('pemeriksa3')->nullable();
            $table->string('pemeriksa4')->nullable();

            // step-2
            $table->string('pekerja')->nullable();
            $table->string('pentadbiran')->nullable();
            $table->string('loji')->nullable();
            $table->string('qcqa')->nullable();
            $table->string('bahan')->nullable();
            $table->string('unit_blast')->nullable();
            $table->string('mt_blast')->nullable();
            $table->string('unit_freezer')->nullable();
            $table->string('mt_freezer')->nullable();
            $table->string('unit_chiller')->nullable();
            $table->string('mt_chiller')->nullable();
            $table->string('unit_store')->nullable();
            $table->string('mt_store')->nullable();
            $table->string('unit_lori')->nullable();
            $table->string('mt_lori')->nullable();
            $table->string('kapasiti')->nullable();
            $table->string('keratan')->nullable();
            $table->string('tahun_lepas')->nullable();
            $table->string('keratan2')->nullable();
            $table->string('tahun_semasa')->nullable();
            $table->string('keratan3')->nullable();

            // step 3
            $table->string('pemprosesan')->nullable();
            $table->string('kebersihan')->nullable();
            $table->string('pelaksanaan')->nullable();
            $table->string('personal')->nullable();
            $table->string('kawalan')->nullable();

            // step 4
            $table->string('ulasan')->nullable();
            $table->string('cadangan')->nullable();
            $table->string('pemeriksa_ulasan1')->nullable();
            $table->string('pemeriksa_ulasan2')->nullable();
            $table->string('pemeriksa_ulasan3')->nullable();
            $table->string('pemeriksa_ulasan4')->nullable();
            $table->string('sijil')->nullable();
            $table->string('pengeluaran')->nullable();
            $table->string('penyewaan')->nullable();
            $table->string('oem')->nullable();
           



          


            

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
        Schema::dropIfExists('verifikasis');
    }
};
