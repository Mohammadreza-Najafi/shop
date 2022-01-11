<?php

namespace Database\Factories;

use App\Models\UserAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model=UserAddress::class;

    public function definition()
    {
        return [
            "user_address"=>$this->faker->address()
        ];
    }
}
