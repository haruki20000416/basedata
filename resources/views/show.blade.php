<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>入力詳細確認</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>試合ID</h1>
        <div class='day'>
            <h3>日時</h3>
            <p>{{ $information->id}}</p>
            
        </div>
        <div class='place'>
            <h3>試合会場</h3>
            <p>{{$information->place}}</p>
            
        </div>
        <div class='opponent'>
            <h3>対戦相手</h3>
            <p>{{$information->opponent}}</p>
        </div>
        [<a href='/games'>ゲームデータ入力へ進む</a>]
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>