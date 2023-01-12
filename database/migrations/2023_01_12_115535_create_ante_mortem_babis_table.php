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
        Schema::create('ante_mortem_babis', function (Blueprint $table) {
            $table->id();
            $table->string('ante_mortem')->nullable();
            $table->string('kes')->nullable();
            $table->string('nombor_tag')->nullable();
            $table->string('catatan_ante_mortem')->nullable();
            $table->string('jumlah_dikondem')->nullable();
            $table->foreignId('rumah_sembelih_id')->references('id')->on('rumah_sembelihs') ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('pemeriksaan_id')->references('id')->on('pengenalan_babis') ->onUpdate('cascade')
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
        Schema::dropIfExists('ante_mortem_babis');
    }
};
