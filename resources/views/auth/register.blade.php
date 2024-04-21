@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="wrapper-registhez container-fluid">

            <div class="pozicionalas2 container-fluid">


                <div class="mb-3">
                    <label for="name" class="form-label"><p class="p-white szerkeztes">Felhasználónév</p></label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label"><p class="p-white szerkeztes">E-mail cím</p></label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label"><p class="p-white szerkeztes">Jelszó</p></label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password-confirm" class="form-label"><p class="p-white szerkeztes">Jelszó megerősítés</p></label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <button type="submit" class="btn btn-primary login-regist-gomb">Regisztráció</button>

                <div class="mt-3">
                    <p class="p-white">Már van fiókod? <a href="{{ route('login') }}" class="bejelentkezes-link">Bejelentkezés</a></p>
                </div>
            
            </div>

        </div>

    </form>

</div>

@endsection

