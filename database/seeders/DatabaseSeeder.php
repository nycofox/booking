<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Settings;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

//        Settings::create([
//            'key' => 'app.name',
//            'value' => 'Booking',
//            'type' => 'string',
//            'description' => 'The name of the application.',
//        ]);
        Settings::create([
            'key' => 'app.welcome',
            'value' => 'Welcome to the Booking application.',
            'type' => 'string',
            'description' => 'The welcome message of the application.',
        ]);
        Settings::create([
            'key' => 'app.description',
            'value' => 'The Booking application is a booking system.',
            'type' => 'string',
            'description' => 'The description of the application.',
        ]);

    }
}
