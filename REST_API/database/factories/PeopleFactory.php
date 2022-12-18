<?php

namespace Database\Factories;

use App\Models\Contacts;
use App\Models\Locations;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeopleFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'phone_number' => $this->faker->e164PhoneNumber(),
            'email' => $this->faker->email()
        ];
    }
}
