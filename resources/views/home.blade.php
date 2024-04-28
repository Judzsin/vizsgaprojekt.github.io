@extends('layouts.app')

@section('content')


<div class="profil">

<h1><img src="{{asset('img/user.png')}}" width="30px" height="auto"  >  {{Auth::user()->name}}</h1>
<div class="adatok">
<p><img src="{{asset('img/email.png')}}" width="25px" height="auto"  >   {{Auth::user()->email}}</p>
<p><img src="{{asset('img/coin.png')}}" width="23px" height="auto"  >  {{Auth::user()->coin}}</p>
</div>
</div>
@endsection
