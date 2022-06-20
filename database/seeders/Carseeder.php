<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Car;

class Carseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // inser database
        // DB::table('cars')->insert([
        //     'make' => Str::random(10),
        //     'model' => Str::random(10),
        //     'produced_on' => Carbon::parse('08-06-2022'),
        // ]);
        Car::factory()->count(5)->create();
    }
}
