@extends('layout')

@section('title','投手データ確認')

@section('content')

<div class="box2">

<h1 class="text-center">投手データ入力</h1>
</div>



<form action="/pichers/{{$picher->id}}" method="POST">
　　        
　  @csrf
　  @method('PUT')
　　<div class="text-center">
　　  <h2>大学名</h2>
　　            
　　   <select class="form-select" name="picher[uniname]"aria-label="Default select example" value="{{$picher->uniname}}">
            <option value="">選択してください</option>
            <option value="東日本国際大学">東日本国際大学</option>
            <option value="東北公益文科大学">東北公益文科大学</option>
            <option value="福島大学">福島大学</option>
            <option value="石巻専修大学">石巻専修大学</option>
            <option value="山形大学">山形大学</option>
            <option value="日大工学部">日大工学部</option>
            <option value="その他">その他</option>
        </select>
            <p class="uniname_error" style="color:red">{{$errors->first('picher.uniname')}}</p>
    </div>
    <div class="pichername">
　　      <h2 class="text-center">投手名</h2>
　　      <input class="form-control" type="text" name="picher[pichername]"  aria-label="default input example" placeholder="名前を入力 年も入力" value="{{$picher->pichername}}">
　　      <p class="pichername_error" style="color:red">{{$errors->first('picher.pichername')}}</p>
　　</div>     
　　<div class="handedness">
　　  <h2 class="text-center">利き手</h2>
　　  <input class="form-control" type="text" name="picher[handedness]" placeholder="右投げor左投げ"aria-label="default input example" value="{{$picher->handedness}}">
　　  <p class="handedness_error" style="color:red">{{$errors->first('picher.handedness')}}</p>
　  </div>
　　        
　　<div class="quick">
　　      <h2 class="text-center">クイックタイム</h2>
　　    　<input class="form-control" type="number" name="picher[quick]" placeholder="クイックタイムを入力"aria-label="default input example" value="{{$picher->quick}}">
　　      <p class="quick_error" style="color:red">{{$errors->first('picher.quick')}}</p>
　　</div>
　　
　　<div class="text-center">
　　    <h2 class="box3">コメント</h2>
　　    <div class="form-floating">
         <textarea class="form-control" name="picher[comment]" type="text"  style="height: 300px">{{$picher->comment}}</textarea>
         
        </div>
    </div>    
　　 
　　            
　　 <div class="text-center">
　　 　<input type="submit" class="btn btn-outline-primary"value="保存"/>
　　 </div>　
</form>
　　
　 <div class="back">
　　    <a href="/pichers/view/{{$picher->id}}" class="btn btn-outline-secondary">戻る</a>
　 </div>

　　    
　　    
　　    

@endsection