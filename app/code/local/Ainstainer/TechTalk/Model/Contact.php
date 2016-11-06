<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 02.11.2016
 * Time: 21:12
 */

class Ainstainer_TechTalk_Model_Contact extends Mage_Core_Model_Abstract {
    public function _construct () {
        parent::_construct();
        $this->_init('techtalk/contact');
    }
}