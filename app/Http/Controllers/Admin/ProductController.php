<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController as ControllersProductController;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // public function __construct($)
    // {
        
    // }
    public function index(){
        $productController=new ControllersProductController;

        $products=$productController->index();

        return view("dashboard.admin.product",["products"=>$products]);


    }

    public function show($id)
    {
        $productController=new ControllersProductController;
        $product=$productController->show($id);
        // return view("product.details",["product"=>$product]);
        return view("dashboard.admin.productDetails");
    }
// create form edit
    public function edit(Request $request)
    {
        $productId = $request->id;
        $product=Product::query()->find($productId);

// 
        // return $product;

        return view("dashboard.admin.productEdit",["product"=>$product]);
    }
}
