@section('img')
    <div class="mb-5">
        <img src="img/fukudai3.jpg" class="img-fluid" alt="max-width: 50%; , height: auto%;">
    </div>
@endsection    
    
    
<div class="col">
      <h3 class="kokusai">東日本国際大学</h3>  
    @foreach ($pichers as $picher)
        <p class='fukudai'>
            
            <a href="/pichers/view/{{$picher->id}}">{{$picher->pichername}}投手</a>
            
        </p>
    @endforeach
    </div>
    <div class="col">
      <h3 class="koueki">東北公益文科大学</h3>  
    @foreach ($pichers as $picher)
        <p class='fukudai'>
            
            <a href="/pichers/view/{{$picher->id}}">{{$picher->pichername}}投手</a>
            
        </p>
    @endforeach
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col">
     <h3>日本大学工学部</h3>  
    @foreach ($pichers as $picher)
        <p class='fukudai'>
            
            <a href="/pichers/view/{{$picher->id}}">{{$picher->pichername}}投手</a>
            
        </p>
    @endforeach
    </div>
    <div class="col">
      <h3>石巻専修大学</h3>  
    @foreach ($pichers as $picher)
        <p class='fukudai'>
            
            <a href="/pichers/view/{{$picher->id}}">{{$picher->pichername}}投手</a>
            
        </p>
    @endforeach
    </div>
    <div class="col">
      <h3>山形大学</h3>  
    @foreach ($pichers as $picher)
        <p class='fukudai'>
            
            <a href="/pichers/view/{{$picher->id}}">{{$picher->pichername}}投手</a>
            
        </p>
    @endforeach
    </div>
  </div>
</div>



　　        <div class="batter">
　　            <h2>打者</h2>
　　            <input type="text" name="game[batter]" placeholder="右or左" value="{{$game->batter}}"/>
　　            <p class="batter__error" style="color:red">{{ $errors->first('game.batter') }}</p>
　　        </div>
　　        <div class="inning">
　　            <h2>イニング</h2>
　　            <input type="number" name="game[inning]" placeholder="イニングを入力" value="{{$game->inning}}"/>
　　            <p class="inning__error" style="color:red">{{ $errors->first('game.inning') }}</p>
　　        </div>
　　        <div class="outcount">
　　            <h2>アウトカウント</h2>
　　            <input type="number" name="game[outcount]" placeholder="アウトカウントを入力" value="{{$game->outcount}}"/>
　　            <p class="outcount__error" style="color:red">{{ $errors->first('game.outcount') }}</p>
　　        </div>
　　        <div class="count">
　　            <h2>カウント</h2>
　　            <select type="number" name="game[count]" placeholder="カウントを入力" value="{{old('game.count')}}"/>
　　                <option value="">選択してください</option>
　　                <option value="00">0B0S</option>
　　                <option value="10">1B0S</option>
　　                <option value="20">2B0S</option>
　　                <option value="30">3B0S</option>
　　                <option value="01">0B1S</option>
　　                <option value="11">1B1S</option>
　　                <option value="21">2B1S</option>
　　                <option value="31">3B1S</option>
　　                <option value="02">0B2S</option>
　　                <option value="12">1B2S</option>
　　                <option value="22">2B2S</option>
　　                <option value="32">3B2S</option>
　　          </select>      
　　                
　　            <p class="count__error" style="color:red">{{ $errors->first('game.count') }}</p>
　　        </div>
　　        <div class="ballspecies">
　　            <h2>球種</h2>
　　            <select class="text" name="game[ballspecies]" placeholder="球種を入力" value="{{old('game.ballspecies')}}"/>
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
　　        <div class="speed">
　　            <h2>スピード</h2>
　　            <input type="number" name="game[speed]" placeholder="球速を入力"  value="{{old('game.speed')}}"/>
　　            <p class="speed__error" style="color:red">{{ $errors->first('game.speed') }}</p>
　　        </div>
　　        <div class="result">
　　            <h2>結果</h2>
　　            <textarea name="game[result]" placeholder="結果を入力">{{old('game.result')}}</textarea>
　　            <p class="result__error" style="color:red">{{ $errors->first('game.result') }}</p>
　　        </div>
　　        <div class="course">
　　            <h2>コース</h2>
　　            <input type="number" name="game[course]" placeholder="コースを入力" value="{{old('game.course')}}"/>
　　            <p class="course_error" style="color:red">{{ $errors->first('game.course') }}</P>
　　        </div>
　　        
　　        <div class="picher_id">
　　            <h2>投手ID　ここをどーすか</h2>
　　            <input class="number" name="game[picher_id]" value="{{$game->picher_id}}"/>
　　            <p class="picher_id__error" style="color:red">{{ $errors->first('game.picher_id') }}</p>
　　        </div>
　　        
　　        <div class="information_id">
　　            <h2>試合のID</h2>
　　            <input class="number" name="game[information_id]" value="{{$game->information_id}}"/>
　　            <p class="information_id__error" style="color:red">{{ $errors->first('game.information_id') }}</p>
　　        </div>
　　        
　　        <div class="count">
    <h2>カウント別球種</h2>
    <div class="00">
        <h3>0B0S</h3>
        
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

<div class="rate">
    
        <h2>投球割合</h2>
        @foreach($ballspecies2s as $key =>$value)
            <p>{{$key}}→{{ceil($value/$count*100)}}％</p>
            
        @endforeach
</div>

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
        
        <h2>投球割合　右</h2>
        @foreach($ballrs as $key => $value)
           <p>{{$key}}->{{ceil($value/$countR*100)}}％</p>
            
        @endforeach
    </div>
    
    <table class="table_box">
  
        <tr>
         <td>10%</td>
         <td>10％</td>
         <td>10%</td>
        </tr>
        <tr>
         <td>10%</td>
         <td>10</td>
         <td>10</td>
   
        </tr>
        <tr>
         <td>10</td>
         <td>10</td>
         <td>10</td>
    
        </tr>
   
       </table>