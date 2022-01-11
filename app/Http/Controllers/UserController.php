<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{
    public function index(){

        $users=User::query()->get();
        return $users;
    }

    public function update(Request $request)
    {    
        $request->has("name") && $request->filled('name') ? $temp["name"]=$request->name : false;
        $request->has("phone") && $request->filled('phone') ? $temp["phone_number"]= $request->phone : false;
        $request->has("email") && $request->filled('email') ? $temp["email"]= $request->email : false;
        $request->has("password") && $request->filled('password') ? $temp["password"]= Hash::make($request->password) : false;
    
        User::query()->where("id",$request->id)->update($temp);

        return back();
    }

    public function destroy(Request $request)
    {
        User::query()->where("id",$request->id)->delete();
        return back();
    }
}
