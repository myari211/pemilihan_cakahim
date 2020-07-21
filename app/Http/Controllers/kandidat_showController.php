<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kandidat_showController extends Controller
{
    public function index(){
        return view('kandidat_show');
    }
}
