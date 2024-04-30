define(['jquery'], ($) => {
    'use strict';

    $.breezemap.__register('StripeIntegration_Payments/js/stripe_payments_express');

    $.mixin('StripeIntegration_Payments/js/stripe_payments_express', {
        initStripeExpress: function (parent) {
            $.lazy(() => parent.apply(this, Array.prototype.slice.call(arguments, 1)));
        }
    });
});
