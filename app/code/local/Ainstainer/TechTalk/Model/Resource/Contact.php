<?php
/**
 * Created by PhpStorm.
 * User: Михаил
 * Date: 02.11.2016
 * Time: 21:20
 */

class Ainstainer_TechTalk_Model_Resource_Contact extends Mage_Core_Model_Mysql4_Abstract {
    public function _construct () {
        $this->_init('techtalk/contact', 'request_id');
    }

    public function getNameById($id)
    {
        $adapter = $this->_getReadAdapter();

        $select = $adapter->select()
            ->from($this->getMainTable(), 'name')
            ->where('request_id = :request_id');

        $binds = array(
            'request_id' => (int)$id
        );

        return $adapter->fetchOne($select, $binds);
    }
}