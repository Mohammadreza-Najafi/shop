<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

//use App\Http\Requests\StoreProductRequest;
//use App\Http\Requests\UpdateProductRequest;
//use http\Env\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::query()->get();
        return $products;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if ($request->hasFile('photos')) {

            $photos =  $request->file('photos');

            foreach($photos as $photo){
                if ($photo->isValid()) {
                    $imagesPath[]= $photo->store('public/productImages');
                }
            }
        }

        $nameProduct=$request->name;
        $brand=$request->brand;
        $category=$request->category;
        $price=$request->price;
        $availability=$request->availability;    
       
        Product::query()->create(["name"=>$nameProduct,"price"=>$price,"brand_id"=>$brand,"category_id"=>$category,"available_quantity"=>$availability,"images"=>collect($imagesPath)->toJson()]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::query()->find($id);
        return $product;
        // return view("product.details",["product"=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Product::query()->where("id",$request->id)->delete();
        return back();
    }

}
