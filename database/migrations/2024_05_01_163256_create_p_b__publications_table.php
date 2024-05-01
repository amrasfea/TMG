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
        Schema::create('p_b__publications', function (Blueprint $table) {
            $table->string('PB_ID')->primary();
            $table->string('PB_Type');
            $table->string('PB_Title');
            $table->string('PB_Author');
            $table->string('PB_Uni');
            $table->string('PB_Course');
            $table->string('PB_Keyword');
            $table->date('PB_Date');
            $table->foreign('ED_ID')->references('ED_ID')->on(ED_ExpertDomain)->onDelete('cascade');
            $table->foreign('P_platinumID')->references('P_platinumID')->on(P_platinum)->onDelete('cascade');;
            $table->foreign('PR_ID')->references('PR_ID')->on(PR_PublicationReport)->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_b__publications');
    }
};
