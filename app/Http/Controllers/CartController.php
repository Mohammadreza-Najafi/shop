<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public $countItem=0;
    public $numItem=0;
    public $items;
    public $total=0;
    public function shoppingCart(){

        if(session()->has("items")){

            $this->items=session("items");

        }else{
            return false;
        }


        $status = true;
        $this->total = 0;

        foreach ($this->items as $item){

            $product=Product::query()->find($item["id"]);
            $this->total+=($product->price * $item["count"]);

        }


        return view("cart.shopingcart",["items"=>$this->items,"total"=>$this->total]);
    }

    public function add(Request $request): \Illuminate\Http\RedirectResponse
    {
        $product=$request->input('productId');
        if(session()->has("items")){

            $items=session("items");

            $is_find=false;

            foreach ($items as $key=>$item){
                if($item["id"]==$product){
                    session()->increment("items.".$key.".count");
                    $index=$key;
                    $is_find=true;
                    break;
                }
            }
            if (!$is_find){
                session()->push("items",["id"=>$product,"count"=>1]);
            }

        }else{
            session(["items"=>[]]);
            session()->push("items",["id"=>$product,"count"=>1]);
        }

        return back();

    }


    public function remove(Request $request)
    {
        $product=$request->input('productId');

        if(session()->has("items")){

            $items=session("items");
            foreach ($items as $key=>$item){

                if($item["id"]==$product){
                    session()->decrement("items.".$key.".count");
                    break;
                }
            }

        }

        return session("items")??"no";
    }

    /**
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function getCountItem($productId):int
    {
        $product=$productId;

        if(session()->has("items")){

            $items=session("items");

            foreach ($items as $key=>$item){
                if($item["id"]==$product){
                    $this->countItem=session()->get("items.".$key.".count");
                    break;
                }
            }

        }

        return $this->countItem;
    }

    public function getNumItem(): int
    {
        if(session()->has("items")){
            $items=session("items");

            $this->numItem=count($items);
        }

        return $this->numItem;
    }


}
