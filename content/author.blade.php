@extends('template.'.config('settings.template').'.content.master')

@section('content')



        <div class="row">



            @if(empty($author->cover_image))

                <div id="header_static" style="background-color: #9699AA; background-image: url('https://www.jobs-oberpfalz.de/images/manual/default-arbeitgeber-cover.jpg'); background-position: center; background-size: cover;" >

            @else
                <div id="header_static" style="background-color: #9699AA; background-image: url('{{ asset('uploads/cover/' . $author->cover_image) }}'); background-position: center; background-size: cover;" >

            @endif

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




                <div id="author_logo">
                    <img src="{{ $author->gravatar() }}?s=120&d=identicon&r=PG" width="120" class="rounded img-fluid border" title="{{ $author->name }}" alt="Logo {{ $author->name }}">

                    <h1>{{ $author->name }}</h1>
                </div>

                    <div class="d-none d-md-block">
                        <br>
                    </div>

                    <div class="d-none d-lg-block">
                        <br>
                    </div>


            </div> <!-- header_static -->
        </div>

        <div class="row">

            <div class="col-sm-12">
                <br>
                <br>
                <h2>Über {{ $author->name }}</h2>


                <p class="intro">
                    {{ $author->description }}
                </p>



                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        @if (isset($author->social_networks['email']))
                            <a href="mailto:{{ $author->social_networks['email'] }}"><i class="fal fa-envelope"></i></a>
                            |
                        @endif

                        @if (isset($author->social_networks['site']))
                            <a href="{{ $author->social_networks['site'] }}" target="_blank" style="color: #f49c35"><i class="fal fa-globe"></i> {{ $author->social_networks['site'] }}</a>
                        @endif
                        <br>
                        <br>
                    </div>

                    <div class="col-md-5 col-sm-12 text-center">
                        <?php
                        $social = [
                            'telegram',
                            'behance',
                            'snapchat',
                            'stack-overflow',
                            'vimeo',
                            'github',
                            'reddit',
                            'instagram',
                            'linkedin',
                            'pinterest',
                            'twitter',
                            'facebook',
                            'youtube'
                        ];
                        ?>

                        @foreach ($social as $value)
                            @if (isset($author->social_networks[$value]))
                                <a href="{{ $author->social_networks[$value] }}"><i class="fab fa-{{ $value }}"></i></a>
                            @endif
                        @endforeach

                        <br>
                        <br>
                    </div>

                </div>
            </div>



             @isset($author->additional_fields['img1'])
                <div class="col-12">
                    <h5 class="mb-3 mt-2">Impressionen aus unserer Arbeitswelt</h5>

                </div>

                <div class="col-6 col-lg-3">
                    <img src="{{$author->additional_fields['img1']}}" class="rounded img-fluid mb-3">
                </div>
                @isset($author->additional_fields['img2'])
                    <div class="col-6 col-lg-3">
                    <img src="{{$author->additional_fields['img2']}}" class="rounded img-fluid mb-3">
                </div>
                @endisset

                @isset($author->additional_fields['img3'])
                    <div class="col-6 col-lg-3">
                        <img src="{{$author->additional_fields['img3']}}" class="rounded img-fluid mb-3">
                    </div>
                @endisset

                @isset($author->additional_fields['img4'])
                    <div class="col-6 col-lg-3">
                        <img src="{{$author->additional_fields['img4']}}" class="rounded img-fluid mb-3">
                    </div>
                @endisset


            @endisset

        </div>










        @if ($nachrichten->count() == 0)
            <div class="col-12">
                <div class="text-center">
                    <br>
                    <br>
                    <br>
                    <br>
                    <i>Derzeit keine offenen Arbeitsstellen auf jobs-oberpfalz.de</i>
                    <br>
                    <br>
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


        @else
                    <div class="row">
                        <div id="latest_jobs" class="col-12">
                            <br>
                            <br>
                            <br>
                            <h2>Aktuelle <strong>Jobangebote</strong></h2>

                            @foreach($nachrichten as $nach)



                                <div class="col-12 pb-1">

                                    <div class="card mb-3" style="background-color: #f8f8f8;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3 col-lg-1">
                                                        <img src="{{ $nach->user->gravatar() }}" title="{{ $nach->user->name }}" height="70px" class="border rounded">
                                                </div>

                                                <div class="col-9 col-lg-2">

                                                    <br>
                                                    <span class="text-muted">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                                                            <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                                                        </svg>
                                                        {{ $nach->user->name }}
                                                    </span>
                                                </div>
                                                <div class="col-12 col-lg-7">
                                                    <h5 class="card-title" style="margin-top: 20px;">
                                                        <a href="{{ route_content($nach) }}"
                                                           onclick="gtag('event', 'See Job', {'event_category' : 'Employer: {{ $author->name }}', 'event_label' : '{{$nach->title}}'});"

                                                        >
                                                            {{$nach->title}}
                                                        </a>
                                                    </h5>

                                                </div>

                                                <div class="col-5 d-lg-none">
                                                    <br>
                                                    <h6 class="card-subtitle mb-2 text-muted">  {{ $nach->updated_at->diffForHumans() }}</h6>

                                                </div>
                                                <div class="col-7 col-lg-2 text-end ">
                                                    <h6 class="card-subtitle mb-2 text-muted d-none d-lg-block text-lg-center">  {{ $nach->updated_at->diffForHumans() }}</h6>
                                                    <a class="btn btn-ci" href="{{ route_content($nach) }}"
                                                       onclick="gtag('event', 'See Job', {'event_category' : 'Employer: {{ $author->name }}', 'event_label' : '{{$nach->title}}'});"

                                                    >
                                                        Job ansehen

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                        </svg>
                                                    </a>

                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>


                            @endforeach

                            <div style="margin: auto;text-align: center; display: table; overflow: scroll;">
                                {!! $nachrichten->onEachSide(1)->fragment("latest_jobs")->render() !!}
                            </div>


                            <br>
                            <br>


                        </div>
                    </div>
        @endif



    @isset($author->additional_fields['youtube'])

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h4 class="mb-4">Imagevideo {{ $author->name }}</h4>
                    <div class="ratio ratio-16x9 mb-5">
                        <iframe src="https://www.youtube.com/embed/{{$author->additional_fields['youtube']}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>



    @endisset




@stop

