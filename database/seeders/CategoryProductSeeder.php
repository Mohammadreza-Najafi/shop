<?php

namespace Database\Seeders;

use App\Models\categoryProduct;
use Database\Factories\CategoryProductFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        categoryProduct::create([
//            null,
//            "electronic",
//            null
//        ]);

//        $categoryProduct=new categoryProduct();
//        $categoryProduct->prev=null;
//        $categoryProduct->category="electronic";
//        $categoryProduct->save();

        $categoryProduct=new categoryProduct();
        $categoryProduct->prev=CategoryProduct::find(5)->id;
        $categoryProduct->category="Z";
        $categoryProduct->save();

//        $categoryProduct=new categoryProduct();
//        $categoryProduct->prev=CategoryProduct::find(26)->id;
//        $categoryProduct->category="cell-phone-pouch-cover";
//        $categoryProduct->save();



    }
}
