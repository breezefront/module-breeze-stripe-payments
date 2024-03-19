define(['jquery'], ($) => {
    'use strict';

    $.breezemap.__register('StripeIntegration_Payments/js/stripe_payments_express');

    $(document).trigger('breeze:disable-turbo');
});
