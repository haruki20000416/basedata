<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use database\seeds\DatabaseSeeder;
use App\Game;
use App\Picher;
use App\Information;

class PostController extends Controller
{
    public function index(Game $game)
    {
        return view('test')->with(['games' => $game->get()]);
    }
    
    public function show(Picher $Picher)
    {
        return $Picher ->get();
        
    }
    public function view(Information $info)
    {
        return $info ->get();
    }
}
