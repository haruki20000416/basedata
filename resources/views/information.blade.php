@extends('layout')

@section('title','試合情報入力')

@section('content')
<div class="box2">
　　 <h1 class="text-center">試合データ入力</h1>
</div>　　    
<form action="/informations" method="POST">
　　        
　　        @csrf
 <div class="day">
　　  <h2 class="text-center">日付</h2>
　　  <input class="form-control form-control-sm" type="date" name="information[day]" placeholder="日付を選択" value="{{old('information.day')}}"/>
　　  <p class="day__error" style="color:red">{{ $errors->first('information.day') }}</p>
 </div>
 <div class="place">
　　 <h2 class="text-center">試合会場</h2>
　　 <input class="form-control form-control-sm" type="text" name="information[place]" placeholder="場所を入力" value="{{old('information.place')}}"/>
　　  <p class="place__error" style="color:red">{{ $errors->first('information.place') }}</p>
 </div>
 <div class="opponent">
　　  <h2 class="text-center">対戦相手</h2>
　　   <input class="form-control form-control-sm" name="information[opponent]" placeholder="相手名" value="{{old('information.opponent')}}"/>
　　   <p class="opponent__error" style="color:red">{{ $errors->first('information.opponent') }}</p>
 </div>
　　        
　　 
　　            
 <div class="text-center">　       
　<input type="submit"class="btn btn-outline-primary" value="データ入力に進む"/>
 </div>　  
</form>
　　    
　<div class="back">
　　<a href="/" class="btn btn-outline-secondary">戻る</a>
　</div>
　　    
　@endsection
　　    
