@extends('template.'.config('settings.template').'.content.master')
@section('content')


        <div class="row">
            <div id="header_static" style="background-color: #9699AA; background-image: url('{{ asset('uploads/lists/' . $listModel->image) }}'); background-position: center; background-size: cover;" >



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
                    <h1>Die besten <strong>Ausbildungsstellen</strong> findest du auf jobs-oberpfalz.de</h1>
                    <h2>Jetzt Azubi Stelle aussuchen und direkt online bewerben.</h2>
                </div>

                <div class="d-none d-md-block">
                    <br>
                </div>

                <div class="d-none d-lg-block">
                    <br>
                </div>

            </div> <!-- header_static -->
        </div>




        <section class="mt-2">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="mt-2">Ausbildungsplätze in der Oberpfalz</strong></h1>
                    <br>
                    @if (isset($listModel))
                        {{ $listModel->description }}
                    @endif


                </div>
            </div>
        </section>




        <section>
            <div class="row">

                <div id="jobs" class="col-lg-12">


                    <h2>Aktuelle <strong>Ausbildungsstellen</strong></h2>

                    @foreach($nachrichten as $nach)



                        <div class="col-12" style="padding-bottom: 1rem;">

                            <div class="card" style="background-color: #f8f8f8;">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3 col-lg-1">
                                            <a href="{{ route('author.get', [$nach->user->slug]) }}"
                                               onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $listModel->name }}', 'event_label' : '{{ $nach->user->name }}'});"

                                            >
                                                <img src="{{ $nach->user->gravatar() }}" title="{{ $nach->user->name }}" height="70px" class="border rounded">
                                            </a>
                                        </div>

                                        <div class="col-9 col-lg-2">

                                            <br>
                                            <a href="{{ route('author.get', [$nach->user->slug]) }}" class="text-muted"
                                               onclick="gtag('event', 'See Employer', {'event_category' : 'List: {{ $listModel->name }}', 'event_label' : '{{ $nach->user->name }}'});"

                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                                                    <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                                                </svg>
                                                {{ $nach->user->name }}
                                            </a>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <h5 class="card-title" style="margin-top: 20px;">
                                                <a href="{{ route_content($nach) }}"
                                                   onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $listModel->name }}', 'event_label' : '{{$nach->title}}'});"

                                                >
                                                    {{$nach->title}}
                                                </a>
                                            </h5>

                                        </div>

                                        <div class="col-5 col-lg-1">
                                            <br>
                                            <h6 class="card-subtitle mb-2 text-muted">{{date('d.m.Y', strtotime($nach->created_at))}}</h6>

                                        </div>
                                        <div class="col-7 col-lg-2 text-end ">
                                            <br>
                                            <a class="btn btn-ci" href="{{ route_content($nach) }}"
                                               onclick="gtag('event', 'See Job', {'event_category' : 'List: {{ $listModel->name }}', 'event_label' : '{{$nach->title}}'});"
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



                    {!! $nachrichten->render() !!}

                </div>
            </div>
        </section>



        <section>
            <div class="row" id="employers-home">



                <div class="col-sm-12">
                    <h2 style="text-align: left">Top <strong>Ausbildungsbetriebe </strong> mit offenen <strong>Azubi Stellen</strong></h2>
                    <br><br>
                </div>
                <div class="col-xs-4 col-lg-2 logos" style="padding-bottom: 60px; text-align: center">
                    <a href="https://www.jobs-oberpfalz.de/arbeitgeber/horsch-maschinen-gmbh">
                        <img src="https://www.jobs-oberpfalz.de/uploads/profile/5.png" loading="lazy"
                             class="img-responsive center-block">
                    </a>
                    <br>

                    <a href="https://www.jobs-oberpfalz.de/arbeitgeber/horsch-maschinen-gmbh">HORSCH Maschinen GmbH</a>
                </div>

                <div class="col-xs-4 col-lg-2 logos" style="padding-bottom: 60px; text-align: center">
                    <a href="https://www.jobs-oberpfalz.de/arbeitgeber/dr-loew">
                        <img src="https://www.jobs-oberpfalz.de/uploads/profile/6.png" loading="lazy"
                             class="img-responsive center-block">
                    </a>

                </div>





                </div>
            </div>
        </section>
@stop


@section('scripts')
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