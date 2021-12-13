<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CooperativeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->company(),
            'contact' => $this->faker->phoneNumber(),
        ];
    }
}
