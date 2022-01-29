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
    
    
    public function create()
    {
    return view('information');

    }
    
    public function store(Request $request, Information $infomation)
    {
        $input = $request['information'];
        $infomation->fill($input)->save();
        return redirect('/informations/' . $infomation->id);
    }
    
    public function view(Information $information) 
    {
    return view('show')->with(['information' => $information]);
    }
    
    public function gamestore(Request $request, Game $game)
    {
        $input  = $request['game'];
        $game->fill($input)->save();
        return redirect('/games/'.$game->id);
    }
    
    public function gameview(Game $game)
    {
        return view('gameview')->with(['game' => $game]);
    }
    public function gamecreat()
    {
        return view('game');
    }
    public function picherstore(Request $request, Picher $picher)
    {
        $input = $request['picher'];
        $picher->fill($input)->save();
        return redirect('/pichers/'.$picher->id);
    }
    
    public function pichercreat()
    {
        return view('pitcher');
    }
    public function picherview(Picher $picher)
    {
        return view ('picherview')->with(['picher' => $picher]);
    }
    
}
