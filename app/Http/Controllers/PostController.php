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
    
    public function index(Information $infomations)
    {
        return view('test')->with(['informations' => $infomations]);
    }
    
    public function show(Picher $Picher)
    {
        return $Picher ->get();
        
    }
    
    //試合情報データ画面へのアクセス
    public function create()
    {
    return view('information');

    }
    //データベースへの保存（試合情報）
    public function store(InformationRequest $request, Information $infomation)
    {
        $input = $request['information'];
        $infomation->fill($input)->save();
        return redirect('/informations/'.$infomation->id.'/games');
    }
    //
    public function view(Information $information) 
    {
    return view('show')->with(['information' => $information]);
    }
    //データベースへの保存（ゲームデータ）
    public function gamestore(GameRequest $request, Game $game, $information_id)
    {
        $input  = $request['game'];
        $game->fill($input)->save();
        return redirect('/informations/'.$information_id.'/games');
    }
    
    public function gameview(Game $game)
    {
        return view('gameview')->with(['game' => $game]);
    }
    public function gamecreate($information_id)
    {
        return view('game')->with(['information_id' =>$information_id]);
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
