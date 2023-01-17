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
        Schema::create('semak_borang_b_s', function (Blueprint $table) {
            $table->id();
            $table->string('keperluan')->nullable();
            $table->string('jenis')->nullable();
            $table->string('senarai')->nullable();
            $table->string('negara_haiwan')->nullable();
            $table->string('produk_haiwan')->nullable();
            $table->string('negara_non_haiwan')->nullable();
            $table->foreignId('maklumat_pemeriksaan_id')->references('id')->on('semak_borang_a_s') ->onUpdate('cascade')
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
        Schema::dropIfExists('semak_borang_b_s');
    }
};
