<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('title','Mon blog')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="">Bloglaravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href=" {{route('traininglist')}}">List</a>
              </li>
              @if (Auth::check())
                
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href=" {{route('storetraining')}}">Ajout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Categories</a>
              </li>
              <li class="nav-item">
              {{Auth::user()->name}}
              </li>
              <li class="nav-item">
                <form method="post" action="{{route('logout')}}">
                @csrf
                  <button type="submit" class="btn btn-danger">Déconnexion</button>
                </form>
              
              </li> 
              @else
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Connexion</a>
              </li>  
              @endif       
            </ul>
          </div>
        </div>
      </nav>

    <div class="container">   
            @yield('content')
    </div>
    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>