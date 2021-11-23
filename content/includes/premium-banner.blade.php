<style>
    #premium-banner{
        background-color: rgba(108, 35, 215, 0.49);
        padding: 20px;
        color: white;
    }
</style>

<div class="alert alert-primary alert-dismissible fade show" id="alert-premium" role="alert" style="display:none;">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <h5><i class="fal fa-gem"></i> You are Premium! </h5>

                <p style="font-size: 15; margin-bottom: 15px;">
                    Thanks for directly supporting this Project.
                    <br>
                    Your contribution gives you preferred access to Premium Content & helps building this quality Content.
                </p>

            </div>
            <div class="col-md-6">
                <small>View Premium Access Code:</small>
                <br>
                <input style="font-size: 16px; text-align: center" readonly value="{{ \Session::get('premium_code') }}">


            </div>
            <div class="col-md-6" style="margin-top:30px;">

                <i>Code valid until: {{ \Session::get('premium_until') }}</i>
            </div>
        </div>

        <button type="button" class="close close-premium">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

</div>

