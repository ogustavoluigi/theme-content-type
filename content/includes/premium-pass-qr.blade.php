<div class="modal fade" id="buy-pass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabelPremium"><i class="fal fa-gem"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <p class="text-center" style="font-size: 13px;">Pay <span class="ci-color bold span-cost-premium">1000 sats</span>
                            to activate a <span class="span-days-premium"></span> day Premium Plan until:
                            <i class="span-date-premium"></i>
                        </p>

                    </div>
                    <div class="col-6 offset-3 span-qrcode-premium">

                    </div>
                    <div class="col-lg-12 text-center">
                        <br>
                        <br>

                        <i>
                            <i class="fal fa-info-circle"> </i> Your Premium Plan is activated as soon as the invoice got paid.
                        </i>
                        <p>

                        <hr>

                        <style>
                            .lnd-pay-card, lnd-pay-card a {
                                cursor: pointer;
                                text-decoration: none !important;
                            }
                        </style>

                        @if (config('settings.stripe_status'))
                            <a class="lnd-pay-card" data-premium-id="">
                                <small title="Alternative: Pay with Credit Card">
                                    Alternative: Pay with Credit Card

                                    <i class="fal fa-credit-card ci-color"></i>
                                </small>
                            </a>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="stripe-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabelPremiumStripe"><i class="fal fa-gem"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <p class="text-center" style="font-size: 13px;margin-top:0px !important;">Pay <span class="ci-color bold span-cost-premium-stripe">1000 sats</span>
                            to activate a <span class="span-days-premium-stripe"></span> day Premium Plan until:
                            <i class="span-date-premium-stripe"></i>
                        </p>
                    </div>

                    <form method="post" id="formStripePremium">
                        <input type="hidden" id="stripe_premium_code_id" name="premium_code_id" value="" />
                        <input type="hidden" id="amountBtc" name="amount_btc" value="{{ config('settings.btc_price') }}" />

                        <div class="col-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="email_stripe">E-mail</label>
                                        <input type="email" class="form-control" id="email_stripe" placeholder="E-mail" name="email_stripe" required="">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                        <label for="exampleFormControlInput1">Card Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Card Name" name="card_name" required="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1"><i class="fal fa-credit-card ci-theme" aria-hidden="true"></i> Card Number</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="5510 2020 2001 20101 200" name="card_number" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Card Valid Date</label>
                                        <input type="month" class="form-control" id="exampleFormControlInput1" placeholder="2022-01" name="card_valid" required="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">CSV</label>
                                        <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="123" name="card_csv" required="">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn-primary btn btn-lg float-right btn-sub-stripe"><i class="fal fa-shopping-basket fa-rotate-140" aria-hidden="true"></i> Pay Stripe</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>