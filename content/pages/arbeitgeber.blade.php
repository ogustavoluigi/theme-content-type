@extends('template.'.config('settings.template').'.content.master')
@section('head')
@section('meta_title', 'Abeitgeberübersicht Oberpfalz | Jobs-Oberpfalz.de')
@section('meta_description', 'A-Z Arbeitgeberliste mit offenen Arbeitsstellen auf dem Jobportal jobs-oberpfalz.de')
@stop
@section('content')
    <style>
        .logos {
            position:relative;
        }
        .logos .badge {
            position:absolute;
            top:0px;
            right:9px;
            background: linear-gradient(270deg, #ae3636, #f49c35);
            background-size: 400% 400%;
            font-size: 14px;
            color:white;
            transform:rotate(-3deg);
            border-radius: 5px;
        }
    </style>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <br>
                    <h1>Arbeitgeber in der Oberpfalz</h1>
                    <br>
                </div>
                @if(count($data) > 0)
                    @foreach ($data as $firstLetter => $users)
                        <div class="col-lg-12">
                            <br>
                            <br>
                            <h2>{{ $firstLetter }}</h2>
                            <br>
                        </div>
                        @foreach ($users as $user)
                             <div class="col-4 col-sm-3 col-md-2 logos" style="padding-bottom: 60px; text-align: center">
                                <a href="{{url('/arbeitgeber')}}/{{ $user['slug'] }}">
                                    @isset($user['image'])
                                        <img src="{{url('/')}}/uploads/profile/{{ $user['image'] }}" loading="lazy" class="img-fluid center-block border rounded mb-2">
                                    @else
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg" width="150" loading="lazy" class="img-fluid center-block border rounded mb-2">
                                        @endisset
                                    <br>
                                    {!!(count($user['active_subscription']) > 0?"⭐ <strong>".$user['name']."</strong>":$user['name'])!!}
                                </a>
                                 @if(count($user['nachrichten'])>0)
                                    <div class="badge">{{ count($user['nachrichten']) }} offene Stellen</div>
                                 @endif
                             </div>
                        @endforeach
                    @endforeach
                @endif
            </div>
        </div>
@stop