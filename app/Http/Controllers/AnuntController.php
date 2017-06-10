<?php

namespace App\Http\Controllers;

use App\Anunt;
use App\Teren;
use App\Birou;
use App\Locuinta;
use App\Imagine;
use Illuminate\Http\Request;

class AnuntController extends Controller
{
    public function postCreateAnunt(Request $request) {


        $anunt = new Anunt();
        $anunt->tipImobil = 0;
        $anunt->titlu = $request['titlu'];
        $anunt->descriere = $request['descriere'];
        $anunt->pret = $request['pret'];
        $anunt->tipTranzactie = $request['tipTranzactie'];
        $anunt->longitudine = 0.0;
        $anunt->latitudine = 0.0;

        $anunt->id_imobil = 1;
        $imagine = new Imagine();
        //add images here
        $imagine->save();
        $anunt->id_imagine = $imagine->id;
        $request->user()->anunturi()->save($anunt);
        return redirect('/');
    }
}
