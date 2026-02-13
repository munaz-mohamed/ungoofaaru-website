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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('content_id')->constrained('contents')->cascadeOnDelete();

            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete(); // nullable = guest
            $table->foreignId('parent_id')->nullable()->constrained('comments')->nullOnDelete();

            $table->string('author_name')->nullable();  // for guest
            $table->string('author_email')->nullable(); // for guest

            $table->text('body');
            $table->string('status', 30)->default('pending'); // pending/approved/spam

            $table->timestamps();

            $table->index(['content_id', 'status', 'created_at']);
            $table->index(['parent_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_comments');
    }
};
