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
        Schema::create('exsports', function (Blueprint $table) {
            $table->id();

            $table->string('nama')->nullable();
            $table->string('nombor')->nullable();
            $table->string('tarikh')->nullable();
            $table->string('produk')->nullable();
            $table->string('daerah')->nullable();
            $table->string('negeri')->nullable();
            $table->string('zon')->nullable();
            $table->string('poskod')->nullable();
            $table->string('alamat')->nullable();
            $table->string('premis')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('pemeriksa_1')->nullable();
            $table->string('pemeriksa_2')->nullable();
            $table->string('dokumen')->nullable();
            $table->string('jenis')->nullable();



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
        Schema::dropIfExists('exsports');
    }
};
