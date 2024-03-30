@extends('layouts.app')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">E-mail cím</label>
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
            <label for="password" class="form-label">Jelszó</label>
            <div class="input-group">
          
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            </div>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    Emlékezz rám
                </label>
            </div>
        </div>

        <div class="mb-3">
            <a href="#" class="link-dark">Elfelejtett jelszó?</a>
        </div>

        <button type="submit" class="btn btn-primary">Bejelentkezés</button>

        <div class="mt-3">
            <p>Nincs még fiókod? <a href="{{ route('register') }}" class="regisztral-link">Regisztráció</a></p>
        </div>
    </form>
</div>
