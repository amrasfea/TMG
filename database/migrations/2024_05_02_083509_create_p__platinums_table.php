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
        Schema::create('platinums', function (Blueprint $table) {
            $table->string('P_platinumID')->primary();
            $table->string('S_staffID');
            $table->foreign('S_staffID')->references('S_staffID')->on('staffs');
            $table->string('A_accountID');
            $table->foreign('A_accountID')->references('A_accountID')->on('accounts');
            $table->string('P_title');
            $table->string('P_fullName');
            $table->string('P_icNum');
            $table->string('P_gender');
            $table->string('P_race');
            $table->string('P_citizenship');
            $table->string('P_address');
            $table->string('P_phoneNum');
            $table->string('P_email');
            $table->string('P_fbName');
            $table->string('P_edulevel');
            $table->string('P_sponsorship');
            $table->string('P_occupation');
            $table->string('P_eduInstitute');
            $table->string('P_programType');
            $table->string('P_batch');
            $table->string('P_referral');
            $table->string('P_refName');
            $table->string('P_refBatch');
            $table->string('P_tshirtSize');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platinums');
    }
};
