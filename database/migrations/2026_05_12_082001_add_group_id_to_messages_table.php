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
        Schema::table('messages', function (Blueprint $table) {
            // Add group_id
            $table->foreignId('group_id')->nullable()->after('id')->constrained('groups')->onDelete('cascade');
            
            // Make receiver_id nullable
            $table->string('receiver_id')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropForeign(['group_id']);
            $table->dropColumn('group_id');
            $table->string('receiver_id')->nullable(false)->change();
        });
    }
};
