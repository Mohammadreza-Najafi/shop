<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController as ControllersProductController;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function show($id)
    {
        $productController=new ControllersProductController;

        $product=$productController->show($id);

        return view("product.details",["product"=>$product]);
    }
}
