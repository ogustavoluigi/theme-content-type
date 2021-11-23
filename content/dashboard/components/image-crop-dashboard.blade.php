<div>
    <style>
        .modal-dialog {
            position: relative;
            display: table;
            overflow: auto;
            width: auto;
            min-width: 300px;
        }
        .modal-body { /* Restrict Modal width to 90% */
            overflow-x: auto !important;
            max-width: 90vw !important;
        }
    </style>

    <style type="text/css">
        .jcrop-holder #preview-pane {
            display: block;
            position: absolute;
            z-index: 2000;
            top: 10px;
            right: -280px;
            padding: 6px;
            border: 1px rgba(0,0,0,.4) solid;
            background-color: white;

            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;

            -webkit-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
            box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
        }

        /* The Javascript code will set the aspect ratio of the crop
           area based on the size of the thumbnail preview,
           specified here */
        #preview-pane .preview-container {
            width: auto;
            height: 200px !important;
            overflow: hidden;
            opacity: .4;
        }
    </style>

    <div class="modal fade" id="modaljcrop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crop Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="preview-container">
                        <img id="cropImage" class="crop" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id="imageX" name="imageX" />
    <input type="hidden" id="imageY" name="imageY" />
    <input type="hidden" id="imageW" name="imageW" />
    <input type="hidden" id="imageH" name="imageH" />

    <button type="button" class="btn btn-primary float-left button-edit-crop" style="margin-top:18px;display:none;position:absolute" data-toggle="modal" data-target="#modaljcrop">
        <i class="fal fa-pencil" aria-hidden="true"></i>
        Edit Crop Image
    </button>

    @section('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/2.0.4/css/Jcrop.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/2.0.4/js/Jcrop.min.js"></script>

        <script>
            function updateCoords(c)
            {
                if ($('#preview-pane').length) {
                    $preview = $('#preview-pane');
                    $pcnt = $('#preview-pane .preview-container');
                    $pimg = $('#preview-pane .preview-container img');

                    xsize = $pcnt.width();
                    ysize = $pcnt.height();

                    var rx = xsize / c.w;
                    var ry = ysize / c.h;

                    var realW = $('#cropImage').width();
                    var realH = $('#cropImage').height();

                    if (realW == 0 || realH == 0) {
                        var imageAjust = new Image();

                        imageAjust.src = $('#cropImage').attr('src');

                        var realW = imageAjust.width;
                        var realH = imageAjust.height;
                    }

                    $pimg.css({
                        width: Math.round(rx * realW) + 'px',
                        height: Math.round(ry * realH) + 'px',
                        marginLeft: '-' + Math.round(rx * c.x) + 'px',
                        marginTop: '-' + Math.round(ry * c.y) + 'px'
                    });
                }

                $('#imageX').val(c.x);
                $('#imageY').val(c.y);
                $('#imageW').val(c.w);
                $('#imageH').val(c.h);
            };

            document.getElementById('{{ $fileID }}').addEventListener('change', readURL, true);

            function readURL(){
                var file = document.getElementById("{{ $fileID }}").files[0];

                var reader = new FileReader();

                reader.onload = function(e){
                    var image = new Image();

                    image.src = e.target.result;

                    $('.jcrop-preview').removeClass('h-100');
                    $('.jcrop-preview').removeClass('w-100');

                    $('#jcrop-preview').attr('src', e.target.result);

                    image.onload = function() {
                        if ($('#cropImage').data('Jcrop')) {
                            $('#cropImage').data('Jcrop').destroy();
                        }

                        $('#modaljcrop').modal('show');

                        $('#cropImage').click();

                        $('#modaljcrop').on('hidden.bs.modal', function () {
                            $('.button-edit-crop').css('display', 'block');
                        });

                        $('#cropImage').attr('src', e.target.result);
                        var x = this.width/2 - this.width/2;
                        var y = this.height/2 - this.height/2;
                        var x1 = x + this.width;
                        var y1 = y + this.width;

                        $('.crop').Jcrop({
                            onSelect: updateCoords,
                            onChange: updateCoords,
                            bgOpacity:   .5,
                            setSelect:   [0, 0, x1, y1],
                            aspectRatio: 2
                        });
                    };
                }

                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    //
                }
            }
        </script>
    @endsection
</div>