<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{       
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('mentor_id');
            $table->string('category_id');
            $table->string('title');
            $table->text('description');
            $table->string('type'); 
            $table->string('thumbnail')->nullable();       
            $table->string('language');    
            $table->integer('slots');      
            $table->integer('lessons');    
            $table->integer('price')->default(0);
            $table->timestamps();

            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
