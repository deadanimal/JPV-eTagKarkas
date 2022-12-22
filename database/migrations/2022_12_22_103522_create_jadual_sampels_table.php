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
        Schema::create('jadual_sampels', function (Blueprint $table) {
            $table->id();
            $table->string('bil_sampel')->nullable();
            $table->string('jan')->nullable();
            $table->string('feb')->nullable();
            $table->string('mac')->nullable();
            $table->string('apr')->nullable();
            $table->string('mei')->nullable();
            $table->string('jun')->nullable();
            $table->string('jul')->nullable();
            $table->string('aug')->nullable();
            $table->string('sep')->nullable();
            $table->string('oct')->nullable();
            $table->string('nov')->nullable();
            $table->string('dec')->nullable();
            $table->string('jumlah')->nullable(); 
            $table->foreignId('sampel_id')->references('id')->on('sampels') ->onUpdate('cascade')
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
        Schema::dropIfExists('jadual_sampels');
    }
};
