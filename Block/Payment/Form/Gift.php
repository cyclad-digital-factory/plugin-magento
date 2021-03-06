<?php
/**
 * PayZen V2-Payment Module version 2.1.3 for Magento 2.x. Support contact : support@payzen.eu.
 *
 * NOTICE OF LICENSE
 *
 * This source file is licensed under the Open Software License version 3.0
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/osl-3.0.php
 *
 * @author    Lyra Network (http://www.lyra-network.com/)
 * @copyright 2014-2017 Lyra Network and contributors
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @category  payment
 * @package   payzen
 */
namespace Lyranetwork\Payzen\Block\Payment\Form;

class Gift extends Payzen
{

    protected $_template = 'Lyranetwork_Payzen::payment/form/gift.phtml';

    public function getAvailableGcTypes()
    {
        return $this->getMethod()->getAvailableGcTypes();
    }

    public function getGcTypeImageSrc($card)
    {
        $card = 'gc/' . strtolower($card) . '.png';

        if ($this->dataHelper->isUploadFileImageExists($card)) {
            return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA) .
                 'payzen/images/' . $card;
        } else {
            return $this->getViewFileUrl('Lyranetwork_Payzen::images/' . $card);
        }
    }
}
