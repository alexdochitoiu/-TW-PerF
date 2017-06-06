<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $anunturi = DB::table('anunturi')
                    ->join('users', 'users.id', '=', 'anunturi.idUser')
                    ->select('users.firstName', 'users.lastName', 'anunturi.*')
                    ->get();
        return view('pages.index')
            ->with('anunturi', $anunturi);
    }
}
