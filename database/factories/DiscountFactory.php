<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'discount_percentage'=>$this->faker->numberBetween(1,100),
            'final_price'=>$this->faker->numberBetween(1,100)
        ];
    }
}
