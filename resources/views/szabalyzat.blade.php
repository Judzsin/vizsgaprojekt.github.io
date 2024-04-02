@extends('layouts.app')

@section('content')

<h1 class="text-center mt-10 anima">Lethal Omen Játékszabályzat</h1>
<h4 class="text-center mt-10 anima">A Lethal Omen egy a Yu-Gi-Oh!, Magic: the Gathering-hez hasonló "Trading Card Game" varázskártyákkal és szörny kártyákkal. </h4>
<h4 class="text-center mt-10 anima">A kártyákat két nagy csoportba tudjuk sorolni, a szörnyek osztálya és a varázslapok osztálya.</h4>

<div class="text-center mt-10">
    <img src="{{asset('img/kartyak/Battle of Legends.png')}}" class="img-fluid kepmeretezes">
    <img src="{{asset('img/kartyak/Witch Hunter.png')}}" class="img-fluid kepmeretezes">
</div>

{{--<div class="text-center mt-10" id="cardContainer">
    <div class="interactive-card" id="card1">
        <img src="{{asset('img/kartyak/Battle of Legends.png')}}" class="img-fluid kepmeretezes">
    </div>
    <div class="interactive-card" id="card2">
        <img src="{{asset('img/kartyak/Witch Hunter.png')}}" class="img-fluid kepmeretezes">
    </div>
</div>--}}






<div class="wrapper"></div>

@endsection
