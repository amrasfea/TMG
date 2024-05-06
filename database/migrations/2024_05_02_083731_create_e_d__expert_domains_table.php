<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('expertDomains', function (Blueprint $table) {
            $table->string('ED_ID')->primary();
            $table->string('P_platinumID');
            $table->foreign('P_platinumID')->references('P_platinumID')->on('p__platinums');
            $table->string('M_mentorID');
            $table->foreign('M_mentorID')->references('M_mentorID')->on('m_mentors');
            $table->string('ED_Name');
            $table->string('ED_Uni');
            $table->string('ED_Email');
            $table->string('ED_PhoneNum');
            $table->string('ED_Research');
            $table->string('ED_Paper');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expertDomains');
    }
};
