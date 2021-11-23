@extends('template.'.config('settings.template').'.content.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-12 col-md-8">
            <br>
            <br>
            <h1>Passwort vergessen?</h1>

        </div>
        <div class="col-md-6">
            <br>
            <br>
            <br>
            <div class="card">
                <div class="card-header">Passwort zurücksetzen</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Adresse:</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="info@firma.de" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-4 text-end">
                            <div class="col-md-7 offset-md-4">
                                <button type="submit" class="btn btn-ci">
                                    Passwort zurücksetzen
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <br>
            <br>
            <br>
            <a class="link ci-color" href="{{url('/dashboard/login')}}">Zurück zum Login</a>
            <br>
            Noch keinen Account? <a class="link ci-color" href="{{url('/dashboard/register')}}">Zur Registrierung</a>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
@endsection
