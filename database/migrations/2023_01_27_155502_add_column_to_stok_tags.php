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
        Schema::table('stok_tags', function (Blueprint $table) {
            //
            $table->string('nama_rumah')->nullable();
            $table->string('tarikh_tag_terima')->nullable();
            $table->string('tag_bolehpakai')->nullable();
        

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stok_tags', function (Blueprint $table) {
            //
        });
    }
};
