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
        Schema::table('survelan_audits', function (Blueprint $table) {
            //
            $table->foreignId('pdn_id')->references('id')->on('pemeriksaan_dalam_negaras') ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('survelan_audits', function (Blueprint $table) {
            //
        });
    }
};
