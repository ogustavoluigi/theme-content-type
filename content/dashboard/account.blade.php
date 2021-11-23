@extends('template.'.config('settings.template').'.content.master')
@section('content')

    <div class="row">

        <div class="col-12 col-md-10 offset-md-1">
            <br>
            <br>
            <h1>
                <svg style="width: 40px; fill: black; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm128 421.6c-35.9 26.5-80.1 42.4-128 42.4s-92.1-15.9-128-42.4V416c0-35.3 28.7-64 64-64 11.1 0 27.5 11.4 64 11.4 36.6 0 52.8-11.4 64-11.4 35.3 0 64 28.7 64 64v13.6zm30.6-27.5c-6.8-46.4-46.3-82.1-94.6-82.1-20.5 0-30.4 11.4-64 11.4S204.6 320 184 320c-48.3 0-87.8 35.7-94.6 82.1C53.9 363.6 32 312.4 32 256c0-119.1 96.9-216 216-216s216 96.9 216 216c0 56.4-21.9 107.6-57.4 146.1zM248 120c-48.6 0-88 39.4-88 88s39.4 88 88 88 88-39.4 88-88-39.4-88-88-88zm0 144c-30.9 0-56-25.1-56-56s25.1-56 56-56 56 25.1 56 56-25.1 56-56 56z"/></svg>

                Benutzerkonto Einstellungen</h1>
            <br>
            <br>
            <br>

        </div>

        <div class="col-3 offset-1 position-relative d-none d-md-flex">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <svg style="width: 14px; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M224 480c-17.66 0-32-14.38-32-32.03h-32c0 35.31 28.72 64.03 64 64.03s64-28.72 64-64.03h-32c0 17.65-14.34 32.03-32 32.03zm209.38-145.19c-27.96-26.62-49.34-54.48-49.34-148.91 0-79.59-63.39-144.5-144.04-152.35V16c0-8.84-7.16-16-16-16s-16 7.16-16 16v17.56C127.35 41.41 63.96 106.31 63.96 185.9c0 94.42-21.39 122.29-49.35 148.91-13.97 13.3-18.38 33.41-11.25 51.23C10.64 404.24 28.16 416 48 416h352c19.84 0 37.36-11.77 44.64-29.97 7.13-17.82 2.71-37.92-11.26-51.22zM400 384H48c-14.23 0-21.34-16.47-11.32-26.01 34.86-33.19 59.28-70.34 59.28-172.08C95.96 118.53 153.23 64 224 64c70.76 0 128.04 54.52 128.04 121.9 0 101.35 24.21 138.7 59.28 172.08C421.38 367.57 414.17 384 400 384z"/></svg>
                    Benachrichtigungen
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sicherheit">
                        <svg style="width: 14px; margin-right: 10px; fill: black;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M336 32c79.529 0 144 64.471 144 144s-64.471 144-144 144c-18.968 0-37.076-3.675-53.661-10.339L240 352h-48v64h-64v64H32v-80l170.339-170.339C195.675 213.076 192 194.968 192 176c0-79.529 64.471-144 144-144m0-32c-97.184 0-176 78.769-176 176 0 15.307 1.945 30.352 5.798 44.947L7.029 379.716A24.003 24.003 0 0 0 0 396.686V488c0 13.255 10.745 24 24 24h112c13.255 0 24-10.745 24-24v-40h40c13.255 0 24-10.745 24-24v-40h19.314c6.365 0 12.47-2.529 16.971-7.029l30.769-30.769C305.648 350.055 320.693 352 336 352c97.184 0 176-78.769 176-176C512 78.816 433.231 0 336 0zm48 108c11.028 0 20 8.972 20 20s-8.972 20-20 20-20-8.972-20-20 8.972-20 20-20m0-28c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z"/></svg>
                        Login & Sicherheit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#delete">
                        <svg style="width: 14px; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M440 64H336l-33.6-44.8A48 48 0 0 0 264 0h-80a48 48 0 0 0-38.4 19.2L112 64H8a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h18.9l33.2 372.3a48 48 0 0 0 47.8 43.7h232.2a48 48 0 0 0 47.8-43.7L421.1 96H440a8 8 0 0 0 8-8V72a8 8 0 0 0-8-8zM171.2 38.4A16.1 16.1 0 0 1 184 32h80a16.1 16.1 0 0 1 12.8 6.4L296 64H152zm184.8 427a15.91 15.91 0 0 1-15.9 14.6H107.9A15.91 15.91 0 0 1 92 465.4L59 96h330z"/></svg>
                        Account löschen
                    </a>
                </li>

            </ul>
        </div>
        <div class="col-12 col-md-7 ">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif

                <div class="card" style="background-color: #fdf7f37d">
                    <div class="card-header">
                       <h5>
                           <svg style="width: 14px; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M224 480c-17.66 0-32-14.38-32-32.03h-32c0 35.31 28.72 64.03 64 64.03s64-28.72 64-64.03h-32c0 17.65-14.34 32.03-32 32.03zm209.38-145.19c-27.96-26.62-49.34-54.48-49.34-148.91 0-79.59-63.39-144.5-144.04-152.35V16c0-8.84-7.16-16-16-16s-16 7.16-16 16v17.56C127.35 41.41 63.96 106.31 63.96 185.9c0 94.42-21.39 122.29-49.35 148.91-13.97 13.3-18.38 33.41-11.25 51.23C10.64 404.24 28.16 416 48 416h352c19.84 0 37.36-11.77 44.64-29.97 7.13-17.82 2.71-37.92-11.26-51.22zM400 384H48c-14.23 0-21.34-16.47-11.32-26.01 34.86-33.19 59.28-70.34 59.28-172.08C95.96 118.53 153.23 64 224 64c70.76 0 128.04 54.52 128.04 121.9 0 101.35 24.21 138.7 59.28 172.08C421.38 367.57 414.17 384 400 384z"/></svg>

                           Benachrichtigungen
                       </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 ">
                                <table class="table table-borderless">

                                    <tbody>
                                    <tr>

                                        <td>Bewerbungen</td>
                                        <td class="float-end">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>Neuigkeiten & Ankündigungen</td>
                                        <td class="float-end">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td>Sicherheitsmeldungen</td>
                                        <td class="float-end">
                                            <div class="form-check form-switch" title="Diese Art von Benachrichtigung kann nicht abbestellt werden.">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked disabled>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>



                            </div>

                        </div>
                    </div>

                </div>

                <br>
                <br>
                <br>

            <div class="card" style="background-color: #fdf7f37d">
                <div class="card-header" id="sicherheit">
                    <h5>
                        <svg style="width: 14px; margin-right: 10px; fill: black;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M336 32c79.529 0 144 64.471 144 144s-64.471 144-144 144c-18.968 0-37.076-3.675-53.661-10.339L240 352h-48v64h-64v64H32v-80l170.339-170.339C195.675 213.076 192 194.968 192 176c0-79.529 64.471-144 144-144m0-32c-97.184 0-176 78.769-176 176 0 15.307 1.945 30.352 5.798 44.947L7.029 379.716A24.003 24.003 0 0 0 0 396.686V488c0 13.255 10.745 24 24 24h112c13.255 0 24-10.745 24-24v-40h40c13.255 0 24-10.745 24-24v-40h19.314c6.365 0 12.47-2.529 16.971-7.029l30.769-30.769C305.648 350.055 320.693 352 336 352c97.184 0 176-78.769 176-176C512 78.816 433.231 0 336 0zm48 108c11.028 0 20 8.972 20 20s-8.972 20-20 20-20-8.972-20-20 8.972-20 20-20m0-28c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z"/></svg>

                        Login Informationen aktualisieren
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-8 offset-md-2 mt-5">

                            <form action="{{route('dashboard.account')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-5">
                                    <label for="exampleFormControlInputEmail">Neue E-mail angeben</label>
                                    <input type="email" class="form-control" id="exampleFormControlInputEmail" value="{{ $user->email }}" placeholder="E-mail" name='email' required="required">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInputPassword">Neues Passwort setzen</label>
                                    <input type="password" class="form-control" id="exampleFormControlInputPassword" placeholder="Password" name='password'>
                                </div>



                                <div class="row mt-5 mb-3">
                                    <div class="col text-end">
                                        <button type="submit" class="btn btn-ci float-left" >
                                            <svg style="height: 16px;" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M492 8h-10c-6.627 0-12 5.373-12 12v110.627C426.929 57.261 347.224 8 256 8 123.228 8 14.824 112.338 8.31 243.493 7.971 250.311 13.475 256 20.301 256h10.016c6.353 0 11.646-4.949 11.977-11.293C48.157 132.216 141.097 42 256 42c82.862 0 154.737 47.077 190.289 116H332c-6.627 0-12 5.373-12 12v10c0 6.627 5.373 12 12 12h160c6.627 0 12-5.373 12-12V20c0-6.627-5.373-12-12-12zm-.301 248h-10.015c-6.352 0-11.647 4.949-11.977 11.293C463.841 380.158 370.546 470 256 470c-82.608 0-154.672-46.952-190.299-116H180c6.627 0 12-5.373 12-12v-10c0-6.627-5.373-12-12-12H20c-6.627 0-12 5.373-12 12v160c0 6.627 5.373 12 12 12h10c6.627 0 12-5.373 12-12V381.373C85.071 454.739 164.777 504 256 504c132.773 0 241.176-104.338 247.69-235.493.339-6.818-5.165-12.507-11.991-12.507z"/></svg>
                                            Aktualisieren
                                        </button>
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

            <div class="card border-danger" style="background-color: #fdf7f37d">
                <div class="card-header" id="delete">
                    <h5>
                        <svg style="width: 14px; margin-right: 10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M440 64H336l-33.6-44.8A48 48 0 0 0 264 0h-80a48 48 0 0 0-38.4 19.2L112 64H8a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h18.9l33.2 372.3a48 48 0 0 0 47.8 43.7h232.2a48 48 0 0 0 47.8-43.7L421.1 96H440a8 8 0 0 0 8-8V72a8 8 0 0 0-8-8zM171.2 38.4A16.1 16.1 0 0 1 184 32h80a16.1 16.1 0 0 1 12.8 6.4L296 64H152zm184.8 427a15.91 15.91 0 0 1-15.9 14.6H107.9A15.91 15.91 0 0 1 92 465.4L59 96h330z"/></svg>
                        Benutzerkonto deaktivieren oder löschen
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 mt-5">

                            Hier können Sie Ihren Account
                                <a href="{{ route('account.deleteAccount') }}" class="link-danger"> vorübergehend deaktivieren</a>. <i class="fal fa-snooze"></i>

                            <div class="alert alert-danger mt-5">
                                Benutzerkonto und Daten endgültig löschen: <a href="" class="link-danger"> <i class="fal fa-trash"></i> Account löschen</a>.

                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <br>
            <br>
            <br>
            <br>


        </div>
    </div>
@stop
