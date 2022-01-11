<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Track;
use Illuminate\Http\Request;

class ProdcutDiscountController extends Controller
{
    public function index(){
        $tracks=Discount::query()->get();
        return $tracks??null;
    }
}
