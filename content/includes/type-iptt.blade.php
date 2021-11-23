<!--<article class="newsentry" style="width: 100%;" data-slug="XX">



    <div class="col-lg-12">
        <div class="card shadow-lg" id="news-XX">



            <div class="card-body">


                <br>

                <h2 class="card-title">This is a IoT Type Entry</h2>
                <h6 class="card-subtitle mb-2"><b>12.12.2022</b></h6>

                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio iusto nemo officia veritatis vitae? Assumenda, corporis dolor doloremque et exercitationem libero nihil optio quae quibusdam quis quos totam voluptatem, voluptatibus.
                </p>

                <hr>
                <small>Description: This will trigger a Deploy on the Server.</small>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <a href="" class="btn btn-warning mx-0 d-block" data-toggle="modal" data-target="#iot-invoice"><i class="fal fa-play-circle"></i> Run this Command for 10 sats.</a>

                    </div>
                    <div class="col"></div>
                </div>

            </div>

        </div>
    </div>

</article>-->



<div class="modal fade" id="iot-invoice" tabindex="-1" role="dialog" aria-labelledby="iot-invoice" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabelAction"><i class="fal fa-play-circle"></i> Run this Command for 10 sats. </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <p class="text-center" style="font-size: 13px;">Pay <span class="ci-color bold span-cost-action">1000 sats</span>
                            to <span class="ci-color bold span-name-action"></span>.
                        </p>

                    </div>
                    <div class="col-6 offset-3 span-qrcode-action">
                    </div>
                    <div class="col-lg-12 text-center">
                        <br>
                        <br>

                        <i>
                            <i class="fal fa-info-circle"> </i> Action will be executed as soon as the invoice got paid.
                        </i>
                        <p>


                    </div>
                </div>



            </div>

        </div>
    </div>
</div>
