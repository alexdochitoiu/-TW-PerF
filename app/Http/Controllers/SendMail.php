<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Socialite;
use Carbon\Carbon;
use Mail;


include "SmsGateway.php";

class SendMail extends Controller
{


    public function send_email()
    {   $user_email=request('email');

        $user = User::where('email', '=', $user_email)->get()->map(function ($row) {
        $row->date = new Carbon($row->date);
        return $row;
    });

        if(isset($user[0]->email))
         {

           $mail= Mail::send('pages.autentificare', ['user' => $user[0]], function ($m) use ($user) {
                $m->from('perf_iasi@yahoo.com', 'Perf');

                $m->to($user[0]->email, $user[0]->name)->subject('Hello');
            });
            dd($mail,$user);


            return redirect('/autentificare')->with('error', 'verificati email');
        } else {

            return redirect('/autentificare')->with('error', 'user inexistent pe acest email');
        }
    }


}
