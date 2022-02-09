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

        
        //ストレートの総数
        $strikesta=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('ballspecies','ストレート')
               ->count();
        //ツーシームの総数
         $striketwa=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('ballspecies','ツーシーム')
               ->count();
        //縦スライダー総数
        $striketsraa=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('ballspecies','縦スライダー')
               ->count();
       //横スライダー総数
       $strikeysraa=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('ballspecies','横スライダー')
               ->count();
        //カットボール総数
        $strikecuta=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('ballspecies','カットボール')
               ->count();
        //カーブ総数
        $strikecura=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('ballspecies','カーブ')
               ->count();
        //シュート総数
        $strikechua=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('ballspecies','シュート')
               ->count();
        //シンカー総数
        $strikesina=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('ballspecies','シンカー')
               ->count();
        //チェンジアップ総数
        $strikechea=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('ballspecies','チェンジアップ')
               ->count();
        //スプリット総数
        $strikespa=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('ballspecies','スプリット')
               ->count();
        //フォーク総数
        $strikefora=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('ballspecies','フォーク')
               ->count();
               
               
        //カウント別投球割合
           
         //0-0
            $count00=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('count','01')
               ->get();
            $count00C = $count00->count();  
            $count00s = $count00->pluck('ballspecies');
            $count00CB = $count00s->countBy(); 
    
         //0-1
            $count01=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('count','01')
               ->get();
            $count01C = $count01->count();  
            $count01s = $count01->pluck('ballspecies');
            $count01CB = $count01s->countBy();  
         //0-2
            $count02=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('count','02')
               ->get();
            $count02C = $count02->count();  
            $count02s = $count02->pluck('ballspecies');
            $count02CB = $count02s->countBy();
         //1-0    
            $count10=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('count','10')
               ->get();
            $count10C = $count10->count();  
            $count10s = $count10->pluck('ballspecies');
            $count10CB = $count10s->countBy();    
                
         //1-1
            $count11=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('count','11')
               ->get();
            $count11C = $count11->count();  
            $count11s = $count11->pluck('ballspecies');
            $count11CB = $count11s->countBy();
            
         //1-2
           $count12=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('count','12')
               ->get();
            $count12C = $count12->count();  
            $count12s = $count12->pluck('ballspecies');
            $count12CB = $count12s->countBy();
            
         //2-0  
           $count20=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('count','20')
               ->get();
            $count20C = $count20->count();  
            $count20s = $count20->pluck('ballspecies');
            $count20CB = $count20s->countBy();
          
         //2-1
          $count21=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('count','21')
               ->get();
            $count21C = $count21->count();  
            $count21s = $count21->pluck('ballspecies');
            $count21CB = $count21s->countBy();
         
         //2-2
           $count22=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('count','22')
               ->get();
            $count22C = $count22->count();  
            $count22s = $count22->pluck('ballspecies');
            $count22CB = $count22s->countBy();
         //3-0
          $count30=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('count','30')
               ->get();
            $count30C = $count30->count();  
            $count30s = $count30->pluck('ballspecies');
            $count30CB = $count30s->countBy();
            
         //3-1
           $count31=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('count','31')
               ->get();
            $count31C = $count31->count();  
            $count31s = $count31->pluck('ballspecies');
            $count31CB = $count31s->countBy();
            
         //3-2
           $count32=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('count','32')
               ->get();
            $count32C = $count32->count();  
            $count32s = $count32->pluck('ballspecies');
            $count32CB = $count32s->countBy();
        
        if($count00C == null){
            
            $count00C=0 and $countCB=0;
            
        }
        
        
        //コース内訳 右
        $courseR=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','右')
               ->where('course','>',0)
               ->get();
        $courseR2 = $courseR->pluck('course');
        $courseRs = $courseR2->countBy();
        
        //コース内訳　左
        $courseL=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','左')
               ->where('course','>',0)
               ->get();
        $courseL2 = $courseL->pluck('course');
        $courseLs = $courseL2->countBy();
        
        
        
        
        return view('datashow',compact('name','data','speedaves','count','ballspecies2s',
                                        'picher_id','ballrs','countR','ballLs','countL','strikesta','strikes',
                                         'strikeysraa', 'strikeysraa','strikecuta','strikecura','strikechua','strikesina','strikechea', 'strikespa'
                                         ,'strikefora','striketwa','count00C','count00CB','count01C','count01CB','count02C','count02CB',
                                         'count10C','count10CB','count11C','count11CB','count12C','count12CB','count20C','count20CB',
                                        'count21C','count21CB','count22C','count22CB','count30C','count30CB','count31C','count31CB','count32C',
                                        'count32CB'));
    }
}
