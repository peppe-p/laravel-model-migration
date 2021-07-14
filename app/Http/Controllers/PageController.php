<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pack;

class PageController extends Controller
{
    public function home()
    {
        $packs = Pack::all();
        return view('home');
    }
}