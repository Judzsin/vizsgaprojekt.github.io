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

@foreach ($kartyak as $kartya)
    @if ($kartya->Kártyakép == 'Battles of Legends.png')
        <div class="kartya">
            <h3>{{ $kartya->Kártyanév }}</h3>
            <img src="{{ asset($kartya->Kártyakép) }}" alt="{{ $kartya->Kártyanév }}">
            <p>Ár: {{ $kartya->Ár }} Ft</p>
        </div>
        @break
    @endif
@endforeach





@endsection
