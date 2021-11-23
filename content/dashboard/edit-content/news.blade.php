@extends('template.'.config('settings.template').'.content.master')

@section('content')

    <div class="admin-header">
        <div class="admin-header" style="margin-bottom:0px !important;">
            <div class="container">
                <h1><i class="fal fa-file-alt"></i> Edit Content</h1>
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

                                <div class="form-group"><label for="action_amount">Action amount</label>
                                    <input type="number" required="required" class="form-control" id="action_amount" placeholder="Action amount" name="action_amount" min="1" step="1"></div>
                                <div class="form-group"><label for="action_target">Action target url</label><input type="url" required="required" class="form-control" id="action_target" placeholder="Action target url" name="action_webhook"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
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

                                <div class="form-group"><label for="action_amount">Action amount</label><input type="number" required="required" class="form-control" id="edit_action_amount" placeholder="Action amount" name="action_amount" min="1" step="1"></div>
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
                        <form action="{{route('dashboard.editContent')}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" id="nach_id" required="required" value="{{ $nach->id }}" name="nach_id">

                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <label for="exampleFormControlInputImage">{{ __('admin-content.content-image') }}</label>


                                        @isset($nach->image)

                                            <a style="cursor:pointer;" class="img-content" onclick="clickImgContent();">
                                                <img src="{{ url('/uploads/' . $nach->image) }}" class="img-responsive" id="img-content-fluid">
                                            </a>
                                        @else

                                            <a style="cursor:pointer;" class="img-content" onclick="clickImgContent();">
                                                <div class="upload-img ci-color" style="border: 1px dashed; width: 100% ; height: 100%; background-color: rgb(222,222,222,0.2);">

                                                    <h6 class="text-center">
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <i class="fal fa-upload"></i>
                                                        <br>
                                                        Bild hochladen</h6>
                                                </div>
                                            </a>

                                        @endisset


                                        <div class="form-group" style="display: none;">
                                            <input type="file" id="exampleFormControlInputImage" name="image" class="form-control">
                                        </div>

                                    </div>

                                    <div class="col-12 col-md-7 offset-md-1">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nachrichten Titel</label>
                                            <input type="text" class="form-control" id="title" value="{{ $nach->title }}" placeholder="Überschrift des Beitrags" name="title" required="required">
                                        </div>

                                        <div class="form-group">
                                            <label for="category_id">Kategorie</label>
                                            <select class="form-control" id="category_id" name="category_id" required="required">
                                                <option value="">Wählen Sie eine Option</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" {{ $category->id == $nach->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        @if (config('settings.lnd_status'))

                                            <h6 class="ci-color"><i class="fal fa-gem"></i> Define as Premium Content</h6>

                                            <div class="form-group" style="margin-bottom: 55px;margin-top:15px;">
                                                <div class="custom-control custom-switch float-left">
                                                    <input type="checkbox" onchange="changePaid2(this);" name="paid" class="custom-control-input" {{ $nach->paid > 0 ? 'checked' : '' }} id="paid" value="1">
                                                    <label class="custom-control-label" for="paid">Ja</label>
                                                </div>
                                            </div>

                                            <div class="form-amount2">
                                                @if ($nach->paid != 0)
                                                    <div class="form-group"><label for="paidAmount">Bezahlbarer Betrag</label><input type="number" class="form-control" id="paidAmount" value="{{ $nach->paid }}" placeholder="Bezahlbarer Betrag" name="paidAmount" required="required" min="1" step="1"></div>
                                                    <div class="form-group"><label for="premium_until">Premium Until</label><input type="date" class="form-control" id="premium_until" value="{{ $nach->premium_until }}" placeholder="Premium Until" name="premium_until"></div>
                                                @endif
                                            </div>

                                        @endif

                                    </div>
                                </div>
                                <br>



                                <div id="additional_fields">
                                    <br>
                                    @foreach ($typeModel->fields as $field)
                                        <div class="form-group">
                                            <label for="field_{{ $field->id }}">{{ $field->name }}</label>

                                            @if ($field->type == 'boolean')
                                                <br>
                                                <label class="radio-inline"><input type="radio" value="1" name="additional_fields[{{ $field->id }}]" {{ (isset($nach->additional_fields[$field->id]) and $nach->additional_fields[$field->id] == 1) ? 'checked' : '' }} {{ $field->required ? 'required="required"' : '' }}> Yes</label>
                                                <label class="radio-inline"><input type="radio" value="0" name="additional_fields[{{ $field->id }}]" {{ (isset($nach->additional_fields[$field->id]) and $nach->additional_fields[$field->id] == 0) ? 'checked' : '' }}> No</label>
                                            @elseif ($field->type == 'location')
                                                <input type="{{ $field->type }}" class="form-control fieldLocation" id="field_location" value="{{ isset($nach->additional_fields[$field->id]) ? $nach->additional_fields[$field->id]['value'] : '' }}"
                                                @foreach ($field->attr as $key => $att)
                                                    {{ $key }}="{{ $att }}"
                                                @endforeach
                                                placeholder="{{ $field->name }}" {{ $field->required ? 'required="required"' : '' }}>

                                                <input type="hidden" id="lat" value="{{ isset($nach->additional_fields[$field->id]) ? $nach->additional_fields[$field->id]['lat'] : '' }}" name="additional_fields[{{ $field->id }}][lat]" {{ $field->required ? 'required="required"' : '' }}/>
                                                <input type="hidden" id="lng" value="{{ isset($nach->additional_fields[$field->id]) ? $nach->additional_fields[$field->id]['lng'] : '' }} " name="additional_fields[{{ $field->id }}][lng]" {{ $field->required ? 'required="required"' : '' }} />
                                            @elseif($field->type == 'select')
                                                @if ($field->attr['isMultiple'] == 0)
                                                    <select class="form-control" placeholder="{{ $field->name }}" id="field_{{ $field->id }}" name="additional_fields[{{ $field->id }}]" {{ $field->required ? 'required="required"' : '' }}>
                                                        <option value="">Select...</option>
                                                        @foreach (explode(',', $field->attr['tags']) as $tag)
                                                            <option value="{{ $tag }}" {{ $nach->additional_fields[$field->id] == $tag ? 'selected' : '' }}>{{ $tag }}</option>
                                                        @endforeach
                                                    </select>
                                                @else
                                                    <select multiple class="demo-default multiple-plugin" placeholder="{{ $field->name }}" id="field_{{ $field->id }}" name="additional_fields[{{ $field->id }}][]" {{ $field->required ? 'required="required"' : '' }}>
                                                        <option value="">Select...</option>
                                                        @foreach (explode(',', $field->attr['tags']) as $tag)
                                                            <option value="{{ $tag }}" {{ in_array($tag, $nach->additional_fields[$field->id]) ? 'selected' : '' }}>{{ $tag }}</option>
                                                        @endforeach
                                                    </select>
                                                @endif
                                            @elseif ($field->type == 'textfield')
                                                <textarea class="form-control textfield-editor" id="field_{{ $field->id }}" rows="3" placeholder="{{ $field->name }}" name="additional_fields[{{ $field->id }}]" {{ $field->required ? 'required="required"' : '' }}>{!! isset($nach->additional_fields[$field->id]) ? $nach->additional_fields[$field->id] : ''  !!}</textarea>
                                            @else
                                                <input type="{{ $field->type }}" class="form-control {{ $field->type == 'tel' ? 'phone' : '' }}" id="field_{{ $field->id }}"
                                                @foreach ($field->attr as $key => $att)
                                                    {{ $key }}="{{ $att }}"
                                                @endforeach
                                                placeholder="{{ $field->name }}" value="{{ isset($nach->additional_fields[$field->id]) ? $nach->additional_fields[$field->id] : '' }}" {{ $field->required ? 'required="required"' : '' }} name="additional_fields[{{ $field->id }}]">
                                            @endif
                                        </div>
                                    @endforeach

                                    @if ($nach->type_id == 2)
                                        <div class="form-group"><label for="workplace">Arbeitsort</label><input type="text" class="form-control" id="workplace" value="{{ isset($nach->additional_fields['workplace']) ? $nach->additional_fields['workplace'] : '' }}" placeholder="Arbeitsort" name="additional_fields[workplace]"></div>
                                        <div class="form-group"><label for="contact_info">Kontaktdaten</label><textarea class="form-control" id="contact_info" name="additional_fields[contact_info]" rows="3" placeholder="Kontaktdaten">{!! isset($nach->additional_fields['contact_info']) ? $nach->additional_fields['contact_info'] : '' !!}</textarea></div>
                                    @endif
                                </div>

                                @if ($typeModel->enable_actions)
                                    <div id="action" style="margin-top:10px;">
                                        <hr>
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
                                                <?php $i = 0 ;?>
                                                @foreach ($nach->actions as $action)
                                                    <tr id="{{ $i }}" data-idAction="{{ $action->id }}">
                                                        <input type="hidden" name="action[{{ $i }}][id]" value="{{ $action->id }}"/>
                                                        <input type="hidden" name="action[{{ $i }}][icon]" value="{{ $action->icon }}"/>
                                                        <input type="hidden" name="action[{{ $i }}][color]" value="{{ $action->color }}"/>
                                                        <input type="hidden" name="action[{{ $i }}][amount]" value="{{ $action->amount }}"/>
                                                        <input type="hidden" name="action[{{ $i }}][name]" value="{{ $action->name }}"/>
                                                        <input type="hidden" name="action[{{ $i }}][description]" value="{{ $action->description }}"/>

                                                        <td><a class="btn btn-{{ $action->color }}" style="color:white"> <i class="fal fa-{{ $action->icon }}"></i> {{ $action->name }} for {{ $action->amount }} sats</a></td>

                                                        <td>{{ $action->getType() }}<input type="hidden" name="action[{{ $i }}][type]" value="{{ $action->type }}"/></td>
                                                        <td>{{ $action->target }}<input type="hidden" name="action[{{ $i }}][target]" value="{{ $action->target }}"/></td>
                                                        <td class="float-right"><a href="" onclick="openEditAction({{ $i }})" data-id="{{ $i }}"><i class="fal fa-edit"></i></a>&nbsp;|&nbsp;<a href="" onclick="removeAction({{ $i }})" data-id="'+pos+'"><i class="fad fa-trash" style="color: red;cursor:pointer;"></i></a></td>
                                                    </tr>

                                                    <?php $i++;?>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="row" style="margin-bottom:30px;">

                                            <div class="col-lg-12">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" {{ $nach->show_total_paid_action == 1 ? 'checked' : '' }} name="show_total_paid_action" value="1" id="show_total_paid_action">
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
                                    </div>
                                @endif

                                <div class="form-group">
                                    <h5> {{ __('admin-content.content-text') }}</h5>
                                </div>
                                <textarea class="form-control" id="nachrichten_2" rows="3" placeholder="Nachrichten Text" name="nachrichten" required="required">
                            {!! $nach->nachrichten !!}
                        </textarea>
                                <br>
                                <br>
                                <br>
                                <hr>

                                @if ($typeModel->enable_images)
                                    <h5><i class="fal fa-images"></i> More Images</h5>

                                    <div class="row" style="margin-bottom: 100px;">
                                        @foreach ($nach->images as $image)
                                            <div class="col-sm-3">
                                                <img src="{{ asset('uploads/nachrichten-images/' . $image->image) }}" class="img-fluid" width="220">
                                                <br>
                                                <br>
                                                <a class="btn btn-danger btn-sm" href="{{ route('removeImage', $image->id) }}"><i class="fal fa-times"></i> Delete</a>
                                            </div>
                                        @endforeach

                                    </div>

                                    <label for="exampleFormControlTextarea1">Attach Images to Content</label>
                                    <br>

                                    <div class="col-md-6" style="margin-bottom:20px;">
                                        <input type="file" accept="image/*" class="form-control" id="images" name="images[]" multiple/>
                                    </div><br>

                                @endif

                                @if ($typeModel->enable_downloads)
                                    <label for="exampleFormControlTextarea1">Dateien zum Beitrag</label>
                                    <br>

                                    <div class="col-md-6" style="margin-bottom:20px;">
                                        <input type="file" class="form-control" id="images" name="files[]" onchange="preview_images();" multiple/>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <hr>
                                @endif
                                <br>
                                <br>

                                <div class="form-group" style="margin-top:20px;margin-bottom: 50px;">
                                    <div class="custom-control custom-switch float-left" style="display: block;">
                                        <input type="checkbox" name="publish" {{ $nach->publish_at ? 'checked' : '' }} onchange="changePublish(this);" class="custom-control-input" id="publish" value="1">
                                        <label class="custom-control-label" for="publish">Schedule publication</label>
                                    </div>
                                </div>

                                <div class="box-publish" style="{{ $nach->publish_at ? 'display: block;' : 'display: none;' }}">
                                    <div class="form-group">
                                        <label for="publish_at">{{ __('admin-content.content-publish') }}</label>
                                        <input type="date" class="form-control" id="publish_at" placeholder="{{ __('admin-content.content-publish') }}" name="publish_at" value="{{ $nach->publish_at }}" {{ $nach->publish_at ? 'required' : '' }}>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer" style="border: 0px;">
                                <button type="submit" class="btn btn-primary float-right">
                                    <i class="fal fa-save"></i>
                                    Beitrag aktualisieren
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://maps.googleapis.com/maps/api/js?key={{ env('MAPS_API_KEY', 'AIzaSyAQj1N9Mj-OzOiUjt5QUDRkcDonXz4O85A') }}&v=3.exp&sensor=false&libraries=places"></script>

        <script src="https://cdn.tiny.cloud/1/0015awrvvurgnwz3e0uid83chhzb7lnbi6wyn4ukk7b4lh9k/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="{{ asset('system/js/tiny-de.js') }}"></script>

        <script>
            $(document).on('focusin', function(e) {
                if ($(e.target).closest(".tox").length) {
                    e.stopImmediatePropagation();
                }
            });
        </script>

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

                    $('#lat').val(place.geometry.location.lat());
                    $('#lng').val(place.geometry.location.lng());
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);

            function clickImgContent()
            {
                document.getElementById('exampleFormControlInputImage').click();
            }

            document.getElementById('exampleFormControlInputImage').addEventListener('change', readURL, true);

            function readURL(){
                var file = document.getElementById("exampleFormControlInputImage").files[0];
                var reader = new FileReader();
                reader.onloadend = function(){
                    document.getElementById('img-content-fluid').setAttribute("src", reader.result);
                    //document.getElementById('clock').style.backgroundImage = "url(" + reader.result + ")";
                }
                if(file){
                    reader.readAsDataURL(file);
                }else{
                }
            }

            function changePublish(event) {
                if ($("#publish").prop("checked")) {
                    $('.box-publish').css('display', 'block');
                    $('#publish_at').attr('required', 'required');
                } else {
                    $('.box-publish').css('display', 'none');
                    $('#publish_at').removeAttr('required');
                    $('#publish_at').val('');
                }
            }

            function changeTypeAction()
            {
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

            function changeTypeActionEdit()
            {
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

            function changePaid(event)
            {
                if (event.value == 1) {
                    var data_html = '<div class="form-group"><label for="paidAmount">Bezahlbarer Betrag</label><input type="number" class="form-control" id="paidAmount" value="1000" placeholder="Bezahlbarer Betrag" name="paidAmount" required="required" min="1" step="1"></div>';
                    data_html += '<div class="form-group"><label for="premium_until">Premium Until</label><input type="date" class="form-control" id="premium_until" placeholder="Premium Until" name="premium_until"></div>';

                    $('.form-amount').html(data_html);
                } else {
                    $('.form-amount').empty();
                }
            }

            function changePaid2(event)
            {
                if ($("#paid").prop("checked") == 1) {
                    var data_html = '<div class="form-group"><label for="paidAmount">Bezahlbarer Betrag</label><input type="number" class="form-control" id="paidAmount" value="1000" placeholder="Bezahlbarer Betrag" name="paidAmount" required="required" min="1" step="1"></div>';
                    data_html += '<div class="form-group"><label for="premium_until">Premium Until</label><input type="date" class="form-control" id="premium_until" placeholder="Premium Until" name="premium_until"></div>';

                    $('.form-amount2').html(data_html);
                } else {
                    $('.form-amount2').empty();
                }
            }
        </script>
        <script>
            function addAction()
            {
                event.preventDefault();

                var pos = $('.table-actions tbody tr:last').attr('id');

                if (!pos) {
                    var pos = 1;
                } else {
                    var pos = parseInt(pos) + 1;
                }

                var html_content = '<tr id="'+pos+'">';
                html_content += '<input type="hidden" name="action['+pos+'][icon]" value="'+$('#action_icon').val()+'"/>';
                html_content += '<input type="hidden" name="action['+pos+'][color]" value="'+$('#action_color').val()+'"/>';
                html_content += '<input type="hidden" name="action['+pos+'][amount]" value="'+$('#action_amount').val()+'"/>';
                html_content += '<input type="hidden" name="action['+pos+'][name]" value="'+$('#action_name').val()+'"/>';
                html_content += '<input type="hidden" name="action['+pos+'][description]" value="'+$('#action_description').val()+'"/>';

                html_content += '<td><a class="btn btn-'+$('#action_color').val()+'" style="color:white"> <i class="fal fa-'+$('#action_icon').val()+'"></i> '+$('#action_name').val()+' for '+$('#action_amount').val()+' sats</a></td>';

                html_content += '<td>'+$( "#type option:selected" ).text()+'<input type="hidden" name="action['+pos+'][type]" value="'+$('#type').val()+'"/></td>';
                html_content += '<td>'+$('#action_target').val()+'<input type="hidden" name="action['+pos+'][target]" value="'+$('#action_target').val()+'"/></td>';
                html_content += '<td class="float-right"><a href="" onclick="openEditAction('+pos+')" data-id="'+pos+'"><i class="fal fa-edit"></i></a>&nbsp;|&nbsp;<a href="" onclick="removeAction('+pos+')" data-id="'+pos+'"><i class="fad fa-trash" style="color: red;cursor:pointer;"></i></a></td>';
                html_content += '</tr>';

                $('.table-actions tbody').append(html_content);

                $('#add-action')[0].reset();

                $('.modal').modal('hide');
            }

            function removeAction(id)
            {
                event.preventDefault();

                $('#' + id).remove();
            }

            function openEditAction(id)
            {
                event.preventDefault();

                $('[name="pos"]').val(id);

                /*if ($('#' + id).attr('data-idAction')) {
                    $('#edit-action').attr('data-idAction', $('#' + id).attr('data-idAction'));
                } else {
                    $('#edit-action').removeAttr('data-idAction');
                }*/

                $('#editType').val($('[name="action['+id+'][type]"]').val());
                $('#edit_action_name').val($('[name="action['+id+'][name]"]').val());
                $('#edit_action_description').val($('[name="action['+id+'][description]"]').val());
                $('#edit_action_icon').val($('[name="action['+id+'][icon]"]').val());
                $('#edit_action_color').val($('[name="action['+id+'][color]"]').val());
                $('#edit_action_amount').val($('[name="action['+id+'][amount]"]').val());
                $('#edit_action_target').val($('[name="action['+id+'][target]"]').val());

                changeTypeActionEdit();

                $('#editAction').modal('toggle');
            }

            function editAction()
            {
                event.preventDefault();

                var pos = $('[name="pos"]').val();

                if ($('#' + pos).attr('data-idAction')) {
                    var html_content = '<tr id="'+pos+'" data-idAction="'+$('#' + pos).attr('data-idAction')+'">';
                    html_content += '<input type="hidden" name="action['+pos+'][id]" value="'+$('#' + pos).attr('data-idAction')+'"/>';
                } else {
                    var html_content = '<tr id="'+pos+'">';
                }

                html_content += '<input type="hidden" name="action['+pos+'][icon]" value="'+$('#edit_action_icon').val()+'"/>';
                html_content += '<input type="hidden" name="action['+pos+'][color]" value="'+$('#edit_action_color').val()+'"/>';
                html_content += '<input type="hidden" name="action['+pos+'][amount]" value="'+$('#edit_action_amount').val()+'"/>';
                html_content += '<input type="hidden" name="action['+pos+'][name]" value="'+$('#edit_action_name').val()+'"/>';
                html_content += '<input type="hidden" name="action['+pos+'][description]" value="'+$('#edit_action_description').val()+'"/>';

                html_content += '<td><a class="btn btn-'+$('#edit_action_color').val()+'" style="color:white"> <i class="fal fa-'+$('#edit_action_icon').val()+'"></i> '+$('#edit_action_name').val()+' for '+$('#edit_action_amount').val()+' sats</a></td>';

                html_content += '<td>'+$( "#editType option:selected" ).text()+'<input type="hidden" name="action['+pos+'][type]" value="'+$('#editType').val()+'"/></td>';
                html_content += '<td>'+$('#edit_action_target').val()+'<input type="hidden" name="action['+pos+'][target]" value="'+$('#edit_action_target').val()+'"/></td>';
                html_content += '<td class="float-right"><a href="" onclick="openEditAction('+pos+')" data-id="'+pos+'"><i class="fal fa-edit"></i></a>&nbsp;|&nbsp;<a href="" onclick="removeAction('+pos+')" data-id="'+pos+'"><i class="fad fa-trash" style="color: red;cursor:pointer;"></i></a></td>';
                html_content += '</tr>';


                $('#' + pos).remove();
                $('.table-actions tbody').append(html_content);

                $('#edit-action')[0].reset();

                $('.modal').modal('hide');
            }

            function changeType(event) {
                var type = event;

                $('#additional_fields_create').empty();

                if (type == 2) {
                    var data_html_type = '<div class="form-group"><label for="workplace">Arbeitsort</label><input type="text" class="form-control" id="workplace" placeholder="Arbeitsort" name="additional_fields[workplace]"></div>';
                    data_html_type += '<div class="form-group"><label for="contact_info">Kontaktdaten</label><textarea class="form-control" id="contact_info" name="additional_fields[contact_info]" rows="3" placeholder="Kontaktdaten"></textarea></div>';

                    $('#additional_fields_create').html(data_html_type);
                }

                if (type == 3) {
                    var data_html_type = '<div class="form-group"><label for="action_name">Action name</label><input type="text" class="form-control" id="action_name" placeholder="Action name" name="action_name"></div>';
                    data_html_type += '<div class="form-group"><label for="action_description">Action description</label><input type="text" class="form-control" id="action_description" placeholder="Action description" name="action_description"></div>';
                    data_html_type += '<div class="form-group"><label for="action_icon">Action icon</label><input type="text" class="form-control" id="action_icon" placeholder="Action icon" name="action_icon"></div>';
                    data_html_type += '<div class="form-group"><label for="action_amount">Action amount</label><input type="number" class="form-control" id="action_amount" placeholder="Action amount" name="action_amount"></div>';
                    data_html_type += '<div class="form-group"><label for="action_webhook">Action URL Webhook</label><input type="text" class="form-control" id="action_webhook" placeholder="Action URL Webhook" name="action_webhook"></div>';

                    $('#additional_fields_create').html(data_html_type);
                }
            }

            tinymce.init({
                selector : "#nachrichten_2",
                plugins: 'advlist link image lists',
                toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link | unlink | image',
                height: '250',
                directionality : 'de',
                language : 'de',
                setup: function (editor) {
                    editor.on('change', function (e) {
                        editor.save();
                    });
                }
            });

            tinymce.init({
                selector : ".textfield-editor",
                plugins: 'advlist link image lists',
                toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link | unlink | image',
                height: '250',
                directionality : 'de',
                language : 'de',
                setup: function (editor) {
                    editor.on('change', function (e) {
                        editor.save();
                    });
                }
            });

            function approve(id) {
                $.ajax({
                    data:{
                        '_token':'{{csrf_token()}}',
                        'id': id,
                    },
                    type:"POST",
                    async:true,
                    url:"{{route('approveMessage')}}",
                    success:function(data) {
                        if(data.response.approved) {
                            document.getElementById('approved-'+id).style.color = "green"
                        } else {
                            document.getElementById('approved-'+id).style.color = "red"
                        }
                    },
                    error:function(data) {
                        console.log('error')
                        console.log(data)
                    }
                });
            }

            function removeNach(id) {
                $.ajax({
                    data:{
                        '_token':'{{csrf_token()}}',
                        'id': id,
                    },
                    type:"POST",
                    async:true,
                    url:"{{route('removeMessage')}}",
                    success:function(data) {
                        document.getElementById('nach'+data.response).remove()
                    },
                    error:function(data) {
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
                    data:{
                        '_token':'{{csrf_token()}}',
                        'id': id,
                    },
                    type:"POST",
                    async:true,
                    url:"{{route('getNachData')}}",
                    success:function(data) {
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

                            var data_html_type = '<div class="form-group"><label for="workplace">Arbeitsort</label><input type="text" class="form-control" id="workplace" value="'+workplace+'" placeholder="Arbeitsort" name="additional_fields[workplace]"></div>';
                            data_html_type += '<div class="form-group"><label for="contact_info">Kontaktdaten</label><textarea class="form-control" id="contact_info" name="additional_fields[contact_info]" rows="3" placeholder="Kontaktdaten">'+contact_info+'</textarea></div>';

                            $('#additional_fields').html(data_html_type);
                        }

                        if (data.response.type_id == 3) {
                            var data_html_type = '<div class="form-group"><label for="action_name">Action name</label><input value="'+data.response.action.name+'" type="text" class="form-control" id="action_name" placeholder="Action name" name="action_name"></div>';
                            data_html_type += '<div class="form-group"><label for="action_description">Action description</label><input value="'+data.response.action.description+'" type="text" class="form-control" id="action_description" placeholder="Action description" name="action_description"></div>';
                            data_html_type += '<div class="form-group"><label for="action_icon">Action icon</label><input value="'+data.response.action.icon+'" type="text" class="form-control" id="action_icon" placeholder="Action icon" name="action_icon"></div>';
                            data_html_type += '<div class="form-group"><label for="action_amount">Action amount</label><input type="number" value="'+data.response.action.amount+'" class="form-control" id="action_amount" placeholder="Action amount" name="action_amount"></div>';
                            data_html_type += '<div class="form-group"><label for="action_webhook">Action URL Webhook</label><input type="text" class="form-control" value="'+data.response.action.webhook+'" id="action_webhook" placeholder="Action URL Webhook" name="action_webhook"></div>';


                            $('#additional_fields').html(data_html_type);
                        }

                        if (data.response.image) {
                            $('#imageCurrent').css('display', 'block');
                            $('#imageCurrentAnchor').attr('href', '{{ url('uploads') }}/' + data.response.image).html(data.response.image);
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
                            var data_html = '<div class="form-group"><label for="paidAmount">Bezahlbarer Betrag</label><input type="number" class="form-control" id="paidAmount" value="'+data.response.paid+'" placeholder="Bezahlbarer Betrag" name="paidAmount" required="required"></div>';
                            data_html += '<div class="form-group"><label for="premium_until">Premium Until</label><input type="date" class="form-control" id="premium_until" value="'+data.response.premium_until+'" placeholder="Premium Until" name="premium_until"></div>';

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
                            selector : "#nachrichten",
                            plugins: 'advlist link image lists',
                            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link | unlink | image',
                            height: '250',
                            directionality : 'de',
                            language : 'de',
                            setup: function (editor) {
                                editor.on('change', function (e) {
                                    editor.save();
                                });
                            }
                        });

                        if (data.response.category == 'angebote') {

                            tinymce.init({
                                selector : "#contact_info",
                                plugins: 'advlist link image lists',
                                toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link | unlink | image',
                                height: '250',
                                directionality : 'de',
                                language : 'de',
                                setup: function (editor) {
                                    editor.on('change', function (e) {
                                        editor.save();
                                    });
                                }
                            });
                        } else {
                            tinymce.remove("#contact_info");
                        }

                    },
                    error:function(data) {
                        console.log(data)
                        console.log('error!!')
                    }
                });
            }

            function editNachrichten(id) {
                $.ajax({
                    data:{
                        '_token':'{{csrf_token()}}',
                        'id': id,
                    },
                    type:"POST",
                    async:true,
                    url:"{{route('dashboard.editContent')}}",
                    success:function(data) {
                        console.log('success!!')
                    },
                    error:function(data) {
                        console.log('error!!')
                    }
                });
            }

            function sendNotification(id) {
                $.ajax({
                    data:{
                        '_token':'{{csrf_token()}}',
                        'id': id,
                    },
                    type:"POST",
                    async:true,
                    url:"{{route('dashboard.sendMessage')}}",
                    success:function(data) {
                        var data = JSON.parse(data);
                        if(data.success){
                            $('#notify-'+id).remove();
                            console.log('success!!')
                        }else if(data.success == false)
                            console.log('erro ao notificar!!')
                    },
                    error:function(data) {
                        console.log('error!!')
                    }
                });
            }

            function getAttachments(id) {
                $.ajax({
                    data:{
                        '_token':'{{csrf_token()}}',
                        'id': id,
                    },
                    type:"POST",
                    async:true,
                    url:"{{route('dashboard.getAttachments')}}",
                    success:function(data) {
                        console.log('success')
                        let attach_div = document.getElementById('attachments_div')
                        attach_div.innerHTML = data.response
                    },
                    error:function(data) {
                        console.log('error!!')
                    }
                });
            }

            function removeAttach(id, child) {
                $.ajax({
                    data:{
                        '_token':'{{csrf_token()}}',
                        'id': id,
                    },
                    type:"POST",
                    async:true,
                    url:"{{route('dashboard.removeFile')}}",
                    success:function(data) {
                        console.log('success')
                        node = document.getElementById('file_' + id)
                        node.parentNode.removeChild(node);
                    },
                    error:function(data) {
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
                            selector : "#contact_info_2",
                            plugins: 'advlist link image lists',
                            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link | unlink | image',
                            height: '250',
                            directionality : 'de',
                            language : 'de',
                            setup: function (editor) {
                                editor.on('change', function (e) {
                                    editor.save();
                                });
                            }
                        });
                    } else {
                        document.getElementById('contact_info').disabled = false;

                        tinymce.init({
                            selector : "#contact_info",
                            plugins: 'advlist link image lists',
                            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link | unlink | image',
                            height: '250',
                            directionality : 'de',
                            language : 'de',
                            setup: function (editor) {
                                editor.on('change', function (e) {
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
