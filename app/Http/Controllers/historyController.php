<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History; 

class historyController extends Controller
{
    //

    

    public function index()
    {
            $animeList = History::all(); // asumsi modelnya Anime
            return view('welcome', compact('animeList'));
    }
}
