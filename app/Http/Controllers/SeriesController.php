<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {

        $series = Serie::query()->orderBy('nome')->get();
        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        Serie::create($request->all());

        // DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie]);
        return redirect()->route('series.index');
        // }else{
        //     return "Deu erro";
        // }
    }
}
