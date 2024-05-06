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
        Schema::create('publicationReports', function (Blueprint $table) {
            $table->string('PR_PublicationReportID')->primary();
            $table->date('PR_Date');
            $table->string('PR_Description');
            $table->string('M_mentorID');
            $table->foreign('M_mentorID')->references('M_mentorID')->on('m_mentors');
            $table->string('PB_ID');
            $table->foreign('PB_ID')->references('PB_ID')->on('p_b__publications');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_r__publicationReports');
    }
};
