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
            $table->string('id')->primary(); // Tetap pakai string id sesuai desainmu
            $table->string('user_id');
            $table->string('title')->nullable();
            $table->string('academic_degree')->nullable();
            $table->text('bio')->nullable();
            $table->string('preferred_learning')->nullable();
            $table->string('contact_email')->nullable();
            $table->text('address')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('portfolio_url')->nullable();
            $table->string('twitter_handle')->nullable();
            $table->decimal('revenue', 12, 2)->default(0);

            $table->timestamps();

            // BARIS 30 YANG KAMU CARI ADA DI SINI:
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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