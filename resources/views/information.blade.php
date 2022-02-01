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
　　    <form action="/informations" method="POST">
　　        
　　        @csrf
　　        <div class="day">
　　            <h2>日付</h2>
　　            <input type="date" name="information[day]" placeholder="日付を選択" value="{{old('information.day')}}"/>
　　            <p class="day__error" style="color:red">{{ $errors->first('information.day') }}</p>
　　        </div>
　　        <div class="place">
　　            <h2>試合会場</h2>
　　            <textarea name="information[place]" placeholder="場所を入力">{{old('information.place')}}</textarea>
　　            <p class="place__error" style="color:red">{{ $errors->first('information.place') }}</p>
　　        </div>
　　        <div class="opponent">
　　            <h2>対戦相手</h2>
　　            <textarea name="information[opponent]" placeholder="相手名">{{old('information.opponent')}}</textarea>
　　            <p class="opponent__error" style="color:red">{{ $errors->first('information.opponent') }}</p>
　　        </div>
　　        
　　 
　　            
　　        </div>
　　           <input type="submit" value="保存"/>
　　     </form>
　　    
　　    <div class="back">[<a href="/">back</a>]</div>
　　    
　　    
　　    
　　    
　　 </body>
　</html>