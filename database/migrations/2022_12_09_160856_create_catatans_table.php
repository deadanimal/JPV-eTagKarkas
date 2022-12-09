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
        Schema::create('catatans', function (Blueprint $table) {
            $table->id();
            $table->string('tag')->nullable();
            $table->string('jantina')->nullable();
            $table->string('baka')->nullable();
            $table->string('tarikh')->nullable();
            $table->foreignId('pemeriksaan_id')->references('id')->on('pemeriksaans') ->onUpdate('cascade')
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
        Schema::dropIfExists('catatans');
    }
};
