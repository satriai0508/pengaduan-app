<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomor' => $this->faker->numerify('##')
        ];
    }
}
