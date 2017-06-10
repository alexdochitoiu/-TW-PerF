<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Socialite;
use Carbon\Carbon;
use Mail;


include "SmsGateway.php";

class Mail1 extends Controller
{


    public function send_mail()
    {
        if ($user = User::where('email', '=',request('email'))->get()->map(function ($row) {
            $row->date = new Carbon($row->date);
            return $row;
        })) {

                $data = array('name'=>"Our Code World");
                // Path or name to the blade template to be rendered
                $template_path = 'Perf parola recovery';

                \Mail::send($template_path, $data, function($message) {
                    // Set the receiver and subject of the mail.
                    $message->to(request('email'), 'Receiver Name')->subject('Parola contului cu userul ' .$user[0]->username.' este'.$user[0]->password );
                    // Set the sender
                    $message->from('perf_iasi@yahoo.com','Our Code World');
                });




            return  redirect ('/autentificare')->with('error','verificati email');
        }
        else {
            dd($user);
            return  redirect ('/autentificare')->with('error','user inexistent pe acest email');
        }
    }


}
