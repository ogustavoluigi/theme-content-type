@extends('template.'.config('settings.template').'.content.master')
@section('head')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<link rel="stylesheet" href="{{ asset('template/css/elements/carousel.css') }}">
@stop
@section('content')
<div class="row">
    <div id="header_static" style="background-color: #9699AA; background-image: url('{{ asset('uploads/lists/' . $listModel->image) }}'); background-position: center; background-size: cover;">
        <div class="d-none d-md-block">
            <br>
            <br>
        </div>
        <div class="d-none d-lg-block">
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <div id="city_headline">
            <h1>Die besten <strong>Arbeitsstellen</strong> in <strong> {{ $listModel->name }}</strong> auf jobs-oberpfalz.de</h1>
            <h2>Jetzt Traumjob finden und direkt online bewerben.</h2>
        </div>
        <div class="d-none d-md-block">
            <br>
        </div>
        <div class="d-none d-lg-block">
            <br>
        </div>
    </div> <!-- header_static -->
</div>


<section id="latest_jobs" class="mt-4">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <h2>Aktuelle <strong>Jobangebote in {{ $listModel->name }}</strong></h2>
        </div>


        <style>
          #list-filter-menue .form-check-input:checked{
                background-color: #157347;
                border-color: #146c43;
            }

           #list-filter-menue .form-check {
                min-height: 2.5rem;
            }

           #list-filter-menue .bg-light
           {
               background-color: #f8f9fa29 !important;
           }
           #list-filter-menue .badge{
               font-weight: normal;
               margin-right: 10px;
           }

          .accordion-button:not(.collapsed) {
              color: #000;
              background-color: #f49c35;
          }

          .accordion-collapse {
              border: none;
          }

          .accordion-button {

              border: none;

          }

        </style>
        <div id="list-filter-menue" class="d-none d-lg-block col-12 position-relative col-md-3 rounded-end" style="background-color: #f49c35; padding: 25px;">

            <div class="row">
                <div class="col-12">


                    <h5 class="mb-3 fw-bold">Top Arbeitgeber</h5>


                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Nur Top Arbeitgeber <span class="badge bg-light text-dark">-7 Jobs</span>
                        </label>
                    </div>


                    <h5 class="mt-5 mb-3 fw-bold">Arbeitsort</h5>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Regensburg <span class="badge bg-light text-dark">-7 Jobs</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Weiden <span class="badge bg-light text-dark">- 282 Jobs</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Amberg <span class="badge bg-light text-dark">+383 Jobs</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Schwandorf <span class="badge bg-light text-dark">-7 Jobs</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Neumarkt <span class="badge bg-light text-dark">-7 Jobs</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Tirschenreuth <span class="badge bg-light text-dark">-7 Jobs</span>
                        </label>
                    </div>

                    <h5 class="mt-5 mb-3 fw-bold">Beschäftigungsart</h5>


                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Vollzeit <span class="badge bg-light text-dark">-7 Jobs</span>
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Teilzeit <span class="badge bg-light text-dark">-7 Jobs</span>
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ausbildung <span class="badge bg-light text-dark">-7 Jobs</span>
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Praktikum <span class="badge bg-light text-dark">-7 Jobs</span>
                        </label>
                    </div>


                </div>
            </div>

        </div>

            <div class="col-12 col-lg-9">

                <div class="card mt-2 mb-1" style="background-color: #91ce8c57;">
                    <div class="text-center rounded-top" style="font-size: 12px; background-color: #61bb9052">
                        <svg style="fill: black; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z"/></svg>
                        Premium Jobangebot
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-12 col-lg-8 d-lg-none">
                                <h5 class="card-title fs-6 pt-2 pb-2">
                                    <a href="#" >
                                        Lager- und Transportmitarbeiter (m/w/d)

                                    </a>
                                </h5>
                            </div>


                            <div class="col-2 col-md-3 col-lg-2 text-sm-center">
                                <a href="#" >
                                    <img src="https://www.jobs-oberpfalz.de/uploads/profile/1551.png?s=120&d=identicon&r=PG" title="Krones AG" class="border rounded img-fluid" alt="Logo Krones AG" style="max-width: 58px;">
                                </a>

                                <a href="#" style="font-size: 13px; m" class="text-muted d-none d-lg-block " >
                                    Kornes AG
                                </a>
                            </div>
                            <div class=" col-10 d-lg-none pt-sm-3">
                                <a href="#" style="font-size: 13px; m" class="text-muted">
                                    Krones AG
                                </a>

                                <div class="text-end">
                                    <span class="badge bg-success text-end">Premium Arbeitgeber</span>

                                </div>
                            </div>

                            <div class="d-none d-lg-block col-md-8">
                                <h5 class="card-title fs-6 pt-4 pb-3">
                                    <a href="#">
                                        Lager- und Transportmitarbeiter (m/w/d)
                                    </a>
                                </h5>
                            </div>


                            <div class="col-6 col-sm-6 d-lg-none">
                                <h6 class="card-subtitle mt-2 text-muted" title="18.10.2021">vor 2 Minuten</h6>

                            </div>

                            <div class="col-6 col-sm-6 col-lg-2 text-end pt-2 pt-lg-4">

                                <h6  style="padding-right: 8%" class="card-subtitle mb-2 text-muted d-none d-lg-block" title="18.10.2021"> vor 2 Minuten</h6>

                                <a class="btn btn-ci btn-sm" href="#">
                                    Job ansehen
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach($nachrichten as $nach)

                <div class="card mt-2 mb-1" style="background-color: #f8f8f8;">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-12 col-lg-8 d-lg-none">
                                <h5 class="card-title fs-6 pt-2 pb-2">
                                    <a href="{{ route_content($nach) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $listModel->name }}', 'event_label' : '{{$nach->title}}'});">
                                        {{$nach->title}}
                                    </a>
                                </h5>
                            </div>


                            <div class="col-2 col-md-3 col-lg-2 text-sm-center">
                                <a href="{{ route('author.get', [$nach->user->slug]) }}" onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $listModel->name }}', 'event_label' : '{{ $nach->user->name }}'});">
                                    <img src="{{ $nach->user->gravatar() }}" title="{{ $nach->user->name }}" class="border rounded img-fluid" alt="Logo {{ $nach->user->name }}" style="max-width: 58px;">
                                </a>

                                <a href="{{ route('author.get', [$nach->user->slug]) }}" style="font-size: 13px; m" class="text-muted d-none d-lg-block " onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $listModel->name }}', 'event_label' : '{{ $nach->user->name }}'});">
                                    {{ $nach->user->name }}
                                </a>
                            </div>
                            <div class=" col-10 d-lg-none pt-sm-3">
                                <a href="{{ route('author.get', [$nach->user->slug]) }}" style="font-size: 13px; m" class="text-muted" onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $listModel->name }}', 'event_label' : '{{ $nach->user->name }}'});">
                                    {{ $nach->user->name }}
                                </a>

                                <div class="text-end">
                                    <span class="badge bg-success text-end">Premium Arbeitgeber</span>

                                </div>
                            </div>

                            <div class="d-none d-lg-block col-md-8">
                                <h5 class="card-title fs-6 pt-4 pb-3">
                                    <a href="{{ route_content($nach) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $listModel->name }}', 'event_label' : '{{$nach->title}}'});">
                                        {{$nach->title}}
                                    </a>
                                </h5>
                            </div>


                            <div class="col-6 col-sm-6 d-lg-none">
                                <h6 class="card-subtitle mt-2 text-muted" title="{{date('d.m.Y', strtotime($nach->updated_at))}}">{{ $nach->updated_at->diffForHumans() }}</h6>

                            </div>

                            <div class="col-6 col-sm-6 col-lg-2 text-end pt-2 pt-lg-4">

                                <h6  style="padding-right: 8%" class="card-subtitle mb-2 text-muted d-none d-lg-block" title="{{date('d.m.Y', strtotime($nach->updated_at))}}">{{ $nach->updated_at->diffForHumans() }}</h6>

                                <a class="btn btn-ci btn-sm" href="{{ route_content($nach) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $listModel->name }}', 'event_label' : '{{$nach->title}}'});">
                                    Job ansehen
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                <div class="row">


                    <div class="col-12 col-md-3">

                        <a href="#">
                            <div class="card mt-2 mb-1" style="background-color: #f7efef6b;">
                                <div class="text-center rounded-top" style="font-size: 12px; background-color: #ae9f7a52">
                                    <svg style="fill: black; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z"/></svg>
                                    Externe Partnerangebote
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="card-title fs-6">
                                                    Lager- und Transportmitarbeiter (m/w/d)
                                            </h5>
                                        </div>

                                        <div class="col-12 text-center">
                                            <h6 class="card-subtitle mt-2 text-muted" title="18.10.2021">Krones AG</h6>
                                        </div>
                                        <div class=" col-12 pt-sm-3">
                                            <div style="font-size: 13px; m" class="text-muted">
                                                vor 2 Minuten
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="col-12 col-md-3">

                        <a href="#">
                            <div class="card mt-2 mb-1" style="background-color: #f7efef6b;">
                                <div class="text-center rounded-top" style="font-size: 12px; background-color: #ae9f7a52">
                                    <svg style="fill: black; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z"/></svg>
                                    Externe Partnerangebote
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="card-title fs-6">
                                                Lager- und Transportmitarbeiter (m/w/d)
                                            </h5>
                                        </div>

                                        <div class="col-12 text-center">
                                            <h6 class="card-subtitle mt-2 text-muted" title="18.10.2021">Krones AG</h6>
                                        </div>
                                        <div class=" col-12 pt-sm-3">
                                            <div style="font-size: 13px; m" class="text-muted">
                                                vor 2 Minuten
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>



                    <div class="col-12 col-md-3">

                        <a href="#">
                            <div class="card mt-2 mb-1" style="background-color: #f7efef6b;">
                                <div class="text-center rounded-top" style="font-size: 12px; background-color: #ae9f7a52">
                                    <svg style="fill: black; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z"/></svg>
                                    Externe Partnerangebote
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="card-title fs-6">
                                                Lager- und Transportmitarbeiter (m/w/d)
                                            </h5>
                                        </div>

                                        <div class="col-12 text-center">
                                            <h6 class="card-subtitle mt-2 text-muted" title="18.10.2021">Krones AG</h6>
                                        </div>
                                        <div class=" col-12 pt-sm-3">
                                            <div style="font-size: 13px; m" class="text-muted">
                                                vor 2 Minuten
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>


                    <div class="col-12 col-md-3">

                        <a href="#">
                            <div class="card mt-2 mb-1" style="background-color: #f7efef6b;">
                                <div class="text-center rounded-top" style="font-size: 12px; background-color: #ae9f7a52">
                                    <svg style="fill: black; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z"/></svg>
                                    Externe Partnerangebote
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="card-title fs-6">
                                                Lager- und Transportmitarbeiter (m/w/d)
                                            </h5>
                                        </div>

                                        <div class="col-12 text-center">
                                            <h6 class="card-subtitle mt-2 text-muted" title="18.10.2021">Krones AG</h6>
                                        </div>
                                        <div class=" col-12 pt-sm-3">
                                            <div style="font-size: 13px; m" class="text-muted">
                                                vor 2 Minuten
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>


                    <div class="col-12 col-md-3">

                        <a href="#">
                            <div class="card mt-2 mb-1" style="background-color: #f7efef6b;">
                                <div class="text-center rounded-top" style="font-size: 12px; background-color: #ae9f7a52">
                                    <svg style="fill: black; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z"/></svg>
                                    Externe Partnerangebote
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="card-title fs-6">
                                                Lager- und Transportmitarbeiter (m/w/d)
                                            </h5>
                                        </div>

                                        <div class="col-12 text-center">
                                            <h6 class="card-subtitle mt-2 text-muted" title="18.10.2021">Krones AG</h6>
                                        </div>
                                        <div class=" col-12 pt-sm-3">
                                            <div style="font-size: 13px; m" class="text-muted">
                                                vor 2 Minuten
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>


                    <div class="col-12 col-md-3">

                        <a href="#">
                            <div class="card mt-2 mb-1" style="background-color: #f7efef6b;">
                                <div class="text-center rounded-top" style="font-size: 12px; background-color: #ae9f7a52">
                                    <svg style="fill: black; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z"/></svg>
                                    Externe Partnerangebote
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="card-title fs-6">
                                                Lager- und Transportmitarbeiter (m/w/d)
                                            </h5>
                                        </div>

                                        <div class="col-12 text-center">
                                            <h6 class="card-subtitle mt-2 text-muted" title="18.10.2021">Krones AG</h6>
                                        </div>
                                        <div class=" col-12 pt-sm-3">
                                            <div style="font-size: 13px; m" class="text-muted">
                                                vor 2 Minuten
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>




                </div>









                </div>
            </div>



        <div class="col-12">
            <div style="margin: auto;text-align: center;    display: table; overflow: scroll;">
                {!! $nachrichten->onEachSide(1)->fragment("latest_jobs")->render() !!}
            </div>
        </div>



        <div id="list-filter-menue" class=" d-lg-none col-12 position-relative rounded-bottom" style="background-color: #f49c35; padding: 25px;">

            <div class="row">
                <div class="col-12">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                <h5 class="mb-3 fw-bold">Top Arbeitgeber</h5>

                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Nur Top Arbeitgeber <span class="badge bg-light text-dark">-7 Jobs</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    <h5 class="fw-bold">Arbeitsort</h5>

                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Regensburg <span class="badge bg-light text-dark">-7 Jobs</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Weiden <span class="badge bg-light text-dark">- 282 Jobs</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Amberg <span class="badge bg-light text-dark">+383 Jobs</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Schwandorf <span class="badge bg-light text-dark">-7 Jobs</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Neumarkt <span class="badge bg-light text-dark">-7 Jobs</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Tirschenreuth <span class="badge bg-light text-dark">-7 Jobs</span>
                                        </label>
                                    </div>                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    <h5 class="fw-bold">Beschäftigungsart</h5>
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Vollzeit <span class="badge bg-light text-dark">-7 Jobs</span>
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Teilzeit <span class="badge bg-light text-dark">-7 Jobs</span>
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Ausbildung <span class="badge bg-light text-dark">-7 Jobs</span>
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Praktikum <span class="badge bg-light text-dark">-7 Jobs</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </div>

        </div>

        </div>

    </div>
</section>

<div class="container">
    @if(count($premiumAuthors) > 0)
        <section>
            <div class="row carousel-row">
                <div class="container">
                    <div class="col-sm-12">
                        <h2 style="text-align: left" class="mb-4">Top <strong>Arbeitgeber</strong> mit offenen <strong>Arbeitsstellen</strong></h2>
                    </div>
                    <div class="row top_arbeitgeber logo-carousel slider" data-arrows="true">
                        @foreach($premiumAuthors as $premiumAuthor)
                            <div class="logos slide" style="padding-bottom: 40px; text-align: center">
                                <a href="{{url('/arbeitgeber')}}/{{$premiumAuthor->slug}}">
                                    <img src="{{url('/uploads/profile')}}/{{$premiumAuthor->image}}" loading="lazy" class="img-fluid center-block border rounded mb-2">
                                    <br>
                                    {{$premiumAuthor->name}}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="mt-2">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="mt-2">Aktuelle Jobs in <strong>{{ $listModel->name }}</strong></h2>
                <br>
                @if (isset($listModel))
                    {{ $listModel->description }}
                @endif
            </div>
        </div>
    </section>
</div>


@stop
@section('scripts')
<script>
    $(document).ready(function() {
        $('.logo-carousel').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows: true,
            dots: false,
            pauseOnHover: false,
            responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
            }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
            }]
        });
    });
</script>
<!--
<script>
    function initMap() {
        $.ajax({
            url: '{{ route('location.list', $listModel->slug) }}',
            type: "GET",
            dataType: "json",
            success: function (data) {
                var dados = data.data;
                if (dados.length != 0) {
                    const map = new google.maps.Map(document.getElementById("map-canvas"), {
                        zoom: 10,
                        //center: { lat: -25.363, lng: 131.044 },
                    });
                    var markers = data.lg;
                    var bounds = new google.maps.LatLngBounds();
                    for (var i = 0; i < markers.length; i++) {
                        bounds.extend(markers[i]);
                    }
                    google.maps.event.addListener(map, 'zoom_changed', function() {
                        zoomChangeBoundsListener =
                            google.maps.event.addListener(map, 'bounds_changed', function(event) {
                                if (this.getZoom() > 15 && this.initialZoom == true) {
                                    // Change max/min zoom here
                                    this.setZoom(15);
                                    this.initialZoom = false;
                                }
                                google.maps.event.removeListener(zoomChangeBoundsListener);
                            });
                    });
                    map.initialZoom = true;
                    map.fitBounds(bounds);
                    $.each(dados, function(propName, propVal) {
                        var marker = new google.maps.Marker({
                            position: { lat: parseFloat(propVal.lat), lng: parseFloat(propVal.lng) },
                            map,
                            link: propVal.url,
                        });
                        new google.maps.event.addListener(marker, "click", function () {
                            window.open(this.link,"_blank");
                        });
                    });
                }
            }
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('MAPS_API_KEY', 'AIzaSyAQj1N9Mj-OzOiUjt5QUDRkcDonXz4O85A') }}&callback=initMap&libraries=&v=weekly" defer></script>
-->
@stop