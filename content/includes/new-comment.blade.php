<div class="modal fade" id="exampleModal2" role="dialog" aria-labelledby="new-comment" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Neuen Kommentar veröffentlichen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('kommentar')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="comment_nach_id" id="comment_nach_id" />
                    <h5><i class="fal fa-user"></i> Ihre Kontaktdaten:</h5>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ihr Name</label>
                        <input type="text" class="form-control" id="comment_name" placeholder="Vorname Nachname", name='comment_name' required="required">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">E-Mail Adresse</label>
                        <input type="email" class="form-control" id="comment_email" placeholder="name@example.com" name="comment_email" required="required">
                    </div>
                    <br>
                    <hr>
                    <h5><i class="fal fa-newspaper"></i> Ihre zu veröffentliche Nachricht:</h5>
                    <div class="form-group">
                        <label for="tinymce-editor">Ihr Nachrichtentext</label>
                    </div>
                    <textarea class="form-control" id="comment_text" rows="5" placeholder="Nachrichten Text" name="comment_text" required="required"></textarea>
                    <br>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-lg-8">
                            <i>Ihr Kommentar wird sofort veröffentlicht. Eine Bearbeitung oder Löschung kann durch den Admin erfolgen.
                            </i>
                        </div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-primary" onclick="ga('send', 'event', 'Create Comment', 'New Comment submitted');"> <i class="fal fa-save"></i> Kommentar speichern</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>