<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class apiController extends Controller
{
    public function getDataUser(){
        $user = User::all();
        return response()->json($user);
    }
}
