@extends('layouts.app')

@section('content')

<h1 class="text-center mt-10 anima szoveg-felirat">Lethal Omen Játékszabályzat</h1>
<h4 class="text-center mt-10 anima">A Lethal Omen egy a Yu-Gi-Oh!, Magic: the Gathering-hez hasonló "Trading Card Game" varázskártyákkal és szörny kártyákkal. </h4>
<h4 class="text-center mt-10 anima">A kártyákat két nagy csoportba tudjuk sorolni, a szörnyek osztálya és a varázslapok osztálya.</h4>
<p class="text-center mt-10 anima kattints">(Kattints a fekete kártyákra)</p>

<div class="text-center mt-10" id="cardContainer">
    <img src="{{asset('img/kartyak/Battle of Legends.png')}}" class="img-fluid kepmeretezes card-img">
    <img src="{{asset('img/kartyak/Witch Hunter.png')}}" class="img-fluid kepmeretezes card-img">
</div>

<h4 class="text-center mt-10 anima margo">A varázslapoknak csak képességeik vannak amik megvannak határozva, hogy meddig érvényesek vagy, hogy mikor lehet őket aktiválni. A szörnyeknek ellenben már vannak támadó (ATK) illetve életerő (HP) pontjaik. Vannak specifikusabb lények pl: Démonok, Istenek vagy Sárkányok amiknek megvannak határozva az idézési feltételeik pl: egy másik szörny áldozatával vagy varázskártya használatával.</h4>

<div class="text-center mt-10" id="cardContainer">
    <img src="{{asset('img/kartyak/Thor.png')}}" class="img-fluid kepmeretezes card-img">
    <img src="{{asset('img/kartyak/SaraZal.png')}}" class="img-fluid kepmeretezes card-img">
    <img src="{{asset('img/kartyak/Lord of the Dimensions.png')}}" class="img-fluid kepmeretezes card-img">
</div>

<br>
<br>
<h1 class="text-center mt-10 anima">Rulings (Vagyis a játék menete)</h1>
<br>
<br>
<h4 class="anima margo">
    <ul>
        <li>Minden játékos paklija szigorúan 50-60 lapos lehet. Minden játékosnak 5000 életpontja van.</li>
        <br>
        <li>A játékosok eldöntik, hogy ki kezdjen. Aki kezd az felhúzza az 5 lapot és utána a többi játékos is követi.</li>
        <br>
        <li>Amelyik szörnynek nincs meghatározva az idézési feltétele azt megidézheti átlagosan, aminek megvan határozva, hogy mi kell, hogy a pályára léphessen azt specifikus idézésnek nevezzük.</li>
        <br>
        <li>Az első körben senki nem támadhat, ha 4-en vagy 3-an játsszák a játékot akkor csak akkor lehet támadni mikor mindenkinek megvolt az első kőre.</li>
        <br>
        <li>Vagyis az kezdheti meg a támadást aki kezdte a játék legelső körét.Hogyha egy játékos támadásba kezd akkor meg kell határozza a szörnyet ami ellen küldi a sajátját.</li>
        <br>
        <li>Az erősebb szörny leüti a gyengébb szörnyet ami átkerül a "bukott szörnyek" tartományba. Fontos, hogy a játékos közvetlenül az ellenfele életpontjait nem támadhatja csak akkor ha szörny képessége lehetővé teszi,
        és ha egy erősebb szörny harcol egy gyengébbel és a gyengébb szörny képesség által ugyan akkora vagy nagyobb ATK-ra tesz szert akkor az erősebb szörny ATK-jából kivonjuk a gyengébb ATK-ját és a különbséget levonjuk a jelenlegi legerősebb szörny
        (boostolt szörny - szörny aminek megemeljük az ATK-ját) ATK-ból.</li>
        <br>
        <li>Fontos megjegyezni, hogy annyi szörnyet tudsz megidézni 1 kör alatt amennyi akarsz, vagyis ha nincs feltétele a szörnynek, hogy a pályára kerüljön akkor simán letehetsz belőle 6-ot
        ugyanis ez a max amit megidézhetsz (frontszám - a szörnyek száma a pályádon).</li>
        <br>
        <li>Ha esetleg egy új szörnynek szeretnél helyet csinálni a front vonaladon akkor simán átteheted a saját szörnyeidet a bukott tartományba de onnan már csak képességekkel
        (szörny/varázs) tudsz visszahozni szörnyeket.</li>
        <br>
        <li>Egy kör nincs felosztva fázisokra, akkor támadhatsz, aktiválhatsz képességeket amikor akarsz viszont az ellenfeled körében varázslapokat, szörny képességeket nem aktiválhatsz kivéve ha a szörny vagy varázskártya ezt engedi.</li>
        <br>
        <li>Más kártyajátékokkal ellentétben vagy hasonlóan (mihez viszonyítva persze) itt minden kártya a pakli tartományban van, nincs extra deck vagy második pakli.</li>
    </ul>
</h4>




<a class="btn btn-outline-secondary center-button" href="{{ url('/omen') }}">
    <h3>Vissza a főoldalra</h3>
</a>





@endsection
