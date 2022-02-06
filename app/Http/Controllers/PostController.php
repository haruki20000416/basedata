<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use database\seeds\DatabaseSeeder;
use App\Game;
use App\Picher;
use App\Information;
use App\Http\Requests\PicherRequest;
use App\Http\Requests\InformationRequest;
use App\Http\Requests\GameRequest;

class PostController extends Controller
{
    
    public function index(Information $infomations, Picher $picher)
    {
        return view('test')->with(['pichers' => $picher->get()]);
    }
    
    public function show(Picher $Picher)
    {
        return $Picher ->get();
        
    }
    
    public function create()
    {
    return view('information');

    }
    
    public function store(InformationRequest $request, Information $infomation)
    {
        $input = $request['information'];
        $infomation->fill($input)->save();
        return redirect('/informations/'.$infomation->id);
    }
    //
    public function view(Information $information) 
    {
    return view('show')->with(['information' => $information]);
    }
    //データベースへの保存（ゲームデータ）
    public function gamestore(GameRequest $request, Game $game)
    {
        $input  = $request['game'];
        $game->fill($input)->save();
        return view('game')->with(['game' => $game]);
    }
    
    public function gamereturn(Game $game)
    {
        return view('game')->with(['game' => $game]);
    }
    public function gamecreate(game $game)
    {
        return view('game')-> with(['game'=> $game]);
    }
    //データベースへの保存（投手情報）
    public function picherstore(PicherRequest $request, Picher $picher)
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
