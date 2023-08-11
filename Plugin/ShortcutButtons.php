<?php
namespace Swissup\BreezeStripePayments\Plugin;

class ShortcutButtons
{
    const REPLACE_TEMPLATE = [
        'StripeIntegration_Payments::express/cart_button.phtml' => 'Swissup_BreezeStripePayments::express/cart_button.phtml',
        //'StripeIntegration_Payments::express/minicart_button.phtml' => 'Swissup_BreezeStripePayments::express/minicart_button.phtml'
    ];

    public function beforeAddShortcut(
        \Magento\Checkout\Block\QuoteShortcutButtons $subject,
        \Magento\Framework\View\Element\Template $block
    ) {
        foreach (self::REPLACE_TEMPLATE as $old => $new) {
            if ($block->getTemplate() === $old) {
                $block->setTemplate($new);
            }
        }

        return [$block];
    }
}
