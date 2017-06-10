<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Socialite;
use Carbon\Carbon;

include "SmsGateway.php";

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
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

    public function create()
    {


        return view('pages.autentificare');

    }

    public function store()
    {

        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->with('error', 'username or passwor incorrect ');

        }

        $user = User::where('email', '=', request('email'))->get()->map(function ($row) {
            $row->date = new Carbon($row->date);
            return $row;
        });
        $user = $user->toArray();

        $smsGateway = new SmsGateway('miron.gabriel2015@gmail.com', 'miron1234');
        $deviceID = 50133;
        $number = '+4' . $user[0]['phone'];
        $message = 'Conectare noua de pe browser a userului ' . $user[0]['username'] . ' ,daca nu sunteti dumneavoastra va rugam sa contactati administratorul la tel:0733096380 ,Echipa Perf';

        $options = [
            'send_at' => strtotime('+0 minutes'), // Send the message in 10 minutes
            'expires_at' => strtotime('+1 hour') // Cancel the message in 1 hour if the message is not yet sent
        ];

        //Please note options is no required and can be left out
        $result = $smsGateway->sendMessageToNumber($number, $message, $deviceID, $options);
        return redirect('/');


    }
    public function login_with_email ($user_email) {
        $user = User::where('email', '=', $user_email)->get()->map(function ($row) {
            $row->date = new Carbon($row->date);
            return $row;
        });

        if(isset($user->email)) {
            auth()->login($user[0]);
        }
        else {
            return  0;
        }

        $user = $user->toArray();


        $message = 'Conectare noua de pe browser a userului ' . $user[0]['username'] . ' ,daca nu sunteti dumneavoastra va rugam sa contactati administratorul la tel:0733096380 ,Echipa Perf';
       $this->send_messages($message,$user[0]['phone']);



    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)

    {
        $user = Socialite::driver($provider)->user();
        if($this->login_with_email($user->getEmail()))
        {
        return redirect('/');}
        else {
        return back()->with('error', 'nu exista acest user sau conexiunea pe '.$provider.' nu se poate stabili ');
    }

        // $user->token;
    }


    public function destroy()
    {
        auth()->logout();

        return redirect('/autentificare');
    }
}
