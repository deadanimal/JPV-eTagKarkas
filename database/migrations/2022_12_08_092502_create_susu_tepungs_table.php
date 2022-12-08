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
        Schema::create('susu_tepungs', function (Blueprint $table) {
            $table->id();
            $table->string('premis')->nullable();
            $table->string('wakil')->nullable();
            $table->string('telefon')->nullable();
            $table->string('emel')->nullable();
            $table->string('faks')->nullable();
            $table->string('web')->nullable();
            $table->string('alamat')->nullable();
            $table->string('zon')->nullable();
            $table->string('negeri')->nullable();
            $table->string('daerah')->nullable();
            $table->string('poskod')->nullable();
            $table->string('kaedah')->nullable();
            $table->string('klasifikasi')->nullable();
            $table->string('vhm')->nullable();
            $table->string('jenis_produk')->nullable();
            $table->string('kuantiti')->nullable();
            $table->string('pembeli')->nullable();
            $table->string('alamat_pembeli')->nullable();

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
        Schema::dropIfExists('susu_tepungs');
    }
};
