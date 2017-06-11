<?php

namespace App\Http\Controllers;

use App\Anunt;
use Illuminate\Http\Request;
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

    public function search(Request $request) {

        switch ($request->get('tipImobil')) {

            case 0:
                $anunturi = Anunt::where('tipImobil', '=', 0)
                    ->join('users', 'users.id', '=', 'anunturi.user_id')
                    ->join('terenuri', 'terenuri.id', '=', 'anunturi.id_imobil')
                    ->where('localitate', '=', $request->get('city'))
                    ->where('tipTranzactie', '=', $request->get('tipTranzactie'))
                    ->get();
                break;

            case 1:
                $anunturi = Anunt::where('tipImobil', '=', 1)
                    ->join('users', 'users.id', '=', 'anunturi.user_id')
                    ->join('birouri', 'birouri.id', '=', 'anunturi.id_imobil')
                    ->where('localitate', '=', $request->get('city'))
                    ->where('tipTranzactie', '=', $request->get('tipTranzactie'))
                    ->get();
                break;

            case 2:
                $anunturi = Anunt::where('tipImobil', '=', 2)
                    ->join('users', 'users.id', '=', 'anunturi.user_id')
                    ->join('locuinte', 'locuinte.id', '=', 'anunturi.id_imobil')
                    ->where('localitate', '=', $request->get('city'))
                    ->where('tipTranzactie', '=', $request->get('tipTranzactie'))
                    ->get();
                break;
        }

        include "smsGateway.php";
        $smsGateway = new SmsGateway('demo@smsgateway.me', 'password');

        return view('pages.index')
            ->with('anunturi', $anunturi);
    }

    public function returnBack() {
        return back();
    }
}
