<?php

namespace App\Http\Controllers;

use App\Models\categoryProduct;
use App\Models\Discount;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::query()->get(["id","name","price","available_quantity"]);

//        $discounts=Discount::all('product_id','discount_percentage','final_price');

        $mainCategories=categoryProduct::query()->where("is_main","=",true)->get();

        $leastProducts=Product::orderBy('created_at', 'desc')->get();
//        ->take(20)

        return view("main.shop", [
            "products"=>$products,
//            "discounts"=>$discounts,
            "mainCategories"=>$mainCategories,
            "leastProducts"=>$leastProducts
            ]);

    }





}
