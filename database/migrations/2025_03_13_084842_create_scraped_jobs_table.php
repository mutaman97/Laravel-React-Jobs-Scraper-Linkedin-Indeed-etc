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
        Schema::create('scraped_jobs', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Job title
            $table->string('company'); // Company name
            $table->string('location'); // Job location
            $table->text('description')->nullable(); // Job description (optional)
            $table->string('url')->unique(); // URL to the job posting
            $table->dateTime('posted_at'); // Date when the job was posted
            $table->string('source')->nullable(); // Source of the job (e.g., LinkedIn, Stack Overflow)
            $table->foreignId('alert_id')->constrained()->onDelete('cascade'); // Link to alerts
            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scraped_jobs');
    }
};
