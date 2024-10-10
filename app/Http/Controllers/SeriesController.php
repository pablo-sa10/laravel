<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){
        
        $series = [
            'twd',
            'got',
            'dark'
        ];

        return view('listar-series', compact('series'));
    }
}
