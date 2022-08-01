<?php

namespace App\Http\Controllers;
use App\Models\games;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function catalog()
    {
        $games= games::all();
        return view('catalog')->with('games',$games);
    }
}
