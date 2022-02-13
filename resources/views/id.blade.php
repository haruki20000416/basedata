@extends('layout')

@section('title','投手ID確認')

@section('content')

<div class="box2"></div> 
<div class="mb-5">
　　<h2 class="text-center">投手ID一覧</h2>
</div>　　
　　
<div class="container">
  <div class="row">
    <div class="col">
     <h3 class="fukudai">福島大学</h3>  
    @foreach ($picherfukus as $picherfuku)
    
            
            <h5>{{$picherfuku->id}}　　{{$picherfuku->pichername}}投手</h5>
            
        
    @endforeach
    </div>
    <div class="col">
      <h3 class="kokusai">東日本国際大学</h3>  
    @foreach ($picherkokus as $picherkoku)
        
            
            <h5>{{$picherkoku->id}}　　{{$picherkoku->pichername}}投手</h5>
            
        
    @endforeach
    </div>
    <div class="col">
      <h3 class="koueki">東北公益文科大学</h3>  
    @foreach ($picherkous as $picherkou)
        
            <h5>{{$picherkou->id}}　　{{$picherkou->pichername}}投手</h5>
            
    @endforeach
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col">
     <h3 class="nichiko">日本大学工学部</h3>  
    @foreach ($pichernichis as $pichernichi)
    
        <h5>{{$pichernichi->id}}　　{{$pichernichi->pichername}}投手</h5>
        
    @endforeach
    </div>
    <div class="col">
      <h3 class="ishi">石巻専修大学</h3>  
    @foreach ($picherishis as $picherishi)
        
        <h5>{{$picherishi->id}}　　{{$picherishi->pichername}}投手</h5>
        
    @endforeach
    </div>
    <div class="col">
      <h3 class="yama">山形大学</h3>  
    @foreach ($picheryamas as $picheryama)
        
        <h5>{{$picheryama->id}}　　{{$picheryama->pichername}}投手</h5>

    @endforeach
    </div>
  </div>
</div>
        
<div class="box1">
    <h3 class="text-center">その他</h3>
    @foreach ($pichersonotas as $pichersonota)
        
        <h5>{{$pichersonota->id}}　　{{$pichersonota->pichername}}投手</h5>

    @endforeach
    
</div>

@endsection