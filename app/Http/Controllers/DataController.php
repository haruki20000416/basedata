<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Picher;

class DataController extends Controller
{
    public function dataview($picher_id)
    {
        //全データ
        $data=Game::with('picher')->where('picher_id',$picher_id)->get();
        
        //名前取得
        $name=Game::with('picher')->where('picher_id',$picher_id)->first();
        
        //全投球数
        $count= $data->count();
        
        //平均球速
        $speedaves = Game::with('picher')
                    ->where('picher_id',$picher_id)
                    ->select('ballspecies')
                    ->selectRaw('AVG(speed) as speed')
                    ->groupBy('ballspecies')
                    ->get();
                    
        //投球割合  全体          
        $ballspecies = $data->pluck('ballspecies');
        $ballspecies2s = $ballspecies->countBy();
        
        //投球割合　右
        $ballr=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','右')
               ->get();
        $countR = $ballr->count();
        $ballr2 = $ballr->pluck('ballspecies');
        $ballrs = $ballr2->countBy();
        
        //投球割合　左
        $ballL=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','左')
               ->get();
        $countL = $ballL->count();
        $ballL2 = $ballL->pluck('ballspecies');
        $ballLs = $ballL2->countBy();
    
        
        //ストライク率
        $strike=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('course','>',0)
               ->get();
        $strike2 = $strike->pluck('ballspecies');
        $strikes = $strike2->countBy();
    
        
        //カウント別投球割合
    
                
                
                
        //コース内訳
        $course= $strike=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('course','>',0)
               ->select('ballspecies','course')
               ->get();
               
        
        
        
        
        return view('datashow',compact('name','data','speedaves','count','ballspecies2s',
                                        'strikes','picher_id','ballrs','countR','ballLs','countL'));
    }
}
