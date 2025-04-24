<?php

namespace Database\Seeders;

use App\Models\Employee_detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class employee_detail_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee_detail::factory(100)->create();
    }
}
