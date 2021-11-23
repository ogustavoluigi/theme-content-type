@extends('template.'.config('settings.template').'.content.master')
@section('meta_title', 'Jobs-Oberpfalz.de | Finde hier die besten Jobs der Oberpfalz')
@section('meta_description', 'Aktuelle Stellenangebote aus deiner Region. Über 800 Arbeitgeber mit offenen Stellen warten auf dich. Online Bewerbung ohne Registrierung!')
@section('head')    
<style>
    .slick-slider{position:relative;display:block;box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list{position:relative;display:block;overflow:hidden;margin:0;padding:0}.slick-list:focus{outline:none}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0, 0, 0);-moz-transform:translate3d(0, 0, 0);-ms-transform:translate3d(0, 0, 0);-o-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}.slick-track{position:relative;top:0;left:0;display:block;margin-left:auto;margin-right:auto}.slick-track:after,.slick-track:before{display:table;content:''}.slick-track:after{clear:both}.slick-loading .slick-track{visibility:hidden}.slick-slide{display:none;float:left;height:100%;min-height:1px}[dir='rtl'] .slick-slide{float:right}.slick-slide img{display:block}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-loading .slick-slide{visibility:hidden}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{display:none}
    .slick-slide{margin:0 20px}.logo-carousel{overflow:inherit}.slick-slide img{width:100%}.slick-track::after,.slick-track::before{display:table;content:''}.slick-track::after{clear:both}.slick-track{}.slick-loading .slick-track{visibility:hidden}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-loading .slick-slide{visibility:hidden}.slick-arrow{position:absolute;top:50%;background:url("https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/arrow.svg?sanitize=true") center no-repeat;color:#fff;filter: invert(77%) sepia(32%) saturate(1%) hue-rotate(344deg) brightness(105%) contrast(103%);border:none;width:2rem;height:1.5rem;text-indent:-10000px;margin-top:-16px;z-index:99}.slick-arrow.slick-next{right:5px;transform:rotate(180deg)}.slick-arrow.slick-prev{left:5px}@media (max-width: 768px){.slick-arrow{width:1rem;height:1rem}}.carousel-row{overflow:hidden}.logo-carousel{margin-top:32px}

    @media only screen and (max-width: 676px) {
        #home-hero {
            width: 100%;
            background-color: #9699AA;
            background-image: url('https://www.jobs-oberpfalz.de/images/manual/regensburg-sm.jpg');
            background-position: center;
            background-size: cover;
        }
    }
    @media only screen and (min-width: 676px) {
        #home-hero {
            width: 100%;
            background-color: #9699AA;
            background-image: url('https://www.jobs-oberpfalz.de/images/manual/regensburg.jpg');
            background-position: center;
            background-size: cover;
        }
    }

    .result-item{display:flex;align-items:center;margin-top:40px;font-size:20px}.result-item span{margin-left:10px;font-size:12px;padding:2px 5px;border-radius:5px;font-style:italic;color:#fff;background-color:#f44336aa}

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
@stop
@section('content')
<div class="row">
    <div id="home-hero">
        <div class="d-none d-md-block">
            <br>
            <br>
        </div>
        <div id="city_headline">
            <h1>Die besten <strong>Arbeitsstellen</strong> der <strong>Oberpfalz</strong></h1>
            <h2 class="shadow">Jetzt Traumjob finden und direkt online bewerben.</h2>
        </div>
        <div class="d-none d-md-block">
            <br>
        </div>
        <div class="d-none d-lg-block">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
    <style>
        #searchcontainer {
            background: rgb(255, 255, 255);
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.7413165949973739) 0%, rgba(244, 156, 53, 0.556442645417542) 50%, rgba(252, 176, 69, 1) 100%);
            padding-top: 30px;
            padding-bottom: 30px;
        }
        @media only screen and (min-width: 990px) {
            #searchcontainer {
                margin-top: -109px;
            }
        }
    </style>
    <div id="searchcontainer" class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="inputGroup-sizing-lg">🔍</span>
                    <input type="search" id="txt-main-search" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Suche nach Arbeitgeber, Region, Branche, ..." list="searchresults">
                </div>
            </div>
        </div>
    </div>
</div> <!-- header_static -->
<div class="contaeinr">
</div>
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
                    <a href="{{url('/arbeitgeber')}}/{{$premiumAuthor->slug}}" class="text-center" style="font-size: 13px;">
                        <img src="{{url('/uploads/profile')}}/{{$premiumAuthor->image}}" loading="lazy" alt="Logo {{$premiumAuthor->name}}" class="img-fluid center-block border rounded mb-2">
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
        <div class="col-lg-12 mb-4">
            <h2 id="latest_jobs" class="mt-5 mb-4">Aktuelle <strong>Jobangebote</strong></h2>
        </div>
        <div id="list-filter-menue" class="d-none d-lg-block col-12 position-relative col-md-3 rounded-end" style="background-color: #f49c35; padding: 25px;">
            <div class="row">
                <div class="col-12">
                    @php($oldListName = null)
                    @foreach($lists as $list)
                    @if($list->group->name != $oldListName)
                    <h5 class="mt-5 mb-3 fw-bold">{{$list->group->name}}</h5>
                    @endif
                    @php($countContentsInFilter = getNachByFilterList(null, $list)->count())
                    @if($countContentsInFilter > 0)
                    <div class="form-check">
                        <input class="form-check-input check-branche" type="checkbox" value="{{$list->slug}}" id="flexCheck{{$list->name}}">
                        <label class="form-check-label" for="flexCheck{{$list->name}}">
                        {{$list->name}}  <span class="badge bg-light text-dark">{{$countContentsInFilter}} Jobs</span>
                        </label>
                    </div>
                    @endif
                    @php($oldListName = $list->group->name)
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-9">
            @php($externe = false)
            @foreach($contents as $indexContent => $content)
                @if($content->premium_id == 1)
                    <div class="card mb-3" style="background-color: #c3eebf3d;">
                        <div class="text-center rounded-top" style="font-size: 12px; background-color: #61bb9052">
                            <svg style="fill: black; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z"/></svg>
                            Premium Jobangebot
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-12 col-lg-8 d-lg-none">
                                    <h5 class="card-title fs-6 pt-2 pb-2">
                                        <a href="{{ route_content($content) }}" >{{$content->title}}</a>
                                    </h5>
                                </div>


                                <div class="col-2 col-md-3 col-lg-2 text-sm-center">
                                    <a href="{{ route('author.get', [$content->user->slug]) }}" >
                                        <img src="{{ $content->user->gravatar() }}" title="{{ $content->user->name }}" class="border rounded img-fluid" alt="Logo Krones AG" style="max-width: 58px;">
                                    </a>

                                    <a href="{{ route('author.get', [$content->user->slug]) }}" style="font-size: 13px;" class="text-muted d-none d-lg-block " >
                                        {{$content->user->name}}
                                    </a>
                                </div>
                                <div class=" col-10 d-lg-none pt-sm-3">
                                    <a href="{{ route('author.get', [$content->user->slug]) }}" style="font-size: 13px;" class="text-muted">
                                        {{$content->user->name}}
                                    </a>


                                </div>

                                <div class="d-none d-lg-block col-md-8">
                                    <h5 class="card-title fs-6 pt-4 pb-3">
                                        <a href="{{ route_content($content) }}" >{{$content->title}}</a>
                                    </h5>
                                </div>


                                <div class="col-6 col-sm-6 d-lg-none">
                                    @php(\Carbon\Carbon::setLocale('de'))
                                    <h6 class="card-subtitle mb-2 text-muted" title="{{date('d.m.Y', strtotime($content->updated_at))}}"> {{ $content->updated_at->diffForHumans() }}</h6>
                                </div>

                                <div class="col-6 col-sm-6 col-lg-2 text-end pt-2 pt-lg-4">

                                    <h6  style="padding-right: 8%" class="card-subtitle mb-2 text-muted d-none d-lg-block" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{ $content->updated_at->diffForHumans() }}</h6>

                                    <a class="btn btn-ci btn-sm" href="{{ route_content($content) }}">
                                        Job ansehen
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($content->premium_id == 2)
                    <div class="col-12">
                        <div class="card mb-3" style="background-color: #f8f8f8;">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-3 col-lg-1">
                                        <a href="{{ route('author.get', [$content->user->slug]) }}" onclick="gtag('event', 'See Employer', {'event_label' : '{{ $content->user->name }}'});">
                                            <img src="{{ $content->user->gravatar() }}" title="{{ $content->user->name }}" height="70px" class="border rounded" alt="Logo {{ $content->user->name }}">
                                        </a>
                                    </div>
                                    <div class="col-9 col-lg-2">
                                        <br>
                                        <a href="{{ route('author.get', [$content->user->slug]) }}" class="text-muted" onclick="gtag('event', 'See Employer', {'event_label' : '{{ $content->user->name }}'});">

                                            {{ $content->user->name }}
                                            <br>


                                        </a>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <h5 class="card-title" style="margin-top: 20px;">
                                            <a href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_label' : '{{$content->title}}'});">
                                                {{$content->title}}
                                            </a>
                                        </h5>

                                        <span class="badge bg-success">
                                            <svg style="fill: white; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z"/></svg>
                                            Top Arbeitgeber
                                        </span>
                                    </div>

                                    <div class="col-5 d-lg-none">
                                        <br>
                                        @php(\Carbon\Carbon::setLocale('de'))
                                        <h6 class="card-subtitle mb-2 text-muted" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{ $content->updated_at->diffForHumans() }}</h6>
                                    </div>
                                    <div class="col-7 col-lg-2 text-end ">
                                        <h6 class="card-subtitle mb-2 text-muted d-none d-lg-block text-center" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{ $content->updated_at->diffForHumans() }}</h6>
                                        <a class="btn btn-ci btn-sm" href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_label' : '{{$content->title}}'});">
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
                @elseif($content->premium_id == 3)
                    <div class="col-12" style="padding-bottom: 1rem;">
                        <div class="card" style="background-color: #f8f8f8;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3 col-lg-1">
                                        <a href="{{ route('author.get', [$content->user->slug]) }}" onclick="gtag('event', 'See Employer', {'event_category' : 'Home', 'event_label' : '{{ $content->user->name }}'});">
                                            <img src="{{ $content->user->gravatar() }}" title="{{ $content->user->name }}" class="border rounded img-fluid shadow-sm" alt="Logo {{ $content->user->name }} ">
                                        </a>
                                    </div>
                                    <div class="col-9 col-lg-2">
                                        <br>
                                        <a href="{{ route('author.get', [$content->user->slug]) }}" class="text-muted" onclick="gtag('event', 'See Employer', {'event_category' : 'Home', 'event_label' : '{{ $content->user->name }}'});">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="height:25px; fill: black;" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                                <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                                            </svg>
                                            {{ $content->user->name }}
                                        </a>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <h5 class="card-title" style="margin-top: 20px;">
                                            <a href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'Home', 'event_label' : '{{$content->title}}'});">
                                                {{$content->title}}
                                            </a>
                                        </h5>
                                    </div>
                                    <div class="col-5 d-lg-none">
                                        <br>
                                        @php(\Carbon\Carbon::setLocale('de'))
                                        <h6 class="card-subtitle mb-2 text-muted" title="{{date('d.m.Y', strtotime($content->updated_at))}}"> {{ $content->updated_at->diffForHumans() }}</h6>

                                    </div>
                                    <div class="col-7 col-lg-2 text-end ">
                                        <h6 class="card-subtitle mb-2 text-muted d-none d-lg-block text-center mt-3" title="{{date('d.m.Y', strtotime($content->updated_at))}}"> {{ $content->updated_at->diffForHumans() }}</h6>
                                        <a class="btn btn-ci btn-sm" href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'Home', 'event_label' : '{{$content->title}}'});">
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
                @elseif($content->premium_id == 4)
                    @if(!$externe)
                    <div class="row">
                    @endif
                    <div class="col-12 col-md-4 mb-3">
                        <a href="{{(isset($content->additional_fields['26'])?$content->additional_fields['26']:'')}}" target="_blank" rel="sponsored">
                            <div class="card shadow-sm h-100" style="background-color: #f7efef6b;">
                                <div class="text-center rounded-top" style="font-size: 12px; background-color: #ae9f7a52">
                                    <svg style="fill: black; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z"/></svg>
                                    Externe Partnerangebote
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="card-title fs-6">{{$content->title}}</h5>
                                        </div>
                                        <div class="col-12 text-center">
                                            <h6 class="card-subtitle mt-2 text-muted" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{(isset($content->additional_fields['18'])?$content->additional_fields['18']:'')}}</h6>
                                        </div>
                                        <div class=" col-12 pt-sm-3">
                                            <div style="font-size: 13px;" class="text-muted">
                                                @php(\Carbon\Carbon::setLocale('de'))
                                                {{$content->updated_at->diffForHumans()}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @if($indexContent == count($contents)-1)
                    </div>
                    <br>
                    @endif
                    @php($externe = true)
                @endif
            @endforeach
            <div style="margin: auto;text-align: center; overflow: scroll;">
                {!! $contents->onEachSide(1)->fragment("latest_jobs")->render() !!}
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row" style="overflow: scroll">
        <h2 class="mb-4">JOBANGEBOTE NACH <strong>BRANCHE</strong></h2>
        <style>
            .jobbranche {
                font-size: 19px;
                border: 2px solid #f49c35;
                background-color: #f8f8f8;
                color: black;
                padding: 10px;
                margin: 8px;
            }
            .jobbranche:hover {
                border: 2px solid #ec8b19;
                background-color: #f49c35;
                color: white;
            }
            #jobbranche {
                text-align: center;
                overflow: scroll-x;
            }
            #jobbranche a:hover,
            #jobbranche a:active {
                text-decoration: none;
            }
        </style>
        <div id="jobbranche">
            <a href="{{url('/wissenschaft-ingenieurwesen')}}">
                <div class="badge primary jobbranche">
                    <svg style="height: 25px; fill: black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M434.9 410.7L288 218.6V32h26c3.3 0 6-2.7 6-6V6c0-3.3-2.7-6-6-6H134c-3.3 0-6 2.7-6 6v20c0 3.3 2.7 6 6 6h26v186.6L13.1 410.7C-18.6 452.2 11 512 63.1 512h321.8c52.2 0 81.7-59.8 50-101.3zm-50 69.3H63.1c-25.7 0-40.3-29.4-24.6-49.8l150.2-196.5c2.1-2.8 3.3-6.2 3.3-9.7V32h64v192c0 3.5 1.2 6.9 3.3 9.7l150.2 196.5c15.6 20.4 1.2 49.8-24.6 49.8z" />
                    </svg>
                    Wissenschaft & Ingenieurwesen
                </div>
            </a>
            <a href="{{url('/gesundheitswesen')}}">
                <div class="badge primary jobbranche">
                    <svg xmlns="http://www.w3.org/2000/svg" style="height:25px; fill: black;" viewBox="0 0 448 512">
                        <path d="M319.41,318,224,413.39,128.59,318C57.09,321.09,0,379.59,0,451.8A58.23,58.23,0,0,0,58.2,510H389.8A58.23,58.23,0,0,0,448,451.8C448,379.59,390.91,321.09,319.41,318ZM208,478H58.2A26.28,26.28,0,0,1,32,451.8c0-47.46,38-92.44,84.73-100.41L208,442.66Zm181.8,0H240V442.64l91.25-91.25C378,359.36,416,404.34,416,451.8A26.28,26.28,0,0,1,389.8,478ZM224,302A128,128,0,0,0,352,174V63.82a32,32,0,0,0-20.76-30L246.47,2.07a64.06,64.06,0,0,0-44.94,0L116.76,33.86A32,32,0,0,0,96,63.82V174A128,128,0,0,0,224,302ZM128,63.82,212.77,32a32,32,0,0,1,22.47,0L320,63.82V142H128ZM320,174a96,96,0,0,1-192,0ZM259,72.67H237.33V51a5,5,0,0,0-5-5H215.67a5,5,0,0,0-5,5V72.67H189a5,5,0,0,0-5,5V94.33a5,5,0,0,0,5,5h21.67V121a5,5,0,0,0,5,5h16.66a5,5,0,0,0,5-5V99.33H259a5,5,0,0,0,5-5V77.67A5,5,0,0,0,259,72.67Z" />
                    </svg>
                    Gesundheitswesen
                </div>
            </a>
            <a href="{{url('/computer-it')}}">
                <div class="badge primary jobbranche">
                    <svg xmlns="http://www.w3.org/2000/svg" style="height:25px; fill: black;" viewBox="0 0 640 512">
                        <path d="M624 368h-48V96c0-35.3-28.72-64-64-64H128c-35.28 0-64 28.7-64 64v272H16c-8.84 0-16 7.16-16 16v48c0 44.11 35.88 80 80 80h480c44.12 0 80-35.89 80-80v-48c0-8.84-7.16-16-16-16zM96 96c0-17.67 14.33-32 32-32h384c17.67 0 32 14.33 32 32v272H391.13c-4.06 0-7.02 3.13-7.92 7.09C379.98 389.35 367.23 400 352 400h-64c-15.23 0-27.98-10.65-31.21-24.91-.9-3.96-3.86-7.09-7.92-7.09H96V96zm512 336c0 26.47-21.53 48-48 48H80c-26.47 0-48-21.53-48-48v-32h194.75c6.59 18.62 24.38 32 45.25 32h96c20.88 0 38.66-13.38 45.25-32H608v32z" />
                    </svg>
                    Computer & IT
                </div>
            </a>
            <a href="{{url('/management')}}">
                <div class="badge primary jobbranche">
                    <svg xmlns="http://www.w3.org/2000/svg" style="height:25px; fill: black;" viewBox="0 0 448 512">
                        <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm0-224c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96zm91.9 272.2L276.2 442l-33.9-101.7 25-25c10.1-10.1 2.9-27.3-11.3-27.3h-64c-14.3 0-21.4 17.2-11.3 27.3l25 25L171.8 442l-39.7-137.7C58.9 305.5 0 365 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-73.4-58.9-132.9-132.1-134.2zM48 480c-8.8 0-16-7.2-16-16v-25.6c0-47.2 32.8-87.5 76.9-98.9L149.5 480H48zm144.9 0l31.1-93.4 31.1 93.4h-62.2zM416 464c0 8.8-7.2 16-16 16H298.5L339 339.5c44.1 11.4 76.9 51.7 76.9 98.9V464z" />
                    </svg>
                    Management
                </div>
            </a>
            <a href="{{url('/produktion-lager')}}">
                <div class="badge primary jobbranche">
                    <svg xmlns="http://www.w3.org/2000/svg" style="height:25px; fill: black;" viewBox="0 0 640 512">
                        <path d="M416 368.4v-99.2c0-8.7-1.8-17.2-5.2-25.2L332.5 61.1C324.9 43.4 307.6 32 288.3 32H144c-26.5 0-48 21.5-48 48v112H48c-26.5 0-48 21.5-48 48v192c0 44.2 35.8 80 80 80 38.7 0 71-27.5 78.4-64h131.2c7.4 36.5 39.7 64 78.4 64 44.2 0 80-35.8 80-80 0-26.1-12.7-49-32-63.6zM128 80c0-8.8 7.2-16 16-16h144.3c6.4 0 12.2 3.8 14.7 9.7l78.4 182.8c1.7 4 2.6 8.2 2.6 12.6V288H247.7c-11.4 0-22.5-4.1-31.2-11.5L128 200.6V80zM80 480c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm209.6-64H158.4c-7.4-36.5-39.7-64-78.4-64-18.1 0-34.6 6.2-48 16.4V240c0-8.8 7.2-16 16-16h58.1l89.5 76.7c14.5 12.4 33 19.3 52 19.3H384v33.6c-5.2-1.1-10.5-1.6-16-1.6-38.7 0-71 27.5-78.4 64zm78.4 64c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm264-64H512V8c0-4.4-3.6-8-8-8h-16c-4.4 0-8 3.6-8 8v432c0 4.4 3.6 8 8 8h144c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8z" />
                    </svg>
                    Produktion & Lager
                </div>
            </a>
            <a href="{{url('/buchhaltung-finanzen')}}">
                <div class="badge primary jobbranche">
                    <svg xmlns="http://www.w3.org/2000/svg" style="height:25px; fill: black;" viewBox="0 0 512 512">
                        <path d="M334.89 121.63l43.72-71.89C392.77 28.47 377.53 0 352 0H160.15c-25.56 0-40.8 28.5-26.61 49.76l43.57 71.88C-9.27 240.59.08 392.36.08 412c0 55.23 49.11 100 109.68 100h292.5c60.58 0 109.68-44.77 109.68-100 0-19.28 8.28-172-177.05-290.37zM160.15 32H352l-49.13 80h-93.73zM480 412c0 37.49-34.85 68-77.69 68H109.76c-42.84 0-77.69-30.51-77.69-68v-3.36c-.93-59.86 20-173 168.91-264.64h110.1C459.64 235.46 480.76 348.94 480 409zM285.61 310.74l-49-14.54c-5.66-1.62-9.57-7.22-9.57-13.68 0-7.86 5.76-14.21 12.84-14.21h30.57a26.78 26.78 0 0 1 13.93 4 8.92 8.92 0 0 0 11-.75l12.73-12.17a8.54 8.54 0 0 0-.65-13 63.12 63.12 0 0 0-34.17-12.17v-17.6a8.68 8.68 0 0 0-8.7-8.62H247.2a8.69 8.69 0 0 0-8.71 8.62v17.44c-25.79.75-46.46 22.19-46.46 48.57 0 21.54 14.14 40.71 34.38 46.74l49 14.54c5.66 1.61 9.58 7.21 9.58 13.67 0 7.87-5.77 14.22-12.84 14.22h-30.61a26.72 26.72 0 0 1-13.93-4 8.92 8.92 0 0 0-11 .76l-12.84 12.06a8.55 8.55 0 0 0 .65 13 63.2 63.2 0 0 0 34.17 12.17v17.55a8.69 8.69 0 0 0 8.71 8.62h17.41a8.69 8.69 0 0 0 8.7-8.62V406c25.68-.64 46.46-22.18 46.57-48.56.02-21.5-14.13-40.67-34.37-46.7z" />
                    </svg>
                    Buchaltung & Finanzen
                </div>
            </a>
            <a href="{{url('/vertrieb-einzelhandel')}}">
                <div class="badge primary jobbranche">
                    <svg xmlns="http://www.w3.org/2000/svg" style="height:25px; fill: black;" viewBox="0 0 616 512">
                        <path d="M602 118.6L537.1 15C531.3 5.7 521 0 510 0H106C95 0 84.7 5.7 78.9 15L14 118.6c-29.6 47.2-10 110.6 38 130.8v227.4c0 19.4 14.3 35.2 32 35.2h448c17.7 0 32-15.8 32-35.2V249.4c48-20.2 67.6-83.6 38-130.8zm-70 358.2c0 2-.8 3.1-.2 3.2l-446.6.3c-.3-.2-1.2-1.3-1.2-3.5V352h448zM84 320v-64h2.5c29.6 0 55.8-13 73.8-33.1 18 20.1 44.3 33.1 73.8 33.1 29.6 0 55.8-13 73.8-33.1 18 20.1 44.3 33.1 73.8 33.1 29.6 0 55.8-13 73.8-33.1 18.1 20.1 44.3 33.1 73.9 33.1h2.5v64zm494.2-126.5c-7.8 16.6-22.1 27.5-39.3 29.8-3.1.4-6.2.6-9.4.6-19.3 0-37-8-50-22.5L455.7 175l-23.8 26.6c-13 14.5-30.7 22.5-50 22.5s-37-8-50-22.5L308 175l-23.8 26.6c-13 14.5-30.7 22.5-50 22.5s-37-8-50-22.5L160.3 175l-23.8 26.6c-13 14.5-30.7 22.5-50 22.5-3.2 0-6.3-.2-9.4-.6-17.2-2.3-31.5-13.2-39.3-29.8-8.7-18.6-7.5-40.8 3.3-57.9L106 32h404l64.9 103.6c10.8 17.2 12 39.3 3.3 57.9z" />
                    </svg>
                    Vertrieb & Einzelhandel
                </div>
            </a>
            <a href="{{url('/bauwesen')}}">
                <div class="badge primary jobbranche">
                    <svg xmlns="http://www.w3.org/2000/svg" style="height:25px; fill: black;" viewBox="0 0 640 512">
                        <path d="M289.38 372l-83-53.81-29.75 109.4a16 16 0 0 0 11.23 19.69 15.75 15.75 0 0 0 4.22.56A16 16 0 0 0 207.45 436l18.25-67.06 46.31 30v32.85a16 16 0 1 0 32 0v-32.85A32 32 0 0 0 289.38 372zM308 215.22a28.08 28.08 0 1 0-28-28.07 28 28 0 0 0 28 28.07zm168.87 117.17a10.92 10.92 0 0 0-8.4-6.13 16.3 16.3 0 0 0-5-1.23h-.07a1400.59 1400.59 0 0 0-7.31 1.76 15.78 15.78 0 0 0-6 5.35l-28.34 42.44-79.45-49-10.55-52.87c-3.72-18.66-18.11-33.4-35.56-37.24l-24.57-7.3a47.44 47.44 0 0 0-10.45-1.17 48 48 0 0 0-38.35 19.27l-11.6 15.53a16.07 16.07 0 0 0 4.4 23.28l103.94 64.14a.6.6 0 0 0 .11.06l70.65 43.6H369a19.14 19.14 0 0 0-18.21 12.54L336 447.83h185.49A16 16 0 0 0 535 423.12zm-229.53-65.46l1.09-1.47a16 16 0 0 1 12.74-6.46 14.86 14.86 0 0 1 2.66.23l23.3 6.92 1.11.33 1.13.25c5.21 1.15 9.86 6.27 11 12.19l4.72 23.62zm185.45 148.82l3.38-5.07 27-40.37 29.08 45.44zm199.51 22.74L361.43 20.91C343.37-7 296.63-7 278.57 20.91L7.7 438.49a46.38 46.38 0 0 0-1.94 48A49.12 49.12 0 0 0 49.13 512h541.74a49.12 49.12 0 0 0 43.37-25.54 46.38 46.38 0 0 0-1.94-47.97zm-26.18 32.67a17 17 0 0 1-15.25 8.76H49.13a17 17 0 0 1-15.25-8.76 14.59 14.59 0 0 1 .63-15.16L305.38 38.4a17.78 17.78 0 0 1 29.24 0L605.49 456a14.59 14.59 0 0 1 .63 15.16z" />
                    </svg>
                    Bauwesen
                </div>
            </a>
            <a href="{{url('/installation')}}">
                <div class="badge primary jobbranche">
                    <svg xmlns="http://www.w3.org/2000/svg" style="height:25px; fill: black;" viewBox="0 0 512 512">
                        <path d="M507.42 114.49c-2.34-9.47-9.66-16.98-19.06-19.61-9.47-2.61-19.65 0-26.65 6.98l-63.87 63.87-44.25-7.36-7.38-44.24 63.87-63.87c6.94-6.92 9.62-17.09 7-26.54-2.62-9.47-10.19-16.83-19.75-19.2C345.6-8.31 291.95 6.54 254.14 44.3c-37.84 37.87-52.21 92.52-38.62 144.7L22.19 382.29c-29.59 29.63-29.59 77.83 0 107.45C36.54 504.09 55.63 512 75.94 512s39.37-7.91 53.71-22.26l193.14-193.11c52.03 13.73 106.8-.72 144.89-38.82 37.81-37.81 52.68-91.39 39.74-143.32zm-62.36 120.7c-31.87 31.81-78.43 42.63-121.77 28.23l-9.38-3.14-206.88 206.84c-16.62 16.62-45.59 16.62-62.21 0-17.12-17.14-17.12-45.06 0-62.21l207.01-206.98-3.09-9.34c-14.31-43.45-3.56-90.06 28.03-121.67C299.48 44.2 329.44 32 360.56 32c6.87 0 13.81.59 20.72 1.81l-69.31 69.35 13.81 83.02L408.84 200l69.3-69.35c6.72 38.25-5.34 76.79-33.08 104.54zM80 416c-8.84 0-16 7.16-16 16s7.16 16 16 16 16-7.16 16-16-7.16-16-16-16z" />
                    </svg>
                    Installation, Wartung & Instandsetzung
                </div>
            </a>
            <a href="{{url('/verwaltung-buero')}}">
                <div class="badge primary jobbranche">
                    <svg xmlns="http://www.w3.org/2000/svg" style="height:25px; fill: black;" viewBox="0 0 384 512">
                        <path d="M32 240v-96c0-8.84-7.16-16-16-16s-16 7.16-16 16v96c0 8.84 7.16 16 16 16s16-7.16 16-16zm314.49 47.03c-6.39-10.63-15.74-18.67-26.49-24.02V64c0-35.35-28.65-64-64-64H128C92.65 0 64 28.65 64 64v199.01c-10.75 5.35-20.1 13.39-26.49 24.02l-14.57 24.24C3.71 343.26 26.75 384 64.07 384H176v33.22c-35.61 5.41-65 28.54-77.85 59.63-6.41 15.51 2.41 35.14 15.02 35.14h157.66c12.61 0 21.44-19.63 15.02-35.14-12.85-31.08-42.24-54.22-77.85-59.63V384h111.93c37.33 0 60.37-40.74 41.14-72.73l-14.58-24.24zM96 64c0-17.64 14.36-32 32-32h128c17.64 0 32 14.36 32 32v192H96V64zm155.6 416H132.4c12.18-19.47 34.96-32 59.6-32s47.42 12.53 59.6 32zm82.25-136.12c-1.38 2.44-5.5 8.12-13.93 8.12H64.07c-8.42 0-12.54-5.68-13.93-8.12-1.38-2.44-4.13-8.9.21-16.12l14.57-24.24C70.69 293.95 81.19 288 92.36 288h199.28c11.17 0 21.67 5.95 27.43 15.52l14.57 24.24c4.34 7.21 1.59 13.68.21 16.12zM368 128c-8.84 0-16 7.16-16 16v96c0 8.84 7.16 16 16 16s16-7.16 16-16v-96c0-8.84-7.16-16-16-16z" />
                    </svg>
                    Verwaltung & Büro
                </div>
            </a>
            <a href="{{url('/bildung')}}">
                <div class="badge primary jobbranche">
                    <svg style="height: 25px; fill: black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path d="M575.33 456.43L399 8.02C397.28 3.1 392.61 0 387.65 0c-3.01 0-4.97 1.03-11.49 3.31-6.46 2.26-9.82 8.24-6.27 18.38-16.46 9.69-59.15 24.09-75.5 26.42-1.33-3.78-1.97-6.62-6.4-9.23V32c0-17.67-14.33-32-32-32h-96c-5.96 0-11.22 2.07-16 4.9C139.22 2.07 133.96 0 128 0H32C14.33 0 0 14.33 0 32v448c0 17.67 14.33 32 32 32h96c5.96 0 11.22-2.07 16-4.9 4.78 2.84 10.04 4.9 16 4.9h96c17.67 0 32-14.33 32-32V118.88l151.43 385.1c1.73 4.92 6.4 8.02 11.35 8.02 3 0 4.96-1.03 11.49-3.31 6.44-2.25 9.83-8.23 6.27-18.38 16.46-9.69 59.15-24.09 75.5-26.42 3.65 10.4 10.13 12.65 16.38 10.46l7.55-2.64c6.23-2.19 9.54-9.07 7.36-15.28zM128 480H32v-64h96v64zm0-96H32V128h96v256zm0-288H32V32h96v64zm128 384h-96v-64h96v64zm0-96h-96V128h96v256zm0-288h-96V32h96v64zm203.15 367.54L303.79 74.88c25.22-4.74 64.01-20.33 75.5-26.42l155.36 388.65c-25.23 4.75-64.01 20.33-75.5 26.43z" />
                    </svg>
                    Bildung
                </div>
            </a>
            <a href="{{url('/transport-logistik')}}">
                <div class="badge primary jobbranche">
                    <svg style="height: 25px; fill: black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path d="M632 384h-24V275.9c0-16.8-6.8-33.3-18.8-45.2l-83.9-83.9c-11.8-12-28.3-18.8-45.2-18.8H416V78.6c0-25.7-22.2-46.6-49.4-46.6H49.4C22.2 32 0 52.9 0 78.6v290.8C0 395.1 22.2 416 49.4 416h16.2c-1.1 5.2-1.6 10.5-1.6 16 0 44.2 35.8 80 80 80s80-35.8 80-80c0-5.5-.6-10.8-1.6-16h195.2c-1.1 5.2-1.6 10.5-1.6 16 0 44.2 35.8 80 80 80s80-35.8 80-80c0-5.5-.6-10.8-1.6-16H632c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8zM460.1 160c8.4 0 16.7 3.4 22.6 9.4l83.9 83.9c.8.8 1.1 1.9 1.8 2.8H416v-96h44.1zM144 480c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm63.6-96C193 364.7 170 352 144 352s-49 12.7-63.6 32h-31c-9.6 0-17.4-6.5-17.4-14.6V78.6C32 70.5 39.8 64 49.4 64h317.2c9.6 0 17.4 6.5 17.4 14.6V384H207.6zM496 480c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm0-128c-26.1 0-49 12.7-63.6 32H416v-96h160v96h-16.4c-14.6-19.3-37.5-32-63.6-32z" />
                    </svg>
                    Transport & Logistik
                </div>
            </a>
            <a href="{{url('/personalwesen')}}">
                <div class="badge primary jobbranche">
                    <svg style="height: 25px; fill: black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path d="M480 256c53 0 96-43 96-96s-43-96-96-96-96 43-96 96 43 96 96 96zm0-160c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zM192 256c61.9 0 112-50.1 112-112S253.9 32 192 32 80 82.1 80 144s50.1 112 112 112zm0-192c44.1 0 80 35.9 80 80s-35.9 80-80 80-80-35.9-80-80 35.9-80 80-80zm80.1 212c-33.4 0-41.7 12-80.1 12-38.4 0-46.7-12-80.1-12-36.3 0-71.6 16.2-92.3 46.9C7.2 341.3 0 363.4 0 387.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-44.8c0-23.8-7.2-45.9-19.6-64.3-20.7-30.7-56-46.9-92.3-46.9zM352 432c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16v-44.8c0-16.6 4.9-32.7 14.1-46.4 13.8-20.5 38.4-32.8 65.7-32.8 27.4 0 37.2 12 80.2 12s52.8-12 80.1-12c27.3 0 51.9 12.3 65.7 32.8 9.2 13.7 14.1 29.8 14.1 46.4V432zm271.7-114.9C606.4 291.5 577 278 546.8 278c-27.8 0-34.8 10-66.8 10s-39-10-66.8-10c-13.2 0-26.1 3-38.1 8.1 15.2 15.4 18.5 23.6 20.2 26.6 5.7-1.6 11.6-2.6 17.9-2.6 21.8 0 30 10 66.8 10s45-10 66.8-10c21 0 39.8 9.3 50.4 25 7.1 10.5 10.9 22.9 10.9 35.7V408c0 4.4-3.6 8-8 8H416c0 17.7.3 22.5-1.6 32H600c22.1 0 40-17.9 40-40v-37.3c0-19.9-6-38.3-16.3-53.6z" />
                    </svg>
                    Personalwesen
                </div>
            </a>
            <a href="{{url('/gastronomie')}}">
                <div class="badge primary jobbranche">
                    <svg style="height: 25px; fill: black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 512">
                        <path d="M344.1 470.3l14.2-164.8c-42.1-33.1-70.4-77-70.4-129.5C288 81.7 376.1 0 440 0c22.1 0 40 17.3 40 38.5v435c0 21.2-17.9 38.5-40 38.5h-56c-22.8 0-41.8-18.7-39.9-41.7zM320 176c0 51 32.2 85.5 71.8 114.5L376 473.1c-.3 3.7 3.4 6.9 8 6.9h56c4.3 0 8-3 8-6.5v-435c0-3.5-3.7-6.5-8-6.5-44.6 0-120 65.8-120 144zM240.7 33.8C237.4 14.3 219.5 0 194.6 0c-11.9 0-24.1 3.4-33.3 11.2C152.9 4.1 141.3 0 128 0s-24.9 4.1-33.3 11.2C85.5 3.4 73.3 0 61.4 0 36.2 0 18.6 14.5 15.3 33.8 13.5 43.2 0 118.4 0 149.9c0 50.9 26.7 91.6 71 110.7L59.6 471.4C58.4 493.4 75.9 512 98 512h60c22 0 39.6-18.5 38.4-40.6L185 260.6c44.2-19.1 71-59.8 71-110.7 0-31.5-13.5-106.7-15.3-116.1zM152.3 240l12.2 233.1c.2 3.7-2.7 6.9-6.5 6.9H98c-3.7 0-6.7-3.1-6.5-6.9L103.7 240C61.3 231.2 32 197 32 149.9c0-29.7 14.8-110.6 14.8-110.6 1.6-9.9 28.3-9.7 29.5.2V162c.9 11.5 28.2 11.7 29.5.2l7.4-122.9c1.6-9.7 27.9-9.7 29.5 0l7.4 122.9c1.3 11.4 28.6 11.2 29.5-.2V39.6c1.2-9.9 27.9-10.1 29.5-.2 0 0 14.8 80.9 14.8 110.6.1 46.8-29 81.2-71.6 90z" />
                    </svg> Gastronomie
                </div>
            </a>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col">
            <h2 class="mb-5">JOBS NACH <strong>REGIONEN</strong></h2>
        </div>
    </div>
    <div class="row text-center" style="font-size: 20px;">
        <div class="col-6 col-md-3 mb-5">
            <a href="{{url('/regensburg')}}">
                <img src="https://www.jobs-oberpfalz.de/images/manual/regensburg.jpg" class="img-fluid rounded border" loading="lazy">
                <span class="badge rounded-pill bg-secondary">
                    <?php echo get_count_content_list(2); ?>
                </span>
                Jobs in Regensburg
            </a>
        </div>
        <div class="col-6 col-md-3 mb-5">
            <a href="{{url('/weiden')}}">
                <picture>
                    <img src="https://www.jobs-oberpfalz.de/images/manual/weiden.jpg" class="img-fluid rounded border" loading="lazy">
                </picture>
                <span class="badge rounded-pill bg-secondary"><?php echo get_count_content_list(1); ?></span>
                Jobs in Weiden
            </a>
        </div>
        <div class="col-6 col-md-3 mb-5">
            <a href="{{url('/amberg')}}">
                <img src="https://www.jobs-oberpfalz.de/images/manual/amberg.jpeg" class="img-fluid rounded border" loading="lazy">
                <span class="badge rounded-pill bg-secondary"><?php echo get_count_content_list(4); ?></span>
                Jobs in Amberg</a>
        </div>
        <div class="col-6 col-md-3 mb-5">
            <a href="{{url('/neumarkt')}}">
                <img src="https://www.jobs-oberpfalz.de/images/manual/neumarkt.jpeg" class="img-fluid rounded border" loading="lazy">
                <span class="badge rounded-pill bg-secondary"><?php echo get_count_content_list(5); ?></span>
                Jobs in Neumarkt</a>
        </div>
        <div class="col-6 col-md-3 mb-5">
            <a href="{{url('/schwandorf')}}">
                <img src="https://www.jobs-oberpfalz.de/images/manual/schwandorf.jpeg" class="img-fluid rounded border" loading="lazy">
                <span class="badge rounded-pill bg-secondary"><?php echo get_count_content_list(6); ?></span>
                Jobs in Schwandorf</a>
        </div>
        <div class="col-6 col-md-3 mb-5">
            <a href="{{url('/cham')}}">
                <img src="https://www.jobs-oberpfalz.de/images/manual/cham.jpg" class="img-fluid rounded border" loading="lazy">
                <span class="badge rounded-pill bg-secondary"><?php echo get_count_content_list(7); ?></span>
                Jobs in Cham</a>
        </div>
        <div class="col-6 col-md-3 mb-5">
            <a href="{{url('/neustadt')}}">
                <img src="https://www.jobs-oberpfalz.de/images/manual/neustadt.jpg" loading="lazy" class="img-fluid rounded border">
                <span class="badge rounded-pill bg-secondary"><?php echo get_count_content_list(8); ?></span>
                Jobs in Neustadt</a>
        </div>
        <div class="col-6 col-md-3 mb-5">
            <a href="{{url('/tirschenreuth')}}">
                <picture>
                    <img src="https://www.jobs-oberpfalz.de/images/manual/tirschenreuth.jpeg" class="img-fluid rounded border" loading="lazy">
                </picture>
                <span class="badge rounded-pill bg-secondary"><?php echo get_count_content_list(9); ?></span>
                Jobs in Tirschenreuth
            </a>
        </div>
        <div class="row" style="font-size: 18px; color: #f49c35; text-align: center; margin-top: 40px; ">
            <style>
                .other_regions {
                    margin-bottom: 45px;
                }
            </style>

            <div class="col-6 col-md-4 col-lg-3 other_regions">
                <a href="{{url('/eschenbach')}}">
                    <span class="badge rounded-pill bg-secondary"><?php echo get_count_content_list(14); ?></span>
                    Jobs in Eschenbach</a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 other_regions">
                <a href="{{url('/nabburg')}}">
                    <span class="badge rounded-pill bg-secondary"><?php echo get_count_content_list(11); ?></span>
                    Jobs in Nabburg</i></a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 other_regions">
                <a href="{{url('/sulzbach-rosenberg')}}"> <span class="badge rounded-pill bg-secondary"><?php echo get_count_content_list(13); ?></span> Jobs in Sulzbach-Rosenberg</a>
            </div>
            <div class="col-6 col-md-4 col-lg-3 other_regions">
                <a href="{{url('/vohenstrauss')}}">
                    <span class="badge rounded-pill bg-secondary"><?php echo get_count_content_list(3); ?></span>
                    Jobs in Vohenstrauß</a>
            </div>

        </div>
</section>



@section('scripts')

    <script defer src="{{asset('template/js/slick.min.js')}}"></script>

    <script>
    $(document).ready(function() {
        $('.logo-carousel').slick({
            slidesToShow: 7,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1000,
            arrows: true,
            dots: false,
            pauseOnHover: false,
            responsive: [{
            breakpoint: 2000,
            settings: {
                slidesToShow: 7
            }
            }, {
            breakpoint: 1200,
            settings: {
                slidesToShow: 6
            }
            }, {
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
    let results = [
        @foreach($authors as $author)
            {"name": `{{$author->name}}`, "url": "{{ route('author.get', [$author->slug]) }}", "keywords": "{{$author->search_terms}}"},
        @endforeach
        @foreach($lists as $list)
            {"name": "{{$list->name}}", "url": "{{ url('/'.$list->slug) }}", "keywords": "{{$list->search_terms}}"},
        @endforeach
        ];
    $('.check-branche').change(function(){
        let url = "{{route('indexTemplate')}}";
        let filters = []
        $('.check-branche:checked').each(function(index, item){ filters.push($(item).val()); });
        filters = filters.join('/');
        window.location.replace(`${url}/${filters}`);
    });
</script>
    <script src="{{asset('template/js/pages/main/methods.js')}}"></script>
    <script src="{{asset('template/js/pages/main/script.js')}}"></script>
@stop

@stop