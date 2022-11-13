<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EloquentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'email' => $this->faker->email(),
            'password' =>  $this->faker->password(),
        ];
    }
}
