@extends('template.'.config('settings.template').'.content.master')
@section('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
@stop
@section('content')
@if (session('profile_verify'))
<div class="col-12 col-md-6 offset-md-3">
    <br>
    <br>
    <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
        <svg style="width: 14px; fill: #0f5132;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <!-- Font Awesome Pro 5.15.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
            <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" />
        </svg>
        Arbeitgeberprofil erfolgreich angelegt!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif
<div class="row">
    <div class="col-6 mt-5 mb-5 text-right">
        <h1><i class="fal fa-file-alt"></i> Meine Stellenanzeigen</h1>
    </div>
    <div class="col-6 mt-5" style="text-align: right">
        <a href="{{ route('dashboard.viewAddContent', [$typeModel->slug]) }}" class="btn btn-ci btn-sm">
            <svg style="width: 13px; fill: white; margin-bottom: 2px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z" />
            </svg>
            Neue Stellenanzeige anlegen
        </a>
    </div>
</div>
<div class="row text-center">
    <style>
        .btn-outline-ci {
            background-color: #fff;
            border-color: #ec8b19;
            color: #f49c35
        }

        .btn-outline-ci:hover {
            background-color: #f49c35;
            color: #fff;
        }
    </style>
    <div class="mx-auto">
        @if ($types->count() >= 2)
        <div class="btn-group btn-group-toggle mx-auto" data-toggle="buttons">
            @foreach ($types as $type)
            <label class="btn btn-lg {{ $type->id == $typeModel->id ? 'btn-primary' : 'btn-outline-primary' }}" onclick='window.location.href = "{{ url('/dashboard/content/') }}/{{ $type->slug }}";'>
                <input type="radio" name="options" id="option1" {{ $type->id == $typeModel->id ? 'checked' : '' }}> <i class="fal fa-{{ $type->icon}}"></i> {{ $type->name }}
            </label>
            @endforeach
        </div>
        @endif
    </div>
</div>
<div class="row">
    @if ($nachrichten->count() == 0)
    <div class="col-xs-12">
        <div class="text-center">
            <br>
            <br>
            <br>
            <br>
            <i>Sie haben noch keine Stellenanzeige angelegt.</i>
            <br>
            <br>
            <a href="{{ route('dashboard.viewAddContent', [$typeModel->slug]) }}" class="btn btn-ci">
                <svg style="width: 14px; fill: white; margin-bottom: 2px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z" />
                </svg>
                Erste Stellenanzeige anlegen</a>
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
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
    @else
    <div class="col-xs-12" style="text-align: right">
    </div>
    <div class="col-xs-12">
        @foreach($nachrichten as $nach)
        <div class="col-12" style="padding-bottom: 1rem;" id="nach{{$nach->id}}">
            <div class="card" style="background-color: #f8f8f8;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-2">
                            <br>
                            <span title="{{date('d.m.Y | H:i', strtotime($nach->updated_at))}} Uhr">
                                {{ $nach->updated_at->diffForHumans() }}
                            </span>
                        </div>
                        <div class="col-12 col-lg-6">
                            <h5 class="card-title" style="margin-top: 20px;">
                                @if($nach->approved == 1)
                                <a href="{{ route_content($nach) }}" target="_blank">{{Str::limit($nach->title, 60,'...')}} <i class="fal fa-external-link"></i> </a>
                                @else()
                                {{Str::limit($nach->title, 60,'...')}}
                                @endif
                            </h5>
                        </div>
                        <div class="col-6 col-lg-3">
                            <br>
                            <a class="btn btn-outline-ci btn-sm" href="{{ route('dashboard.viewEditContent', [$nach->id]) }}">
                                Job bearbeiten <i class="fal fa-edit"></i>
                            </a>
                            |&nbsp;
                            <svg style="width: 13px; fill: #ff0c0ca6" onclick="removeNach({{$nach->id}})" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z" /></svg>
                            &nbsp;
                            <svg style="width: 13px; fill: #ff008000" onclick="toTop({{$nach->id}})" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-up" class="svg-inline--fa fa-arrow-up fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path></svg>
                        </div>
                        <div class="col-3 col-lg-1 text-end">
                            <br>
                            @if($nach->approved != 1)
                            @if ($nach->approved == 2)
                            <a title="Beitrag veröffentlicht." id="approved-{{$nach->id}}">
                                <svg style="width: 20px; fill: orange" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" />
                                </svg>
                            </a>
                            @else
                            <a title="Beitrag inaktiv." id="approved-{{$nach->id}}">
                                <svg style="width: 20px; fill: red" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" />
                                </svg>
                            </a>
                            @endif
                            @else
                            <a title="Beitrag veröffentlicht." id="approved-{{$nach->id}}">
                                <svg style="width: 20px; fill: green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z" />
                                </svg>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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
        <br>
        <br>
        <br>
        <br>
    </div>
    @endif
</div>
</div>
<div class="modal fade" id="attachmentModal" role="dialog" aria-labelledby="attach_label_modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="attach_label_modal">Dateien</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <input type="hidden" id="nach_id" required="required" value="" , name="nach_id">
            <div class="modal-body">
                <h5><i class="fal fa-file"></i> Anhänge:</h5>
                <div class="form-group" id="attachments_div"></div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
@stop
@section('scripts')
<script>
    function removeNach(id) {
        $.ajax({
            data: {
                '_token': '{{csrf_token()}}',
                'id': id,
            },
            type: "POST",
            async: true,
            url: "{{route('dashboard.removeMessage')}}",
            success: function(data) {
                document.getElementById('nach'+data.response).remove();
                toastr.options = { "progressBar": true };
                var msg = toastr.success('Successfully removed!', 'Success');
                $(msg).click(function() {
                    $.ajax({
                        type: "GET",
                        async: true,
                        url: "{{url('admin/restoreNach')}}/" + id,
                        success: function(data) {
                            location.reload();
                        },
                        error: function(data) {
                            console.log('error!!')
                        }
                    });
                });
            },
            error: function(data) {
                console.log('error!!')
            }
        });
    }
    function toTop(id){
        $.ajax({
            data: { '_token': '{{csrf_token()}}', 'id': id, },
            type: "POST",
            async: true,
            url: "{{route('dashboard.toTop')}}",
            success: function(data) { location.reload(); },
            error: function(data) {
                console.log('error!!')
            }
        });
    }
    function getAttachments(id) {
        $.ajax({
            data: {
                '_token': '{{csrf_token()}}',
                'id': id,
            },
            type: "POST",
            async: true,
            url: "{{route('dashboard.getAttachments')}}",
            success: function(data) {
                console.log('success')
                let attach_div = document.getElementById('attachments_div')
                attach_div.innerHTML = data.response
            },
            error: function(data) {
                console.log('error!!')
            }
        });
    }
    function removeAttach(id, child) {
        $.ajax({
            data: {
                '_token': '{{csrf_token()}}',
                'id': id,
            },
            type: "POST",
            async: true,
            url: "{{route('dashboard.removeFile')}}",
            success: function(data) {
                console.log('success')
                node = document.getElementById('file_' + id)
                node.parentNode.removeChild(node);
            },
            error: function(data) {
                console.log('error!!')
            }
        });
    }
</script>
@stop