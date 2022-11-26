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
        Schema::create('ante_mortem_unggas', function (Blueprint $table) {
            $table->id();
            $table->string('general')->nullable();
            $table->string('bil_kes_general')->nullable();
            $table->string('respiratory')->nullable();
            $table->string('bil_kes_respiratory')->nullable();
            $table->string('cns')->nullable();
            $table->string('bil_kes_cns')->nullable();
            $table->string('gastro')->nullable();
            $table->string('bil_kes_gastro')->nullable();
            $table->foreignId('unggas_id')->references('id')->on('unggas') ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('rumah_sembelih_id')->references('id')->on('rumah_sembelihs') ->onUpdate('cascade')
            ->onDelete('cascade');

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
        Schema::dropIfExists('ante_mortem_unggas');
    }
};
