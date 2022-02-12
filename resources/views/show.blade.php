@extends('layout')

@section('title','試合データ確認')

@section('content')
<div class="box3">
　　 <h1 class="text-center">試合データ確認画面</h1>
</div>　　        
        <div class='text-center'>
            
            <h2>試合ID</h2>
            <h3 class="id">{{ $information->id}}</h3>
            
        </div>
    <div class="text-center">    
        <div class="d-grid gap-2 d-md-block">
         <a href="/informations"  class="btn btn-outline-secondary">戻る</a>
         <a href='/games' class="btn btn-outline-primary">ゲームデータ入力へ進む</a>
        </div> 
    </div>    
    

@endsection