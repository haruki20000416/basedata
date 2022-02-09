@extends('layout')

@section('title','データ詳細画面')

@section('content')
<div class="name">
    
    
    <h1>{{$name->picher->uniname}}  {{$name->picher->pichername}}投手</h1>
    
</div>

<div class="speed">      

          <h2>平均球速</h2>  
        @foreach ($speedaves as $speedave)
        
            <p>{{$speedave->ballspecies}}→{{ceil($speedave->speed)}}km</p>
        
        @endforeach
</div>

<div class="rate">
    
        <h2>投球割合</h2>
        @foreach($ballspecies2s as $key =>$value)
            <p>{{$key}}→{{ceil($value/$count*100)}}％</p>
            
        @endforeach
</div>
    // ここの大きさ調整
    <div style="position: center; height:100; width:150">
        <canvas id="myChart"> ></canvas>

        <script src="{{ mix('js/app.js') }}"></script>
    
    </div>

<div class="rateR">
        <h2>投球割合　右</h2>
        @foreach($ballrs as $key => $value)
           <p>{{$key}}->{{ceil($value/$countR*100)}}％</p>
            
        @endforeach
</div>

<div class="rateL">
         <h2>投球割合　左</h2>
        @foreach($ballLs as $key => $value)
           <p>{{$key}}->{{ceil($value/$countL*100)}}％</p>
            
        @endforeach
</div>  

<div class="strike">
        <h2>ストライク率</h2>
        @foreach($strikes as $key =>$value)
           @if($key == "ストレート") 
            <p>{{$key}}→{{ceil($value/$strikesta*100)}}％</p>
           @elseif($key == "ツーシーム―")
            <p>{{$key}}→{{ceil($value/$striketwa*100)}}％</p>
           @elseif ($key == "縦スライダー")
            <p>{{$key}}→{{ceil($value/$striketsraa*100)}}％</p>
            
           @elseif ($key == "横スライダー")
           <P>{{$key}}→{{ceil($value/$strikeysraa*100)}}％</P>
           
           @elseif ($key =="カットボール")
           <p>{{$key}}→{{ceil($value/$strikecuta*100)}}％</p>
           
           @elseif($key == "カーブ")
           <p>{{$key}}→{{ceil($value/$strikecura*100)}}％</p>
           
           @elseif ($key == "シュート")
           <p>{{$key}}→{{ceil($value/$strikechua*100)}}％</p>
           
           @elseif ($key == "シンカー")
           <p>{{$key}}→{{ceil($value/$strikesina*100)}}％</p>
           
           @elseif ($key == "チェンジアップ")
           <p>{{$key}}→{{ceil($value/$strikechea*100)}}％</p>
           
           @elseif ($key == "スプリット")
           <p>{{$key}}→{{ceil($value/$strikespa*100)}}％</p>
           
           @elseif ($key == "フォーク")
           <p>{{$key}}→{{ceil($value/$strikefora*100)}}％</p>
           @endif
           
        @endforeach
</div>       
        
<div class="count">
    <h2>カウント別球種</h2>
    <div class="00">
        <h3>0B0S</h3>
        @foreach($count00CB as $key =>$value)
           <P>{{$key}}→{{ceil($value/$count00C*100)}}％</P>
        @endforeach
    </div>
    <div class="01">
        <h3>0B1S</h3>
        @foreach($count01CB as $key =>$value)
           <P>{{$key}}→{{ceil($value/$count01C*100)}}％</P>
        @endforeach
    </div>
    <div class="02">
        <h3>0B2S</h3>
        @foreach($count02CB as $key =>$value)
           <P>{{$key}}→{{ceil($value/$count02C*100)}}％</P>
        @endforeach
    </div>
    <div class="10">
        <h3>1B0S</h3>
        @foreach($count10CB as $key =>$value)
           <P>{{$key}}→{{ceil($value/$count10C*100)}}％</P>
        @endforeach
    </div>
    <div class="11">
        <h3>1B1S</h3>
        @foreach($count11CB as $key =>$value)
           <P>{{$key}}→{{ceil($value/$count11C*100)}}％</P>
        @endforeach
    </div>
    <div class="12">
        <h3>1B2S</h3>
        @foreach($count12CB as $key =>$value)
           <P>{{$key}}→{{ceil($value/$count12C*100)}}％</P>
        @endforeach
    </div>
    <div class="20">
        <h3>2B0S</h3>
        @foreach($count20CB as $key =>$value)
           <P>{{$key}}→{{ceil($value/$count20C*100)}}％</P>
        @endforeach
    </div>
    <div class="21">
        <h3>2B1S</h3>
        @foreach($count21CB as $key =>$value)
           <P>{{$key}}→{{ceil($value/$count21C*100)}}％</P>
        @endforeach
    </div>
    <div class="22">
        <h3>2B2S</h3>
        @foreach($count22CB as $key =>$value)
           <P>{{$key}}→{{ceil($value/$count22C*100)}}％</P>
        @endforeach
    </div>
    <div class="30">
        <h3>3B0S</h3>
        @foreach($count30CB as $key =>$value)
           <P>{{$key}}→{{ceil($value/$count30C*100)}}％</P>
        @endforeach
    </div>
    <div class="31">
        <h3>3B1S</h3>
        @foreach($count31CB as $key =>$value)
           <P>{{$key}}→{{ceil($value/$count31C*100)}}％</P>
        @endforeach
    </div>
    <div class="32">
        <h3>3B2S</h3>
        @foreach($count32CB as $key =>$value)
           <P>{{$key}}→{{ceil($value/$count32C*100)}}％</P>
        @endforeach
    </div>
</div>        
@endsection
    