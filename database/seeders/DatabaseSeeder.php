<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('properties')->insert([
            [
                'image' => 'assets/img/property-10.jpg',
                'house_no' => '204 Mount', 
                'street' => 'Olive Road Two', 
                'rent' => '$13', 
                'area' => '340m',
                'beds' => '3', 
                'baths' => '3', 
                'garages' => '1', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'assets/img/property-8.jpg',
                'house_no' => '204 Mount', 
                'street' => 'Olive Road Two', 
                'rent' => '$13', 
                'area' => '340m',
                'beds' => '3', 
                'baths' => '3', 
                'garages' => '1', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'assets/img/property-4.jpg',
                'house_no' => '671 Mount', 
                'street' => 'Olive Road Two', 
                'rent' => '$13', 
                'area' => '340m',
                'beds' => '3', 
                'baths' => '3', 
                'garages' => '1', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'assets/img/property-8.jpg',
                'house_no' => '204 Mount', 
                'street' => 'Olive Road Two', 
                'rent' => '$13', 
                'area' => '340m',
                'beds' => '3', 
                'baths' => '3', 
                'garages' => '1', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'assets/img/property-6.jpg',
                'house_no' => '201 Mount', 
                'street' => 'Olive Road Two', 
                'rent' => '$13', 
                'area' => '340m',
                'beds' => '3', 
                'baths' => '3', 
                'garages' => '1', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'assets/img/property-3.jpg',
                'house_no' => '522 Mount', 
                'street' => 'Olive Road Two', 
                'rent' => '$13', 
                'area' => '340m',
                'beds' => '3', 
                'baths' => '3', 
                'garages' => '1', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'assets/img/property-8.jpg',
                'house_no' => '204 Mount', 
                'street' => 'Olive Road Two', 
                'rent' => '$13', 
                'area' => '340m',
                'beds' => '3', 
                'baths' => '3', 
                'garages' => '1', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'assets/img/property-6.jpg',
                'house_no' => '201 Mount', 
                'street' => 'Olive Road Two', 
                'rent' => '$13', 
                'area' => '340m',
                'beds' => '3', 
                'baths' => '3', 
                'garages' => '1', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'assets/img/property-3.jpg',
                'house_no' => '522 Mount', 
                'street' => 'Olive Road Two', 
                'rent' => '$13', 
                'area' => '340m',
                'beds' => '3', 
                'baths' => '3', 
                'garages' => '1', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more sample properties here...
        ]);
        // \App\Models\User::factory(10)->create(); //10 random data

        // \App\Models\User::factory()->create([ //specific data
        //     'name' => 'Test User 3',
        //     'email' => 'test1212312312@example.com',
        // ]);

       
        //Seed MessagesTable
        $this->call(MessagesTableSeeder::class);

    }
}
