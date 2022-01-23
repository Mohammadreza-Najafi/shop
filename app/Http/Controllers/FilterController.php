<?php

namespace App\Http\Controllers;

use App\Models\categoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public $filters;

    public function filter(Request $request){
        $filter=$request->toArray();

        switch(key($filter)){

            case "color":
                $this->filters[]=["color"=>$filter["color"]];
                return  collect($this->limitColor($filter["color"]))->toJson();
                break;
            case "size":
                $this->filters[]=["size"=>$filter["size"]];
                return collect($this->limitSize($filter["size"]))->toJson();
                break;
            case "price":

                $min=$filter["price"]["min"];
                $max=$filter["price"]["max"];
                $this->filters[]=["price"=>["min"=>$min,"max"=>$max]];

                return collect($this->limitPrice($min,$max))->toJson();
                break;

        }


    }


    public function limitPrice($min,$max)
    {

        $products=Product::query()
            ->where("price",">=",$min)
            ->where("price","<=",$max)
            ->get();

        return $products ?? null;
    }

    public function limitColor($color)
    {

        $productsId=\App\Models\ProductFeatures::query()
            ->whereJsonContains("features->color",$color)
            ->get();

        foreach ($productsId as $productId){
            $products[]=Product::query()->find($productId->product_id);
        }

        return  $products?? null;
    }

    public function limitSize($size)
    {

        $productsId=\App\Models\ProductFeatures::query()
            ->whereJsonContains("features->size",$size)
            ->get();

        foreach ($productsId as $productId){
            $products[]=Product::find($productId->product_id);
        }

        return $products?? null;
    }

    public function limitCategory($id)
    {
        $category=new \App\Http\Controllers\CategoryController;
        $categories=$category->productsByCategory(categoryProduct::query()->find($id));

        if(!is_array($categories)){
            $categories=array($categories);
        }
        
        foreach ($categories as $category){
            $products[]=Product::query()->where("category_id","=",$category)->get();
        }

        $temp=[];
        foreach ($products as $product){
            if (count($product)!=0){
                foreach ($product as $value){
                    $temp[]=$value;
                }
            }
        }

        $products=$temp;

        return $products?? null;
    }
}
