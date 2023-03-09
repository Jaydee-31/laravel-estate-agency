<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // Method 1 - Seed the users table using models
        // \App\Models\User::factory(10)->create(); //10 random data

        // \App\Models\User::factory()->create([ //specific data
        //     'name' => 'Test User 3',
        //     'email' => 'test1212312312@example.com',
        // ]);

       
        //Seed MessagesTable
        $this->call(MessagesTableSeeder::class);

    }
}
