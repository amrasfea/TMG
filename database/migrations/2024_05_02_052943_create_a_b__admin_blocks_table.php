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
        Schema::create('a_b__admin_blocks', function (Blueprint $table) {
            $table->string('FB_ABlockID')->primary();
            $table->string('FB_WeeklyFocusID');
            $table->foreign('FB_WeeklyFocusID')->references('FB_WeeklyFocusID')->on('FB_WeeklyFocusBlock');
            $table->date('FB_StartDate');
            $table->date('FB_EndDate');
            $table->string('FB_BlockItem');
            $table->string('FB_BlockDetail');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a_b__admin_blocks');
    }
};
