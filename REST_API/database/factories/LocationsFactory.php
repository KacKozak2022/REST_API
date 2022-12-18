<?php

namespace Database\Factories;

use App\Models\Locations;
use App\Models\People;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocationsFactory extends Factory
{
    protected $model = Locations::class;
    public function definition()
    {
        return [
            'people_id' => People::factory(),
            'address' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country()
        ];
    }
}
