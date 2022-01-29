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
        <h1>登録情報</h1>
        <div class='picher'>
            <h3>投手リレーション　テスト</h3>
            <p>{{$game->picher }}</p>
            
        </div>
        <div class=''>
            <h3>試合情報　リレーション</h3>
            <p>{{$game->information}}</p>
            
        </div>
        <div class='speed'>
            <h3>スピード</h3>
            <p>{{$game->speed}}</p>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>