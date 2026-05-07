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
        Schema::create('course_sessions', function (Blueprint $table) {
        $table->id();
        $table->string('course_id');
        $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');

        $table->integer('batch_number');        // Batch 1, Batch 2, etc.
        $table->date('start_date');
        $table->date('end_date');
        $table->integer('slots');               // Max students for this batch
        $table->string('meeting_link')->nullable();  // Zoom link if online/hybrid
        $table->string('location')->nullable();      // Address if onsite/hybrid
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_sessions');
    }
};
