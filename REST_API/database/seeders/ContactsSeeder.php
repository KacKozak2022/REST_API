<?php

namespace Database\Seeders;

use App\Models\People;
use App\Models\Contacts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    public function run()
    {
        Contacts::factory()
          ->count(50)
          ->create(['people_id' => function () {
              return People::inRandomOrder()->first()->id;
          }]);
    }
}
