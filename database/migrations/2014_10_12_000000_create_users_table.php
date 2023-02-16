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
            $table->id();
            $table->string('name')->nullable;
            $table->string('email')->nullable();
            $table->string('social_type')->nullable();
            $table->string('social_id')->nullable();
            $table->string('avatar_path')->nullable();
            $table->string('role');
            $table->rememberToken();
            $table->timestamp('last_active_at')->nullable();
            $table->timestamp('anonymized_at')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
