<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VotingController extends Controller
{
    public function index(){
        $vote = DB::table('vote')->get();
        return responses() -> json($vote);
    }
}
