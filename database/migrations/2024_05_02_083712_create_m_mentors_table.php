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
        Schema::create('mentors', function (Blueprint $table) {
            $table->string('M_mentorID')->primary();
            $table->string('A_accountID');
            $table->foreign('A_accountID')->references('A_accountID')->on('accounts');
            $table->string('M_phoneNum');
            $table->string('M_position');
            $table->string('M_name');
            $table->string('M_email');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentors');
    }
};
