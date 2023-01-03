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
        Schema::create('pemeriksaan_rapis', function (Blueprint $table) {
            $table->id();
            $table->string('warna')->nullable();
            $table->string('tanda')->nullable();
            $table->string('jumlah_ternakan')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('suhu')->nullable();
            $table->string('jenis1')->nullable();
            $table->string('jenis2')->nullable();
            $table->string('jenis3')->nullable();
            $table->foreignId('pemeriksaan_id')->references('id')->on('pemeriksaans') ->onUpdate('cascade')
            ->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('pemeriksaan_rapis');
    }
};
