@extends('layouts.app')

@section('content')

<div class="container mt-5 p-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="input-group mb-3">
                <input type="search" class="form-control" placeholder="Keresés..." aria-label="Keresés..." aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Keresés</button>                

            </div>

        </div>
    </div>
</div>

<br>





<br>
<div class="card-wrapper">
    @foreach ($adat as $kartya)
        @if ($loop->index % 3 == 0 && $loop->index != 0)
            <br> 
            </div>
            <div class="card-wrapper"> 
        @endif

        <div class="cards">

            <div class="card-box">
                <img src="{{ asset('storage/kartyak/'.$kartya->Kártyakép) }}" class="card-image">
            </div>

            <br>
            <div class="price-box">
                <p class="card-price">{{$kartya->Ár}} Lethal Coin <p class="kosar-ikon">🛒</p></p>
            </div>
                        
        </div>


    @endforeach
</div>



<div class="copyright container-fluid">
    <img src="{{asset('img/Keklogo-removed.png')}}" class="copyright-logo img-fluid">
    <p class="c-p">Copyright © [2024] Lethal Omen Cég. Minden jog fenntartva.</p>

    <p class="c-p">A jelenlegi kártyák a Lethal Omen Cég tulajdona, és szerzői jogvédelem alatt áll. Kártyákat venni, eladni és cserélni csak EZEN az oldalon lehet. A tartalom másolása és terjesztése szigorúan tilos!</p>
    
</div>





@endsection
