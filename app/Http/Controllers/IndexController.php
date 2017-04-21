<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $anunturi = 30;
        $i=0;
        return view('pages.index')->withAnunturi($anunturi)->withI($i);
    }
}
