<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\CustomMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Send extends Controller
{
    public function __invoke(Request $request)
    {
        
        // return $request->all();
        $emailTo=$request->email_to;
        $content=$request->content;
        $subject=$request->email_subject;

        Mail::to($emailTo)->send(new CustomMessage);
        // return "erg";
    }
}
