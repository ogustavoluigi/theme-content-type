<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('template.'.config('settings.template').'.content.includes.meta')
    @include('template.'.config('settings.template').'.content.includes.css')
    @include('template.'.config('settings.template').'.content.includes.integrations')

    @yield('head')
</head>
<body>
    @auth

        <nav class="align-middle text-end" style="background: rgb(244,156,53); background: linear-gradient(90deg, rgba(244,156,53,1) 5%, rgba(219,131,29,1) 100%);">
            <div class="container" style="padding-top: 7px;">
                <div class="row">

                    <div class="col-6 col-md-4 text-start">

                        @if(Auth::user()->profile_status == 1)
                            <a href="{{url('/arbeitgeber/')}}/{{ \Auth::user()->slug }}"  class="d-none d-md-block" style="padding-bottom: 20px; margin-top: 5px;">
                                <svg style="width: 14px; fill: black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                    <path d="M570.53,242,512,190.75V48a16,16,0,0,0-16-16H400a16,16,0,0,0-16,16V78.75L298.53,4a16,16,0,0,0-21.06,0L5.47,242a16,16,0,0,0,21.07,24.09L64,233.27V464a48.05,48.05,0,0,0,48,48H464a48.05,48.05,0,0,0,48-48V233.27l37.46,32.79A16,16,0,0,0,570.53,242ZM480,464a16,16,0,0,1-16,16H112a16,16,0,0,1-16-16V205.27l192-168,192,168Zm0-301.25-64-56V64h64ZM208,218.67V325.34A26.75,26.75,0,0,0,234.66,352H341.3A26.76,26.76,0,0,0,368,325.34V218.67A26.75,26.75,0,0,0,341.3,192H234.66A26.74,26.74,0,0,0,208,218.67ZM240,224h96v96H240Z" />
                                </svg>
                                Mein Arbeitgeberprofil
                            </a>
                        @endif
                    </div>

                    <div class="col-6 col-md-4 text-center">
                        @if(Auth::user()->profile_status == 1)
                            @if(count(App\Models\User::with('nachrichten')->find(Auth::id())->nachrichten) > 0)
                            <a href="{{url('/dashboard/')}}"  class="d-none d-md-block fw-bold" style="font-size: 17px; margin-top: 8px;">
                                <span class="badge rounded-pill bg-light text-dark">{{count(App\Models\User::with('nachrichten')->find(Auth::id())->nachrichten)}}</span>
                                Inserierte Stellenangebote
                            </a>
                            @else
                            <a href="{{url('/dashboard/content')}}"  class="d-none d-md-block btn btn-light btn-sm" >
                                Neue Stellenanzeige veröffentlichen
                            </a>
                            @endif
                        @endif
                    </div>
                    <div class="col-12 col-md-4 text-end">
                        <div class="btn-group">
                            <a type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ \Auth::user()->gravatar() }}" width="32" height="32" class="rounded border" title="">
                                {{ \Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <button class="dropdown-item" type="button">
                                        <a class="dropdown-item" href="{{ url('/dashboard') }}">
                                            <svg style="width: 14px; fill: black; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                                <path d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zm-22.6 22.7c2.1 2.1 3.5 4.6 4.2 7.4H256V32.5c2.8.7 5.3 2.1 7.4 4.2l83.9 83.9zM336 480H48c-8.8 0-16-7.2-16-16V48c0-8.8 7.2-16 16-16h176v104c0 13.3 10.7 24 24 24h104v304c0 8.8-7.2 16-16 16zm-48-244v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm0 64v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm0 64v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12z" />
                                            </svg>
                                            Stellenanzeigen</a>
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" type="button">
                                        <a class="dropdown-item" href="{{ url('/dashboard/profile') }}">
                                            <svg style="width: 14px; fill: black; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path d="M192 107v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12zm116-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12zm-128 96h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12zm128 0h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12zm-128 96h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12zm128 0h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12zm140 205v20H0v-20c0-6.627 5.373-12 12-12h20V24C32 10.745 42.745 0 56 0h336c13.255 0 24 10.745 24 24v456h20c6.627 0 12 5.373 12 12zm-64-12V32H64v448h128v-85c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v85h128z" />
                                            </svg>
                                            Firmenprofil</a>
                                    </button>
                                </li>
                                <li>
                                    <button class="dropdown-item" type="button">
                                        <a class="dropdown-item" href="{{ url('/dashboard/account') }}">
                                            <svg style="width: 14px; fill: black; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                                <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                                <path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm128 421.6c-35.9 26.5-80.1 42.4-128 42.4s-92.1-15.9-128-42.4V416c0-35.3 28.7-64 64-64 11.1 0 27.5 11.4 64 11.4 36.6 0 52.8-11.4 64-11.4 35.3 0 64 28.7 64 64v13.6zm30.6-27.5c-6.8-46.4-46.3-82.1-94.6-82.1-20.5 0-30.4 11.4-64 11.4S204.6 320 184 320c-48.3 0-87.8 35.7-94.6 82.1C53.9 363.6 32 312.4 32 256c0-119.1 96.9-216 216-216s216 96.9 216 216c0 56.4-21.9 107.6-57.4 146.1zM248 120c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 144c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25.1 56-56 56z" />
                                            </svg>
                                            Benutzerkonto</a>
                                    </button>
                                </li>
                                <hr>
                                <li>
                                    <button class="dropdown-item" type="button">
                                        <a class="dropdown-item" href="{{ route('logout') }}">
                                            <svg style="width: 14px; fill: black; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                                <path d="M48 64h132c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12H48c-8.8 0-16 7.2-16 16v288c0 8.8 7.2 16 16 16h132c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48zm279 19.5l-7.1 7.1c-4.7 4.7-4.7 12.3 0 17l132 131.4H172c-6.6 0-12 5.4-12 12v10c0 6.6 5.4 12 12 12h279.9L320 404.4c-4.7 4.7-4.7 12.3 0 17l7.1 7.1c4.7 4.7 12.3 4.7 17 0l164.5-164c4.7-4.7 4.7-12.3 0-17L344 83.5c-4.7-4.7-12.3-4.7-17 0z" />
                                            </svg>
                                            Abmelden</a>
                                    </button>
                                </li>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f49c35;">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="https://www.jobs-oberpfalz.de/images/manual/logo.png" height="100" class="d-inline-block align-top" alt="Jobs Oberpfalz Logo" style="margin-top:-47px;">
                </a>
                <a href="{{url('/merkliste')}}" class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <svg style="fill:#ce3232; width:32px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/arbeitgeber')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" style="height:25px; fill: black;" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                    <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                                </svg>
                                Arbeitgeberübersicht
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active " aria-current="page" href="{{url('/branchen')}}">
                                <svg style="height:25px; fill: black;" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M313.6 352c-28.72 0-42.45 16-89.6 16s-60.88-16-89.56-16A134.4 134.4 0 0 0 0 486.4 25.6 25.6 0 0 0 25.6 512h396.8a25.6 25.6 0 0 0 25.6-25.6A134.4 134.4 0 0 0 313.6 352zM32.2 480a102.54 102.54 0 0 1 102.24-96c19.82 0 38.92 16 89.56 16 51 0 69.6-16 89.6-16a102.53 102.53 0 0 1 102.2 96zM88 160h12.66A124.32 124.32 0 0 0 96 192a128 128 0 0 0 256 0 124.32 124.32 0 0 0-4.66-32H360a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8h-8c0-51.52-35-94.46-82.33-107.52A31.89 31.89 0 0 0 240 0h-32a31.89 31.89 0 0 0-29.67 20.48C131 33.54 96 76.48 96 128h-8a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8zM272 54.91A79.94 79.94 0 0 1 320 128h-48zM208 32h32v96h-32zm-80 96a79.94 79.94 0 0 1 48-73.09V128zm6 32h180a92 92 0 0 1 6 32 96 96 0 0 1-192 0 92 92 0 0 1 6-32z"/></svg>

                                Jobs nach Branchen
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{url('/regionen')}}">

                                <svg style="height:25px; fill: black;" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M560 160c-2 0-4 .4-6 1.2L384 224l-10.3-3.6C397 185.5 416 149.2 416 123 416 55 358.7 0 288 0S160 55.1 160 123c0 11.8 4 25.8 10.4 40.6L20.1 216C8 220.8 0 232.6 0 245.7V496c0 9.2 7.5 16 16 16 2 0 4-.4 6-1.2L192 448l172 60.7c13 4.3 27 4.4 40 .2L555.9 456c12.2-4.9 20.1-16.6 20.1-29.7V176c0-9.2-7.5-16-16-16zM176 419.8L31.9 473l-1.3-226.9L176 195.6zM288 32c52.9 0 96 40.8 96 91 0 27-38.1 88.9-96 156.8-57.9-67.9-96-129.8-96-156.8 0-50.2 43.1-91 96-91zm80 444.2l-160-56.5V228.8c24.4 35.3 52.1 68 67.7 85.7 3.2 3.7 7.8 5.5 12.3 5.5s9-1.8 12.3-5.5c12.8-14.5 33.7-39.1 54.3-66.9l13.4 4.7zm32 .2V252.2L544.1 199l1.3 226.9zM312 128c0-13.3-10.8-24-24-24s-24 10.7-24 24c0 13.2 10.8 24 24 24s24-10.7 24-24z"/></svg>
                                Jobs nach Regionen
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    @else
    <nav class="align-middle text-end" style="background: rgb(244,156,53); background: linear-gradient(90deg, rgba(244,156,53,1) 35%, rgba(219,131,29,1) 100%);">
        <div class="container" style="padding-top: 7px;">
            <div class="row">
                <div class="col-6 col-md-4 offset-md-3">
                    <a href="{{url('/fuer-arbeitgeber')}}" style="color: white">
                        Arbeitgeber Info
                    </a>
                </div>
                <div class="col-6 col-md-2 text-end">
                    <a href="{{url('dashboard/login')}}" style="color: white">
                        <svg style="fill: white; width: 16px; margin-right:6px; margin-bottom: 3px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M184 83.5l164.5 164c4.7 4.7 4.7 12.3 0 17L184 428.5c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17l132-131.4H12c-6.6 0-12-5.4-12-12v-10c0-6.6 5.4-12 12-12h279.9L160 107.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.6-4.7 12.2-4.7 16.9 0zM512 400V112c0-26.5-21.5-48-48-48H332c-6.6 0-12 5.4-12 12v8c0 6.6 5.4 12 12 12h132c8.8 0 16 7.2 16 16v288c0 8.8-7.2 16-16 16H332c-6.6 0-12 5.4-12 12v8c0 6.6 5.4 12 12 12h132c26.5 0 48-21.5 48-48z" />
                        </svg>
                        Arbeitgeber Login
                    </a>
                </div>
                <div class="col-12 col-md-3 text-end text-lg-center d-none d-lg-block">
                    <a id="btn-register" class="btn btn-sm btn-success position-relative mb-2" href="{{url('dashboard/register')}}">Arbeitgeberkonto registrieren</a>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f49c35;">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="https://www.jobs-oberpfalz.de/images/manual/logo.png" height="100" class="d-inline-block align-top" alt="Jobs Oberpfalz Logo" style="margin-top:-50px;">
            </a>
            <a href="{{url('/merkliste')}}" class="navbar-toggler d-none" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg style="fill:#ce3232; width:32px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/arbeitgeber')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" style="height:25px; fill: black;" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                            </svg>
                            Arbeitgeberübersicht
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="{{url('/branchen')}}">
                            <svg style="height:25px; fill: black;" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M313.6 352c-28.72 0-42.45 16-89.6 16s-60.88-16-89.56-16A134.4 134.4 0 0 0 0 486.4 25.6 25.6 0 0 0 25.6 512h396.8a25.6 25.6 0 0 0 25.6-25.6A134.4 134.4 0 0 0 313.6 352zM32.2 480a102.54 102.54 0 0 1 102.24-96c19.82 0 38.92 16 89.56 16 51 0 69.6-16 89.6-16a102.53 102.53 0 0 1 102.2 96zM88 160h12.66A124.32 124.32 0 0 0 96 192a128 128 0 0 0 256 0 124.32 124.32 0 0 0-4.66-32H360a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8h-8c0-51.52-35-94.46-82.33-107.52A31.89 31.89 0 0 0 240 0h-32a31.89 31.89 0 0 0-29.67 20.48C131 33.54 96 76.48 96 128h-8a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8zM272 54.91A79.94 79.94 0 0 1 320 128h-48zM208 32h32v96h-32zm-80 96a79.94 79.94 0 0 1 48-73.09V128zm6 32h180a92 92 0 0 1 6 32 96 96 0 0 1-192 0 92 92 0 0 1 6-32z"/></svg>
                            Jobs nach Branchen
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/regionen')}}">
                            <svg style="height:25px; fill: black;" width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M560 160c-2 0-4 .4-6 1.2L384 224l-10.3-3.6C397 185.5 416 149.2 416 123 416 55 358.7 0 288 0S160 55.1 160 123c0 11.8 4 25.8 10.4 40.6L20.1 216C8 220.8 0 232.6 0 245.7V496c0 9.2 7.5 16 16 16 2 0 4-.4 6-1.2L192 448l172 60.7c13 4.3 27 4.4 40 .2L555.9 456c12.2-4.9 20.1-16.6 20.1-29.7V176c0-9.2-7.5-16-16-16zM176 419.8L31.9 473l-1.3-226.9L176 195.6zM288 32c52.9 0 96 40.8 96 91 0 27-38.1 88.9-96 156.8-57.9-67.9-96-129.8-96-156.8 0-50.2 43.1-91 96-91zm80 444.2l-160-56.5V228.8c24.4 35.3 52.1 68 67.7 85.7 3.2 3.7 7.8 5.5 12.3 5.5s9-1.8 12.3-5.5c12.8-14.5 33.7-39.1 54.3-66.9l13.4 4.7zm32 .2V252.2L544.1 199l1.3 226.9zM312 128c0-13.3-10.8-24-24-24s-24 10.7-24 24c0 13.2 10.8 24 24 24s24-10.7 24-24z"/></svg>

                            Jobs nach Regionen
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endauth
    <div class="container">
        @yield('content')
    </div>
    @include('template.'.config('settings.template').'.content.includes.footer')

    @include('template.'.config('settings.template').'.content.includes.scripts')

    @yield('scripts')
    @yield('end_scripts')
    @if(!Auth::check())
    <script>
        if (localStorage.getItem("invite") != null) {
            $("#btn-register").html(`
                Arbeitgeberkonto aktivieren
                <svg style="fill: #e42828; width: 18px; margin-top:-14px; margin-left:10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z"/></svg>
            `);
        }
    </script>
    @else
    <script>
        localStorage.removeItem("invite");
    </script>
    @endif
</body>
</html>