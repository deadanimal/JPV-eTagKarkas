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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('nama_pengguna')->nullable();
            $table->string('ibu_pejabat')->nullable();
            $table->string('alamat')->nullable();
            $table->string('unit')->nullable();
            $table->string('cawangan')->nullable();
            $table->string('jawatan')->nullable();
            $table->string('gred')->nullable();
            $table->string('nombor_telefon')->nullable();
            $table->string('status')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
