@extends('layouts.app')

@section('content')

<h1 class="text-center mt-10 anima szoveg-felirat">Elérhetőségek</h1>
<div class="hom">
<h4 class="text-center mt-10 anima szoveg-textek margo">

    <p class="uzemeltetoktext">Üzemeltetők:</p>
    <p class="uzem-alt-text">(Kattints a képekre a githubos profilok elérésért)</p>
    <div class="uzemeltetok">

        <div class="semenckidavid" onclick="semenckidavidgithub()">
            <img src="{{asset('img/profkepek/S_K_David.png')}}" class="img-fluid">
            <p class="szoveg-textek sdavid">Semencki Dávid</p>
        </div>

        <div class="farkasdavid" onclick="farkasdavidgithub()">
            <img src="{{asset('img/profkepek/F_David.png')}}" class="img-fluid">
            <p class="szoveg-textek fdavid">Farkas Dávid</p>
        </div>

        <div class="tiszatibor" onclick="tiszatiborgithub()">
            <img src="{{asset('img/profkepek/T_Tibor.png')}}" class="img-fluid">
            <p class="szoveg-textek ttibor">Tisza Tibor</p>
        </div>

    </div>

    <br>
    <br>

    <p>Székhely, levelezési cím:<br> 4700 Mátészalka, Kálmándi Imre utca 12.</p>
    <br>
    <p>Telefon: +36 01 123 4567 vagy +36 02 765 4321</p>
    <br>
    <p>E-mail: lethalomen@gmail.com</p>
    <br>
    <p>Adószám: 58421697-3-42</p>
    <br>
    <p>Közösségi adószám: HU58421697</p>
    <br>
    <p>Nyilvántartási szám: 73985462</p>
    <br>
    <p>Nyilvántartásba bejegyző hatóság neve:<br>Szabolcs Szatmár Bereg Megyei Kormányhivatal Nyíregyházi Járási Hivatala</p>
    <br>
    <p>Kamarai tagság:<br> Nyíregyháza-Szabolcs Kereskedelmi és Iparkamara</p>
    <br>
    <p>NAIH nyilvántartási szám:<br> NAIH-92134/2024.</p>
    <br>
    <p>Ügyfélfogadás:<br> Előzetes egyeztetés alapján!</p>
    <br>
    <p>Általános szerződési feltételek: www.gepeszeti.hu/aszf/</p>
    <br>
    <p>Honlap: www.gepeszeti.hu</p>
       
</h4>
<h2 class="text-center mt-10 anima szoveg-textek">Közösségi média</h2>
<h4 class="text-center mt-10 anima szoveg-textek"> Fejlesztés alatt :sad:</h4>

<a class="btn btn-outline-secondary center-button" href="{{ url('/') }}">
    <h3>Vissza a főoldalra</h3>
</a>
</div>

@endsection