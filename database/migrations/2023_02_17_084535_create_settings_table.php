<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->string('type')->default('string');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        foreach ($this->settings as $setting) {
            \App\Models\Setting::create($setting);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }

    private $settings = [
        [
            'key' => 'name',
            'value' => 'Booking',
            'type' => 'string',
            'description' => 'The name of the application.',
        ],
        [
            'key' => 'welcome',
            'value' => 'Welcome to the Booking application.',
            'type' => 'string',
            'description' => 'The welcome message of the application.',
        ],
        [
            'key' => 'description',
            'value' => 'The Booking application is a booking system.',
            'type' => 'string',
            'description' => 'The description of the application.',
        ],
        [
            'key' => 'logo',
            'value' => 'logo.png',
            'type' => 'string',
            'description' => 'The logo of the application.',
        ],
        [
            'key' => 'favicon',
            'value' => 'favicon.png',
            'type' => 'string',
            'description' => 'The favicon of the application.',
        ],
        [
            'key' => 'email',
            'value' => 'user@example.com',
            'type' => 'string',
            'description' => 'The email address of the application.',
        ],

    ];
};
