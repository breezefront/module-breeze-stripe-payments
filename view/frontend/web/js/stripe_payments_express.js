define(['jquery'], ($) => {
    'use strict';

    $.mixin('StripeIntegration_Payments/js/stripe_payments_express', {
        initStripeExpress: function (parent) {
            $.lazy(() => parent.apply(this, Array.prototype.slice.call(arguments, 1)));
        }
    });
});
