@extends('layouts.app')

@section('content')


<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="wrapper-loginhez container-fluid">

            <div class="pozicionalas container-fluid">
        

                <div class="mb-3">
                    
                    <label for="email" class="form-label"><p class="p-white szerkeztes">E-mail cím</p></label>
                    <div class="input-group">
                    
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label"><p class="p-white szerkeztes">Jelszó</p></label>
                    <div class="input-group">
                
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    </div>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>



                <div class="mb-3 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            <p class="p-white">Emlékezz rám</p>
                        </label>
                    </div>
                    <a href="#" class="link-dark"><p class="p-white">Elfelejtett jelszó?</p></a>
                </div>
                
                




                <button type="submit" class="btn btn-primary login-regist-gomb">Bejelentkezés</button>

                <div class="mt-3">
                    <p class="p-white">Nincs még fiókod? <a href="{{ route('register') }}" class="regisztral-link">Regisztráció</a></p>
                </div>

            </div>
        
        </div>

    </form>
</div>

@endsection

