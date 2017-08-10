<?php
/**
 * PayZen V2-Payment Module version 2.1.1 for Magento 2.x. Support contact : support@payzen.eu.
 *
 * NOTICE OF LICENSE
 *
 * This source file is licensed under the Open Software License version 3.0
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category  payment
 * @package   payzen
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2016 Lyra Network and contributors
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Lyranetwork\Payzen\Model\Api\Ws;

class GetPaymentUuidResponse extends wsResponse
{
    /**
     * @var LegacyTransactionKeyResult $legacyTransactionKeyResult
     */
    private $legacyTransactionKeyResult = null;

    /**
     * @return LegacyTransactionKeyResult
     */
    public function getLegacyTransactionKeyResult()
    {
        return $this->legacyTransactionKeyResult;
    }

    /**
     * @param LegacyTransactionKeyResult $legacyTransactionKeyResult
     * @return GetPaymentUuidResponse
     */
    public function setLegacyTransactionKeyResult($legacyTransactionKeyResult)
    {
        $this->legacyTransactionKeyResult = $legacyTransactionKeyResult;
        return $this;
    }
}