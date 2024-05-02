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
        Schema::create('a_accounts', function (Blueprint $table) {
            $table->string('A_accountID')->primary();
            $table->string('A_password');
            $table->string('A_username');
            $table->string('A_accType');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a_accounts');
    }
};
