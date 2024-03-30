@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{asset('img/Logo.png')}}" class="img-fluid">Lethal Omen
        </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" id="kezdolap">Kezdőlap</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="rolunk">Rólunk</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="elerhetosegek">Elérhetőségek</span></a>
                </li>
                <li class="nav-item">
                <a href="{{url('login')}}" class="gomb" id="bejelentkezesgomb">Bejelentkezés</span></a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class="wrapper"></div>
@endsection
