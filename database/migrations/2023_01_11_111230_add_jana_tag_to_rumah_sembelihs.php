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
        Schema::table('rumah_sembelihs', function (Blueprint $table) {
            //
            $table->string('jana_tag')->nullable();
            $table->string('jenis1')->nullable();
            $table->string('jenis2')->nullable();
            $table->string('jenis3')->nullable();
            $table->string('jenis4')->nullable();
            $table->string('jenis5')->nullable();
            $table->string('jenis6')->nullable();
            $table->string('jenis7')->nullable();
            $table->string('jenis8')->nullable();
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rumah_sembelihs', function (Blueprint $table) {
            //
        });
    }
};
