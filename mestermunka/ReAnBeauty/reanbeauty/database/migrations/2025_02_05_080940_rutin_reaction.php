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
        Schema::create('rutin_reaction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rutin_id')->constrained('rutin')->onDelete('cascade'); // Fix here: use 'constrained'
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Fix here: use 'constrained'
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('comment_id')->constrained('comments')->onDelete('cascade');
            $table->foreignId('like_id')->constrained('likes')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutin_reaction');
    }
};
