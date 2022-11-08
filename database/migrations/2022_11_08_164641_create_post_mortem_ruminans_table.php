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
        Schema::create('post_mortem_ruminans', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_post_mortem')->nullable();
            $table->string('bahagian')->nullable();
            $table->string('musnah')->nullable();
            $table->string('kes_post_mortem')->nullable();
            $table->string('nombor_tag_post')->nullable();
            $table->string('keputusan')->nullable();
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
        Schema::dropIfExists('post_mortem_ruminans');
    }
};
