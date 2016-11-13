<?php
/**
 * Adminhtml cms block edit form
 *
 * @category   Mage
 * @package    Mage_Adminhtml
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Ainstainer_TechTalk_Block_Adminhtml_Contact_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{

    /**
     * Init form
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('requst_id');
        $this->setTitle(Mage::helper('techtalk')->__('Request info'));
    }

    /**
     * Load Wysiwyg on demand and Prepare layout
     */
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        if (Mage::getSingleton('cms/wysiwyg_config')->isEnabled()) {
            $this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);
        }
    }

    protected function _prepareForm()
    {
        $model = Mage::registry('contact_request');

        $form = new Varien_Data_Form(
            array('id' => 'edit_form',
                'action' => $this->getUrl('*/*/save', ['request_id' => $this->getRequest()->getParam('request_id')]),
                'method' => 'post')
        );

        $form->setHtmlIdPrefix('block_');

        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend'=>Mage::helper('techtalk')->__('General Information'),
            'class' => 'fieldset-wide'));

        if ($model->getBlockId()) {
            $fieldset->addField('request_id', 'hidden', array(
                'name' => 'request_id',
            ));
        }

        $fieldset->addField('title', 'text', array(
            'name'      => 'name',
            'label'     => Mage::helper('techtalk')->__('Contact name'),
            'title'     => Mage::helper('techtalk')->__('Contact name'),
            'required'  => true,
        ));

        $fieldset->addField('comment', 'editor', array(
            'name'      => 'comment',
            'label'     => Mage::helper('techtalk')->__('Comment'),
            'title'     => Mage::helper('techtalk')->__('Comment'),
            'required'  => true,
            'config'   => Mage::getSingleton('cms/wysiwyg_config')->getConfig(),
        ));

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }

}
