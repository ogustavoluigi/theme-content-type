@extends('template.'.config('settings.template').'.content.master')
@section('head')
<link rel="stylesheet" href="{{ asset('template/css/intlTelInput.min.css') }}">
@stop
@section('content')
<link rel="stylesheet" href="{{ asset('template/css/pages/news.css') }}">
<span id="database" data-new-id="{{$nach->id}}" data-new-url="{{route_content($nach)}}" data-new-title="{{$nach->title}}" data-new-date="{{date('Y-m-d h:i:s', strtotime($nach->created_at))}}" data-author-url="{{route('author.get', [$nach->user->slug])}}" data-author-name="{{$nach->user->name}}" data-author-image="{{$nach->user->gravatar()}}"></span>
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bewerbung: {{$nach->title}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    $form = \App\Models\Form::find(1); // ID FORM DATABASE
                    ?>
                    <style>
                        label {
                            padding-bottom: 4px;
                        }
                    </style>
                    <form method="post" action="{{ route('send-form', [$form->id]) }}" id="formPost" enctype="multipart/form-data" autocomplete="on">
                        @csrf
                        <input type="hidden" name="nach_title" value="{{ $nach->title }}" />
                        <input type="hidden" name="email_to" value="{{ $nach->user->email }}" />
                        <div class="form-group" style="margin-bottom: 25px; display: block;">
                            <label for="field8">Anrede: <span style="color: red">*</span></label>
                            <select class="form-select" aria-label="Anrede" id="field8" name="fields[8]" required>
                                <option selected disabled>Bitte wählen</option>
                                <option value="Herr">Herr</option>
                                <option value="Frau">Frau</option>
                                <option value="Divers">Divers</option>
                                <option value="keine Angabe">keine Angabe</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin-bottom: 25px; display: block;">
                            <label for="field1">Vorname Nachname: <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="field1" name="fields[1]" placeholder="Max Mustermann" required>
                        </div>
                        <div class="form-group" style="margin-bottom: 25px; display: block;">
                            <label for="field7">E-Mail: <span style="color: red">*</span></label>
                            <br>
                            <input type="email" class="form-control" id="field7" name="fields[7]" placeholder="max.mustermann@example.de" required>
                        </div>
                        <div class="form-group" style="margin-bottom: 25px; display: block;">
                            <label for="field2">Telefon:</label>
                            <br>
                            <input type="tel" class="form-control phone" id="field2" name="fields[2]">
                        </div>
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="field5">Möglichkeit zum Upload eines Lebenslaufs:</label>
                            <label for="field5" style="font-size: 11px; font-family: initial;">
                                Maximal 4MB. Dateiformate: .pdf, .doc, .txt, .jpg, .png.
                            </label>
                            <input accept=".txt,.pdf,.doc,.jpg,.png" type="file" name="fields[5]" id="field5" placeholder="Anhänge" style="height: 125px;border: 1px dashed #e7cf84;background-color: #fff3cd6b; padding-left: 30px; padding-top: 50px; width: 100%;">
                        </div>
                        <div class="form-group d-none">
                            <label for="field3">Job</label>
                            <input type="text" class="form-control" id="field3" name="fields[3]" required value="{{$nach->title}}">
                        </div>
                        <div class="form-group d-none">
                            <label for="field4">Firma</label>
                            <input type="text" class="form-control" id="field4" name="fields[4]" required value="{{$nach->user->name}}">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1" style="font-size: 11px; font-family: initial;">
                                Ich stimme zu, dass die oben erhobenen Daten verarbeitet und zur Weiterleitung an {{$nach->user->name}} genutzt werden dürfen.
                                Ich bestätige, dass ich mit den <a href="{{url('/datenschutz')}}" style="color:#f49c35; text-decoration: underline" target="_blank">Datenschutzerklärung</a> einverstanden bin.
                                Ich kann meine Einwilligung selbstverständlich jederzeit widerrufen.
                            </label>
                        </div>

                        <span style="color: red" style="font-size: 11px;">*</span> <i style="font-size: 11px; font-family: initial;">Pflichtfeld</i>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-ci">
                        Bewerbung abschicken <i class="fal fa-envelope"></i>
                    </button>

                </div>
                </form>
            </div>
        </div>
    </div>

    @if(session()->has('success'))
    <br>
    <br>
    <div class="alert alert-success">
        Bewerbung erfolgreich übermittelt!
    </div>
    <script>
        fbq('track', 'SubmitApplication');
        gtag('event', 'Application submitted', {
            'event_category': '{{$nach->title}}'
        });
        gtag('event', 'Application submitted', {
            'event_category': '{{$nach->title}}',
            'event_label': '-'
        });
    </script>
    @endif
    <div class="row" style="padding-top:20px;">
        <div class="col-12 col-md-9 hidden-md text-center">{{$nach->user->name}} sucht zur Anstellung einen / eine:
            <br>
        </div>
    </div>
    <div class="row" style="padding-top:20px; padding-bottom: 20px;">

        <div class="col-3 col-md-1 d-flex align-items-center">

            <img src="{{ $nach->user->gravatar() }}" class="rounded border img-fluid" alt="Logo {{$nach->user->name}}">

        </div>
        <div class="col-9 col-md-11 d-flex align-items-center">
            <h1 class="fs-2">{{$nach->title}}</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-6">
            <i class="fal fa-calendar"></i> Veröffentlicht: {{date('d.m.Y', strtotime($nach->created_at))}}
        </div>
        <div class="col-6 text-end pr-10">
            <i class="text-muted" style="padding-right: 50px;">Stellen-ID: {{$nach->id}}</i>
        </div>
    </div>
    <div class="row">

        <div class="col-md-9">

            @if ($nach->image)
            <br>
            <img src="{{ asset('uploads/' . $nach->image) }}" class="img-fluid">
            <br>
            @endif
            <br>
            <div class="row">


                @if(isset($nach->additional_fields['14']))
                <div class="col">
                    <h5>Branche</h5>
                    <?php $field = \App\Models\TypeField::find(14); ?>
                    @if ($field->attr['isMultiple'] == 0)
                    <div class="badge bg-secondary">
                        {!! isset($nach->additional_fields['14']) ? $nach->additional_fields['14'] : 'Not Found' !!}
                    </div>
                    @else
                    @foreach ($nach->additional_fields['14'] as $valueTag)
                    <div class="badge bg-secondary">{{ $valueTag }}</div>
                    @endforeach
                    @endif
                </div>
                @endif
                <div class="col">
                    <h5>Beschäftigungsart</h5>
                    <div class="badge bg-secondary">{{ isset($nach->additional_fields['15']) ? $nach->additional_fields['15'] .' Stunden /' : '' }} {{ isset($nach->additional_fields['13']) ? $nach->additional_fields['13'] : 'unbestimmt' }}</div>
                </div>
                <div class="col-12">
                    <br>
                    <svg style="width: 14px; fill: #d0504f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                        <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z" />
                    </svg>
                    @isset ($nach->additional_fields['20']['postalCode'])
                    {{ $nach->additional_fields['20']['postalCode'] }} {{ $nach->additional_fields['20']['addressLocality'] }}
                    @endisset
                </div>
            </div>

            <style>
                h2 {
                    font-size: 1.4rem;
                    padding-top: 55px;
                }
                h5 {
                    font-size: 0.9rem;
                }
            </style>
            <div class="row">
                <div class="col-12">
                    <h2>Stellenbeschreibung</h2>
                    {!! isset($nach->additional_fields['17']) ? $nach->additional_fields['17'] : 'keine Angaben' !!}
                </div>
                <div class="col-12">
                    <h2>Ihre Qualifikationen</h2>
                    {!! isset($nach->additional_fields['16']) ? $nach->additional_fields['16'] : 'keine Angaben' !!}
                </div>
                <div class="col-12">
                    <h2>{{$nach->user->name}} als Arbeitgeber</h2>
                    {!! isset($nach->additional_fields['18']) ? $nach->additional_fields['18'] : 'keine Angaben' !!}
                </div>
            </div>
            <br>
            <br>
            @if(isset($nach->additional_fields['26']))
            <a class="btn btn-lg btn-ci" href="{{$nach->additional_fields['26']}}" target="_blank" onclick="gtag('event', 'redirect to external', {'event_category' : '{{$nach->title}}', 'event_label' : 'external'});">
                Direkt beim Arbeitgeber bewerben
                <svg style="width: 14px; fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                    <path d="M440,256H424a8,8,0,0,0-8,8V464a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V112A16,16,0,0,1,48,96H248a8,8,0,0,0,8-8V72a8,8,0,0,0-8-8H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V264A8,8,0,0,0,440,256ZM500,0,364,.34a12,12,0,0,0-12,12v10a12,12,0,0,0,12,12L454,34l.7.71L131.51,357.86a12,12,0,0,0,0,17l5.66,5.66a12,12,0,0,0,17,0L477.29,57.34l.71.7-.34,90a12,12,0,0,0,12,12h10a12,12,0,0,0,12-12L512,12A12,12,0,0,0,500,0Z" />
                </svg>
            </a>
            @else
            <a class="btn btn-lg btn-ci" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="gtag('event', 'show application form', {'event_category' : '{{$nach->title}}', 'event_label' : 'internal'});">
                Jetzt online Bewerbung einreichen <i class="fal fa-edit"></i>
            </a>
            @endif
            <br>
            <br>
            <br>
        </div>
        <div class="col-sm-3">
            <div id="box-subscribe" style="position: sticky; ">
                <div>
                    <div class="alert alert-warning">
                        <br>
                        <a class="text-dark" href="{{ route('author.get', [$nach->user->slug]) }}">
                            <img src="{{ $nach->user->gravatar() }}" class="rounded mx-auto d-block">
                        </a>
                        <br>
                        <div class="text-center">
                            <a href="{{ route('author.get', [$nach->user->slug]) }}">
                                Zum Arbeitgeberprofil <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </a>
                        </div>
                        <br>
                        <br>
                        @if(isset($nach->additional_fields['26']))
                        <a class="btn btn-lg btn-ci d-block" href="{{$nach->additional_fields['26']}}" target="_blank" onclick="gtag('event', 'redirect to external', {'event_category' : '{{$nach->title}}', 'event_label' : 'external'});">
                            Direkt beim Arbeitgeber bewerben
                            <svg style="width: 13px; fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                                <path d="M440,256H424a8,8,0,0,0-8,8V464a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V112A16,16,0,0,1,48,96H248a8,8,0,0,0,8-8V72a8,8,0,0,0-8-8H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V264A8,8,0,0,0,440,256ZM500,0,364,.34a12,12,0,0,0-12,12v10a12,12,0,0,0,12,12L454,34l.7.71L131.51,357.86a12,12,0,0,0,0,17l5.66,5.66a12,12,0,0,0,17,0L477.29,57.34l.71.7-.34,90a12,12,0,0,0,12,12h10a12,12,0,0,0,12-12L512,12A12,12,0,0,0,500,0Z" />
                            </svg>
                        </a>
                        @else
                        <a class="btn btn-lg btn-ci d-block" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="gtag('event', 'show application form', {'event_category' : '{{$nach->title}}', 'event_label' : 'internal'});">
                            Jetzt online bewerben <i class="fal fa-edit"></i>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @if(App::environment('production'))
        @if(isset($nach->additional_fields['14']))
        <div class="row">
            @if (\App\Models\Content::whereJsonContains('additional_fields->14', $nach->additional_fields['14'])->where('approved', 1)->where('id', '!=', $nach->id)->limit(4)->get()->sortByDesc('created_at')->count() > 0)
            <div class="col-12">
                <hr>
                <br>
                <h2>Ähnliche Jobangebote</h2>
                <br>
            </div>
            @foreach (\App\Models\Content::whereJsonContains('additional_fields->14', $nach->additional_fields['14'])->where('approved', 1)->where('id', '!=', $nach->id)->limit(3)->get()->sortByDesc('created_at') as $nachLimit)
            <div class="col-12 col-md-6 col-lg-4" style="padding-bottom: 1rem;">
                <div class="card h-100" style="background-color: #f8f8f8;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <a href="{{ route('author.get', [$nachLimit->user->slug]) }}" onclick="gtag('event', 'See Employer', {'event_category' : '{{$nach->title}}', 'event_label' : '{{ $nachLimit->user->name }}'});">
                                    <img src="{{ $nachLimit->user->gravatar() }}" title="" height="70px" class="border rounded">
                                </a>
                            </div>
                            <div class="col-9">
                                <br>
                                <a href="{{ route('author.get', [$nachLimit->user->slug]) }}" class="text-muted" onclick="gtag('event', 'See Employer', {'event_category' : '{{$nach->title}}', 'event_label' : '{{ $nachLimit->user->name }}'});">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                        <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                                    </svg>
                                    {{ $nachLimit->user->name }}
                                </a>
                            </div>
                            <div class="col-12">
                                <h5 class="card-title" style="margin-top: 20px;">
                                    <a href="{{ route_content($nachLimit) }}" onclick="gtag('event', 'See Job', {'event_category' : '{{$nach->title}}', 'event_label' : '{{ $nachLimit->title }}'});">
                                        {{ $nachLimit->title }}
                                    </a>
                                </h5>
                            </div>
                            <div class="col-5">
                                <br>
                                <h6 class="card-subtitle mb-2 text-muted">{{date('d.m.Y', strtotime($nachLimit->updated_at))}}</h6>
                            </div>
                            <div class="col-7 text-end ">
                                <br>
                                <a class="btn btn-ci" href="{{ route_content($nachLimit) }}" onclick="gtag('event', 'See Job', {'event_category' : '{{$nach->title}}', 'event_label' : '{{ $nachLimit->title }}'});">
                                    Job ansehen
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            <div class="col-sm-12">
                <br>
                <br>
            </div>
        </div>
        @endif
        @endif
    </div>
</div>
<div id="mobile-calltoaction">
    <div class="row">
        <div class="col-8">
            @if(isset($nach->additional_fields['26']))
            <a class="btn btn-lg btn-success d-block mt-2" href="{{$nach->additional_fields['26']}}" target="_blank" onclick="gtag('event', 'redirect to external', {'event_category' : '{{$nach->title}}', 'event_label' : 'external'});">
                Direkt beim Arbeitgeber bewerben
                <svg style="width: 14px; fill: white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                    <path d="M440,256H424a8,8,0,0,0-8,8V464a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V112A16,16,0,0,1,48,96H248a8,8,0,0,0,8-8V72a8,8,0,0,0-8-8H48A48,48,0,0,0,0,112V464a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V264A8,8,0,0,0,440,256ZM500,0,364,.34a12,12,0,0,0-12,12v10a12,12,0,0,0,12,12L454,34l.7.71L131.51,357.86a12,12,0,0,0,0,17l5.66,5.66a12,12,0,0,0,17,0L477.29,57.34l.71.7-.34,90a12,12,0,0,0,12,12h10a12,12,0,0,0,12-12L512,12A12,12,0,0,0,500,0Z" />
                </svg>
            </a>
            @elseif($nach->user->id == 63)
            <!-- Calendly Link-Widget Beginn -->
            <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
            <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
            <!-- Calendly Link-Widget Ende -->
            <a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/jobs-oberpfalz/personal-leasing-puran?hide_gdpr_banner=1'});return false;" class="btn btn-success d-block mt-2" style="margin-left:30px;">
                <svg style="fill: white; width:23px; margin-right:6px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M528 0H48C21.5 0 0 21.5 0 48v288c0 26.5 21.5 48 48 48h192l-24 96h-72c-8.8 0-16 7.2-16 16s7.2 16 16 16h288c8.8 0 16-7.2 16-16s-7.2-16-16-16h-72l-24-96h192c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM249 480l16-64h46l16 64h-78zm295-144c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V48c0-8.8 7.2-16 16-16h480c8.8 0 16 7.2 16 16v288z" />
                </svg>
                Online Bewerbungsgespräch
            </a>
            <small>Garantiertes Bewerbungsgespräch</small>
            @else
            <a href="" class="btn btn-success d-block mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="gtag('event', 'show application form', {'event_category' : '{{$nach->title}}', 'event_label' : 'internal'});" style="margin-left:30px;">Jetzt online bewerben
            </a>
            <small>1min Bewerbung</small>
            @endif
        </div>
        <div class="col-2">
            <button id="btn-share" style="background: transparent; border: none;" title="Funktion ist im Wartungsmodus">
                <svg style="fill:white; width:32px; margin-top:18px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M503.691 189.836L327.687 37.851C312.281 24.546 288 35.347 288 56.015v80.053C127.371 137.907 0 170.1 0 322.326c0 61.441 39.581 122.309 83.333 154.132 13.653 9.931 33.111-2.533 28.077-18.631C66.066 312.814 132.917 274.316 288 272.085V360c0 20.7 24.3 31.453 39.687 18.164l176.004-152c11.071-9.562 11.086-26.753 0-36.328z" />
                </svg>
            </button>
        </div>
        <div class="col-2" style="margin-top: 19px;margin-left: -16px;">
            <button id="btn-like" title="Funktion ist im Wartungsmodus">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
                </svg>
            </button>
        </div>
    </div>
</div>
@stop
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    const shareData = {
        title: "{{ $nach->title }}",
        text: 'Text',
        url: window.location.href,
    }
</script>
<script src="{{ asset('template/js/pages/news/methods.js') }}"></script>
<script src="{{ asset('template/js/pages/news/events.js') }}"></script>
<script src="{{ asset('template/js/pages/news/script.js') }}"></script>
<script src="{{ asset('system/js/intlTelInput.min.js') }}"></script>
<script>
    var input = document.querySelector(".phone");
    var iti = window.intlTelInput(input, {
        initialCountry: "de",
        geoIpLookup: function(callback) {
            $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "us";
                callback(countryCode);
            });
        },
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.11/js/utils.min.js",
        // any initialisation options go here
    });
    $("#formPost").submit(function() {
        if (iti.isValidNumber() == false) {
            alert('Telefonnummer nicht gültig!');
            return false;
        }
        return true;
    });
</script>
@stop