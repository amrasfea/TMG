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
        Schema::create('r_p__reports', function (Blueprint $table) {
            $table->string('RP_ID')->primary();
            $table->string('RP_Name');
            $table->string('RP_Uni');
            $table->string('RP_Email');
            $table->string('RP_PhoneNum');
            $table->string('RP_Research');
            $table->string('RP_Paper');
            $table->string('P_platinumID');
            $table->foreign('P_platinumID')->references('P_platinumID')->on('p__platinums');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_p__reports');
    }
};
