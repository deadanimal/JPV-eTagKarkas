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
        Schema::create('ncs_obrs', function (Blueprint $table) {
            $table->id();

            $table->string('zon')->nullable();
            $table->string('jenis_operasi')->nullable();
            $table->string('status')->nullable();
            $table->string('jenis_borang')->nullable();

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
        Schema::dropIfExists('ncs_obrs');
    }
};
