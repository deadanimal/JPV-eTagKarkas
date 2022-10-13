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
        Schema::create('rumah_sembelihs', function (Blueprint $table) {
            
            $table->id();
            $table->string('induk');
            $table->string('nama_rumah');
            $table->string('kod');
            $table->string('kategori');
            $table->string('alamat');
            $table->string('negeri');
            $table->string('daerah');
            $table->string('no_tel');
            $table->string('emel');
            $table->string('orang_dihubungi');
            $table->string('zon');
            $table->string('kod_bar');
            $table->string('akses_ternakan');
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
        Schema::dropIfExists('rumah_sembelihs');
    }
};
