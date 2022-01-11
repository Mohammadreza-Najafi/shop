<?php

namespace Database\Factories;

use App\Models\categoryProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=categoryProduct::class;

    public function definition()
    {
        return [
            "prev",
            "category"=>$this->faker->word(),
            "next"
        ];
    }
}
