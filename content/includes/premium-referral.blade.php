<style>
    #referral{
        background-color: #6c23d7;
        padding: 50px;
        color: white;
    }
</style>

<section id="referral">

    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <h2 style="color: white"><i class="fal fa-heart"></i> Love us? Share your Passion! </h2>

                <p style="font-size: 20; margin-bottom: 40px;">
                    When someone uses your link to aquire a premium pass, both of you get extra time added to your access codes.
                </p>

            </div>
            <div class="col-12 col-md-6">
                <small>Your personal Referral Link:</small>
                <br>
                <input style="font-size: 26px; " readonly value="www.areya.de?r={{ \Session::get('premium_reference_code') }}">


            </div>
            <div class="col-12 col-md-6" style="margin-top:30px;">
                <div class="row">
                    <br>
                    <br>
                    <div class="col">
                        <a href="https://api.whatsapp.com/send?text=Invitation%3A%20Use%20lumino.areya.de%2Fr%2FXBXB%20to%20get%20a%20bonus%20premium%20time%20when%20purchasing%20a%20plan.">
                            <i class="fab fa-whatsapp fa-2x" style="color: white"></i>
                        </a>
                    </div>

                    <div class="col">
                        <a href="">
                            <i class="fab fa-facebook fa-2x" style="color: white"></i>
                        </a>
                    </div>

                    <div class="col">
                        <a href="">
                            <i class="fab fa-twitter fa-2x" style="color: white"></i>
                        </a>
                    </div>

                    <div class="col">
                        <a href="mailto:?subject=Get a bonus when purchasing a premium code">
                            <i class="fal fa-envelope fa-2x" style="color: white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>




    </div>







</section>
