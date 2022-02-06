@extends('layout')

@section('title','データ詳細画面')

@section('content')
        <div class="name">
            <h2>{{$name->picher->uniname}}  {{$name->picher->pichername}}投手</h2>
        </div>
          <h2>平均球速</h2>   
        @foreach ($speedaves as $speedave)
        <div class="球種">
            
            <p>{{$speedave->ballspecies}}→<?php echo ceil($speedave->speed);?>km</p>
        
        @endforeach
        <h2>投球割合</h2>
        @foreach($ballspecies2s as $key =>$value)
            <p>{{$key}}→<?php echo ceil($value/$count*100);?>％</p>
            
        @endforeach
        
        <h2>投球割合　右</h2>
        @foreach($ballrs as $key => $value)
           <p>{{$key}}-><?php echo ceil($value/$countR*100);?>％</p>
            
        @endforeach
        
         <h2>投球割合　左</h2>
        @foreach($ballLs as $key => $value)
           <p>{{$key}}-><?php echo ceil($value/$count100);?>％</p>
            
        @endforeach
        
        <h2>ストライク率</h2>
        @foreach($strikes as $key =>$value)
        //÷母数が全体になってしまっている
            <p>{{$key}}→<?php echo ceil($value/$count*100);?>％</p>
            
        @endforeach
        
        
@endsection
    