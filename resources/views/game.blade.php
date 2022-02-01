<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>試合データ入力</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
　　</head>
　　
　　<body>
　　    <h1>試合データ入力</h1>
　　    <form action="/informations/{{$information_id}}/games" method="POST">
　　        
　　        @csrf
　　        <div class="batter">
　　            <h2>打者</h2>
　　            <input type="text" name="game[batter]" placeholder="右or左" value="{{old('game.batter')}}"/>
　　            <p class="batter__error" style="color:red">{{ $errors->first('game.batter') }}</p>
　　        </div>
　　        <div class="inning">
　　            <h2>イニング</h2>
　　            <input type="number" name="game[inning]" placeholder="イニングを入力" value="{{old('game.inning')}}"/>
　　            <p class="inning__error" style="color:red">{{ $errors->first('game.inning') }}</p>
　　        </div>
　　        <div class="outcount">
　　            <h2>アウトカウント</h2>
　　            <input type="number" name="game[outcount]" placeholder="アウトカウントを入力" value="{{old('game.outcount')}}"/>
　　            <p class="outcount__error" style="color:red">{{ $errors->first('game.outcount') }}</p>
　　        </div>
　　        <div class="count">
　　            <h2>カウント</h2>
　　            <input type="number" name="game[count]" placeholder="カウントを入力" value="{{old('game.count')}}"/>
　　            <p class="count__error" style="color:red">{{ $errors->first('game.count') }}</p>
　　        </div>
　　        <div class="ballspecies">
　　            <h2>球種</h2>
　　            <input type="text" name="game[ballspecies]" placeholder="球種を入力" value="{{old('game.ballspecies')}}"/>
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
　　            <p class="course_error" style="color:red"></p>{{ $errors->first('game.course')}}</P>
　　        </div>
　　        
　　        <div class="picher_id">
　　            <h2>投手ID　ここをどーすか</h2>
　　            <input class="number" name="game[picher_id]" value="{{old('game.picher_id')}}"/>
　　            <p class="picher_id__error" style="color:red">{{ $errors->first('game.picher_id') }}</p>
　　        </div>
　　        
　　        <div class="information_id">
　　            <h2>試合のID</h2>
　　            <input class="number" name="game[information_id]" value="{{$information_id}}">
　　            <p class="information_id__error" style="color:red">{{ $errors->first('game.information_id') }}</p>
　　        </div>
　　           
 　      
 　              
 　          
 　　        
　　           <input type="submit" value="保存"/>
　　     </form>
　　    
　　    <div class="back">[<a href="/">back</a>]</div>
　　    
　　    
　　    
　　    
　　 </body>
　</html>