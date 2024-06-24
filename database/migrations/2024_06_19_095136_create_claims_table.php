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
        Schema::create('claims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('users', 'id')->onDelete('cascade');
            $table->foreignId('campaign_id')->constrained()->onDelete('cascade');
            $table->foreignId('reward_id')->nullable()->constrained()->onDelete('cascade');
            $table->enum('status', ['pending','approved','rejected','redeemed','cleared'])->default('pending');
            $table->text('claim_details')->nullable();
            $table->text('proof')->nullable();
            $table->string('tracking_id');
            $table->text('qr_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('claims');
    }
};
