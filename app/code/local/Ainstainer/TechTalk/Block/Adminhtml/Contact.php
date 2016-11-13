<?php
/**
 * Adminhtml cms blocks content block
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Ainstainer_TechTalk_Block_Adminhtml_Contact extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {
        $this->_blockGroup = 'techtalk';
        $this->_controller = 'adminhtml_contact';
        $this->_headerText = Mage::helper('techtalk')->__('techtalk');
        $this->_addButtonLabel = Mage::helper('techtalk')->__('Add New Contact');
        parent::__construct();
    }

}
