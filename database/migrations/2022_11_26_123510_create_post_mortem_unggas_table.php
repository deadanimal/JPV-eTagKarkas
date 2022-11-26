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
        Schema::create('post_mortem_unggas', function (Blueprint $table) {
            $table->id();
            $table->string('bukan_lesi')->nullable();
            $table->string('bil_bukan_lesi')->nullable();
            $table->string('lesi_semasa_carcass')->nullable();
            $table->string('bil_lesi_semasa')->nullable();
            $table->string('gastro_pm')->nullable();
            $table->string('bil_gastro_pm')->nullable();
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
        Schema::dropIfExists('post_mortem_unggas');
    }
};
