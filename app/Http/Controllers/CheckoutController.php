<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Track;
use App\Enums\StatusOrderEnum;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    // protected $items=[["id"=>"6","count"=>1]];
    // protected $total=1234;

    public function createa(){

   
       
        // $shoppingCart=unserialize(session("shoppingCart")[0]);

        // $this->items=$shoppingCart->items;
        // $this->total=$shoppingCart->total;

        // $this->items=;
        // $this->total=;

        info("hi");
        // info("hi");

        // $track=Track::query()->create(["user_id"=>auth()->user()->id,"item"=>collect($this->items)->toJson(),"status"=>StatusOrderEnum::PENDING()]);

        // session(["items"=>[]]);
        // die();
//        return $this->items;
        // return view("dashboard.user.checkout",["items"=>$this->items,"total"=>$this->total,"trackId"=>$track->id]);
        return view("dashboard.user.checkout",["items"=>[["id"=>"6","count"=>1]],"total"=>1234,"trackId"=>1]);
    }

    public function store(Request $request){

        // $this->create();
        // $request
        // Track::query()->create(["user_id"=>auth()->user()->id,"item"=>collect($this->items)->toJson(),"status"=>StatusOrderEnum::PROCESSING()]);
        // session(["items"=>[]]);

        Track::query()->where("id",$request->track_id)->update(["status"=>StatusOrderEnum::PROCESSING()]);

        return redirect(route("profile.order"));
    }
}
