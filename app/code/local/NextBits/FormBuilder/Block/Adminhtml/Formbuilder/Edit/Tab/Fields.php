<?php
class NextBits_FormBuilder_Block_Adminhtml_Formbuilder_Edit_Tab_Fields
	extends Mage_Adminhtml_Block_Widget_Grid
{
	
	public function _prepareLayout(){
		parent::_prepareLayout();
	}
	
	/**
	 * Set grid params
	 *
	 */
	public function __construct()
	{
		parent::__construct();
		$this->setId('form_fields_grid');
		$this->setDefaultSort('sort_order');
		$this->setDefaultDir('asc');
		$this->setUseAjax(true);
		$this->setSaveParametersInSession(true);
		$this->setFilterVisibility(false);
	}
	
	public function getGridUrl(){
		return $this->getUrl('*/adminhtml_fields/grid',array('id'=> $this->getRequest()->getParam('id')));
	}
	
	public function getRowUrl($row){
		return $this->getUrl('*/adminhtml_fields/edit', array('id' => $row->getId(), 'form_id' => $this->getRequest()->getParam('id')));
	}
	
	public function _prepareCollection(){
		/* $collection = Mage::getModel('webforms/fields')->getCollection()->addFilter('webform_id', $this->getRequest()->getParam('id'));
		$this->setCollection($collection); */
		return parent::_prepareCollection();
	}
	
	/**
	 * Add columns to grid
	 *
	 * @return Mage_Adminhtml_Block_Widget_Grid
	 */
	protected function _prepareColumns()
	{
		$this->addColumn('id', array(
			'header'    => Mage::helper('formbuilder')->__('ID'),
			'width'     => 60,
			'index'     => 'id'
		));

		$this->addColumn('name', array(
			'header'    => Mage::helper('formbuilder')->__('Name'),
			'index'     => 'name',
		));
		
		/* $fieldsetsOptions  = Mage::registry('form_data')->getFieldsetsOptionsArray();
		if(count($fieldsetsOptions)>1) {
			$this->addColumn('fieldset_id', array(
				'header'    => Mage::helper('formbuilder')->__('Field Set'),
				'index'     => 'fieldset_id',
				'type'      => 'options',
				'options'   => $fieldsetsOptions,
			));
		} */
		
		/* $this->addColumn('type', array(
			'header'    => Mage::helper('formbuilder')->__('Type'),
			'width'     => 150,
			'index'     => 'type',
			'type'      => 'options',
			'options'   => Mage::getModel('formbuilder/fields')->getFieldTypes(),
		)); */
		
		$this->addColumn('required', array(
			'header'    => Mage::helper('formbuilder')->__('Required'),
			'width'     => 100,
			'index'     => 'required',
			'type'      => 'options',
			'options'   => array("1"=>$this->__("Yes"),"0"=>$this->__("No")),
		));

		/* $this->addColumn('is_active', array(
			'header'    => Mage::helper('formbuilder')->__('Status'),
			'index'     => 'is_active',
			'type'      => 'options',
			'options'   => Mage::getModel('webforms/webforms')->getAvailableStatuses(),
		)); */

		$this->addColumn('position', array(
			'header'            => Mage::helper('formbuilder')->__('Position'),
			'name'              => 'position',
			'type'              => 'number',
			'validate_class'    => 'validate-number',
			'index'             => 'position',
			'width'             => 60,
		));
		return parent::_prepareColumns();
	}
	
}  
?>
