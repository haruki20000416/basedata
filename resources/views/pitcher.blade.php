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
　　    <h1>投手データ入力</h1>
　　    
　　    <form action="/pichers" method="POST">
　　        
　　        @csrf
　　        <div class="uniname">
　　            <h2>大学名</h2>
　　            
　　            <select class="uniname" name="picher[uniname]">
                    <option value="">選択してください</option>
                    <option value="東日本国際大学">東日本国際大学</option>
                    <option value="東北公益文科大学">東北公益文科大学</option>
                    <option value="福島大学">福島大学</option>
                    <option value="石巻専修大学">石巻専修大学</option>
                    <option value="山形大学">山形大学</option>
                    <option value="日大工学部">日大工学部</option>
                    <option value="その他">その他</option>
                </select>
　　            
　　        </div>
　　        
　　        <div class="pichername">
　　            <h2>投手名</h2>
　　            <textarea name="picher[pichername]" placeholder="名前を入力"></textarea>
　　            
　　        </div>
　　        
　　        <div class="opponent">
　　            <h2>利き手</h2>
　　            <input type="text" name="picher[handedness]" placeholder="右投げor左投げ">
　　        </div>
　　        
　　        <div class="quick">
　　          　<h2>クイックタイム</h2>
　　          　<input type="number" name="picher[quick]" placeholder="クイックタイムを入力">
　　        </div>
　　 
　　            
　　        <div class="保存">
　　 　　　　　<input type="submit" value="保存"/>
　　 　　　 </div>　
　　     </form>
　　    
　　    <div class="back">[<a href="/">back</a>]</div>
　　    
　　    
　　    
　　    
　　 </body>
　</html>