<?php

namespace App\Http\Controllers;

use App\Anunt;
use App\Teren;
use App\Birou;
use App\Locuinta;
use App\Imagine;
use App\User;
use Illuminate\Http\Request;

class AnuntController extends Controller
{
    public function postCreateAnunt(Request $request) {
        $anunt = new Anunt();
        $anunt->tipImobil = $request['tipImobil'];
        $anunt->titlu = $request['titlu'];
        $anunt->descriere = $request['descriere'];
        $anunt->pret = $request['pret'];
        $anunt->tipTranzactie = $request['tipTranzactie'];
        $anunt->longitudine = 0.0;
        $anunt->latitudine = 0.0;

        switch($anunt->tipImobil) {
            case 0: //Terenuri
                $teren = new Teren();
                $teren->tip = $request['tipT'];
                $teren->suprafata = $request['suprafataT'];
                $teren->localitate = $request['localitateT'];
                $teren->zona = $request['zonaT'];
                $teren->electricitate = $request['electricitateT'];
                $teren->gaz = $request['gazT'];
                $teren->gard = $request['gardT'];
                $teren->apa = $request['apaT'];
                $teren->canalizare = $request['canalizareT'];
                $teren->irigatie = $request['irigatieT'];
                $teren->save();
                $anunt->id_imobil = $teren->id;
                break;
            case 1: //Birouri
                $birou = new Birou();
                $birou->tip = $request['tipB'];
                $birou->suprafata = $request['suprafataB'];
                $birou->localitate = $request['localitateB'];
                $birou->zona = $request['zonaB'];
                $birou->compartimentare = $request['compartimentareB'];
                $birou->orientare = $request['orientareB'];
                $birou->anConstructie = $request['anConstructieB'];
                $birou->etaj = $request['etajB'];
                $birou->totalEtaje = $request['totalEtajeB'];
                $birou->locuriParcare = $request['locuriParcareB'];
                $birou->numarBai = $request['numarBaiB'];
                $birou->balcon = $request['balconB'];
                $birou->terasa = $request['terasaB'];
                $birou->supravegheatVideo = $request['suprVideoB'];
                $birou->lift = $request['liftB'];
                $birou->alarma = $request['alarmaB'];
                $birou->aerConditionat = $request['aerB'];
                $birou->salaSedinte = $request['sedinteB'];
                $birou->receptie = $request['receptieB'];
                $birou->save();
                $anunt->id_imobil = $birou->id;
                break;
            case 2: //Locuinte
                $locuinta = new Locuinta();
                $locuinta->tip = $request['tipL'];
                $locuinta->suprafata = $request['suprafataL'];
                $locuinta->numarCamere = $request['nrCamereL'];
                $locuinta->localitate = $request['localitateL'];
                $locuinta->zona = $request['zonaL'];
                $locuinta->compartimentare = $request['compartimentareL'];
                $locuinta->orientare = $request['orientareL'];
                $locuinta->stare = $request['stareL'];
                $locuinta->anConstructie = $request['anConstructieL'];
                $locuinta->etaj = $request['etajL'];
                $locuinta->totalEtaje = $request['totalEtajeL'];
                $locuinta->numarBai = $request['numarBaiL'];
                $locuinta->centralaTermica = $request['centralaTermL'];
                $locuinta->balcon = $request['balconL'];
                $locuinta->gradina = $request['gradinaL'];
                $locuinta->mobilat = $request['mobilatL'];
                $locuinta->parcare = $request['parcareL'];
                $locuinta->supravegheatVideo = $request['suprVideoL'];
                $locuinta->usaBlindata = $request['usaBlindataL'];
                $locuinta->alarma = $request['alarmaL'];
                $locuinta->detectorGaz = $request['gazL'];
                $locuinta->save();
                $anunt->id_imobil = $locuinta->id;
                break;
        }
        $imagine = new Imagine();

        //add images here
        $imagine->save();
        $anunt->id_imagine = $imagine->id;
        $request->user()->anunturi()->save($anunt);
        return redirect('/');
    }

    public function show($id)
    {
        $anunt = Anunt::find($id);
        $imagini = Imagine::find($anunt->id_imagine);
        $user = User::find($anunt->user_id);
        $arr = null;
        switch ($anunt->tipImobil) {
            case 0: //Teren
                $teren = Teren::find($anunt->id_imobil);
                $arr = [
                    'anunt' => $anunt,
                    'user' => $user,
                    'imagine' => $imagini,
                    'teren' => $teren
                ];
                break;
            case 1: //Birou
                $birou = Birou::find($anunt->id_imobil);
                $arr = [
                    'anunt' => $anunt,
                    'user' => $user,
                    'imagine' => $imagini,
                    'birou' => $birou
                ];
                break;

            case 2: //Locuinta
                $locuinta = Locuinta::find($anunt->id_imobil);
                $arr = [
                    'anunt' => $anunt,
                    'user' => $user,
                    'imagine' => $imagini,
                    'locuinta' => $locuinta
                ];
                break;
        }

        return view('pages.anunt')
            ->with('arr', $arr);
    }

    public function getAll() {
        $anunturi = Anunt::all();

        return $anunturi;
    }

    public function getImobilById($id) {
         $anunt = Anunt::find($id);
 
         switch ($anunt->tipImobil) {
            case 0: //Teren
                $result = Teren::find($anunt->id_imobil);
                break;
            case 1: //Birouri
                $result = Birou::find($anunt->id_imobil);
                break;
            case 2: //Locuinte
                $result = Locuinta::find($anunt->id_imobil);
                break;
         }
         return $result;
     }
}
