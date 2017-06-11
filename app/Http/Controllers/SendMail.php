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
    {
        $user_email=request('email');

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

    public function send_messages ($message_user,$number_user) {
        $smsGateway = new SmsGateway('miron.gabriel2015@gmail.com', 'miron1234');
        $deviceID = 50133;
        $number = '+4' . $number_user;
        $message = $message_user;

        $options = [
            'send_at' => strtotime('+0 minutes'), // Send the message in 10 minutes
            'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
        ];

        //Please note options is no required and can be left out
        $result = $smsGateway->sendMessageToNumber($number, $message, $deviceID, $options);

    }
    public function trimite_mesaj() {

        $message = 'Mesaj de la '.request('name') .'( la anuntul '.request('titlu_anunt') . ') [Mesaj :  '.request('message').
            ' ]. Numarul de contact al utilizatorului '.request('email').' ,Echipa Perf';
        $this->send_messages($message,request('telefon'));
        return back();
    }


}
