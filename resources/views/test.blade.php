<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        
    </head>
    
    <body>
        <h1>Test</h1>
            @foreach ($games as $game)
            <div class='game'>
                <h2 class='id'>{{$game->id}}</h2>
                <p class='batter'>{{$game->batter}}</p>
                <p class='inning'>{{$game->inning}}</p>
                <p class='outcount'>{{$game->outcount}}</p>
                <p class='count'>{{$game->count}}</p>
                <p class='ballspecies'>{{$game->ballspecies}}</p>
                <p class='speed'>{{$game->speed}}</p>
                <P class='result'>{{$game->result}}</P>
                <p class='picher_id'>{{$game->picher}}</p>
                <p class='information_id'>{{$game->information}}</p>
            
                
            </div>
            @endforeach
            
         
        </div>    
        
        
    </body>