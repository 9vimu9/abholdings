<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function sendMail()
    {
        $data = array('name'=>"Sam Jose", "body" => "Test mail");

        Mail::send('emails.mail', $data, function($message) {
            $message->to('info@theabholdings.com', 'Artisans Web')
                ->subject('Artisans Web Testing Mail');
            $message->from('contactus@theabholdings.com','Sajid Sayyad');
        });
    }
    //
}
