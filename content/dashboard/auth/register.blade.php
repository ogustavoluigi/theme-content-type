@extends('template.'.config('settings.template').'.content.master')
@section('head')
@section('meta_title', 'Registrierung für Arbeitgeber | Jobs-Oberpfalz.de')
@section('meta_description', 'Registrieren Sie sich hier als Arbeitgeber, um Sie Ihre Stellen zu veröffentlichen und Ihr Arbeitgeberprofil zu verwalten.')

<link rel="stylesheet" href="https://adri-sorribas.github.io/passtrength/stylesheets/passtrength.css"/>
<script type="text/javascript" src="https://adri-sorribas.github.io/passtrength/js/jquery.passtrength.min.js"></script>
<!-- <script type="text/javascript" src="https://www.google.com/recaptcha/api.js"></script> -->
@stop
@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 ">
            <h1 class="mb-5 mt-5">Neues Arbeitgeberkonto anlegen</h1>
            @if(isset($invitedUser))
            <div class="alert alert-success shadow-lg" role="alert">
                <h4>Sie wurdern eingeladen!</h4>
                Wir haben für Sie einige Daten vorausgefüllt um Ihnen den Start zu erleichtern.
                <br>Bitte prüfen Sie alle Angaben und schliessen Sie die Registrierung ab.
                <br><br><button id="btn-delete-invite text-end text-muted" data-id="{{$invitedUser->id}}" style="padding: 0; outline: none; border: none;; background: transparent;">Einladung ablehnen</button>
            </div>
            @endif
            <br>
            <div class="card" style="background-color: #fdf7f37d">
                @if(isset($invitedUser))
                    @if ($invitedUser->cover_image)
                        <img src="{{ asset('uploads/cover/'.$invitedUser->cover_image )}}" class="card-img-top">
                    @else
                        <img src="https://www.jobs-oberpfalz.de/images/manual/default-arbeitgeber-cover.jpg" class="card-img-top">
                    @endif
                    @if ($invitedUser->image)
                    <img src="{{ $invitedUser->gravatar() }}" class="rounded img-fluid border shadow-lg" id="img-content-fluid" width="150" title="" style="margin-top:-50px; margin-left: 86px;">
                    @endif
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('dashboard.register') }}" id="demo-form">
                        @csrf
                        <br>
                        <fieldset>
                            <legend style="color: #f49c35; font-size: 1rem; font-weight: bold;">FIRMA</legend>
                            <div class="form-group row mb-3 input-group-lg">
                                <label for="name" class="col-md-4 offset-md-1 col-form-label text-md-right">Firmenname <span style="color: red">*</span></label>
                                <div class="col-md-6">
                                    <input id="name" type="text" value="{{isset($invitedUser)?$invitedUser->name:''}}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Musterfirma GmbH" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <fieldset>
                            <legend style="color: #f49c35; font-size: 1rem; font-weight: bold;">ANSPRECHPARTNER</legend>
                            <div class="form-group row mb-3">
                                <label for="kontaktperson" class="col-md-4 offset-md-1 col-form-label text-md-right">Kontaktperson</label>
                                <div class="col-md-6">
                                    <input id="kontaktperson" name="additional_fields[kontaktperson]" placeholder="Max Mustermann" type="text" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password">
                                    @error('kontaktperson')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="email" class="col-md-4 offset-md-1 col-form-label text-md-right">E-Mail Adresse <span style="color: red">*</span></label>
                                <div class="col-md-6">
                                    <input id="email" value="{{isset($invitedUser)?$invitedUser->email:''}}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="personalwesen@musterfirma.de" value="{{ old('email') }}" autocomplete="email" required>
                                    <input type="hidden" name="role_id" value="3" />
                                    <input type="hidden" name="description" value="" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="password" class="col-md-4 offset-md-1 col-form-label text-md-right">Neues Passwort <span style="color: red">*</span></label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>
                        <hr>
                        <fieldset>
                            <legend style="color: #f49c35; font-size: 1rem; font-weight: bold;">RECHNUNGSADRESSE</legend>
                            <div class="form-group row mb-3">
                                <label for="address" class="col-md-4 offset-md-1 col-form-label text-md-right">Adresse</label>
                                <div class="col-md-6">
                                    <input id="address" type="text" value="{{isset($invitedUser)?$invitedUser->address:''}}" placeholder="Musterstrasse 33" class="form-control @error('address') is-invalid @enderror" name="address">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="address_city" class="col-md-4 offset-md-1 col-form-label text-md-right">Stadt</label>
                                <div class="col-md-6">
                                    <input id="address_city" type="text" placeholder="Musterstadt" value="{{isset($invitedUser)?$invitedUser->address_city:''}}" class="form-control @error('address_city') is-invalid @enderror" name="address_city">
                                    @error('address_city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="address_postal_code" class="col-md-4  offset-md-1 col-form-label text-md-right">Postleitzahl</label>
                                <div class="col-md-6">
                                    <input id="address_postal_code" type="text" pattern="[0-9]{5}" placeholder="92714" title="Bitte Postleitzal mit 5 Stellen angeben" value="{{isset($invitedUser)?$invitedUser->address_postal_code:''}}" class="form-control @error('address_postal_code') is-invalid @enderror" name="address_postal_code">
                                    @error('address_postal_code')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <input type="hidden" id="address_country" name="address_country" value="DE">
                        </fieldset>
                        <fieldset>
                            <input type="hidden" id="tax_id_type" name="tax_id_type" value="eu_vat">
                            <legend style="color: #f49c35; font-size: 1rem; font-weight: bold;">UST-ID</legend>
                            <div class="form-group row mb-3">
                                <label for="tax_id_value" class="col-md-4 offset-md-1 col-form-label text-md-right">ID Value</label>
                                <div class="col-md-6">
                                    <input id="tax_id_value" type="text" value="{{isset($invitedUser)?$invitedUser->tax_id_value:''}}" placeholder="DE1233456789" pattern="(DE|de)?[0-9]{9}" class="form-control @error('tax_id_value') is-invalid @enderror" name="tax_id_value">
                                    @error('tax_id_value')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <br>
                        <div class="col col-md-10 offset-md-1">
                            <div class="form-group form-check mb-3">
                                <input type="checkbox" class="form-check-input" name="terms" value="1" required="required" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"> <span style="color: red">*</span> Ich habe die <a href="{{url('/agb')}}" target="_blank" style="color: #f49c35">AGB</a>, sowie die <a href="{{url('/datenschutz')}}" style="color: #f49c35" target="_blank"> Datenschutzerklärung</a> gelesen und akzeptiert.</label>
                            </div>
                            <div class="form-group row mb-4 mt-4">
                                    <button type="submit" class="btn btn-ci g-recaptcha" data-sitekey="6LcLebgcAAAAAInzMP8t4Nsft5DJZf3vqY3Nb3f2" data-callback="onSubmit" data-action="submit">
                                        Firmenprofil anlegen
                                    </button>
                            </div>
                            <span style="color: red" style="font-size: 11px; margin-top: 20px;">*</span> <i style="font-size: 11px; font-family: initial;">Pflichtfeld</i>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        $('#password').passtrength({
            minChars: 7,
            passwordToggle: true,
            tooltip: true,
            textWeak: "Schwaches Passwort",
            textMedium: "Passwort Mittel",
            textStrong: "Starkes Passwort",
            textVeryStrong: "Super! Sehr starkes Passwort",
            eyeImg : "https://adri-sorribas.github.io/passtrength/img/eye.svg"
        });
        $("#btn-delete-invite").click(function(){
            $.ajax({
                data: { '_token': '{{csrf_token()}}', 'id': $(this).attr('data-id'), },
                type: "POST",
                async: true,
                url: "{{route('users.deleteInvite')}}",
                success: function(data) {
                    localStorage.removeItem("invite");
                    location.reload();
                },
                error: function(data) { console.log('error!!') }
            });
        });
    </script>
    @if(App::environment('production'))
    <!-- <script>
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
    </script> -->
    @endif
    @if(isset($invitedUser))
    <script>
        localStorage.setItem("invite", "{{$invitedUser->invite}}");
    </script>
    @else
    <script>
        if(localStorage.getItem("invite") != null) window.location.replace("{{url('/dashboard/register')}}/"+localStorage.getItem("invite"));
    </script>
    @endif
@stop