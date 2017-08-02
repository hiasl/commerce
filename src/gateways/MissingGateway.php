<?php

namespace craft\commerce\gateways;

use craft\base\MissingComponentInterface;
use craft\base\MissingComponentTrait;
use craft\commerce\base\Gateway;
use Omnipay\Common\AbstractGateway;

/**
 * MissingGateway represents a gateway with an invalid class.
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2017, Pixel & Tonic, Inc.
 * @license   https://craftcommerce.com/license Craft Commerce License Agreement
 * @see       https://craftcommerce.com
 * @package   craft.commerce
 * @since     2.0
 */
class MissingGateway extends Gateway implements MissingComponentInterface
{
    // Traits
    // =========================================================================

    use MissingComponentTrait;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    protected function gateway()
    {
        return null;
    }

    /**
     * @inheritdoc
     */
    protected function getGatewayClassName()
    {
        return null;
    }

    /**
     * @inheritdoc
     */
    public function getPaymentFormHtml(array $params)
    {
        return null;
    }

    /**
     * @inheritdoc
     */
    public function getPaymentFormModel()
    {
        return null;
    }

    /**
     * @inheritdoc
     */
    public function populateCard(\Omnipay\Common\CreditCard $card, \craft\commerce\models\payments\CreditCardPaymentForm $paymentForm)
    {
        return null;
    }

    /**
     * @inheritdoc
     */
    public function populateRequest(\Omnipay\Manual\Message\Request $request, \craft\commerce\models\payments\BasePaymentForm $form)
    {
        return null;
    }

    protected function createGateway(): AbstractGateway
    {
        return null;
    }


}
