<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
   public function index(){
    $roles=User::with('roles')->get();
    $temp=collect();

    foreach($roles as $role){
        if (count($role->roles)!=0) {
            $temp->push($role);
        }
    }

 //    return $temp;
    
 return view("dashboard.admin.admins",["admins"=>$temp]);
   }

 


}
