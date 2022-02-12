@extends('layout')

@section('title','試合データ入力')

@section('content')
<div class="box2">
　<h1 class="text-center">試合データ入力</h1>
</div>　　    

<form action="/games" method="POST">
     @csrf
     
<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col">
     <div class="picher_id">
　　            <h2>投手名</h2>
　　            <input class="form-control" type="number" name="game[picher_id]" value="{{$game->picher_id}}"/>
　　            <p class="picher_id__error" style="color:red">{{ $errors->first('game.picher_id') }}</p>
　　        </div>
    </div>
    <div class="col">
     
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col">
     <div class="batter">
　　       <h2>打者</h2>
　　       <input class="form-control" type="text" name="game[batter]" placeholder="右or左" value="{{$game->batter}}"/>
　　       <p class="batter__error" style="color:red">{{ $errors->first('game.batter') }}</p>
　　 </div>
    </div>
    <div class="col">
      <div class="inning">
　　      <h2>イニング</h2>
　　      <input class="form-control" type="number" name="game[inning]" placeholder="イニングを入力" value="{{$game->inning}}"/>
　　      <p class="inning__error" style="color:red">{{ $errors->first('game.inning') }}</p>
　　   </div>
    </div>
    <div class="col">
     <div class="outcount">
　　   <h2>アウトカウント</h2>
　　   <input class="form-control" type="number" name="game[outcount]" placeholder="アウトカウントを入力" value="{{$game->outcount}}"/>
　　   <p class="outcount__error" style="color:red">{{ $errors->first('game.outcount') }}</p>
　　  </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="count">
　　   <h2>カウント</h2>
　　      <select class="form-select" type="number" name="game[count]" placeholder="カウントを入力" value="{{old('game.count')}}"/>
　　       <option value= >選択してください</option>
　　       <option value=0>0B0S</option>
　　       <option value=10>1B0S</option>
　　       <option value=20>2B0S</option>
　　       <option value=30>3B0S</option>
　　       <option value=1>0B1S</option>
　　       <option value=11>1B1S</option>
　　       <option value=21>2B1S</option>
　　       <option value=31>3B1S</option>
　　       <option value=2>0B2S</option>
　　       <option value=12>1B2S</option>
　　       <option value=22>2B2S</option>
　　       <option value=32>3B2S</option>
　　      </select>      
　　      <p class="count__error" style="color:red">{{ $errors->first('game.count') }}</p>
　　   </div>
    </div>
    <div class="col">
      <div class="ballspecies">
　　   <h2>球種</h2>
　　    <select class="form-select" type="text" name="game[ballspecies]" placeholder="球種を入力" value="{{old('game.ballspecies')}}"/>
　　       <option value="">選択してください</option>
　　       <option value="ストレート">ストレート</option>
　　       <option value="ツーシーム">ツーシーム</option>
　　       <option value="縦スライダー">縦スライダー</option>
　　       <option value="横スライダー">横スライダー</option>
　　       <option value="カットボール">カットボール</option>
　　       <option value="カーブ">カーブ</option>
　　       <option value="シュート">シュート</option>
　　       <option value="シンカー">シンカー</option>
　　       <option value="チェンジアップ">チェンジアップ</option>
　　       <option value="スプリット">スプリット</option>
　　       <option value="フォーク">フォーク</option>
　　    </select>      
　　   <p class="ballspecies__error" style="color:red">{{ $errors->first('game.ballspecies') }}</p>
　　  </div>
    </div>
    <div class="col">
     <div class="speed">
　　  <h2>スピード</h2>
　　   <input class="form-control" type="number" name="game[speed]" placeholder="球速を入力"  value="{{old('game.speed')}}"/>
　　   <p class="speed__error" style="color:red">{{ $errors->first('game.speed') }}</p>
　　  </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="result">
　　      <h2>結果</h2>
　　      <input type="text"  class="form-control" name="game[result]" placeholder="結果を入力" value="{{old('game.result')}}"/>
　　      <p class="result__error" style="color:red">{{ $errors->first('game.result') }}</p>
　　  </div>
    </div>
    <div class="col">
      <div class="course">
　　      <h2>コース</h2>
　　      <input  class="form-control" type="number" name="game[course]" placeholder="コースを入力" value="{{old('game.course')}}"/>
　　      <p class="course_error" style="color:red">{{ $errors->first('game.course') }}</P>
　　   </div>
    </div>
    <div class="col">
     <div class="mt-4">     
      <div class="information_id">
          <h2>試合ID</h2>
　　      <input  class="form-control" type="number" name="game[information_id]" value="{{$game->information_id}}"/>
　　       <p class="information_id__error" style="color:red">{{ $errors->first('game.information_id') }}</p>
　　  </div>
　　 </div> 
    </div>
  </div>
</div>
 <div class="text-center">
　<input type="submit"  class="btn btn-outline-primary btn-lg" value="次へ"/>
 </div>　
　</form>
　　    
　　   
 <a href="/" class="btn btn-outline-secondary">終了</a>
　　
　　    
　　    
　　    
@endsection　　    