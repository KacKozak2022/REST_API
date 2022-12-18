<?php

namespace Database\Factories;

use App\Models\People;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactsFactory extends Factory
{
    public function definition()
    {
        return [
            'phone_number' => $this->faker->e164PhoneNumber(),
            'email' => $this->faker->email()
        ];
    }
}
