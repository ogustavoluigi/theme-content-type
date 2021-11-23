<div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Neuen Beitrag einreichen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('storeContent')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <p>Hier können Sie uns Ihre eigenen Beiträge einreichen, welche wir dann hier nach Prüfung anderen Mitgliedern auf unserer Seite zugänglich machen.</p>

                    <br>

                    <h5><i class="fal fa-newspaper"></i> Ihre zu veröffentliche Nachricht:</h5>

                    <div class="form-group">
                        <label for="paid">Bezahlt</label>
                        @if (!empty(env('LND_URL', null)))
                            <select class="form-control" id="paid" name="paid" required="required">
                                <option value="0">Nein</option>
                                <option value="1">Ja</option>
                            </select>
                        @else
                            <select class="form-control" id="paid" name="paid" required="required" disabled="disabled">
                                <option value="0">Nein</option>
                                <option value="1">Ja</option>
                            </select>
                        @endif
                     </div>

                    <div class="form-amount"></div>

                    <div class="form-group">
                        <label for="category_id">Kategorie</label>
                        <select class="form-control" id="category_id" name="category_id" required="required">
                            <option value="">Wählen Sie eine Option</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <input type="hidden" value ="news" name="category" />
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nachrichten Titel</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Überschrift des Beitrags" name="title" required="required">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Ihr Nachrichtentext</label>
                    </div>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nachrichten Text" name="nachrichten" required="required"></textarea>
                    <br>
                    <br>


                    <h5><i class="fal fa-file-upload"></i> Dateien hochladen</h5>



                    <div class="row">
                        <div class="col-md-12">
                            <div class="needsclick dropzone" id="image-dropzone">
                                <div class="dz-message" data-dz-message><span><i class="fa fa-upload" style="color: #0f74a8"></i> Dateien zum Upload auswählen</span></div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="modal-footer float-right">
                    <button type="submit" class="btn btn-primary"> <i class="fal fa-save"></i> Beitrag einreichen</button>
                </div>

            </form>
        </div>
    </div>
</div>
