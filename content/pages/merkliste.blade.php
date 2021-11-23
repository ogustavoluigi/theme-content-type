@extends('template.'.config('settings.template').'.content.master')
@section('head')
@section('meta_title', 'Meine Merkliste auf Jobs-Oberpfalz.de')
@section('meta_description', 'Hier findest du deine gemerkten Jobangebote.')
@stop
@section('content')
    <script src="https://johnresig.com/files/pretty.js"></script>
    <section class="mt-2">
        <div class="row">
            <div class="col-lg-12" id="news">
                <h1 id="latest_jobs" class="mt-5 mb-4">Jobs auf meiner <strong>Merkliste</strong></h1>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('template/js/pages/merkliste/templates/box-like.js')}}"></script>
    <script src="{{asset('template/js/pages/merkliste/methods.js')}}"></script>
    <script src="{{asset('template/js/pages/merkliste/script.js')}}"></script>
@stop

