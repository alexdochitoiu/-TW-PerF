<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

include "SmsGateway.php";

class RegistrationController extends Controller
{
    //
    public function create()
    {
        return view('pages.inregistrare');


    }

    public function store()
    {

        $error=[];

        $oke=0;
        if(User::where('username', '=',request('username'))->exists()) {
            $error["username"]='acest username este folosit!';
            $oke=1;
        }
        if(User::where('email', '=',request('email'))->exists()) {
            $error["email"]='acest email este folosit!';
            $oke=1;

        }
        if(!((strlen(request('phone_number'))==10) and is_numeric(request('phone_number')))) {
            $error["phone_number"] ='numar incorect !';

            $oke=1;
        }
        if(request('password')!==request('confirm-password')) {
            $error["confirm_password"]='confirmarea parolei incorecta';
            $oke=1;
        }
     if($oke==1) {

            return back()->with('error',json_encode($error))->withInput();
     }






        $pers_fizica =0;
           if(request('pers_fizica')){
               $pers_fizica =1;

           };
        $user = User::create([
            'username' => request('username'),
            'email' => request('email'),
            'name' => request('last_name') . ' ' . request('first_name'),
            'password' => bcrypt(request('password')),
            'phone' => request('phone_number'),
            'location' => request('localitate'),
            'pers_fizica' => $pers_fizica
        ]);


        auth()->login($user);
        $smsGateway = new SmsGateway('miron.gabriel2015@gmail.com', 'miron1234');
        $deviceID = 50133;
        $number = '+4'.request('phone_number');
        $message = 'Domnule/Doamna '.$user->name .' va multumim pentru alegerea serviciilor noastre ,va informam ca  contul dumneavoastra este in siguranta ,Echipa Perf';

        $options = [
            'send_at' => strtotime('+0 minutes'), // Send the message in 10 minutes
            'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
        ];

        //Please note options is no required and can be left out
        $result = $smsGateway->sendMessageToNumber($number, $message, $deviceID, $options);
        return redirect('/');

    }

}
