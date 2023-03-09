<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('messages')->insert([
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'message' => 'This is a sample message.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'message' => 'We are celebrating a birthday.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'John Michael Smith',
                'email' => 'johnsmith@example.com',
                'message' => 'We are celebrating a birthday.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more sample reservations here...
        ]);
    }
}
