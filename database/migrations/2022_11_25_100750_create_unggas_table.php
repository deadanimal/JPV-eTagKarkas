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
        Schema::create('unggas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ladang')->nullable();
            $table->string('nombor_kenderaan')->nullable();
            $table->string('id_ladang')->nullable();
            $table->string('alamat_ladang')->nullable();
            $table->string('tarikh_terima')->nullable();
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
        Schema::dropIfExists('unggas');
    }
};
