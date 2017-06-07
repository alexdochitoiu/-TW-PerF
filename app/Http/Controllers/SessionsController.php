<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Carbon\Carbon;
include "SmsGateway.php";

class SessionsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function create()
    {


        return view('pages.autentificare');

    }

    public function store()
    {

        if(!auth()->attempt(request(['email', 'password'])))
        {

            return back()->with('error','username or passwor incorrect');
        }
        $user=User::where('email', '=',request('email'))->get()->map(function ($row) {
        $row->date = new Carbon($row->date);
        return $row;
    });
        $user=$user->toArray();

        $smsGateway = new SmsGateway('miron.gabriel2015@gmail.com', 'miron1234');
        $deviceID = 50133;
        $number = '+4'.$user[0]['phone'];
        $message = $user[0]['name'] .'conectare noua de pe browser';

        $options = [
            'send_at' => strtotime('+0 minutes'), // Send the message in 10 minutes
            'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
        ];

        //Please note options is no required and can be left out
        $result = $smsGateway->sendMessageToNumber($number, $message, $deviceID, $options);
        return redirect('/');


    }

    public function destroy()
    {
        auth()->logout();
        return redirect('pages.autentificare');
    }
}
