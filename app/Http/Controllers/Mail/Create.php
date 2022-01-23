<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Create extends Controller
{
    public function __invoke()
    {
        return view("dashboard.admin.emailCompose");
    }
}
