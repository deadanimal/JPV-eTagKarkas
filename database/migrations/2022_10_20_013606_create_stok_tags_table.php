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
        Schema::create('stok_tags', function (Blueprint $table) {
            $table->id();
            $table->string('tarikh')->nullable();
            $table->string('tag_diterima')->nullable();
            $table->string('tag_rosak')->nullable();
            $table->string('tarikh_tag_rosak')->nullable();
            $table->string('catatan')->nullable();
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
        Schema::dropIfExists('stok_tags');
    }
};
