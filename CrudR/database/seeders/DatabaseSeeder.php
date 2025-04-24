<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'tst2@example.com',
        // ]);
        $this->call([
            // employeeSeeder::class,
            // employee_detail_Seeder::class,
            authorSeeder::class,
            bookSeeder::class
            // GenreSeeder::class,
            // UserSeeder::class,
            // etc.
        ]);
    }
}
