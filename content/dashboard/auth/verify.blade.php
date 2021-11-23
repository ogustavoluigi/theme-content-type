@extends('template.'.config('settings.template').'.content.master')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 ">
            <br>
            <br>
            <br>
            <div class="card" style="text-align: center; background-color: #f8f8f8">

                <h2 class="card-header">Bitte bestätigen Sie Ihre E-Mail</h2>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <br
                    <br
                    <br>
                        Wir haben soeben eine Nachricht an Ihre E-Mail <span style="color: #f49c35">{{ Auth::user()->email }}</span> versandt.
                        <br>
                        <br>

                        <br>
                        <br>
                        <br>
                        <svg style="fill: #f49c35; width:145px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"/></svg>
                        <br>
                        <br>
                        <br>
                        Bitte klicken Sie zur Bestätigung der Adresse auf den Link

                        <br>
                        <br>
                        <br>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        <hr>




                        <br>
                        <h4>E-Mail nicht erhalten?</h4>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <a type="submit">E-Mail nochmals senden</a>
                    </form>
                </div>
                <br>



            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
@endsection
