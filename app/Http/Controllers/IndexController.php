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
                if($request->get('city') != "") {
                    $anunturi = Anunt::where('tipImobil', '=', 0)
                        ->join('users', 'users.id', '=', 'anunturi.user_id')
                        ->join('terenuri', 'terenuri.id', '=', 'anunturi.id_imobil')
                        ->where('localitate', '=', $request->get('city'))
                        ->where('tipTranzactie', '=', $request->get('tipTranzactie'))
                        ->get();
                }
                else {
                    $anunturi = Anunt::where('tipImobil', '=', 0)
                        ->join('users', 'users.id', '=', 'anunturi.user_id')
                        ->join('terenuri', 'terenuri.id', '=', 'anunturi.id_imobil')
                        ->where('tipTranzactie', '=', $request->get('tipTranzactie'))
                        ->get();
                }

                break;

            case 1:
                if($request->get('city') != "") {
                    $anunturi = Anunt::where('tipImobil', '=', 1)
                        ->join('users', 'users.id', '=', 'anunturi.user_id')
                        ->join('birouri', 'birouri.id', '=', 'anunturi.id_imobil')
                        ->where('localitate', '=', $request->get('city'))
                        ->where('tipTranzactie', '=', $request->get('tipTranzactie'))
                        ->get();
                }
                else {
                    $anunturi = Anunt::where('tipImobil', '=', 1)
                        ->join('users', 'users.id', '=', 'anunturi.user_id')
                        ->join('birouri', 'birouri.id', '=', 'anunturi.id_imobil')
                        ->where('tipTranzactie', '=', $request->get('tipTranzactie'))
                        ->get();
                }
                break;

            case 2:
                if($request->get('city') != "") {
                    $anunturi = Anunt::where('tipImobil', '=', 2)
                        ->join('users', 'users.id', '=', 'anunturi.user_id')
                        ->join('locuinte', 'locuinte.id', '=', 'anunturi.id_imobil')
                        ->where('localitate', '=', $request->get('city'))
                        ->where('tipTranzactie', '=', $request->get('tipTranzactie'))
                        ->get();
                }
                else {
                    $anunturi = Anunt::where('tipImobil', '=', 2)
                        ->join('users', 'users.id', '=', 'anunturi.user_id')
                        ->join('locuinte', 'locuinte.id', '=', 'anunturi.id_imobil')
                        ->where('tipTranzactie', '=', $request->get('tipTranzactie'))
                        ->get();
                }
                break;
        }

        //Filtre
        if($request->has('pretDeLa')) {
            $var =  $request->get('pretDeLa');
            $anunturi = $anunturi->filter(
                function ($value, $key) use (&$var){
                    return $value->pret >= $var;
                });
        }

        if($request->has('pretPanaLa')) {
            $var =  $request->get('pretPanaLa');
            $anunturi = $anunturi->filter(
                function ($value, $key) use (&$var){
                    return $value->pret <= $var;
                });
        }

        if($request->has('suprafataDeLa')) {
            $var =  $request->get('suprafataDeLa');
            $anunturi = $anunturi->filter(
                function ($value, $key) use (&$var){
                    return $value->suprafata >= $var;
                });
        }

        if($request->has('suprafataPanaLa')) {
            $var =  $request->get('suprafataPanaLa');
            $anunturi = $anunturi->filter(
                function ($value, $key) use (&$var){
                    return $value->suprafata <= $var;
                });
        }

        if($request->has('nrCamere') && $request->get('nrCamere') != 0) {
            $var =  $request->get('nrCamere');
            $anunturi = $anunturi->filter(
                function ($value, $key) use (&$var){
                    return $value->numarCamere == $var;
                });
        }

        if($request->has('compartimentare') && $request->get('compartimentare') != 0) {
            $var =  $request->get('compartimentare');
            $anunturi = $anunturi->filter(
                function ($value, $key) use (&$var){
                    return $value->compartimentare == $var;
                });
        }

        if($request->has('etaj') && $request->get('etaj') != 0) {
            $var =  $request->get('etaj');
            $anunturi = $anunturi->filter(
                function ($value, $key) use (&$var){
                    if($var == "Parter") return $value->etaj == 0;
                    return $value->etaj == $var;
                });
        }

        if($request->has('anConstr') && $request->get('anConstr') != 0) {
            $var =  $request->get('anConstr');
            $anunturi = $anunturi->filter(
                function ($value, $key) use (&$var){
                    switch($var) {
                        case "i1977":
                            return $value->anConstructie < 1977;
                        case "77-90":
                            return $value->anConstructie >= 1977 && $value->anConstructie < 1990;
                        case "90-00":
                            return $value->anConstructie >= 1990 && $value->anConstructie < 2000;
                        case "00-13":
                            return $value->anConstructie >= 2000 && $value->anConstructie < 2013;
                        case "d2013":
                            return $value->anConstructie >= 2013;
                    }
                });
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
