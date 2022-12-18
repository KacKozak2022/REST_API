<?php

namespace Database\Seeders;

use App\Models\People;
use Illuminate\Contracts\Broadcasting\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    public function run()
    {
        People::factory()
            ->count(50)
            ->hasContacts(1)
            ->hasLocations(1)
            ->create();
    }
}
