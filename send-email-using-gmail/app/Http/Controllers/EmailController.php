<?php

namespace App\Http\Controllers;

use App\Mail\MyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
        // ------------- [ Send email ] --------------------
        public function sendemailtouser() {

            $to_email = "ommartiste007@gmail.com";
    
            Mail::to($to_email)->send(new MyEmail);
    
            return "<p> Your E-mail has been sent successfully. </p>";
    
        }
}
