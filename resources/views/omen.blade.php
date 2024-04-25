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

<br>

   





@endsection
