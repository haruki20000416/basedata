@extends('layout')

@section('title','データ詳細画面')

@section('content')
<div class="text">
   
<div class="box2">
    
    
    <h1 class="text-center">{{$name->uniname}}  {{$name->pichername}}投手</h1>
   <div class="mt-3">
    <h2 class="text-center">{{$name->handedness}} 　クイックタイム{{$name->quick/100}}秒</h2>
 </div>
</div>
<div class="text-center">
 <a class="btn btn-outline-warning" href="/pichers/{{ $picher_id}}/edit">投手情報を編集する</a>
</div>
<div class="container px-4">
  <div class="row gx-5">
    <div class="col">
    <div class="box3">    
     <h2 class="text-center">球種及び平均球速</h2>
     </div>
     <div class="p-3 border bg-light">
       @foreach ($speedaves as $speedave)
        
       <p class="text-center">{{$speedave->ballspecies}}→{{ceil($speedave->speed)}}km</p>
        
       @endforeach
     </div>
    </div>
    <div class="col">
     <div class="box3">    
      <h2 class="text-center">ストライク率</h2>
     </div>
      <div class="p-3 border bg-light">
           <div class="text-center">
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
    </div>
  </div>
</div>

<div class="box2">
    <h2 class="text-center">投球割合</h2>
</div>    
<div class=" border bg-light">
 <div class="text-center">    
  <div class="container">
   <div class="row">
    <div class="col">
      <h2>全体</h2>
        @foreach($ballspecies2s as $key =>$value)
         @if($value/$count >=0.5) 
          <h4 class="text-danger">{{$key}}->{{ceil($value/$count*100)}}％</h4>
         @elseif($value/$count <=0.5) 
         <p>{{$key}}->{{ceil($value/$count*100)}}％</p>
         @endif
         
            
        @endforeach
    </div>
    <div class="col">
      <h2>右</h2>
        @foreach($ballrs as $key => $value)
        @if($value/$countR >=0.5) 
        <h4 class="text-danger">{{$key}}->{{ceil($value/$countR*100)}}％</h4>
        @elseif($value/$countR <=0.5) 
         <p>{{$key}}->{{ceil($value/$countR*100)}}％</p>
        @endif 
            
        @endforeach
    </div>
    <div class="col">
       <h2>左</h2>
        @foreach($ballLs as $key => $value)
         @if($value/$countL >=0.5) 
          <h4 class="text-danger">{{$key}}->{{ceil($value/$countL*100)}}％</h4>
         @elseif($value/$countL <=0.5) 
         <p>{{$key}}->{{ceil($value/$countL*100)}}％</p>
         @endif
        @endforeach
    </div>
   </div>
  </div>
 </div>
</div>





</div> 
<div class="box2">
<h2 class="text-center">カウント別球種割合</h2>
</div>
<div class="container">
  <div class="row">
    <div class="col">
     <div class="accordion" id="accordionPanelsStayOpenExample">
     <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
       <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="ture" aria-controls="panelsStayOpen-collapseOne">
        0B0S
       </button>
     </h2>
     <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
         @foreach($count00CB as $key =>$value)
         @if($value/$count00C >=0.5) 
          <h4 class="text-danger">{{$key}}->{{ceil($value/$count00C*100)}}％</h4>
         @elseif($value/$count00C <=0.5) 
         <p>{{$key}}->{{ceil($value/$count00C*100)}}％</p>
         @endif
        @endforeach
      </div>
     </div>
    </div>
    <div class="accordion-item">
     <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        0B1S
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
         @foreach($count01CB as $key =>$value)
         @if($value/$count01C >=0.5) 
          <h4 class="text-danger">{{$key}}->{{ceil($value/$count01C*100)}}％</h4>
         @elseif($value/$count01C <=0.5) 
         <p>{{$key}}->{{ceil($value/$count01C*100)}}％</p>
         @endif
         @endforeach
      </div>
    </div>
    </div>
    <div class="accordion-item">
     <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        0B2S
      </button>
     </h2>
     <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
         @foreach($count02CB as $key =>$value)
         @if($value/$count02C >=0.5) 
          <h4 class="text-danger">{{$key}}->{{ceil($value/$count02C*100)}}％</h4>
         @elseif($value/$count <=0.5) 
         <p>{{$key}}->{{ceil($value/$count02C*100)}}％</p>
         @endif
        @endforeach
      </div>
     </div>
  </div>
</div>
    </div>
    <div class="col">
      <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-heading1">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
        1B0S
      </button>
    </h2>
    <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading1">
      <div class="accordion-body">
         @foreach($count10CB as $key =>$value)
         @if($value/$count10C >=0.5) 
          <h4 class="text-danger">{{$key}}->{{ceil($value/$count10C*100)}}％</h4>
         @elseif($value/$count <=0.5) 
         <p>{{$key}}->{{ceil($value/$count10C*100)}}％</p>
         @endif
        @endforeach
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapse2">
        1B1S
      </button>
    </h2>
    <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading2">
      <div class="accordion-body">
         @foreach($count11CB as $key =>$value)
         @if($value/$count11C >=0.5) 
          <h4 class="text-danger">{{$key}}->{{ceil($value/$count11C*100)}}％</h4>
         @elseif($value/$count11C <=0.5) 
         <p>{{$key}}->{{ceil($value/$count11C*100)}}％</p>
         @endif
           
        @endforeach
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
        1B2S
      </button>
    </h2>
    <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
      <div class="accordion-body">
        @foreach($count12CB as $key =>$value)
        @if($value/$count12C >=0.5) 
          <h4 class="text-danger">{{$key}}->{{ceil($value/$count12C*100)}}％</h4>
         @elseif($value/$count12C <=0.5) 
         <p>{{$key}}->{{ceil($value/$count12C*100)}}％</p>
         @endif
        @endforeach
      </div>
    </div>
  </div>
</div>  
    </div>
    <div class="col">
      <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-heading4">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="true" aria-controls="panelsStayOpen-collapse4">
        2B0S
      </button>
    </h2>
    <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading4">
      <div class="accordion-body">
        @foreach($count20CB as $key =>$value)
        @if($value/$count20C >=0.5) 
          <h4 class="text-danger">{{$key}}->{{ceil($value/$count20C*100)}}％</h4>
         @elseif($value/$count20C <=0.5) 
         <p>{{$key}}->{{ceil($value/$count20C*100)}}％</p>
         @endif
        @endforeach
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapse5">
        2B1S
      </button>
    </h2>
    <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading5">
      <div class="accordion-body">
         @foreach($count21CB as $key =>$value)
         @if($value/$count21C >=0.5) 
          <h4 class="text-danger">{{$key}}->{{ceil($value/$count21C*100)}}％</h4>
         @elseif($value/$count21C <=0.5) 
         <p>{{$key}}->{{ceil($value/$count21C*100)}}％</p>
         @endif
        @endforeach
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false" aria-controls="panelsStayOpen-collapse6">
        2B2S
      </button>
    </h2>
    <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading6">
      <div class="accordion-body">
         @foreach($count22CB as $key =>$value)
         @if($value/$count22C >=0.5) 
          <h4 class="text-danger">{{$key}}->{{ceil($value/$count22C*100)}}％</h4>
         @elseif($value/$count22C <=0.5) 
         <p>{{$key}}->{{ceil($value/$count22C*100)}}％</p>
         @endif
        @endforeach
      </div>
    </div>
  </div>
</div>  
    </div>
    <div class="col">
        <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-heading7">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse7" aria-expanded="true" aria-controls="panelsStayOpen-collapse7">
        3B0S
      </button>
    </h2>
    <div id="panelsStayOpen-collapse7" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading7">
      <div class="accordion-body">
        @foreach($count30CB as $key =>$value)
        @if($value/$count30C >=0.5) 
          <h4 class="text-danger">{{$key}}->{{ceil($value/$count30C*100)}}％</h4>
         @elseif($value/$count30C <=0.5) 
         <p>{{$key}}->{{ceil($value/$count30C*100)}}％</p>
         @endif
        @endforeach
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-heading8">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse8" aria-expanded="false" aria-controls="panelsStayOpen-collapse8">
        3B1S
      </button>
    </h2>
    <div id="panelsStayOpen-collapse8" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading8">
      <div class="accordion-body">
         @foreach($count31CB as $key =>$value)
         @if($value/$count31C >=0.5) 
          <h4 class="text-danger">{{$key}}->{{ceil($value/$count31C*100)}}％</h4>
         @elseif($value/$count31C <=0.5) 
         <p>{{$key}}->{{ceil($value/$count31C*100)}}％</p>
         @endif
        @endforeach
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-heading9">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse9" aria-expanded="false" aria-controls="panelsStayOpen-collapse9">
        3B2S
      </button>
    </h2>
    <div id="panelsStayOpen-collapse9" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading9">
      <div class="accordion-body">
         @foreach($count32CB as $key =>$value)
         @if($value/$count32C >=0.5) 
          <h4 class="text-danger">{{$key}}->{{ceil($value/$count32C*100)}}％</h4>
         @elseif($value/$count <=0.5) 
         <p>{{$key}}->{{ceil($value/$count32C*100)}}％</p>
         @endif
        @endforeach
      </div>
    </div>
   </div>
  </div>
 </div>
</div>
</diV> 
<div class="box2">
 <h2 class="text-center">コース分布</h2>
</div>
<div class="container px-4">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3 border bg-light">
         <h2 class="text-center">対右</h2>
         <h3 class="text-center"><span class="mgr-150">out</span>in</h3>
         <table class="table_box">
  
        <tr>
        @if($cours7RR >= 0.3)
        <td class="over30"> {{ceil($cours7RR*100)}}％</td>
        @elseif($cours7RR >= 0.2)
        <td class="over20"> {{ceil($cours7RR*100)}}％</td>
        @elseif($cours7RR >= 0.1)
        <td>{{ceil($cours7RR*100)}}％</td>
        @elseif($cours7RR <= 0.1)
        <td class="under10">{{ceil($cours7RR*100)}}％</td>
        @endif
        
        
         @if($cours4RR >= 0.3)
        <td class="over30"> {{ceil($cours4RR*100)}}％</td>
        @elseif($cours4RR >= 0.2)
        <td class="over20"> {{ceil($cours4RR*100)}}％</td>
        @elseif($cours4RR >= 0.1)
        <td>{{ceil($cours4RR*100)}}％</td>
        @elseif($cours4RR <= 0.1)
       <td class="under10">{{ceil($cours4RR*100)}}％</td>
        @endif
        
        
        @if($cours1RR >= 0.3)
        <td class="over30"> {{ceil($cours1RR*100)}}％</td>
        @elseif($cours1RR >= 0.2)
        <td class="over20"> {{ceil($cours1RR*100)}}％</td>
        @elseif($cours1RR >= 0.1)
        <td>{{ceil($cours1RR*100)}}％</td>
        @elseif($cours1RR <= 0.1)
        <td class="under10">{{ceil($cours1RR*100)}}％</td>
        @endif
            
        </tr>
        <tr>
         @if($cours8RR >= 0.3)
        <td class="over30"> {{ceil($cours8RR*100)}}％</td>
        @elseif($cours8RR >= 0.2)
        <td class="over20"> {{ceil($cours8RR*100)}}％</td>
        @elseif($cours8RR >= 0.1)
        <td>{{ceil($cours8RR*100)}}％</td>
        @elseif($cours8RR <= 0.1)
        <td class="under10">{{ceil($cours8RR*100)}}％</td>
        @endif
         
        @if($cours5RR >= 0.3)
        <td class="over30"> {{ceil($cours5RR*100)}}％</td>
        @elseif($cours5RR >= 0.2)
        <td class="over20"> {{ceil($cours5RR*100)}}％</td>
        @elseif($cours5RR >= 0.1)
        <td>{{ceil($cours5RR*100)}}％</td>
        @elseif($cours5RR <= 0.1)
        <td class="under10">{{ceil($cours5RR*100)}}％</td>
        @endif
         
        @if($cours2RR >= 0.3)
        <td class="over30"> {{ceil($cours2RR*100)}}％</td>
        @elseif($cours2RR >= 0.2)
        <td class="over20"> {{ceil($cours2RR*100)}}％</td>
        @elseif($cours2RR >= 0.1)
        <td>{{ceil($cours2RR*100)}}％</td>
        @elseif($cours2RR <= 0.1)
        <td class="under10">{{ceil($cours2RR*100)}}％</td>
        @endif
   
        </tr>
        <tr>
        @if($cours9RR >= 0.3)
        <td class="over30"> {{ceil($cours9RR*100)}}％</td>
        @elseif($cours9RR >= 0.2)
        <td class="over20"> {{ceil($cours9RR*100)}}％</td>
        @elseif($cours9RR >= 0.1)
        <td>{{ceil($cours9RR*100)}}％</td>
        @elseif($cours9RR <= 0.1)
        <td class="under10">{{ceil($cours9RR*100)}}％</td>
        @endif
        
        @if($cours6RR >= 0.3)
        <td class="over30"> {{ceil($cours6RR*100)}}％</td>
        @elseif($cours6RR >= 0.2)
        <td class="over20"> {{ceil($cours6RR*100)}}％</td>
        @elseif($cours6RR >= 0.1)
        <td>{{ceil($cours6RR*100)}}％</td>
        @elseif($cours6RR <= 0.1)
        <td class="under10">{{ceil($cours6RR*100)}}％</td>
        @endif
        
         @if($cours3RR >= 0.3)
        <td class="over30"> {{ceil($cours3RR*100)}}％</td>
        @elseif($cours3RR >= 0.2)
        <td class="over20"> {{ceil($cours3RR*100)}}％</td>
        @elseif($cours3RR >= 0.1)
        <td>{{ceil($cours3RR*100)}}％</td>
        @elseif($cours3RR <= 0.1)
        <td class="under10">{{ceil($cours3RR*100)}}％</td>
        @endif
    
        </tr>
   
       </table>
     </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light">
         <h2 class="text-center">対左</h2>
         <h3 class="text-center"><span class="mgr-150">in</span>out</h3>
          <table class="table_box">
         
        <tr>
        @if($cours7LR >= 0.3)
        <td class="over30"> {{ceil($cours7LR*100)}}％</td>
        @elseif($cours7LR >= 0.2)
        <td class="over20"> {{ceil($cours7LR*100)}}％</td>
        @elseif($cours7LR >= 0.1)
        <td>{{ceil($cours7LR*100)}}％</td>
        @elseif($cours7LR <= 0.1)
        <td class="under10">{{ceil($cours7LR*100)}}％</td>
        @endif
        
        
        @if($cours4LR >= 0.3)
        <td class="over30"> {{ceil($cours4LR*100)}}％</td>
        @elseif($cours4LR >= 0.2)
        <td class="over20"> {{ceil($cours4LR*100)}}％</td>
        @elseif($cours4LR >= 0.1)
        <td>{{ceil($cours4LR*100)}}％</td>
        @elseif($cours4LR <= 0.1)
        <td class="under10">{{ceil($cours4LR*100)}}％</td>
        @endif
        
        
        @if($cours1LR >= 0.3)
        <td class="over30"> {{ceil($cours1LR*100)}}％</td>
        @elseif($cours1LR >= 0.2)
        <td class="over20"> {{ceil($cours1LR*100)}}％</td>
        @elseif($cours1LR >= 0.1)
        <td>{{ceil($cours1LR*100)}}％</td>
        @elseif($cours1LR <= 0.1)
        <td class="under10">{{ceil($cours1LR*100)}}％</td>
        @endif
        </tr>
        <tr>
        
        @if($cours8LR >= 0.3)
        <td class="over30"> {{ceil($cours8LR*100)}}％</td>
        @elseif($cours8LR >= 0.2)
        <td class="over20"> {{ceil($cours8LR*100)}}％</td>
        @elseif($cours8LR >= 0.1)
        <td>{{ceil($cours8LR*100)}}％</td>
        @elseif($cours8LR <= 0.1)
        <td class="under10">{{ceil($cours8LR*100)}}％</td>
        @endif
         
        @if($cours5LR >= 0.3)
        <td class="over30"> {{ceil($cours5LR*100)}}％</td>
        @elseif($cours5LR >= 0.2)
        <td class="over20"> {{ceil($cours5LR*100)}}％</td>
        @elseif($cours5LR >= 0.1)
        <td>{{ceil($cours5LR*100)}}％</td>
        @elseif($cours5LR <= 0.1)
        <td class="under10">{{ceil($cours5LR*100)}}％</td>
        @endif
        
        @if($cours2LR >= 0.3)
        <td class="over30"> {{ceil($cours2LR*100)}}％</td>
        @elseif($cours2LR >= 0.2)
        <td class="over20"> {{ceil($cours2LR*100)}}％</td>
        @elseif($cours2LR >= 0.1)
        <td>{{ceil($cours2LR*100)}}％</td>
        @elseif($cours2LR <= 0.1)
        <td class="under10">{{ceil($cours2LR*100)}}％</td>
        @endif
   
        </tr>
        <tr>
         @if($cours9LR >= 0.3)
        <td class="over30"> {{ceil($cours9LR*100)}}％</td>
        @elseif($cours9LR >= 0.2)
        <td class="over20"> {{ceil($cours9LR*100)}}％</td>
        @elseif($cours9LR >= 0.1)
        <td>{{ceil($cours9LR*100)}}％</td>
        @elseif($cours9LR <= 0.1)
        <td class="under10">{{ceil($cours9LR*100)}}％</td>
        @endif
        
        @if($cours6LR >= 0.3)
        <td class="over30"> {{ceil($cours6LR*100)}}％</td>
        @elseif($cours6LR >= 0.2)
        <td class="over20"> {{ceil($cours6LR*100)}}％</td>
        @elseif($cours6LR >= 0.1)
        <td>{{ceil($cours6LR*100)}}％</td>
        @elseif($cours6LR <= 0.1)
        <td class="under10">{{ceil($cours6LR*100)}}％</td>
        @endif
        
        @if($cours3LR >= 0.3)
        <td class="over30"> {{ceil($cours3LR*100)}}％</td>
        @elseif($cours3LR >= 0.2)
        <td class="over20"> {{ceil($cours3LR*100)}}％</td>
        @elseif($cours3LR >= 0.1)
        <td>{{ceil($cours3LR*100)}}％</td>
        @elseif($cours3LR <= 0.1)
        <td class="under10">{{ceil($cours3LR*100)}}％</td>
        @endif
    
        </tr>
   
       </table>
      </div>
    </div>
  </div>
</div>
<div class="box1">
   <div class="text-center">
   <h2>コメント</h2>   
   <p>{{$name->comment}}</p>
   </div>
</div>   
@endsection
    