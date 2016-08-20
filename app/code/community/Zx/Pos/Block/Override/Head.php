<?php

/**
 * Created by PhpStorm.
 * User: hungnt
 * Date: 8/21/16
 * Time: 1:12 AM
 */
require_once(Mage::getModuleDir(null, 'Mage_Page') . DS . 'Block' . DS . 'Html' . DS . 'Head.php');

///var/www/html/hungnt/app/code/core/Mage/Page/Block/Html/Head.php
class Zx_Pos_Block_Override_Head extends Mage_Page_Block_Html_Head
{
    /**
     * Remove All Items from HEAD entity
     *
     * @return Mage_Page_Block_Html_Head
     */
    public function removeAllItems()
    {
        $this->_data['items'] = array();
        return $this;
    }
}