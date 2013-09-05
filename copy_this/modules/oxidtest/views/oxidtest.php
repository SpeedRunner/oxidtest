<?php
/**
 * @author Peter Hoffmann
 */

class oxidtest extends oxUBase
{

    protected $_sThisTemplate = 'oxidtest.tpl';

    /**
	 * Render
     */
    public function render()
    {
        parent::render();

        return $this->_sThisTemplate;
    }

    /**
     *
     * @return String
     */
    public function getShopSystemVersion()
    {
        $oView = oxConfig::getInstance();
        return $oView->getShopFullEdition().' '.$oView->getShopVersion();
    }
}