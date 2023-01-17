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
        Schema::create('semak_borang_c_s', function (Blueprint $table) {
            $table->id();
            $table->string('bahan')->nullable();
            $table->string('punca')->nullable();
            $table->string('nombor')->nullable();
            $table->string('dokumen')->nullable();
            $table->string('carta')->nullable();
            $table->string('jenis')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('tarikh')->nullable();
            $table->string('manual')->nullable();
            $table->string('sistem_manual')->nullable();
            $table->string('rekod')->nullable();
            $table->string('haccp')->nullable();
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
        Schema::dropIfExists('semak_borang_c_s');
    }
};
