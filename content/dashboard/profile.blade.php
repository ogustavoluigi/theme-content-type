@extends('template.'.config('settings.template').'.content.master')
@section('content')
    <style>
        label{
            margin-bottom: 8px;
        }
    </style>
    <div class="row">
            <!--
            @if (Auth::user()->profile_status)
                <div class="col-xs-11 col-xs-offset-1">
                    <br>
                    <br>
                    <a href="{{url('/dashboard')}}">
                        <svg style="width: 14px; fill: #0f5132;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M231.536 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L60.113 273H436c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H60.113L238.607 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L3.515 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"/></svg>
                        Zurück zur Übersicht</a>
                </div>
            @endif -->
            <div class="col-12 col-md-10 offset-md-1">
                @if (session('verified'))
                    <div class="alert alert-success mt-4" role="alert">
                        <div class="container text-center">
                         <span>
                        <svg style="width: 14px; fill: #0f5132;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z"/></svg>
                    </span>
                            E-Mail Adresse erfolgreich bestätigt!
                        </div>
                    </div>
                @endif
                <br>
                <br>
                <h1>
                    <svg style="width: 25px; fill: black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M192 107v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12zm116-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12zm-128 96h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12zm128 0h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12zm-128 96h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12zm128 0h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12zm140 205v20H0v-20c0-6.627 5.373-12 12-12h20V24C32 10.745 42.745 0 56 0h336c13.255 0 24 10.745 24 24v456h20c6.627 0 12 5.373 12 12zm-64-12V32H64v448h128v-85c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v85h128z"/></svg>
                    Arbeitgeber Profil</h1>
                <br>
                <br>
                <div class="card shadow-lg" style="background-color: rgba(253,247,243,0.49)">
                    <form action="{{route('dashboard.profile')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="imageCoverEdit" style="cursor: pointer" title="Anklicken um ein neues Hintergrund auszuwählen und hochzuladen. Achtung: Nach dem Upload erst auf speichern drücken.">
                                @if ($user->cover_image)
                                    <img src="{{ asset('uploads/cover/'.$user->cover_image )}}" class="img-fluid card-img-top">
                                @else
                                    <img src="https://www.jobs-oberpfalz.de/images/manual/default-arbeitgeber-cover.jpg" class="img-fluid card-img-top">
                                @endif
                                <input type="file" id="imageCoverEdit" name="cover_image" class="form-control d-none">
                            </label>
                        </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-4 text-center mb-4" style="position: relative; bottom: 60px; font-family: initial; font-size: 11px;">
                                    <a style="cursor:pointer;" onclick="clickImgContent();">
                                        <img src="{{ \Auth::user()->gravatar() }}" class="rounded mx-auto d-block img-fluid border shadow-lg" id="img-content-fluid" title="">
                                    </a>
                                    @if ($user->image)
                                        <a style="margin-left: 22px;padding-top:10px;display:block;" href="{{ route('dashboard.profile.removeImage') }}">
                                            <svg style="width: 12px; fill: red;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z"/></svg>
                                            Bild Löschen</a>
                                    @else
                                        <a  onclick="clickImgContent();">
                                            <svg style="width: 12px; fill: black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M369.9 97.98L286.02 14.1c-9-9-21.2-14.1-33.89-14.1H47.99C21.5.1 0 21.6 0 48.09v415.92C0 490.5 21.5 512 47.99 512h288.02c26.49 0 47.99-21.5 47.99-47.99V131.97c0-12.69-5.1-24.99-14.1-33.99zM256.03 32.59c2.8.7 5.3 2.1 7.4 4.2l83.88 83.88c2.1 2.1 3.5 4.6 4.2 7.4h-95.48V32.59zm95.98 431.42c0 8.8-7.2 16-16 16H47.99c-8.8 0-16-7.2-16-16V48.09c0-8.8 7.2-16.09 16-16.09h176.04v104.07c0 13.3 10.7 23.93 24 23.93h103.98v304.01zm-180.1-247.32l-68.12 71.75c-7.81 8.2-9.94 20.31-5.44 30.83 4.41 10.31 14 16.72 25 16.72H176V424c0 4.42 3.58 8 8 8h16c4.42 0 8-3.58 8-8v-88.02h52.66c11 0 20.59-6.41 25-16.72 4.5-10.52 2.38-22.62-5.44-30.81l-68.12-71.78c-10.69-11.19-29.51-11.2-40.19.02zm-38.75 87.29l58.84-62 58.84 62H133.16z"/></svg>
                                            <span style="">Profilbild hochladen</span>
                                        </a>
                                    @endif
                                </div>
                                <div class="col-12 col-md-7">
                                    <div class="form-group" style="margin-bottom: 30px;">
                                        <label for="exampleFormControlInputName">Firmenname</label>
                                        <input type="text" class="form-control" id="exampleFormControlInputName" value="{{ $user->name }}" placeholder="Muster Firma GmbH" name='name' required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <br>
                                    <div class="form-group" style="margin-bottom: 30px;">
                                        <label for="exampleFormControlInputDesc">Beschreibung der Firma. Text erscheint auf Firmenprofil </label>
                                        <textarea id="exampleFormControlInputDesc" class="form-control" rows="8" name="description" placeholder="Dies ist eine Beschreibung über unser Unternehmen. Text erscheint auf Firmenprofil...">{{ $user->description }}</textarea>
                                    </div>
                                <br>
                                <br>
                                <br>
                                    <h5>Social Links</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-bottom: 30px;">
                                        <label for="exampleFormControlInputWebsite">
                                            <svg style="width: 14px; fill: black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm193.2 152h-82.5c-9-44.4-24.1-82.2-43.2-109.1 55 18.2 100.2 57.9 125.7 109.1zM336 256c0 22.9-1.6 44.2-4.3 64H164.3c-2.7-19.8-4.3-41.1-4.3-64s1.6-44.2 4.3-64h167.4c2.7 19.8 4.3 41.1 4.3 64zM248 40c26.9 0 61.4 44.1 78.1 120H169.9C186.6 84.1 221.1 40 248 40zm-67.5 10.9c-19 26.8-34.2 64.6-43.2 109.1H54.8c25.5-51.2 70.7-90.9 125.7-109.1zM32 256c0-22.3 3.4-43.8 9.7-64h90.5c-2.6 20.5-4.2 41.8-4.2 64s1.5 43.5 4.2 64H41.7c-6.3-20.2-9.7-41.7-9.7-64zm22.8 96h82.5c9 44.4 24.1 82.2 43.2 109.1-55-18.2-100.2-57.9-125.7-109.1zM248 472c-26.9 0-61.4-44.1-78.1-120h156.2c-16.7 75.9-51.2 120-78.1 120zm67.5-10.9c19-26.8 34.2-64.6 43.2-109.1h82.5c-25.5 51.2-70.7 90.9-125.7 109.1zM363.8 320c2.6-20.5 4.2-41.8 4.2-64s-1.5-43.5-4.2-64h90.5c6.3 20.2 9.7 41.7 9.7 64s-3.4 43.8-9.7 64h-90.5z"/></svg>
                                            Website</label>
                                        <input type="url" class="form-control" id="exampleFormControlInputWebsite" value="{{ isset($user->social_networks['site']) ? $user->social_networks['site'] : '' }}" placeholder="https://www.beispiel.de" name='social_networks[site]'>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-bottom: 30px;">
                                        <label for="exampleFormControlInputFacebook"> <i class="fab fa-facebook"></i> Facebook</label>
                                        <input type="url" class="form-control" id="exampleFormControlInputFacebook" value="{{ isset($user->social_networks['facebook']) ? $user->social_networks['facebook'] : '' }}" placeholder="https://www.facebook.com/username" name='social_networks[facebook]'>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="margin-bottom: 30px;">
                                        <label for="exampleFormControlInputTwitter"> <i class="fab fa-twitter"></i> Twitter</label>
                                        <input type="url" class="form-control" id="exampleFormControlInputTwitter" value="{{ isset($user->social_networks['twitter']) ? $user->social_networks['twitter'] : '' }}" placeholder="https//www.twitter.com/username" name='social_networks[twitter]'>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" style="display: none;">
                                <label for="imageEdit">Image Profile</label>
                                <input type="file" id="imageEdit" accept='image/*' name="image" class="form-control">
                            </div>
                            @if (Auth::user()->profile_status)
                                <hr>
                                <br>
                                <h4>Vorlagen für Stellenanzeigen</h4>
                                <br>
                                <div class="form-group" style="margin-bottom: 40px;">
                                    <label for="exampleFormControlInputDesc">Direktkontakt Personalabteilung </label>
                                    <textarea id="contact" class="form-control" name="additional_fields[contact]" rows="5" placeholder="Herr Musterpersonalrat&#10;Am Werksgelände 2 &#10;Musterfirma&#10;info@musterfirma.de&#10;Tel: 09654 12345">{!! isset($user->additional_fields['contact']) ? $user->additional_fields['contact'] : '' !!}</textarea>
                                </div>
                            @endif
                            <div class="row">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-ci float-right mb-5" onclick="gtag('event', 'aaa', {
                                'event_category' : 'bbb',
                                'event_label' : 'ccc'
                            });"style="margin-top:10px;">
                                        <svg style="width: 14px; fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M433.941 129.941l-83.882-83.882A48 48 0 0 0 316.118 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V163.882a48 48 0 0 0-14.059-33.941zM288 64v96H96V64h192zm128 368c0 8.822-7.178 16-16 16H48c-8.822 0-16-7.178-16-16V80c0-8.822 7.178-16 16-16h16v104c0 13.255 10.745 24 24 24h208c13.255 0 24-10.745 24-24V64.491a15.888 15.888 0 0 1 7.432 4.195l83.882 83.882A15.895 15.895 0 0 1 416 163.882V432zM224 232c-48.523 0-88 39.477-88 88s39.477 88 88 88 88-39.477 88-88-39.477-88-88-88zm0 144c-30.879 0-56-25.121-56-56s25.121-56 56-56 56 25.121 56 56-25.121 56-56 56z"/></svg>
                                        @if (Auth::user()->profile_status)
                                            Speichern
                                        @else
                                            Speichern und weiter
                                        @endif
                                    </button>
                                </div>
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
</div>
<script>
    function clickImgContent()
    {
        document.getElementById('imageEdit').click();
    }
    document.getElementById('imageEdit').addEventListener('change', readURL, true);
    function readURL(){
        var file = document.getElementById("imageEdit").files[0];
        var reader = new FileReader();
        reader.onloadend = function(){
            document.getElementById('img-content-fluid').setAttribute("src", reader.result);
            //document.getElementById('clock').style.backgroundImage = "url(" + reader.result + ")";
        }
        if(file){
            reader.readAsDataURL(file);
        }else{
        }
    }
</script>
@stop
