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
        Schema::create('jadual_ncs_obrs', function (Blueprint $table) {
            $table->id();
            $table->string('nombor_ic')->nullable();
            $table->string('company')->nullable();
            $table->string('audit')->nullable();
            $table->string('categori')->nullable();
            $table->string('standard_reference')->nullable();
            $table->string('clause')->nullable();
            $table->string('NC_statement')->nullable();
            $table->string('objective_evidence')->nullable();
            $table->string('auditee_acknowledgement')->nullable();
            $table->string('auditor1_signature')->nullable();
            $table->string('auditor2_signature')->nullable();
            $table->string('auditor3_signature')->nullable();
            $table->string('auditor4_signature')->nullable();

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
        Schema::dropIfExists('jadual_ncs_obrs');
    }
};
