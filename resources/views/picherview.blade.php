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
        <div class='uniname'>
            <h3>大学名</h3>
            <p>{{$picher->uniname }}</p>
            
        </div>
        <div class='pichername'>
            <h3>選手名</h3>
            <p>{{$picher->pichername}}</p>
            
        </div>
        <div class='handedness'>
            <h3>利き手</h3>
            <p>{{$picher->handedness}}</p>
        </div>
        <div class='quick'>
            <h3>クイックタイム</h3>
            <p>{{$picher->quick}}</p>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>