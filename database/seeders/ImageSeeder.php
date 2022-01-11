<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products=Product::all();

        $urls=[["url"=>Storage::url("productImages/5.jpg"),"alt"=>"fuc"]];
        $urls=collect($urls)->toJson();

        $products->each(function ($product) use ($urls){
            $product->image()->create(["title"=>"image-product","urls"=>$urls]);
        });


    }
}
