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
        Schema::create('keratans', function (Blueprint $table) {
            $table->id();
            $table->string('premis')->nullable();
            $table->string('telefon')->nullable();
            $table->string('emel')->nullable();
            $table->string('faks')->nullable();
            $table->string('web')->nullable();
            $table->string('alamat')->nullable();
            $table->string('zon')->nullable();
            $table->string('negeri')->nullable();
            $table->string('daerah')->nullable();
            $table->string('poskod')->nullable();
            $table->string('klasifikasi')->nullable();
            $table->string('kaedah')->nullable();
            $table->string('jenis_produk')->nullable();
            $table->string('negara_eksport')->nullable();
            $table->string('pemeriksa_1')->nullable();
            $table->string('pemeriksa_2')->nullable();
            $table->string('pemeriksa_3')->nullable();
            $table->string('pemeriksa_4')->nullable();
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
        Schema::dropIfExists('keratans');
    }
};
