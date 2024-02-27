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
        Schema::create('account_transfer_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('withdraw');
            $table->integer('deposits');
            $table->integer('ac_number')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_transfer_details');
    }
};
