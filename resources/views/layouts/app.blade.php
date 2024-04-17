<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="icon" type="image/png" href="{{asset('img/Logo.png')}}">

    <title>Lethal Omen</title>
   

    <script src="{{ asset('js/omen.js')}}"></script>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/omen.css')}}">
    <style>
        body {
            background-image: url('{{ asset('img/hatterkep.gif') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
        
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/omen') }}">
            <img src="{{asset('img/Logo.png')}}" class="img-fluid">Lethal Omen
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
            <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('szabalyzat')}}" id="szabalyzat">Játékszabályzat</span></a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('elerhetosegek')}}" id="">Elérhetőségek</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('rolunk')}}" id="">Rólunk</span></a>
                    </li>
                    <li class="nav-item">
                    <a href="{{url('login')}}" class="gomb" id="bejelentkezesgomb">Bejelentkezés</span></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


                @yield('content')
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </div>
        
    
    </script>
    
</body>
</html>
