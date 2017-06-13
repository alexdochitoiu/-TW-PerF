<?php

namespace App\Http\Controllers;

use App\Anunt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;;

class ContulMeu extends Controller
{


    public function show_account()
    {
        if (Auth::check()) {

            return view('pages.contul_meu')->with('user', Auth::user());
        }
        return view('pages.autentificare');
    }



        public function edit_account() {
            if (Auth::check()) {

                return view('pages.edit_account')->with('user',Auth::user());
            }
            return view('pages.autentificare');


        }
    public function edit_account_reset() {
        if (Auth::check()) {


            $error=[];
            $user1 = Auth::user();
            $oke=0;

            if(request('username')!=$user1->username) {
                if (User::where('username', '=', request('username'))->exists()) {
                    $error["username"] = 'username ' . request('username') . ' este folosit!';
                    $oke = 1;
                }
            }

            if($oke==1) {

                return back()->with('error',json_encode($error));
            }






            $pers_fizica =0;

            if(request('pers_fizica')=="on"){
                $pers_fizica =1;

            };
            $user = Auth::user();
            $user->pers_fizica=$pers_fizica;
            $user->name=request('last_name');
            $user->username=request('username');
            $user->location=request('localitate');
            $user->save();

        }
        return view('pages.contul_meu')->with('user',Auth::user());;


    }
    public function reset_password() {
        if (Auth::check()) {

            return view('pages.reset_password')->with('user',Auth::user());
        }
        return view('pages.autentificare');


    }
    public function reset_password_reset() {
        if (Auth::check()) {
            $error=[];
            $user1 = Auth::user();

                $oke=0;

            if(!Hash::check(request('old_password'),$user1->password)) {
                 {
                    $error["old_password"] = 'parola  este incorecta!';
                    $oke = 1;
                }
            }
            if(Hash::check(request('password'),$user1->password)) {
                $error["old_password"] = 'nu se poate inlocui cu aceeasi parola!';
                $oke = 1;

            }

            if (request('password')!=request('r_password')) {
                $error["password"]='confirmarea parolei este gresita';
                $oke = 1;
            }

            if($oke==1) {

                return back()->with('error',json_encode($error));
            }
            $user1->password=bcrypt(request('password'));
            $user1->save();
            $user1->mesaj_confirmare='parola schimbata cu succes!';
          $user1->confirmed="parola schimbata cu succes";


            return view('pages.reset_password')->with('user',$user1);
        }
        return view('pages.autentificare');


    }

    public function returnBack() {
        return back();
    }
}
