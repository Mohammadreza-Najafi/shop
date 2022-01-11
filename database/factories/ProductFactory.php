<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            "name"=>$this->faker->word(),
            "brand_id"=>1,
            "category_id"=>1,
            "price"=>$this->faker->numberBetween(1,100),
            "available_quantity"=>$this->faker->numberBetween(1,100),
            "images"=>"{}",
            "color"=>"asus",
            "size"=>"asus"
        ];

    }
}
