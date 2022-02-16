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
        $name=Picher::where('id',$picher_id)->first();
        
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
               ->where('count','0')
               ->get();
            $count00C = $count00->count();  
            $count00s = $count00->pluck('ballspecies');
            $count00CB = $count00s->countBy(); 
            
    
         //0-1
            $count01=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('count','1')
               ->get();
            $count01C = $count01->count();  
            $count01s = $count01->pluck('ballspecies');
            $count01CB = $count01s->countBy();  
         //0-2
            $count02=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('count','2')
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
               ->where('count','3')
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
        $coursRA=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','右')
               ->where('course','>',0)
               ->count();
        
         //1
        $cours1R=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','右')
               ->where('course',1)
               ->count();
        
        //2
        $cours2R=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','右')
               ->where('course',2)
               ->count();
        
        //3
        $cours3R=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','右')
               ->where('course',3)
               ->count();
        
        
        //4
        $cours4R=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','右')
               ->where('course',4)
               ->count();
        
        
        //5
        $cours5R=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','右')
               ->where('course',5)
               ->count();
       
    
        //6
        $cours6R=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','右')
               ->where('course',6)
               ->count();
        
        
        //7
        $cours7R=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','右')
               ->where('course',7)
               ->count();
        
        
        //8
        $cours8R=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','右')
               ->where('course',8)
               ->count();
        
        
        //9
        $cours9R=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','右')
               ->where('course',9)
               ->count();
        
        
        
    
        //コース内訳　左
        $coursLA=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','左')
               ->where('course','>',0)
               ->count();
        //1
        $cours1L=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','左')
               ->where('course',1)
               ->count();
       
        //2
        $cours2L=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','左')
               ->where('course',2)
               ->count();
          
         
        //3
        $cours3L=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','左')
               ->where('course',3)
               ->count();
        
         
        //4
        $cours4L=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','左')
               ->where('course',4)
               ->count();
               
        //5
        $cours5L=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','左')
               ->where('course',5)
               ->count();
               
        //6
        $cours6L=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','左')
               ->where('course',6)
               ->count();
               
        //7
        $cours7L=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','左')
               ->where('course',7)
               ->count();
               
        //8
        $cours8L=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','左')
               ->where('course',8)
               ->count();
        
        //9
        $cours9L=Game::with('picher')
               ->where('picher_id',$picher_id)
               ->where('batter','左')
               ->where('course',9)
               ->count();
        
        if($coursRA)
        {
            $cours1RR=$cours1R/$coursRA;
            $cours2RR=$cours2R/$coursRA;
            $cours3RR=$cours3R/$coursRA;
            $cours4RR=$cours4R/$coursRA;
            $cours5RR=$cours5R/$coursRA;
            $cours6RR=$cours6R/$coursRA;
            $cours7RR=$cours7R/$coursRA;
            $cours8RR=$cours8R/$coursRA;
            $cours9RR=$cours9R/$coursRA;
        }
        else{
            $cours1RR=0;
            $cours2RR=0;
            $cours3RR=0;
            $cours4RR=0;
            $cours5RR=0;
            $cours6RR=0;
            $cours7RR=0;
            $cours8RR=0;
            $cours9RR=0;
        }
        
        if($coursLA)
        {
           $cours1LR=$cours1L/$coursLA;
           $cours2LR=$cours2L/$coursLA;
           $cours3LR=$cours3L/$coursLA;
           $cours4LR=$cours4L/$coursLA;
           $cours5LR=$cours5L/$coursLA;
           $cours6LR=$cours6L/$coursLA;
           $cours7LR=$cours7L/$coursLA;
           $cours8LR=$cours8L/$coursLA;
           $cours9LR=$cours9L/$coursLA;
        }
        else{
            $cours1LR=0;
            $cours2LR=0;
            $cours3LR=0;
            $cours4LR=0;
            $cours5LR=0;
            $cours6LR=0;
            $cours7LR=0;
            $cours8LR=0;
            $cours9LR=0;
        }
    
        
        
        
        
        return view('datashow',compact('name','speedaves','count','ballspecies2s',
                                        'picher_id','ballrs','countR','ballLs','countL','strikesta','strikes',
                                         'strikeysraa', 'strikeysraa','strikecuta','strikecura','strikechua','strikesina','strikechea', 'strikespa'
                                         ,'strikefora','striketwa','count00C','count00CB','count01C','count01CB','count02C','count02CB',
                                         'count10C','count10CB','count11C','count11CB','count12C','count12CB','count20C','count20CB',
                                        'count21C','count21CB','count22C','count22CB','count30C','count30CB','count31C','count31CB','count32C',
                                        'count32CB','cours1RR', 'cours2RR','cours3RR','cours4RR','cours5RR','cours6RR','cours7RR','cours8RR','cours9RR',
                                        'cours1LR','cours2LR','cours3LR','cours4LR','cours5LR','cours6LR','cours7LR','cours8LR','cours9LR','picher_id'));
    }
}    
     
