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
        Schema::create('rutin', function (Blueprint $table) {
         $table->id('rutin_id');
          $table->foreignId('product_id')->constrained('product')->onDelete('cascade');
           $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
           $table->tinyInteger('rutin_type')->unsigned();
           $table->string('title', 50);
           $table->string('image', 50)->nullable();
           $table->string('description', 2500)->nullable();
           $table->timestamp('created_at')->useCurrent();
           $table->timestamp('modified_at')->useCurrent()->useCurrentOnUpdate();
           $table->tinyInteger('allergen')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutin');
    }
};
