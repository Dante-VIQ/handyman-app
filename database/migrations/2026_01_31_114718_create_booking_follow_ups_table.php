<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booking_follow_ups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['phone_call', 'email', 'meeting', 'assessment', 'paperwork']);
            $table->date('scheduled_date');
            $table->timestamp('completed_date')->nullable();
            $table->text('notes')->nullable();
            $table->enum('outcome', ['interested', 'not_interested', 'needs_more_info', 'scheduled_tour', 'scheduled_assessment'])->nullable();
            $table->foreignId('assigned_to')->nullable()->constrained('users')->nullOnDelete();
            $table->enum('status', ['pending', 'completed', 'cancelled', 'rescheduled'])->default('pending');
            $table->timestamps();

            $table->index(['scheduled_date', 'status']);
            $table->index(['booking_id', 'type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_follow_ups');
    }
};
