@extends('template.'.config('settings.template').'.content.master')
@section('content')
<div class="admin-header">
    <div class="admin-header" style="margin-bottom:0px !important;">
        <div class="container">
            <h1><i class="fal fa-plus"></i> Neue Stellenanzeige veröffentlichen</h1>
            <br>
            <br>
        </div>
    </div>
    <section>
        <div class="modal fade" id="addAction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" onsubmit="addAction();" id="add-action">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create new action</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="type">Action type</label>
                                <select class="form-control" id="type" onchange="changeTypeAction()" name="type" required="required">
                                    <option value="1">Webhook</option>
                                    <option value="2">E-mail</option>
                                    <option value="3">Donation</option>
                                    <option value="4">Link</option>
                                </select>
                            </div>
                            <div class="form-group"><label for="action_name">Action name</label><input type="text" required="required" class="form-control" id="action_name" placeholder="Action name" name="action_name"></div>
                            <div class="form-group"><label for="action_description">Action description</label><input type="text" class="form-control" id="action_description" placeholder="Action description" name="action_description"></div>
                            <div class="form-group"><label for="action_icon">Action icon</label><input type="text" required="required" class="form-control" id="action_icon" placeholder="Action icon" name="action_icon"></div>
                            <div class="form-group">
                                <label for="action_color">Action color</label>
                                <select class="form-control" id="action_color" name="action_color" required="required">
                                    <option value="primary">Primary</option>
                                    <option value="secondary">Secondary</option>
                                    <option value="success">Success</option>
                                    <option value="danger">Danger</option>
                                    <option value="warning">Warning</option>
                                    <option value="info">Info</option>
                                    <option value="light">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="form-group"><label for="action_amount">Action amount</label><input type="number" required="required" class="form-control" id="action_amount" placeholder="Action amount" name="action_amount"></div>
                            <div class="form-group"><label for="action_target">Action target url</label><input type="url" required="required" class="form-control" id="action_target" placeholder="Action target url" name="action_webhook"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-ci">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editAction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" onsubmit="editAction();" id="edit-action">
                        <input type="hidden" name="pos" value="" />
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit action</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="type">Action type</label>
                                <select class="form-control" onchange="changeTypeActionEdit()" id="editType" name="type" required="required">
                                    <option value="1">Webhook</option>
                                    <option value="2">E-mail</option>
                                    <option value="3">Donation</option>
                                    <option value="4">Link</option>
                                </select>
                            </div>
                            <div class="form-group"><label for="action_name">Action name</label><input type="text" required="required" class="form-control" id="edit_action_name" placeholder="Action name" name="action_name"></div>
                            <div class="form-group"><label for="action_description">Action description</label><input type="text" class="form-control" id="edit_action_description" placeholder="Action description" name="action_description"></div>
                            <div class="form-group"><label for="action_icon">Action icon</label><input type="text" required="required" class="form-control" id="edit_action_icon" placeholder="Action icon" name="action_icon"></div>
                            <div class="form-group">
                                <label for="action_color">Action color</label>
                                <select class="form-control" id="edit_action_color" name="action_color" required="required">
                                    <option value="primary">Primary</option>
                                    <option value="secondary">Secondary</option>
                                    <option value="success">Success</option>
                                    <option value="danger">Danger</option>
                                    <option value="warning">Warning</option>
                                    <option value="info">Info</option>
                                    <option value="light">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="form-group"><label for="action_amount">Action amount</label><input type="number" required="required" class="form-control" id="edit_action_amount" placeholder="Action amount" name="action_amount"></div>
                            <div class="form-group"><label for="edit_action_target">Action target url</label><input type="url" required="required" class="form-control" id="edit_action_target" placeholder="Action target url" name="action_webhook"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('dashboard.AddContent')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="nach_id" required="required" value="" , name="nach_id">
                        <input type="hidden" name="type_id" value="{{ $type_id }}" />
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <a style="cursor:pointer;" class="img-content" onclick="clickImgContent();">
                                    <div class="upload-img ci-color" style="border: 1px dashed; width: 100% ; height: 100%; background-color: rgb(222,222,222,0.2) ">
                                        <br>
                                        <h6 class="text-center">
                                            <br>
                                            <br>
                                            <i class="fal fa-upload"></i>
                                            <br>
                                            Bild hochladen
                                        </h6>
                                        <br>
                                        <br>
                                    </div>
                                </a>
                                <div class="form-group" style="display: none;">
                                    <input type="file" id="exampleFormControlInputImage" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-7 offset-md-1">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Titel Stellenausschreibung</label>
                                    <input type="text" class="form-control" id="title" placeholder="z.B.: Bauhelfer (m/w/d)" name="title" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Region der Arbeitsstelle</label>
                                    @if (auth()->user()->role->id > 2 and !empty(auth()->user()->category))
                                    <input type="text" class="form-control" value="{{ auth()->user()->category->name }}" id="category_id" readonly="readonly">
                                    <input type="hidden" name="category_id" value="{{ auth()->user()->default_category_id }}" />
                                    @else
                                    @endif
                                </div>
                                <div class="form-amount"></div>
                            </div>
                        </div>
                        <!--<div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="category" name="category" required="required" onchange="category_change(this.value, 1)">
                                  <option value="news">News</option>
                                  <option value="angebote">Angebote</option>
                                </select>
                            </div>-->
                        <div id="additional_fields_create">
                            <br>
                            @foreach ($typeModel->fieldsOrdened as $field)
                            <div class="form-group">
                                <label for="field_{{ $field->id }}">{{ $field->name }}</label>
                                @if ($field->type == 'boolean')
                                <br>
                                <label class="radio-inline"><input type="radio" value="1" name="additional_fields[{{ $field->id }}]" {{ $field->required ? 'required="required"' : '' }}> Yes</label>
                                <label class="radio-inline"><input type="radio" value="0" name="additional_fields[{{ $field->id }}]"> No</label>
                                @elseif ($field->type == 'location')
                                <input type="{{ $field->type }}" class="form-control fieldLocation" id="field_location" name="additional_fields[{{ $field->id }}][value]" @foreach ($field->attr as $key => $att)
                                {{ $key }}="{{ $att }}"
                                @endforeach
                                placeholder="{{ $field->name }}" {{ $field->required ? 'required="required"' : '' }}>
                                <input type="hidden" id="lat" name="additional_fields[{{ $field->id }}][lat]" {{ $field->required ? 'required="required"' : '' }} />
                                <input type="hidden" id="lng" name="additional_fields[{{ $field->id }}][lng]" {{ $field->required ? 'required="required"' : '' }} />
                                <input type="hidden" id="streetAddress" name="additional_fields[{{ $field->id }}][streetAddress]" {{ $field->required ? 'required="required"' : '' }} />
                                <input type="hidden" id="addressLocality" name="additional_fields[{{ $field->id }}][addressLocality]" {{ $field->required ? 'required="required"' : '' }} />
                                <input type="hidden" id="addressRegion" name="additional_fields[{{ $field->id }}][addressRegion]" {{ $field->required ? 'required="required"' : '' }} />
                                <input type="hidden" id="postalCode" name="additional_fields[{{ $field->id }}][postalCode]" {{ $field->required ? 'required="required"' : '' }} />
                                <input type="hidden" id="addressCountry" name="additional_fields[{{ $field->id }}][addressCountry]" {{ $field->required ? 'required="required"' : '' }} />
                                @elseif($field->type == 'select')
                                @if ($field->attr['isMultiple'] == 0)
                                <select class="form-control" placeholder="{{ $field->name }}" id="field_{{ $field->id }}" name="additional_fields[{{ $field->id }}]" {{ $field->required ? 'required="required"' : '' }}>
                                    <option value="">Select...</option>
                                    @foreach (explode(',', $field->attr['tags']) as $tag)
                                    <option value="{{ $tag }}">{{ $tag }}</option>
                                    @endforeach
                                </select>
                                @else
                                <select multiple class="demo-default multiple-plugin" placeholder="{{ $field->name }}" id="field_{{ $field->id }}" name="additional_fields[{{ $field->id }}][]" {{ $field->required ? 'required="required"' : '' }}>
                                    <option value="">Select...</option>
                                    @foreach (explode(',', $field->attr['tags']) as $tag)
                                    <option value="{{ $tag }}">{{ $tag }}</option>
                                    @endforeach
                                </select>
                                @endif
                                @elseif ($field->type == 'textfield')
                                <textarea class="form-control textfield-editor" id="field_{{ $field->id }}" rows="3" placeholder="{{ $field->name }}" name="additional_fields[{{ $field->id }}]" {{ $field->required ? 'required="required"' : '' }}></textarea>
                                @else
                                <input type="{{ $field->type }}" class="form-control {{ $field->type == 'tel' ? 'phone' : '' }}" id="field_{{ $field->id }}" @foreach ($field->attr as $key => $att)
                                {{ $key }}="{{ $att }}"
                                @endforeach
                                placeholder="{{ $field->name }}" {{ $field->required ? 'required="required"' : '' }} name="additional_fields[{{ $field->id }}]">
                                @endif
                            </div>
                            @endforeach
                        </div>
                        @if ($typeModel->enable_actions)
                        <div id="action" style="margin-top:10px;">
                            <br>
                            <hr>
                            <br>
                            <h5 style="margin-top:20px;margin-bottom:20px;"><i class="fal fa-play-circle"></i> Action Buttons <a href="" data-toggle="modal" data-target="#addAction" class="float-right"><i class="fal fa-plus"></i> Create new Action</a></h5>
                            <div class="row">
                                <table class="table table-borderless table-actions">
                                    <thead>
                                        <tr>
                                            <th scope="col">Preview Button</th>
                                            <th scope="col">Action Type</th>
                                            <th scope="col">Action Target</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row" style="margin-bottom:30px;">
                                <div class="col-lg-12">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" name="show_total_paid_action" value="1" id="show_total_paid_action">
                                        <label class="custom-control-label" for="show_total_paid_action">Display already paid amount to User</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                        <label class="custom-control-label" for="customSwitch1">Actions to behave as switch</label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <hr>
                        </div>
                        @endif
                        <br>
                        <textarea class="form-control" style="display: none" id="nachrichten_2" rows="3" placeholder="Nachrichten Text" name="nachrichten" required="required">Zum ansehen der </textarea>
                        <br>
                        @if ($typeModel->enable_downloads)
                        <label for="exampleFormControlTextarea1">{{ __('admin-content.content-files') }}</label>
                        <br>
                        <div class="col-md-6" style="margin-bottom:20px;">
                            <input type="file" class="form-control" id="images" name="files[]" onchange="preview_images();" multiple />
                        </div>
                        @endif
                        @if ($typeModel->enable_images)
                        <label for="exampleFormControlTextarea1">Attach Images to Content</label>
                        <br>
                        <div class="col-md-6" style="margin-bottom:20px;">
                            <input type="file" accept="image/*" class="form-control" id="images" name="images[]" multiple />
                        </div>
                        @endif
                        <br>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-8"></div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-ci float-right">
                                    <i class="fal fa-save"></i>
                                    Stellenanzeige veröffentlichen
                                </button>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('MAPS_API_KEY', 'AIzaSyAQj1N9Mj-OzOiUjt5QUDRkcDonXz4O85A') }}&v=3.exp&sensor=false&libraries=places"></script>
    <script src="https://cdn.tiny.cloud/1/0015awrvvurgnwz3e0uid83chhzb7lnbi6wyn4ukk7b4lh9k/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('system/js/tiny-de.js') }}"></script>
    <script>
        function initialize() {
            var input = document.getElementById('field_location');
            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.addListener("place_changed", () => {
                const place = autocomplete.getPlace();
                if (!place.geometry) {
                    // User entered the name of a Place that was not suggested and
                    // pressed the Enter key, or the Place Details request failed.
                    //window.alert("No details available for input: '" + place.name + "'");
                    return;
                }
                var componentMap = {
                    country: 'country',
                    locality: 'locality',
                    administrative_area_level_1: 'administrative_area_level_1',
                    administrative_area_level_2: 'administrative_area_level_2',
                    postal_code: 'postal_code',
                    route: 'route',
                    street_number: 'street_number',
                };
                var place2 = autocomplete.getPlace().address_components;
                var address = '';
                var number = '';
                for (var i = 0; i < place2.length; i++) {
                    var types = place2[i].types; // get types array of each component
                    for (var j = 0; j < types.length; j++) { // loop through the types array of each component as types is an array and same thing can be indicated by different name.As you can see in the json object above
                        var component_type = types[j];
                        // check if this type is in your component map.If so that means you want this component
                        if (componentMap.hasOwnProperty(component_type)) {
                            //console.log(place2[i]['long_name']);
                            if (component_type == 'country') {
                                $('#addressCountry').val(place2[i]['short_name']);
                            }
                            if (component_type == 'administrative_area_level_2') {
                                $('#addressRegion').val(place2[i]['short_name']);
                            }
                            if (component_type == 'postal_code') {
                                $('#postalCode').val(place2[i]['long_name']);
                            }
                            if (component_type == 'locality') {
                                $('#addressLocality').val(place2[i]['long_name']);
                            }
                            if (component_type == 'route') {
                                address = place2[i]['long_name'];
                            }
                            if (component_type == 'street_number') {
                                number = place2[i]['long_name'];
                            }
                        }
                    }
                }
                $('#streetAddress').val(address + ' ' + number);
                $('#lat').val(place.geometry.location.lat());
                $('#lng').val(place.geometry.location.lng());
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        function clickImgContent() {
            document.getElementById('exampleFormControlInputImage').click();
        }
        document.getElementById('exampleFormControlInputImage').addEventListener('change', readURL, true);
        function readURL() {
            var file = document.getElementById("exampleFormControlInputImage").files[0];
            var reader = new FileReader();
            reader.onloadend = function() {
                document.getElementById('img-content-fluid').setAttribute("src", reader.result);
                //document.getElementById('clock').style.backgroundImage = "url(" + reader.result + ")";
            }
            if (file) {
                reader.readAsDataURL(file);
            } else {}
        }
        $(document).on('focusin', function(e) {
            if ($(e.target).closest(".tox").length) {
                e.stopImmediatePropagation();
            }
        });
    </script>
    <script>
        function changeTypeAction() {
            var value = $('#type').val();
            if (value == 1) {
                $('[for="action_target"]').css('display', 'block').text('Action target url');
                $('#action_target').css('display', 'block').attr('type', 'url').attr('placeholder', 'Action target url').attr('required', 'required');
            }
            if (value == 2) {
                $('[for="action_target"]').css('display', 'block').text('Action target email');
                $('#action_target').css('display', 'block').attr('type', 'email').attr('placeholder', 'Action target email').attr('required', 'required');
            }
            if (value == 4) {
                $('[for="action_target"]').css('display', 'block').text('Action target url');
                $('#action_target').css('display', 'block').attr('type', 'url').attr('placeholder', 'Action target url').attr('required', 'required');
            }
            if (value == 3) {
                $('[for="action_target"]').css('display', 'none');
                $('#action_target').css('display', 'none').removeAttr('required');
            }
        }
        function changeTypeActionEdit() {
            var value = $('#editType').val();
            if (value == 1) {
                $('[for="edit_action_target"]').css('display', 'block').text('Action target url');
                $('#edit_action_target').css('display', 'block').attr('type', 'url').attr('placeholder', 'Action target url').attr('required', 'required');
            }
            if (value == 2) {
                $('[for="edit_action_target"]').css('display', 'block').text('Action target email');
                $('#edit_action_target').css('display', 'block').attr('type', 'email').attr('placeholder', 'Action target email').attr('required', 'required');
            }
            if (value == 4) {
                $('[for="edit_action_target"]').css('display', 'block').text('Action target url');
                $('#edit_action_target').css('display', 'block').attr('type', 'url').attr('placeholder', 'Action target url').attr('required', 'required');
            }
            if (value == 3) {
                $('[for="edit_action_target"]').css('display', 'none');
                $('#edit_action_target').css('display', 'none').removeAttr('required');
            }
        }
        function addAction() {
            event.preventDefault();
            var pos = $('.table-actions tbody tr:last').attr('id');
            if (!pos) {
                var pos = 1;
            } else {
                var pos = parseInt(pos) + 1;
            }
            if (!$('#action_target').val()) {
                target = '';
            } else {
                target = $('#action_target').val();
            }
            var html_content = '<tr id="' + pos + '">';
            html_content += '<input type="hidden" name="action[' + pos + '][icon]" value="' + $('#action_icon').val() + '"/>';
            html_content += '<input type="hidden" name="action[' + pos + '][color]" value="' + $('#action_color').val() + '"/>';
            html_content += '<input type="hidden" name="action[' + pos + '][amount]" value="' + $('#action_amount').val() + '"/>';
            html_content += '<input type="hidden" name="action[' + pos + '][name]" value="' + $('#action_name').val() + '"/>';
            html_content += '<input type="hidden" name="action[' + pos + '][description]" value="' + $('#action_description').val() + '"/>';
            html_content += '<td><a class="btn btn-' + $('#action_color').val() + '" style="color:white"> <i class="fal fa-' + $('#action_icon').val() + '"></i> ' + $('#action_name').val() + ' for ' + $('#action_amount').val() + ' sats</a></td>';
            html_content += '<td>' + $("#type option:selected").text() + '<input type="hidden" name="action[' + pos + '][type]" value="' + $('#type').val() + '"/></td>';
            html_content += '<td>' + target + '<input type="hidden" name="action[' + pos + '][target]" value="' + target + '"/></td>';
            html_content += '<td class="float-right"><a href="" onclick="openEditAction(' + pos + ')" data-id="' + pos + '"><i class="fal fa-edit"></i></a>&nbsp;|&nbsp;<a href="" onclick="removeAction(' + pos + ')" data-id="' + pos + '"><i class="fad fa-trash" style="color: red;cursor:pointer;"></i></a></td>';
            html_content += '</tr>';
            $('.table-actions tbody').append(html_content);
            $('#add-action')[0].reset();
            $('.modal').modal('hide');
        }
        function removeAction(id) {
            event.preventDefault();
            $('#' + id).remove();
        }
        function openEditAction(id) {
            event.preventDefault();
            $('[name="pos"]').val(id);
            $('#editType').val($('[name="action[' + id + '][type]"]').val());
            $('#edit_action_name').val($('[name="action[' + id + '][name]"]').val());
            $('#edit_action_description').val($('[name="action[' + id + '][description]"]').val());
            $('#edit_action_icon').val($('[name="action[' + id + '][icon]"]').val());
            $('#edit_action_color').val($('[name="action[' + id + '][color]"]').val());
            $('#edit_action_amount').val($('[name="action[' + id + '][amount]"]').val());
            $('#edit_action_target').val($('[name="action[' + id + '][target]"]').val());
            changeTypeActionEdit();
            $('#editAction').modal('toggle');
        }
        function editAction() {
            event.preventDefault();
            var pos = $('[name="pos"]').val();
            if (!$('#edit_action_target').val()) {
                target = '';
            } else {
                target = $('#edit_action_target').val();
            }
            var html_content = '<tr id="' + pos + '">';
            html_content += '<input type="hidden" name="action[' + pos + '][icon]" value="' + $('#edit_action_icon').val() + '"/>';
            html_content += '<input type="hidden" name="action[' + pos + '][color]" value="' + $('#edit_action_color').val() + '"/>';
            html_content += '<input type="hidden" name="action[' + pos + '][amount]" value="' + $('#edit_action_amount').val() + '"/>';
            html_content += '<input type="hidden" name="action[' + pos + '][name]" value="' + $('#edit_action_name').val() + '"/>';
            html_content += '<input type="hidden" name="action[' + pos + '][description]" value="' + $('#edit_action_description').val() + '"/>';
            html_content += '<td><a class="btn btn-' + $('#edit_action_color').val() + '" style="color:white"> <i class="fal fa-' + $('#edit_action_icon').val() + '"></i> ' + $('#edit_action_name').val() + ' for ' + $('#edit_action_amount').val() + ' sats</a></td>';
            html_content += '<td>' + $("#editType option:selected").text() + '<input type="hidden" name="action[' + pos + '][type]" value="' + $('#editType').val() + '"/></td>';
            html_content += '<td>' + target + '<input type="hidden" name="action[' + pos + '][target]" value="' + target + '"/></td>';
            html_content += '<td class="float-right"><a href="" onclick="openEditAction(' + pos + ')" data-id="' + pos + '"><i class="fal fa-edit"></i></a>&nbsp;|&nbsp;<a href="" onclick="removeAction(' + pos + ')" data-id="' + pos + '"><i class="fad fa-trash" style="color: red;cursor:pointer;"></i></a></td>';
            html_content += '</tr>';
            $('#' + pos).remove();
            $('.table-actions tbody').append(html_content);
            $('#edit-action')[0].reset();
            $('.modal').modal('hide');
        }
        function changePaid(event) {
            if ($("#paid").prop("checked")) {
                var data_html = '<div class="form-group"><label for="paidAmount">Bezahlbarer Betrag</label><input type="number" class="form-control" id="paidAmount" value="1000" placeholder="Bezahlbarer Betrag" name="paidAmount" required="required" min="1" step="1"></div>';
                data_html += '<div class="form-group"><label for="premium_until">Premium Until</label><input type="date" class="form-control" id="premium_until" placeholder="Premium Until" name="premium_until"></div>';
                $('.form-amount').html(data_html);
            } else {
                $('.form-amount').empty();
            }
        }
        function changePublish(event) {
            if ($("#publish").prop("checked")) {
                $('.box-publish').css('display', 'block');
                $('#publish_at').attr('required', 'required');
            } else {
                $('.box-publish').css('display', 'none');
                $('#publish_at').removeAttr('required');
            }
        }
        function changePaid2(event) {
            if (event.value == 1) {
                var data_html = '<div class="form-group"><label for="paidAmount">Bezahlbarer Betrag</label><input type="number" class="form-control" id="paidAmount" value="1000" placeholder="Bezahlbarer Betrag" name="paidAmount" required="required"></div>';
                data_html += '<div class="form-group"><label for="premium_until">Premium Until</label><input type="date" class="form-control" id="premium_until" placeholder="Premium Until" name="premium_until"></div>';
                $('.form-amount2').html(data_html);
            } else {
                $('.form-amount2').empty();
            }
        }
    </script>
    <script>
        function changeType(event) {
            var type = event;
            $('#additional_fields_create').empty();
            $('#action').css('display', 'none');
            if (type == 2) {
                var data_html_type = '<div class="form-group"><label for="workplace">Arbeitsort</label><input type="text" class="form-control" id="workplace" placeholder="Arbeitsort" name="additional_fields[workplace]"></div>';
                data_html_type += '<div class="form-group"><label for="contact_info">Kontaktdaten</label><textarea class="form-control" id="contact_info" name="additional_fields[contact_info]" rows="3" placeholder="Kontaktdaten"></textarea></div>';
                $('#additional_fields_create').html(data_html_type);
            }
            if (type == 3) {
                /*var data_html_type = '<div class="form-group"><label for="action_name">Action name</label><input type="text" class="form-control" id="action_name" placeholder="Action name" name="action_name"></div>';
                data_html_type += '<div class="form-group"><label for="action_description">Action description</label><input type="text" class="form-control" id="action_description" placeholder="Action description" name="action_description"></div>';
                data_html_type += '<div class="form-group"><label for="action_icon">Action icon</label><input type="text" class="form-control" id="action_icon" placeholder="Action icon" name="action_icon"></div>';
                data_html_type += '<div class="form-group"><label for="action_amount">Action amount</label><input type="number" class="form-control" id="action_amount" placeholder="Action amount" name="action_amount"></div>';
                data_html_type += '<div class="form-group"><label for="action_webhook">Action URL Webhook</label><input type="text" class="form-control" id="action_webhook" placeholder="Action URL Webhook" name="action_webhook"></div>';
                $('#additional_fields_create').html(data_html_type);*/
                $('#action').css('display', 'block');
            }
        }
        tinymce.init({
            selector: "#nachrichten_2",
            plugins: 'advlist link image lists',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link | unlink | image',
            height: '250',
            directionality: 'de',
            language: 'de',
            setup: function(editor) {
                editor.on('change', function(e) {
                    editor.save();
                });
            }
        });
        tinymce.init({
            selector: ".textfield-editor",
            plugins: 'advlist link image lists',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link | unlink | image',
            height: '250',
            directionality: 'de',
            language: 'de',
            setup: function(editor) {
                editor.on('change', function(e) {
                    editor.save();
                });
            }
        });
        function approve(id) {
            $.ajax({
                data: {
                    '_token': '{{csrf_token()}}',
                    'id': id,
                },
                type: "POST",
                async: true,
                url: "{{route('approveMessage')}}",
                success: function(data) {
                    if (data.response.approved) {
                        document.getElementById('approved-' + id).style.color = "green"
                    } else {
                        document.getElementById('approved-' + id).style.color = "red"
                    }
                },
                error: function(data) {
                    console.log('error')
                    console.log(data)
                }
            });
        }
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
                    document.getElementById('nach' + data.response).remove()
                },
                error: function(data) {
                    console.log('error!!')
                }
            });
        }
        function getNachData(id) {
            $(document).on('focusin', function(e) {
                if ($(e.target).closest(".tox").length) {
                    e.stopImmediatePropagation();
                }
            });
            $.ajax({
                data: {
                    '_token': '{{csrf_token()}}',
                    'id': id,
                },
                type: "POST",
                async: true,
                url: "{{route('getNachData')}}",
                success: function(data) {
                    $('#additional_fields').empty();
                    if (data.response.type_id == 2) {
                        if (data.response.additional_fields.workplace) {
                            var workplace = data.response.additional_fields.workplace;
                        } else {
                            var workplace = "";
                        }
                        if (data.response.additional_fields.contact_info) {
                            var contact_info = data.response.additional_fields.contact_info;
                        } else {
                            var contact_info = "";
                        }
                        var data_html_type = '<div class="form-group"><label for="workplace">Arbeitsort</label><input type="text" class="form-control" id="workplace" value="' + workplace + '" placeholder="Arbeitsort" name="additional_fields[workplace]"></div>';
                        data_html_type += '<div class="form-group"><label for="contact_info">Kontaktdaten</label><textarea class="form-control" id="contact_info" name="additional_fields[contact_info]" rows="3" placeholder="Kontaktdaten">' + contact_info + '</textarea></div>';
                        $('#additional_fields').html(data_html_type);
                    }
                    if (data.response.type_id == 3) {
                        var data_html_type = '<div class="form-group"><label for="action_name">Action name</label><input value="' + data.response.action.name + '" type="text" class="form-control" id="action_name" placeholder="Action name" name="action_name"></div>';
                        data_html_type += '<div class="form-group"><label for="action_description">Action description</label><input value="' + data.response.action.description + '" type="text" class="form-control" id="action_description" placeholder="Action description" name="action_description"></div>';
                        data_html_type += '<div class="form-group"><label for="action_icon">Action icon</label><input value="' + data.response.action.icon + '" type="text" class="form-control" id="action_icon" placeholder="Action icon" name="action_icon"></div>';
                        data_html_type += '<div class="form-group"><label for="action_amount">Action amount</label><input type="number" value="' + data.response.action.amount + '" class="form-control" id="action_amount" placeholder="Action amount" name="action_amount" min="1" step="1"></div>';
                        data_html_type += '<div class="form-group"><label for="action_webhook">Action URL Webhook</label><input type="text" class="form-control" value="' + data.response.action.webhook + '" id="action_webhook" placeholder="Action URL Webhook" name="action_webhook"></div>';
                        $('#additional_fields').html(data_html_type);
                    }
                    if (data.response.image) {
                        $('#imageCurrent').css('display', 'block');
                        $('#imageCurrentAnchor').attr('href', '{{ url('
                            uploads ') }}/' + data.response.image).html(data.response.image);
                    } else {
                        $('#imageCurrent').css('display', 'none');
                    }
                    document.getElementById('nach_id').value = id
                    document.getElementById('title').value = data.response.title
                    document.getElementById('category_id').value = data.response.category_id
                    document.getElementById('nachrichten').value = data.response.nachrichten;
                    if (data.response.paid == 0) {
                        document.getElementById('paid').value = 0;
                        $('.form-amount2').empty();
                    } else {
                        document.getElementById('paid').value = 1;
                        var data_html = '<div class="form-group"><label for="paidAmount">Bezahlbarer Betrag</label><input type="number" class="form-control" id="paidAmount" value="' + data.response.paid + '" placeholder="Bezahlbarer Betrag" name="paidAmount" required="required" min="1" step="1"></div>';
                        data_html += '<div class="form-group"><label for="premium_until">Premium Until</label><input type="date" class="form-control" id="premium_until" value="' + data.response.premium_until + '" placeholder="Premium Until" name="premium_until"></div>';
                        $('.form-amount2').html(data_html);
                    }
                    /*if (data.response.category === "angebote") {
                      document.getElementById('contact_info').value = data.response.contact_info
                      document.getElementById('contact_info').disabled = false;
                    } else {*/
                    //document.getElementById('contact_info').value = ''
                    //document.getElementById('contact_info').disabled = 'disabled';
                    //}
                    tinymce.init({
                        selector: "#nachrichten",
                        plugins: 'advlist link image lists',
                        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link | unlink | image',
                        height: '600',
                        directionality: 'de',
                        language: 'de',
                        setup: function(editor) {
                            editor.on('change', function(e) {
                                editor.save();
                            });
                        }
                    });
                    if (data.response.category == 'angebote') {
                        tinymce.init({
                            selector: "#contact_info",
                            plugins: 'advlist link image lists',
                            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link | unlink | image',
                            height: '600',
                            directionality: 'de',
                            language: 'de',
                            setup: function(editor) {
                                editor.on('change', function(e) {
                                    editor.save();
                                });
                            }
                        });
                    } else {
                        tinymce.remove("#contact_info");
                    }
                },
                error: function(data) {
                    console.log(data)
                    console.log('error!!')
                }
            });
        }
        function editNachrichten(id) {
            $.ajax({
                data: {
                    '_token': '{{csrf_token()}}',
                    'id': id,
                },
                type: "POST",
                async: true,
                url: "{{route('dashboard.editContent')}}",
                success: function(data) {
                    console.log('success!!')
                },
                error: function(data) {
                    console.log('error!!')
                }
            });
        }
        function sendNotification(id) {
            $.ajax({
                data: {
                    '_token': '{{csrf_token()}}',
                    'id': id,
                },
                type: "POST",
                async: true,
                url: "{{route('dashboard.sendMessage')}}",
                success: function(data) {
                    var data = JSON.parse(data);
                    if (data.success) {
                        $('#notify-' + id).remove();
                        console.log('success!!')
                    } else if (data.success == false)
                        console.log('erro ao notificar!!')
                },
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
                url: "{{route('getAttachments')}}",
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
                url: "{{route('removeFile')}}",
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
        function category_change(category, create) {
            if (category !== 'angebote') {
                if (create == 1) {
                    document.getElementById('contact_info_2').disabled = 'disabled';
                    tinymce.remove("#contact_info_2");
                } else {
                    document.getElementById('contact_info').disabled = 'disabled';
                    tinymce.remove("#contact_info");
                }
            } else {
                if (create == 1) {
                    document.getElementById('contact_info_2').disabled = false;
                    tinymce.init({
                        selector: "#contact_info_2",
                        plugins: 'advlist link image lists',
                        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link | unlink | image',
                        height: '250',
                        directionality: 'de',
                        language: 'de',
                        setup: function(editor) {
                            editor.on('change', function(e) {
                                editor.save();
                            });
                        }
                    });
                } else {
                    document.getElementById('contact_info').disabled = false;
                    tinymce.init({
                        selector: "#contact_info",
                        plugins: 'advlist link image lists',
                        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link | unlink | image',
                        height: '250',
                        directionality: 'de',
                        language: 'de',
                        setup: function(editor) {
                            editor.on('change', function(e) {
                                editor.save();
                            });
                        }
                    });
                }
                $(document).on('focusin', function(e) {
                    if ($(e.target).closest(".tox").length) {
                        e.stopImmediatePropagation();
                    }
                });
            }
        }
    </script>
</div>
@stop
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.min.css" />
<script>
    $('.multiple-plugin').selectize({
        delimiter: ',',
        persist: false
    });
</script>
<script src="{{ asset('system/js/intlTelInput.min.js') }}"></script>
<script>
    var input = document.querySelector(".phone");
    window.intlTelInput(input, {
        // any initialisation options go here
    });
</script>
@stop