<section class="pay-preview">

    <div class="container">
        <div class="row">

            <div class="col-lg-12 text-center">
                <h2><i class="fal fa-gem"></i>
                    <br>
                    Unlimited access to all premium content with a Premium Pass.
                </h2>


                <br>
                <br>

                <h5 class="text-center">Benefits:</h5>


                <style>
                    .benefits{
                        font-size: 20px;
                        text-align: center;
                        list-style: none;
                        list-style-type: "✓";
                    }
                </style>


                    <ul>
                        <li class="benefits">Flatfee</li>
                        <li class="benefits">No Sign-up</li>
                        <li class="benefits">Instant Access</li>
                        <li class="benefits">No recurring charge</li>


                    </ul>


                <small class="text-center d-block">Pay with <i class="fal fa-bolt ci-color"></i> Bitcoin Lightning Network or <i class="fal fa-credit-card ci-color"></i> Credit Card.</small>


                <br>
                <br>
            </div>
        </div>



        <div class="row">
            @foreach ($premiumPlans as $premium_plan)
                <div class="col-12 col-md-4">
                    <div class="card shadow-lg">
                        <div class="card-header text-center">
                            <h3>{{ $premium_plan->name }}</h3>

                        </div>
                        <div class="card-body">

                            <h5 class="text-center">Cost: {{ number_format($premium_plan->cost, 0, '', ',') }} sats</h5>
                            <btn class="btn btn-lg btn-primary mx-auto d-block get-premium-invoice"
                                 onclick="ga('send', 'event', 'Buy Ticket', 'Get Invoice', '{{ $premium_plan->name }}');"
                                 data-id="{{ $premium_plan->id }}"><i class="fas fa-bolt"></i> Buy Ticket</btn>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>




    </div>
</section>
