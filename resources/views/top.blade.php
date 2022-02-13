@extends('layout')

@section('title','トップ画面')

@section('content')



 <div class="text-center">
    <div class="box1">
        <h1 class="display-4">
          "最高の結果は、最高の準備から"
        </h1>
    </div>   
 </div>    

<div class="mb-5">
    <img src="img/fukudai3.jpg" class="img-fluid" alt="max-width: 50%; , height: auto%;">
</div>
    
<div class='box3'>
    <a id="data"></a>
    <h1 class="text-center">データ入力</h1>

    
</div>
    
<div class="d-grid gap-2 col-6 mx-auto">

    <a href="/informations"  class="btn btn-outline-info">
        試合情報入力へ進む
    </a>
    <a href='/picher' class="btn btn-outline-secondary">
            投手情報入力へ進む
    </a>
</div>
<a id="show"></a>
<div class="box2"></div> 
<div class="mb-5">
　　<h2 class="text-center">投手データ一覧</h2>
</div>　　
　　
<div class="container">
  <div class="row">
    <div class="col">
     <h3 class="fukudai">福島大学</h3>  
    @foreach ($picherfukus as $picherfuku)
        <p>
            
            <a href="/pichers/view/{{$picherfuku->id}}">{{$picherfuku->pichername}}投手</a>
            
        </P>
    @endforeach
    </div>
    <div class="col">
      <h3 class="kokusai">東日本国際大学</h3>  
    @foreach ($picherkokus as $picherkoku)
        <p class=''>
            
            <a href="/pichers/view/{{$picherkoku->id}}">{{$picherkoku->pichername}}投手</a>
            
        </p>
    @endforeach
    </div>
    <div class="col">
      <h3 class="koueki">東北公益文科大学</h3>  
    @foreach ($picherkous as $picherkou)
        <p class=''>
            
            <a href="/pichers/view/{{$picherkou->id}}">{{$picherkou->pichername}}投手</a>
            
        </p>
    @endforeach
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col">
     <h3 class="nichiko">日本大学工学部</h3>  
    @foreach ($pichernichis as $pichernichi)
        <p class=''>
            
            <a href="/pichers/view/{{$pichernichi->id}}">{{$pichernichi->pichername}}投手</a>
            
        </p>
    @endforeach
    </div>
    <div class="col">
      <h3 class="ishi">石巻専修大学</h3>  
    @foreach ($picherishis as $picherishi)
        <p class=''>
            
            <a href="/pichers/view/{{$picherishi->id}}">{{$picherishi->pichername}}投手</a>
            
        </p>
    @endforeach
    </div>
    <div class="col">
      <h3 class="yama">山形大学</h3>  
    @foreach ($picheryamas as $picheryama)
        <p>
            
            <a href="/pichers/view/{{$picheryama->id}}">{{$picheryama->pichername}}投手</a>
        </p>    

    @endforeach
    </div>
  </div>
</div>
        
<div class="box1">
    <h3 class="text-center">その他</h3>
    @foreach ($pichersonotas as $pichersonota)
        <p class="text-center">
            
            <a href="/pichers/view/{{$pichersonota->id}}">{{$pichersonota->pichername}}投手</a>
        </p>    

    @endforeach
    
</div>

@endsection