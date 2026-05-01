<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing integer ID for the message itself
            
            // We use string() because your user IDs look like 'S202601'
            $table->string('sender_id'); 
            $table->string('receiver_id');
            
            // The actual content of the chat message
            $table->text('message');
            
            // Adds 'created_at' and 'updated_at' columns
            $table->timestamps(); 

            // Optional but highly recommended: Add indexes to speed up the chat queries
            $table->index('sender_id');
            $table->index('receiver_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
