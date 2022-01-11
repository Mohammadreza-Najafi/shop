<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
       $tracks=Track::query()->get();
       return $tracks;
    }
}
