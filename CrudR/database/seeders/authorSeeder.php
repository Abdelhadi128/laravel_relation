<?php

namespace Database\Seeders;

use App\Models\Authors;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class authorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Authors::factory(100)->create();
    }
}
