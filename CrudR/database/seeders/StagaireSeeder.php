<?php

namespace Database\Seeders;

use Faker\Factory as faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Stagaires;

class StagaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('stagaires')->insert([
        //     'nom'=>Str::random(10),
        //     'prénom'=>Str::random(10),
        //     'email'=>Str::random(7).'@gmail.com',
        //     'phone'=>'06'.rand(100000000, 99999999),
        //     'age'=>rand(18, 35)
        // ]);
        Stagaires::factory(100)->create();
    }
}
