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
        Schema::create('pemeriksaan_unggas', function (Blueprint $table) {
            $table->id();
            $table->string('bilangan_ternakan')->nullable();
            $table->string('bilangan_mati')->nullable();
            $table->string('jumlah_mati_dbs')->nullable();
            $table->string('runt')->nullable();
            $table->string('salah_sembelih')->nullable();
            $table->foreignId('unggas_id')->references('id')->on('unggas') ->onUpdate('cascade')
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
        Schema::dropIfExists('pemeriksaan_unggas');
    }
};
