<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(){
        
        $series = [
            'twd',
            'got',
            'dark'
        ];

        return view('series.index', compact('series'));
    }

    public function create(){
        return view('series.create');
    }

    public function store(Request $request){
        $nomeSerie = $request->input('nome'); 
    }
}
