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
        Schema::create('f_b__weekly_focus_blocks', function (Blueprint $table) {
            $table->string('FB_WeeklyFocusID')->primary();
            $table->string('P_platinumID');
            $table->foreign('P_platinumID')->references('P_platinumID')->on('p__platinums');
            $table->string('M_mentorID');
            $table->foreign('M_mentorID')->references('M_mentorID')->on('m_mentors');
            $table->string('FB_BlockType');
            $table->string('FB_BlockDesc');
            $table->date('FB_StartDate');
            $table->date('FB_EndDate');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('f_b__weekly_focus_blocks');
    }
};
