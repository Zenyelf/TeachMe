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
    Schema::create('feedbacks', function (Blueprint $table) {
        $table->uuid('id')->primary(); // Pakai UUID biar konsisten dengan tabel kamu lainnya
        $table->string('user_id'); // Sesuaikan dengan tipe data ID di tabel Users kamu
        $table->integer('rating');
        $table->string('category');
        $table->text('comments');
        $table->string('attachment')->nullable();
        $table->string('status')->default('pending');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
