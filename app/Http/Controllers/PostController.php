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
    //トップ画面表示
    public function index(Information $infomations)
    {
        $picherfukus=Picher::where('uniname','福島大学')
                    ->get();
        $picherkokus=Picher::where('uniname','東日本国際大学')
                    ->get();
        $picherkous=Picher::where('uniname','東北公益文科大学')
                    ->get();
        $picherishis=Picher::where('uniname','石巻専修大学')
                    ->get();            
        $picheryamas=Picher::where('uniname','山形大学')
                    ->get();
        $pichernichis=Picher::where('uniname','日大工学部')
                    ->get(); 
        $pichersonotas=Picher::where('uniname','その他')
                    ->get();            
                    
        return view('top',compact('picherfukus','picherkokus','picherkous','picherishis'
                                  ,'picheryamas','pichernichis', 'pichersonotas'));
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
    public function edit(Picher $picher)
   {
    return view('edit')->with(['picher' => $picher]);
    }
    public function update(PicherRequest $request, Picher $picher)
    {
    $input_picher = $request['picher'];
    $picher->fill($input_picher)->save();

    return redirect('/pichers/view/' . $picher->id);
    }
    
    public function show(Picher $picher)
    {
        $picherfukus=Picher::where('uniname','福島大学')
                    ->get();
        $picherkokus=Picher::where('uniname','東日本国際大学')
                    ->get();
        $picherkous=Picher::where('uniname','東北公益文科大学')
                    ->get();
        $picherishis=Picher::where('uniname','石巻専修大学')
                    ->get();            
        $picheryamas=Picher::where('uniname','山形大学')
                    ->get();
        $pichernichis=Picher::where('uniname','日大工学部')
                    ->get(); 
        $pichersonotas=Picher::where('uniname','その他')
                    ->get();            
    
    
     return view('id',compact('picherfukus','picherkokus','picherkous','picherishis'
                                  ,'picheryamas','pichernichis', 'pichersonotas'));
    }
}
