<?php

/**
 * Created by PhpStorm.
 * User: hungnt
 * Date: 8/20/16
 * Time: 11:30 PM
 */
class Zx_Pos_IndexController extends Mage_Core_Controller_Front_Action
{
    public function IndexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}