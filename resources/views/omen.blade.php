@extends('layouts.app')

@section('content')

<div class="container mt-5 p-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="input-group mb-3">
                <input type="search" class="form-control" placeholder="Fejlesztés alatt 😢" aria-label="Keresés..." aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Keresés</button>                

            </div>

        </div>
    </div>
</div>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-6 mb-4 mb-md-0 coming-card">
            <img src="{{asset('img/news/news1.png')}}" class="img-fluid newest1" >
        </div>
        <div class="col-md-6 coming-card">
            <img src="{{asset('img/news/news2.png')}}" class="img-fluid newest2" >
        </div>
    </div>
</div>






<br>
<div class="row" id="kartyak">
    <h1 class="text-center text-white mb-4 ">Kártyák</h1>
    @foreach ($adat as $kartya)
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
            <img src="{{ asset('storage/kartyak/'.$kartya->Kártyakép) }}" class="card-image " alt="Kártyakép">
            <div class="card-footer">
                <p class="card-price" title="Fejlesztés alatt 😢">{{$kartya->Ár}} Lethal Coin <span class="kosar-ikon">🛒</span></p>
            </div>
        </div>
    </div>
    @endforeach
</div>













@endsection
