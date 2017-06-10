<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $anunturi = DB::table('anunturi')
                    ->join('users', 'users.id', '=', 'anunturi.user_id')
                    ->select('users.name', 'anunturi.*')
                    ->get();

        include "smsGateway.php";
        $smsGateway = new SmsGateway('demo@smsgateway.me', 'password');

        return view('pages.index')
            ->with('anunturi', $anunturi);
        }

    public function returnBack() {
        return back();
    }
}
