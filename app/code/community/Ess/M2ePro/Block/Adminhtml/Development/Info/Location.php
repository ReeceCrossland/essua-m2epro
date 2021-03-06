<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  2011-2015 ESS-UA [M2E Pro]
 * @license    Commercial use is forbidden
 */

class Ess_M2ePro_Block_Adminhtml_Development_Info_Location extends Mage_Adminhtml_Block_Widget
{
    //########################################

    public function __construct()
    {
        parent::__construct();

        // Initialization block
        // ---------------------------------------
        $this->setId('developmentAboutLocation');
        // ---------------------------------------

        $this->setTemplate('M2ePro/development/info/location.phtml');
    }

    //########################################

    protected function _beforeToHtml()
    {
        $this->locationHost = Mage::helper('M2ePro/Client')->getHost();
        $this->locationDomain = Mage::helper('M2ePro/Client')->getDomain();
        $this->locationIp = Mage::helper('M2ePro/Client')->getIp();

        return parent::_beforeToHtml();
    }

    //########################################
}