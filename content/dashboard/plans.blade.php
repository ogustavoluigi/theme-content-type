@extends('template.'.config('settings.template').'.content.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-5 mb-5">
            <h1>Preise</h1>
        </div>
    </div>
    <style>
        .card {
            position: relative;
        }
        .card .card-badge {
            position: absolute;
            top: -10px;
            right: -20px;
            padding: 5px;
            background: linear-gradient(270deg, #ae3636, #fd0c0c);
            background-size: 400% 400%;
            -webkit-animation: card-badge-animation 22s ease infinite;
            -moz-animation: card-badge-animation 22s ease infinite;
            animation: card-badge-animation 22s ease infinite;
            color: white;
            transform: rotate(20deg);
            border-radius: 5px;
        }
        @-webkit-keyframes card-badge-animation {
            0% {
                background-position: 0% 50%
            }
            50% {
                background-position: 100% 50%
            }
            100% {
                background-position: 0% 50%
            }
        }
        @-moz-keyframes card-badge-animation {
            0% {
                background-position: 0% 50%
            }
            50% {
                background-position: 100% 50%
            }
            100% {
                background-position: 0% 50%
            }
        }
        @keyframes card-badge-animation {
            0% {
                background-position: 0% 50%
            }
            50% {
                background-position: 100% 50%
            }
            100% {
                background-position: 0% 50%
            }
        }
        .price-feature {
            min-height: 80px;
            line-height: 55px;
        }
        .card-footer {
            background-color: white;
            border-top: none;
        }
    </style>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-12 col-lg-4 mb-5">
            <div class="card h-100 shadow-lg">
                <div class="card-header text-center">
                    <h5 class="card-title text-center">Basis Arbeitgeberkonto</h5>
                    <span style="color: #f49c35; font-size: 30px;" class="text-center">kostenlos</span>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item price-feature">
                        <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                        </svg>
                        Unbegrenzte Stellen <i class="fal fa-"></i>
                    </li>
                    <li class="list-group-item price-feature">
                        <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                        </svg>
                        Arbeitgeber Profil
                    </li>
                    <li class="list-group-item price-feature">
                        <svg style="fill: red; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z" />
                        </svg>
                        Firma erscheint nicht als Top-Arbeitgeber
                    </li>
                    <li class="list-group-item price-feature">
                        <svg style="fill: red; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z" />
                        </svg>
                        Wird nicht aktiv beworben
                        <span title="Stellenanzeigen werden nicht auf zusätzlichen Portalen wie Facebook, LinkedIn und anderen beworben um die Reichweite der Anzeige zu erhöhen. Mit einem kostenpflichtigen Premium Arbeitgeber Konto können Sie diese Funktion nutzen.">
                            <svg style="fill: gray; width: 14px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                <path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z" />
                            </svg>
                        </span>
                    </li>
                </ul>
                <div class="card-body d-none d-sm-block"></div>
                <div class="card-footer">
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-ci btn-lg d-block">Jetzt Firma kostenlos eintragen <i class="fal fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-5">
            <div class="card h-100 shadow-lg">
                <div class="card-header text-center">
                    <h5 class="card-title text-center">Premium Arbeitgeberkonto</h5>
                    <span style="color: #f49c35; font-size: 30px;" class="text-center">129 € </span><span style="color: #f49c35;" class="text-center"> / Monat</span>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item price-feature">
                        <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                        </svg>
                        Unbegrenzte Premium Stellen
                    </li>
                    <li class="list-group-item price-feature">
                        <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                        </svg>
                        Premium Arbeitgeber Profil
                    </li>
                    <li class="list-group-item price-feature">
                        <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                        </svg>
                        Firma erscheint als Top-Arbeitgeber
                    </li>
                    <li class="list-group-item price-feature">
                        <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                        </svg>
                        Stellen werden auf anderen Plattformen beworben
                        <span title="Stellenanzeigen werden auf zusätzlichen Portalen wie Facebook, LinkedIn und anderen beworben um die Reichweite der Anzeige zu erhöhen.">
                            <svg style="fill: gray; width: 14px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                <path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z" />
                            </svg>
                        </span>
                    </li>
                    <li class="list-group-item price-feature">
                        <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                        </svg>
                        Monatlich kündbar
                    </li>
                </ul>
                <div class="card-body d-none d-sm-block"></div>
                <div class="card-footer">
                    <a href="{{ url('/dashboard/register') }}" class="btn btn-ci btn-lg d-block">Jetzt Firma eintragen & Premium buchen <i class="fal fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-5">
            <div class="card h-100 shadow-lg">
                <div class="card-header text-center">
                    <h5 class="card-title text-center">Full Service Lösung</h5>
                    <span style="color: #f49c35; font-size: 30px;" class="text-center">ab 249 € </span><span style="color: #f49c35;" class="text-center"> / Monat</span>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item price-feature">
                        <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                        </svg>
                        Unbegrenzte Premium Stellen
                    </li>
                    <li class="list-group-item price-feature" style="height: 80px; line-height: 55px;">
                        <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                        </svg>
                        Premium Arbeitgeber Profil
                    </li>
                    <li class="list-group-item price-feature">
                        <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                        </svg>
                        Firma erscheint als Top-Arbeitgeber
                    </li>
                    <li class="list-group-item price-feature">
                        <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                        </svg>
                        Stellen werden auf anderen Plattformen beworben <i class="fal fa-info-circle" title="Stellenanzeigen werden auf zusätzlichen Portalen wie Facebook, LinkedIn und anderen beworben um die Reichweite der Anzeige zu erhöhen."></i>
                    </li>
                    <li class="list-group-item price-feature">
                        <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                        </svg>
                        Stellenservice (Eintragen, aktualisieren, Bilder, ...)
                        <span title="Wir übernehmen das Einstellen und das etwaige Aktualisieren Ihrer Stellenanzeigen.">
                            <svg style="fill: gray; width: 14px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                <path d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z" />
                            </svg>
                        </span>
                    </li>
                    <li class="list-group-item price-feature">
                        <svg style="fill: green; width: 14px; margin-right: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z" />
                        </svg>
                        Monatlich kündbar
                    </li>
                </ul>
                <div class="card-footer">
                    <a href="{{ url('/dashboard/register') }}" class="btn btn-ci btn-lg d-block">Heute noch Angebot erhalten<i class="fal fa-arrow-right"></i></a>
                </div>
                <div class="card-badge">Wir kümmmern uns!</div>
            </div>
        </div>
        <br>
    </div>
    <div class="row">
        <div class="col">
            <i class="text-end" style="float: right;">Alle Preise richten sich ausschließlich an Gewerbekunden und verstehen sich zzgl. gesetzlicher Mehrwertsteuer.</i>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
</div>
@stop