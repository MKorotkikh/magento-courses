<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 30.10.2016
 * Time: 20:07
 */

class Ainstainer_TechTalk_Block_View extends Mage_Core_Block_Template {
    protected function getRequestRecord() {
        return Mage::getModel('techtalk/contact')->load(1)->getCollection();
    }
}