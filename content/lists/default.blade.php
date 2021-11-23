@extends('template.'.config('settings.template').'.content.master')
@section('head')
<style>
    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent
    }

    .slick-list {
        position: relative;
        display: block;
        overflow: hidden;
        margin: 0;
        padding: 0
    }

    .slick-list:focus {
        outline: none
    }

    .slick-list.dragging {
        cursor: pointer;
        cursor: hand
    }

    .slick-slider .slick-list,
    .slick-slider .slick-track {
        -webkit-transform: translate3d(0, 0, 0);
        -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        -o-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .slick-track {
        position: relative;
        top: 0;
        left: 0;
        display: block;
        margin-left: auto;
        margin-right: auto
    }

    .slick-track:after,
    .slick-track:before {
        display: table;
        content: ''
    }

    .slick-track:after {
        clear: both
    }

    .slick-loading .slick-track {
        visibility: hidden
    }

    .slick-slide {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px
    }

    [dir='rtl'] .slick-slide {
        float: right
    }

    .slick-slide img {
        display: block
    }

    .slick-slide.slick-loading img {
        display: none
    }

    .slick-slide.dragging img {
        pointer-events: none
    }

    .slick-initialized .slick-slide {
        display: block
    }

    .slick-loading .slick-slide {
        visibility: hidden
    }

    .slick-vertical .slick-slide {
        display: block;
        height: auto;
        border: 1px solid transparent
    }

    .slick-arrow.slick-hidden {
        display: none
    }

    .slick-slide {
        margin: 0 20px
    }

    .logo-carousel {
        overflow: inherit
    }

    .slick-slide img {
        width: 100%
    }

    .slick-track::after,
    .slick-track::before {
        display: table;
        content: ''
    }

    .slick-track::after {
        clear: both
    }

    .slick-track {}

    .slick-loading .slick-track {
        visibility: hidden
    }

    .slick-slide.slick-loading img {
        display: none
    }

    .slick-slide.dragging img {
        pointer-events: none
    }

    .slick-loading .slick-slide {
        visibility: hidden
    }

    .slick-arrow {
        position: absolute;
        top: 50%;
        background: url("https://raw.githubusercontent.com/solodev/infinite-logo-carousel/master/images/arrow.svg?sanitize=true") center no-repeat;
        color: #fff;
        filter: invert(77%) sepia(32%) saturate(1%) hue-rotate(344deg) brightness(105%) contrast(103%);
        border: none;
        width: 2rem;
        height: 1.5rem;
        text-indent: -10000px;
        margin-top: -16px;
        z-index: 99
    }

    .slick-arrow.slick-next {
        right: 5px;
        transform: rotate(180deg)
    }

    .slick-arrow.slick-prev {
        left: 5px
    }

    @media (max-width: 768px) {
        .slick-arrow {
            width: 1rem;
            height: 1rem
        }
    }

    .carousel-row {
        overflow: hidden
    }

    .logo-carousel {
        margin-top: 32px
    }

    #list-filter-menue .form-check-input:checked {
        background-color: #157347;
        border-color: #146c43;
    }

    #list-filter-menue .form-check {
        min-height: 2.5rem;
    }

    #list-filter-menue .bg-light {
        background-color: #f8f9fa29 !important;
    }

    #list-filter-menue .badge {
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
    <div id="header_static" style="background-color: #9699AA; background-image: url('{{ asset('uploads/lists/' . $list->image) }}'); background-position: center; background-size: cover;">
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
            <h1>Die besten <strong>Arbeitsstellen</strong> in <strong> {{ $list->name }}</strong> auf jobs-oberpfalz.de</h1>
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
            <h2>{!!showListTitle($list, $filters)!!}</h2>
        </div>
        <div id="list-filter-menue" class="d-none d-lg-block col-12 position-relative col-md-3 rounded-end" style="background-color: #f49c35; padding: 25px;">
            <div class="row">
                <div class="col-12">
                    @php($oldListName = null)
                    @foreach($lists as $listItem)
                    @if($list->group->name != $listItem->group->name)
                    @if($listItem->group->name != $oldListName)
                    <h5 class="mt-5 mb-3 fw-bold">{{$listItem->group->name}}</h5>
                    @endif
                    @php($countContentsInFilter = getNachByFilter(getNachByFilterList(null, $list), [$listItem->slug])->count())
                    @if($countContentsInFilter > 0)
                    <div class="form-check">
                        <input class="form-check-input check-branche" type="checkbox" value="{{$listItem->slug}}" id="flexCheck{{$listItem->name}}" {{(!is_null($filters) && in_array($listItem->slug, $filters)?"checked":"")}}>
                        <label class="form-check-label" for="flexCheck{{$listItem->name}}">
                            {{$listItem->name}} <span class="badge bg-light text-dark">{{$countContentsInFilter}} Jobs</span>
                        </label>
                    </div>
                    @endif
                    @endif
                    @php($oldListName = $listItem->group->name)
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-9">
            @php($externe = false)
            @foreach($contents as $indexContent => $content)
            @if($content->premium_id == 1)
            <div class="card mb-3" style="background-color: #daeed8;">
                <div class="text-center rounded-top" style="font-size: 12px; background-color: #3daa7352">
                    <svg style="fill: black; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z" />
                    </svg>
                    Premium Jobangebot
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-3 col-lg-1">
                            <a href="{{ route('author.get', [$content->user->slug]) }}" onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{ $content->user->name }}'});">
                                <img src="{{ $content->user->gravatar() }}" title="{{ $content->user->name }}" height="70px" class="border rounded" alt="Logo {{ $content->user->name }}">
                            </a>
                        </div>
                        <div class="col-9 col-lg-2">
                            <br>
                            <a href="{{ route('author.get', [$content->user->slug]) }}" class="text-muted" onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{ $content->user->name }}'});">

                                {{ $content->user->name }}

                            </a>
                        </div>
                        <div class="col-12 col-lg-7">
                            <h5 class="card-title" style="margin-top: 20px;">
                                <a href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{$content->title}}'});">
                                    {{$content->title}}
                                </a>
                            </h5>
                        </div>
                        <div class="col-5 d-lg-none">
                            <br>
                            @php(\Carbon\Carbon::setLocale('de'))
                            <h6 class="card-subtitle mb-2 text-muted" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{ $content->updated_at->diffForHumans() }}</h6>
                        </div>
                        <div class="col-7 col-lg-2 text-end ">
                            <h6 class="card-subtitle mb-2 text-muted d-none d-lg-block text-center" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{ $content->updated_at->diffForHumans() }}</h6>
                            <a class="btn btn-ci btn-sm" href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{$content->title}}'});">
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
                                <a href="{{ route('author.get', [$content->user->slug]) }}" onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{ $content->user->name }}'});">
                                    <img src="{{ $content->user->gravatar() }}" title="{{ $content->user->name }}" height="70px" class="border rounded" alt="Logo {{ $content->user->name }}">
                                </a>
                            </div>
                            <div class="col-9 col-lg-2">
                                <br>
                                <a href="{{ route('author.get', [$content->user->slug]) }}" class="text-muted" onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{ $content->user->name }}'});">

                                    {{ $content->user->name }}
                                    <br>


                                </a>
                            </div>
                            <div class="col-12 col-lg-7">
                                <h5 class="card-title" style="margin-top: 20px;">
                                    <a href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{$content->title}}'});">
                                        {{$content->title}}
                                    </a>
                                </h5>

                                <span class="badge bg-success">
                                    <svg style="fill: white; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                        <path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z" />
                                    </svg>
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
                                <a class="btn btn-ci btn-sm" href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{$content->title}}'});">
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
            <div class="col-12">
                <div class="card mb-3" style="background-color: #f8f8f8;">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-3 col-lg-1">
                                <a href="{{ route('author.get', [$content->user->slug]) }}" onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{ $content->user->name }}'});">
                                    <img src="{{ $content->user->gravatar() }}" title="{{ $content->user->name }}" height="70px" class="border rounded" alt="Logo {{ $content->user->name }}">
                                </a>
                            </div>
                            <div class="col-9 col-lg-2">
                                <br>
                                <a href="{{ route('author.get', [$content->user->slug]) }}" class="text-muted" onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{ $content->user->name }}'});">

                                    {{ $content->user->name }}
                                    <br>


                                </a>
                            </div>
                            <div class="col-12 col-lg-7">
                                <h5 class="card-title" style="margin-top: 20px;">
                                    <a href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{$content->title}}'});">
                                        {{$content->title}}
                                    </a>
                                </h5>




                            </div>
                            <div class="col-5 d-lg-none">
                                <br>
                                @php(\Carbon\Carbon::setLocale('de'))
                                <h6 class="card-subtitle mb-2 text-muted" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{ $content->updated_at->diffForHumans() }}</h6>
                            </div>
                            <div class="col-7 col-lg-2 text-end ">
                                <h6 class="card-subtitle mb-2 text-muted d-none d-lg-block text-center" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{ $content->updated_at->diffForHumans() }}</h6>
                                <a class="btn btn-ci btn-sm" href="{{ route_content($content) }}" onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $list->name }}', 'event_label' : '{{$content->title}}'});">
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
                <div class="col-12 col-md-6 mb-3">
                    <a href="{{$content->additional_fields['26']}}" target="_blank" rel="sponsored">
                        <div class="card shadow-sm h-100" style="background-color: #f7efef6b;">
                            <div class="text-center rounded-top" style="font-size: 12px; background-color: #ae9f7a52">
                                <svg style="fill: black; width: 12px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path d="M463.7 0H112.3c-4.2 0-8.1 2.2-10.3 5.8L1.7 168.6c-2.7 4.4-2.2 10.1 1.2 14l276 325.2c4.8 5.6 13.4 5.6 18.2 0l276-325.2c3.4-3.9 3.8-9.6 1.2-14L474 5.8c-2.2-3.6-6.1-5.8-10.3-5.8zm-13.6 36l74.3 124h-83L384.6 36h65.5zM345 36l56.8 124H174.1L231 36h114zm-219.1 0h65.5l-56.8 124h-83l74.3-124zM61.2 192h73L216 384 61.2 192zm112 0h229.5L288 455.8 173.2 192zM360 384l81.8-192h73L360 384z" />
                                </svg>
                                Externe Partnerangebote
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="card-title fs-6">{{$content->title}}</h5>
                                    </div>
                                    <div class="col-12 text-center">
                                        <h6 class="card-subtitle mt-2 text-muted" title="{{date('d.m.Y', strtotime($content->updated_at))}}">{{$content->additional_fields['18']}}</h6>
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
        </div>
    </div>
    <div class="col-12">
        <div style="margin: auto;text-align: center;    display: table; overflow: scroll;">
            {!! $contents->onEachSide(1)->fragment("latest_jobs")->render() !!}
        </div>
    </div>
    <div id="list-filter-menue" class="d-lg-none position-relative col-12 mb-4 rounded-end" style="background-color: #f49c35; padding: 25px;">
            <h5 class="fw-bold mb-2">
                <svg style="fill: black; width: 20px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M479.968 0H32.038C3.613 0-10.729 34.487 9.41 54.627L192 237.255V424a31.996 31.996 0 0 0 10.928 24.082l64 55.983c20.438 17.883 53.072 3.68 53.072-24.082V237.255L502.595 54.627C522.695 34.528 508.45 0 479.968 0zM288 224v256l-64-56V224L32 32h448L288 224z"/></svg>
                Jobs filtern
            </h5>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                @php($oldListName = null)
                @foreach($lists as $listItem)
                @if($list->group->name != $listItem->group->name)
                    @if($listItem->group->name != $oldListName)
                        @if(!is_null($oldListName))
                                </div>
                            </div>
                        </div>
                        @endif
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading{{$listItem->group->name}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$listItem->group->name}}" aria-expanded="false" aria-controls="flush-collapse{{$listItem->group->name}}">
                                <h6 class="fw-bold">{{$listItem->group->name}}</h6>
                            </button>
                        </h2>
                        <div id="flush-collapse{{$listItem->group->name}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$listItem->group->name}}" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                    @endif
                    @php($countContentsInFilter = getNachByFilter(getNachByFilterList(null, $list), [$listItem->slug])->count())
                    @if($countContentsInFilter > 0)
                    <div class="form-check">
                        <input class="form-check-input check-mobile-branche" type="checkbox" value="{{$listItem->slug}}" id="flexCheck{{$listItem->name}}" {{(!is_null($filters) && in_array($listItem->slug, $filters)?"checked":"")}}>
                        <label class="form-check-label" for="flexCheck{{$listItem->name}}">
                            {{$listItem->name}} <span class="badge bg-light text-dark">{{$countContentsInFilter}} Jobs</span>
                        </label>
                    </div>
                    @endif
                @endif
                @php($oldListName = $listItem->group->name)
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section>
<div class="container">
    @if(count($premiumAuthors) > 0)
    <section>
        <div class="row carousel-row">
            <div class="container" style="margin-top: 75px;margin-bottom: 85px;">
                <div class="col-sm-12">
                    <h2 style="text-align: left" class="mb-4">Top <strong>Arbeitgeber</strong> mit offenen <strong>Arbeitsstellen</strong></h2>
                </div>
                <div class="row top_arbeitgeber logo-carousel slider" data-arrows="true">
                    @foreach($premiumAuthors->take(8) as $premiumAuthor)
                    <div class="logos slide" style="padding-bottom: 40px; text-align: center">
                        <a href="{{url('/arbeitgeber')}}/{{$premiumAuthor->slug}}" class="text-center" style="font-size: 13px;">
                            <img src="{{url('/uploads/profile')}}/{{$premiumAuthor->image}}" loading="lazy" class="img-fluid center-block border rounded mb-2" alt="Logo {{$premiumAuthor->name}}">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
</div>
<div class="container">
    <section class="mt-2">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="mt-2">Aktuelle Jobs in <strong>{{ $list->name }}</strong></h2>
                <br>
                @if (isset($list))
                {{ $list->description }}
                @endif
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>
    </section>
</div>
@stop
@section('scripts')
<script defer src="{{asset('template/js/slick.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.logo-carousel').slick({
            slidesToShow: 8,
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
        $('.check-branche').change(function() {
            let url = "{{route('content', [$list->slug])}}";
            let filters = []
            $('.check-branche:checked').each(function(index, item) {
                filters.push($(item).val());
            });
            filters = filters.join('/');
            window.location.replace(`${url}/${filters}#latest_jobs`);
        });
        $('.check-mobile-branche').change(function() {
            let url = "{{route('content', [$list->slug])}}";
            let filters = []
            $('.check-mobile-branche:checked').each(function(index, item) {
                filters.push($(item).val());
            });
            filters = filters.join('/');
            window.location.replace(`${url}/${filters}#latest_jobs`);
        });
    });
</script>
<!--
<script>
    function initMap() {
        $.ajax({
            url: '{{ route('location.list', $list->slug) }}',
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