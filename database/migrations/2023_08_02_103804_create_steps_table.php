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
        Schema::create('steps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')
                ->constrained('jobs')
                ->cascadeOnDelete();
            $table->string('name');
            $table->text('description')->default('');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('due_date')->nullable();
            $table->dateTime('schedule_date')->nullable();
            $table->enum('status', 
                ['upcoming', 'done', 'passed', 'failed', 'aborted']);
            $table->text('note')->default('');
            $table->text('review')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('steps');
    }
};
