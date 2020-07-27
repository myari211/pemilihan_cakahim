<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $vote = DB::table('vote')->count();
        $vote1 = DB::table('vote')->get()->where('voting',1)->count();
        $vote2 = DB::table('vote')->get()->where('voting',2)->count();
        $vote3 = DB::table('vote')->get()->where('voting',3)->count();
        $pemilih = DB::table('vote')->paginate(10);
        $statistik = $vote;
        $statistik1 = $vote1;
        $statistik2 = $vote2;
        $statistik3 = $vote3;


        return view('admin/dashboard',['statistik' => $statistik, 'statistik1' => $statistik1, 'statistik2'=> $statistik2, 'statistik3'=>$statistik3, 'pemilih'=>$pemilih]);
    }

    public function getChart(){
        $start = Carbon::now()->subWeek()->addDay()->format('Y-m-d') . '00:00:01';
    }
}
