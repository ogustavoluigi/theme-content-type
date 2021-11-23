@extends('template.'.config('settings.template').'.content.master')
@section('head')
@section('meta_title', 'Login für Arbeitgeber | Jobs-Oberpfalz.de')
@section('meta_description', 'Melden Sie sich mit Ihren Login an, damit Sie Ihre Stellen und Arbeitgeberprofil verwalten können.')
@stop
@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 ">
            <br>
            <br>
            <br>
            <div class="card">
                <h1 class="card-header fs-3">Arbeitgeber {{ __('Login') }}</h1>
                <br>
                <br>
                <br>
                <div class="card-body" style="background-color:#fdf7f37d;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <input name="platform" id="platform" type="hidden" value="dashboard">
                        <div class="row">
                            <div class="col col-md-10 offset-md-1">
                                <div class="form-group row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Adresse</label>
                                    <div class="col-md-8">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Passwort</label>
                                    <div class="col-md-8">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                Login merken
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-0 ">
                                    <div class="col-6">
                                        <a href="{{ route('dashboard.password.request') }}" class="ci-color">
                                            Passwort vergessen?
                                        </a>
                                    </div>
                                    <div class="col-6 text-end" >
                                        <button type="submit" class="btn btn-ci">
                                            <i class="fal fa-sign-in"></i>    {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@stop
