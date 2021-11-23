@extends('template.'.config('settings.template').'.content.master')
@section('head')
@section('meta_title', '404 Fehler | Seite nicht gefunden')
@section('meta_description', 'Die Angeforderte Seite existiert nicht oder nicht mehr.')
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <br>
                <br>
                <h1>404 Fehler</h1>
                <p>Die angeforderte Seite existiert nicht oder nicht mehr.</p>
                <br>
                <br>
                <br>
                <br>
                <a href="{{url('/')}}" class="btn btn-ci">Zurück zur Startseite</a>
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
                <br>
                <br>
                <br>
                <bdr>
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
    </div>

@stop