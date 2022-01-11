<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Favorite;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class favoriteController extends Controller
{
    public function index(){

        return Favorite::all();
    }

    public function store($id)
    {
        $product=Product::find($id);

        if(auth()->check() && $product!=null){

            $favorites=Favorite::query()
                ->where("user_id","=",auth()->user()->id)
                ->where("product_id","=",$product->id);

            if ($favorites->count() == true){
                $favorites->delete();
            }else{
                $favorites->create(["user_id"=>auth()->user()->id,"product_id"=>$product->id]);
            }

        }

        return back();
//        $product=Product::find($id);
//        $temp=auth()->user()->products()->toggle($product);
//        Discount::query()->create($product,3,2323);
    }






}
