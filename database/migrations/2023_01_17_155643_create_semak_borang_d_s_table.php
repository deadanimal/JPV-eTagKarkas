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
        Schema::create('semak_borang_d_s', function (Blueprint $table) {
            $table->id();
            $table->string('keputusan')->nullable();
            $table->string('penemuan')->nullable();
            $table->string('pengesyoran')->nullable();
            $table->string('pemeriksa1')->nullable();
            $table->string('pemeriksa2')->nullable();
            $table->string('pemeriksa3')->nullable();
            $table->string('pemeriksa4')->nullable();
            $table->string('cop1')->nullable();
            $table->string('cop2')->nullable();
            $table->string('cop3')->nullable();
            $table->string('cop4')->nullable();
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
        Schema::dropIfExists('semak_borang_d_s');
    }
};
