<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 02.11.2016
 * Time: 21:22
 */

class Ainstainer_TechTalk_Model_Resource_Contact_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {
    public function _construct () {
        parent::_construct();
        $this->_init('techtalk/contact');
    }
}