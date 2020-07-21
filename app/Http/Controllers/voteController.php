<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class voteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('vote');
    }

    public function vote(Request $request)
    {
        $rule = [
            'nim' => 'required|unique:vote'
        ];
        $this -> validate($request, $rule);
        $insert = $request->all();
        unset($insert['_token']);
        $status = DB::table('vote')->insert($insert);

        if($status){
            return redirect('/home')->with('success', 'Terima Kasih telah menggunakan Hak Anda');
        }
        
        
        // $insert = DB::table('vote')->insert([
        // 'name'=>$request->nama,
        // 'nim'=>$request->nim,
        // 'voting'=>$request->kandidat,
        // ]);
    }
}
