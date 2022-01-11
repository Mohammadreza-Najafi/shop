<?php

namespace Database\Seeders;

use App\Models\Discount;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    $products=Product::factory(10)->create();
        $products=Product::all();


        $products->each(function ($product){
            $product->discount()->save(Discount::factory()->make());
        });
    }
}
