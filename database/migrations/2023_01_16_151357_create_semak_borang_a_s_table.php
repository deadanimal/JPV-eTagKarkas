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
        Schema::create('semak_borang_a_s', function (Blueprint $table) {
            $table->id();
            $table->string('tarikh')->nullable();
            $table->string('rujukan')->nullable();
            $table->string('establishment')->nullable();
            $table->string('telefon')->nullable();
            $table->string('alamat')->nullable();
            $table->string('jenis')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('premis')->nullable();
            $table->string('pemeriksa_dvs')->nullable();
            $table->string('pemeriksa1')->nullable();
            $table->string('pemeriksa2')->nullable();
            $table->string('pemeriksa3')->nullable();
            $table->string('pemeriksa4')->nullable();
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
        Schema::dropIfExists('semak_borang_a_s');
    }
};
