define([], function () {
    'use strict';

    $.breezemap['stripejs'] = require('https://js.stripe.com/v3/');
    $.breezemap['StripeIntegration_Payments/js/stripe'] = window.stripe;
});
