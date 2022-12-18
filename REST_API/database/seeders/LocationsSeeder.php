<?php

namespace Database\Seeders;

use App\Models\People;
use App\Models\Locations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{

    public function run()
    {
        Locations::factory()
         ->count(50)
         ->create(['people_id' => function () {
             return People::inRandomOrder()->first()->id;
         }]);
    }
}
