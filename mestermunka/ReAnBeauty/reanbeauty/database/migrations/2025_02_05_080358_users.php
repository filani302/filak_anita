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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id'); // Egyedi ID (primary key)
            $table->string('username', 50);
            $table->integer('role'); // Szerepkör(3)
            $table->string('email', 250)->unique();
            $table->string('phone_number', 12);
            $table->string('password', 150);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('modified_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // Visszavonás esetén törli a táblát
    }
};
