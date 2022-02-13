@extends('layout')

@section('title','投手データ確認')

@section('content')

<div class="text-center">     
    <h1 class="box2">登録情報</h1>
</div>  

<div class='text-center'>
    <h3>大学名</h3>
    <p>{{$picher->uniname }}</p>
            
</div>
<div class='text-center'>
    <h3>選手名</h3>
    <p>{{$picher->pichername}}</p>
            
</div>
<div class='text-center'>
    <h3>利き手</h3>
    <p>{{$picher->handedness}}</p>
</div>
<div class='text-center'>
    <h3>クイックタイム</h3>
    <p>{{$picher->quick}}</p>
</div>
 <div class="text-center">
　　    <a href="/" class="btn btn-outline-secondary">戻る</a>
　 </div>
   