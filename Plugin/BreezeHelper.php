<?php

namespace Swissup\BreezeStripePayments\Plugin;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class BreezeHelper
{
    private ScopeConfigInterface $config;

    public function __construct(ScopeConfigInterface $config)
    {
        $this->config = $config;
    }

    public function afterIsTurboEnabled($subject, $result)
    {
        if (!$result) {
            return $result;
        }

        return !$this->config->getValue('payment/stripe_payments/active', ScopeInterface::SCOPE_STORE)
            && !$this->config->getValue('payment/stripe_payments/express', ScopeInterface::SCOPE_STORE);
    }
}
