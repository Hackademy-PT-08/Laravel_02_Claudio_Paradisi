<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/my-style.css">

</head>


<body class="body-bg-color">
    
    <nav class="navbar navbar-expand-lg bg-primary fixed-top" data-bs-theme="dark">
        <div class="container-fluid">
                <a class="navbar-brand" href="/">Laravel02</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link active" href="{{ route('homepage') }}">Home
                        <span class="visually-hidden">(current)</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('servizi') }}">Servizi</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Chi siamo</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">In dettaglio</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://github.com/Hackademy-PT-08/primo_progetto_caterina_perrucci" target="blank">repository di Caterina</a>
                    </div>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <header id="title-bg-img">
       <div class="content"> 
            <div class="container-fluid">
                <div class="row text-white text-center">
                    <div  class="col-12 align-items-center justify-content-center">
                        <h1 class=" mt-5 ">Laravel <span class="text-dark">02</span></h1>
                        <h2 class=" mt-4">La pagina dei servizi del secondo progetto</h2>
                        
                    </div>
                </div>
            </div>
            <div class="blur"></div>
        </div>
    </header>

    <main>
        <div class="container-fluid mt-5">
            <div class="row">
            @foreach($servizi as $servizio)
                <div class="col-12 col-lg-3">
                   
                     <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                        <div class="card-header">{{$servizio['type']}}</div>
                        <div class="card-body">
                            <h4 class="card-title text-center">{{$servizio['argument']}}</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <span class="badge rounded-pill bg-dark">Views: {{$servizio['views']}}</span>
                        </div>
                            <a type="button" class="btn btn-primary btn-lg" href="{{route( 'dettaglio-servizio', ['id'=>$servizio['id']])}}">scopri di più</a>
                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
    </main>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>