<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $username = $request['username'];
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $firstName = $request['first_name'];
        $lastName = $request['last_name'];
        $phone = $request['phone_number'];
        $company = $request['pers_fizica'];

        $user = new User();
        $user->username = $username;
        $user->email = $email;
        $user->password = $password;
        $user->firstName = $firstName;
        $user->lastName = $lastName;
        $user->phone = $phone;
        $user->company = $company;

        $user->save();

        return redirect()->back();
    }
}
