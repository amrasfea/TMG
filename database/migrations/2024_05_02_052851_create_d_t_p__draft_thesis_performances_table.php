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
        Schema::create('d_t_p__draft_thesis_performances', function (Blueprint $table) {
            $table->string('DTP_DraftNum')->primary();
            $table->string('DTP_Title');
            $table->string('C_ID');
            $table->foreign('C_ID')->references('C_ID')->on('CRMP');
            $table->string('P_platinumID');
            $table->foreign('P_platinumID')->references('P_platinumID')->on('P_Platinum');
            $table->date('DTP_StartDate');
            $table->date('DTP_CompletionDate');
            $table->integer('DTP_PagesNum');
            $table->string('M_mentorID');
            $table->foreign('M_mentorID')->references('M_mentorID')->on('M_mentor');
            $table->string('DTP_DDCgroup');
            $table->integer('DTP_PrepareDays');
            $table->integer('DTP_TotalPages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_t_p__draft_thesis_performances');
    }
};
