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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('company');
            $table->text('description')->default('');
            $table->string('location')->default('');
            $table->integer('salary_min')->default(0);
            $table->integer('salary_max')->default(0);
            $table->enum('job_type', 
                ['full time', 'part time', 'intern', 'study']);
            $table->enum('status', 
                ['upcoming', 'on process', 'accepted', 'rejected', 'aborted', 'ghosted']);
            $table->enum('priority', 
                ['low', 'med', 'high']);
            $table->text('note')->default('');
            $table->text('reference')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
