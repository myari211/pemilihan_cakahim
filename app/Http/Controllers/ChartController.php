<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Charts\PemilihanChart;

class ChartController extends Controller
{
    public function index(){
        $suspect = collect(Http::get('http://localhost:8006/Api/voteApi')->json());
        $labels = $suspect->flatten(1)->pluck('name');
        $data = $suspect->flatten(1)->pluck('email');
        $colors = $labels->map(function($item) {
            return $rand_color = '#' . substr(md5(mt_rand()), 0, 6);
        }); 

        $chart = new PemilihanChart;
        $chart -> labels($labels);
        $chart -> dataset('nama', 'pie', $data)->backgroundColor($colors);

        return view('chart', ['chart' => $chart ]);
    }
}