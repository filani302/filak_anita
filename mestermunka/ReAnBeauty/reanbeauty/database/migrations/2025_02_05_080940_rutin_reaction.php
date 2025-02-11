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
            $table->id('rutin_r_id');
            $table->unsignedBigInteger('rutin_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->string('comment', 700)->nullable();
            $table->tinyInteger('like')->unsigned()->nullable();
            $table->timestamp('reacted_at')->useCurrent();
            $table->timestamp('modified_at')->useCurrent()->useCurrentOnUpdate();

            // Idegen kulcsok
            $table->foreign('rutin_id')->references('rutin_id')->on('rutin')->onDelete('cascade');
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
