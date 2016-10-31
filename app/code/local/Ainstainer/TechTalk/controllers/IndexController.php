<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 30.10.2016
 * Time: 20:00
 */

class Ainstainer_TechTalk_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
    }
}