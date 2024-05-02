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
        Schema::create('c_r_m_p_s', function (Blueprint $table) {
            $table->string('C_ID')->primary();
            $table->string('S_staffID');
            $table->foreign('S_staffID')->references('S_staffID')->on('s_staffs');
            $table->string('P_platinumID');
            $table->foreign('P_platinumID')->references('P_platinumID')->on('p__platinums');
            $table->string('FB_WeeklyFocusBlockID');
            $table->foreign('FB_WeeklyFocusBlockID')->references('FB_WeeklyFocusBlockID')->on('f_b__weekly_focus_blocks');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_r_m_p_s');
    }
};
