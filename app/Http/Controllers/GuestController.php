<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Table;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class GuestController extends Controller
{
    //
    public function returnBack() {
        return back();
    }

}
