<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([PeopleSeeder::class]);
        $this->call([ContactsSeeder::class]);
        $this->call([LocationsSeeder::class]);
    }
}
