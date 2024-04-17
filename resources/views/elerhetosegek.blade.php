@extends('layouts.app')

@section('content')

<h1 class="text-center mt-10 anima szoveg-felirat">Elérhetőségek</h1>
<h4 class="text-center mt-10 anima">
   <ul style="list-style-type: none;">
    <li>Üzemeltető: Farkas Dávid, Semencki Dávid Károly, Tisza Tibor</li>
    <li>Székhely, levelezési cím: 4700 Mátészalka, Kálmándi Imre utca 12.</li>
    <li>Telefon: +36 01 123 4567 vagy +36 02 765 4321</li>
    <li>E-mail: lethalomen@gmail.com</li>
    <li>Adószám: 58421697-3-42</li>
    <li>Közösségi adószám: HU58421697</li>
    <li>Nyilvántartási szám: 73985462</li>
    <li>Nyilvántartásba bejegyző hatóság neve: Szabolcs Szatmár Bereg Megyei Kormányhivatal Nyíregyházi Járási Hivatala</li>
    <li>Kamarai tagság: Nyíregyháza-Szabolcs Kereskedelmi és Iparkamara</li>
    <li>NAIH nyilvántartási szám: NAIH-92134/2024.</li>
    <li>Ügyfélfogadás: Előzetes egyeztetés alapján!</li>
    <li>Általános szerződési feltételek: www.gepeszeti.hu/aszf/</li>
    <li>Honlap: www.gepeszeti.hu</li>
    <li>Tárhelyszolgáltatónk: nethely.com</li>
</ul>   
</h4>
<h2 class="text-center mt-10 anima">Közösségi média</h2>
<h4 class="text-center mt-10 anima"> Fejlesztés alatt :sad:</h4>

<a class="btn btn-outline-secondary center-button" href="{{ url('/omen') }}">
    <h3>Vissza a főoldalra</h3>
</a>


@endsection