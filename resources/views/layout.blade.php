<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="/css/stylesheet.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    
    
 <body>
  <header>
   <div class="fixed-top">  
    <nav class="navbar navbar-expand-lg navbar-light"style="background-color: #e3f2fd;">
      <div class="container-fluid">
      <a class="navbar-brand" >福島大学硬式野球部BaseData</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
     </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">ホーム</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#data">データ入力</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/#show">データ参照</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>  
    
    
    
    @yield('content')
    
    
 
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#top">top</a>
  </div>
</nav>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
    
</html>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
   
    