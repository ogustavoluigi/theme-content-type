<div class="col-lg-8 offset-2">
    <div class="card" id="news-{{$nach->id}}">
        <img class="card-img-top" src="{{asset('images/news-header.jpg')}}" alt="Card image cap">
        <div class="card-body">

            <div id="pay-preview"></div>






            <br>

            <h2 class="card-title">{{$nach->title}}</h2>
            <h6 class="card-subtitle mb-2"><b>{{date('d.m.Y | H:i', strtotime($nach->created_at))}}</b></h6>




            <p class="card-text">

                <!-- Here comes the payment preview, tha is the first 200 words of the news content  -->
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque commodi, cum cupiditate deserunt dignissimos eaque error ex impedit ipsa, modi natus nulla odit quis sunt ut voluptas voluptates, voluptatum!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque commodi, cum cupiditate deserunt dignissimos eaque error ex impedit ipsa, modi natus nulla odit quis sunt ut voluptas voluptates, voluptatum!
            </p>





        </div>

        <div class="card-body payment-request">

            <h2 class="text-center"><i class="far fa-gem fa-2x" style="font-size: 20px;"></i> Premium Content</h2>
            <p class="text-center">To read the article please pay 1000 sats <span class="small">(~0.09 $)</span></p>

            <br>
            <p class="text-center">
                <a href="#ln-invoice" data-toggle="collapse" class="btn btn-warning"><i class="fas fa-bolt"></i> Pay 1000 sats</a>
                <br>
                <a href="" class="howtopay" data-toggle="modal" data-target="#explain-lightning"><i class="fal fa-question-circle"></i> How to pay this?</a>

                @include('includes.explain-lightning')

                <br>
                <br>
            </p>

            <div class="row collapse" id="ln-invoice">
                <div class="col-lg-6 offset-3">
                    <a href="LIGHTNING:lnbc1500n1p02hzsypp568fexzpwav5hnmmn7hnj3jt8vppvacyl0ypaadur3gx7kvtdfgmsdpa2fjkzep6ypkxjmntypcxzunpypjkcgrxv96kxet5yqejuvpsxqs8xct5wvsxxcqzpgxqr23ssp5mfpwj5s68g9yn9qn9w6g6mu8gm7aa9dec0rhupdxnyef70y7hnss9qy9qsq6km3w35acswud3ugxhjk78eklgg6cq7r5wsn">
                        <img src="data:image/png;base64,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" class="img-fluid rounded mx-auto d-block">

                    </a>

                    <br>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"> <a href=""><i class="fal fa-bolt"></i></a></span>
                        </div>
                        <input type="text" class="form-control" value="lnbc1500n1p02hzsypp568fexzpwav5hnmmn7hnj3jt8vppvacyl0ypaadur3gx7kvtdfgmsdpa2fjkzep6ypkxjmntypcxzunpypjkcgrxv96kxet5yqejuvpsxqs8xct5wvsxxcqzpgxqr23ssp5mfpwj5s68g9yn9qn9w6g6mu8gm7aa9dec0rhupdxnyef70y7hnss9qy9qsq6km3w35acswud3ugxhjk78eklgg6cq7r5wsn"  aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>


            </p>

        </div>



        @if (env('APP_COMMENTS', false))
            <div class="card-footer" id="comment_button_{{$nach->id}}">

                @if(sizeof($nach->comments) > 0)

                    <a href="#" onclick="showComments(event, {{$nach->id}})"> <span class="badge badge-primary">{{sizeof($nach->comments)}}</span> Kommentare ansehen</a>
                @else
                    <i>Bisher noch keine Kommentare</i>
                @endif

                <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal2" onclick="setCommentId({{$nach->id}}),ga('send', 'event', 'Read Comments', 'Website', '{{$nach->title}}');">
                    <i class="fas fa-comment"></i> Beitrag kommentieren
                </button>
            </div>
        @endif



        <div style="display:none" id="comments_{{$nach->id}}">
            <div class="card-footer bg-primary">
                <a  class="text-white"> <span class="badge badge-light">{{sizeof($nach->comments)}}</span> Kommentare</a>
                <button class="btn btn-dark btn-sm float-right" data-toggle="modal" data-target="#exampleModal2" onclick="setCommentId({{$nach->id}}),ga('send', 'event', 'Create Comment', 'Modal for Comment Creation', '{{$nach->title}}');">
                    <i class="fas fa-comment"></i> Beitrag kommentieren
                </button>
            </div>
            <table>
                @foreach($nach->comments as $comment)
                    <row>
                        <div class="card-footer">
                            <i class="fas fa-user" style="color: #007BFF"></i> {{$comment->name}}:
                            <!-- For now taking that out, time is wrong... -->
                            <span class="float-right" title="{{date('d.m.Y | H:i', strtotime($comment->created_at))}} Uhr">{{date('d.m.Y H:i', strtotime($comment->created_at))}} Uhr</span>

                        </div>
                        <div class="card-body comment-text">
                            <p class="card-text">
                                {{$comment->comment}}
                            </p>
                        </div>
                    </row>
                @endforeach
            </table>
        </div>

    </div>
</div>
