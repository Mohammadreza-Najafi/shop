<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Track;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    protected $items;
    protected $total;

    public function create(){

        $cart=new CartController();
        $cart->shoppingCart();
        $this->items=$cart->items;
        $this->total=$cart->total;
//        return $this->items;
        return view("dashboard.user.checkout",["items"=>$this->items,"total"=>$this->total]);
    }

    public function store(){
        $this->create();

        Track::query()->create(["user_id"=>auth()->user()->id,"item"=>collect($this->items)->toJson(),"status"=>"success"]);
        session(["items"=>[]]);

        return redirect(route("profile.order"));
    }
}
