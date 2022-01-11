<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiscountCode;

class DiscountCodeController extends Controller
{
    public function index(){
        $discountCodes=DiscountCode::all();
        return view("dashboard.admin.discountCode",["discountCodes"=>$discountCodes]);
    }

    public function store(){

    }

    public function update(){

    }
}
