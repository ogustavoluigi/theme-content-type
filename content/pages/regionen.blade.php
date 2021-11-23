@extends('template.'.config('settings.template').'.content.master')

@section('head')
@section('meta_title', 'Jobangebote nach Regionen in der Oberpfalz')
@section('meta_description', 'Hier findest du Stellenangebote nach Region: Jobs in Regensburg, Weiden, Amberg, Neumarkt und andere...')

@stop

@section('content')


        <div class="container">
            <div class="row">
                <div class="col-12">
                    <br>
                    <br>
                    <h1>Oberpfalz Jobs nach Regionen</h1>
                    <br>
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


                <div class="row mb-4" style="font-size: 18px; color: #f49c35; text-align: center; margin-top: 90px; ">


                    <style>
                        .other_regions{
                            margin-bottom: 45px;
                        }
                    </style>


                    <div class="col-6 col-md-4 col-lg-3 other_regions">
                        <a href="{{url('/nabburg')}}">
                            <span class="badge rounded-pill bg-secondary"><?php echo get_count_content_list(11); ?></span>
                            Jobs in Nabburg</i></a>
                    </div>

                    <div class="col-6 col-md-4 col-lg-3 other_regions">
                        <a href="{{url('/roding')}}">
                            <span class="badge rounded-pill bg-secondary"><?php echo get_count_content_list(19); ?></span>
                            Jobs in Roding</a>
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






            </div>


        </div>

            @stop
