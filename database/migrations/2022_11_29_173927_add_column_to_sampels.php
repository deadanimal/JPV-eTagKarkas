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
        Schema::table('sampels', function (Blueprint $table) {
            //
            $table->string('tahun')->nullable();
            $table->string('zon')->nullable();
            $table->string('kod_premis')->nullable();
            $table->string('premis')->nullable();
            $table->string('ujian')->nullable();
            $table->string('sampel')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sampels', function (Blueprint $table) {
            //
        });
    }
};
