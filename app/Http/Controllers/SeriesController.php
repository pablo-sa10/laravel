<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(){
        
        // $series = [
        //     'twd',
        //     'got',
        //     'dark'
        // ];

        $series = DB::select("SELECT nome FROM series");

        return view('series.index', compact('series'));
    }

    public function create(){
        return view('series.create');
    }

    public function store(Request $request){
        $nomeSerie = $request->input('nome'); 

        DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie]);
        return redirect('/series/');
        // }else{
        //     return "Deu erro";
        // }
    }
}
