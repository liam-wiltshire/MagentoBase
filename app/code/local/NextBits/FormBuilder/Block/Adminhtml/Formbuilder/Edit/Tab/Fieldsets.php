<?php
class NextBits_FormBuilder_Block_Adminhtml_Formbuilder_Edit_Tab_Fieldsets
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
		$this->setId('form_fieldsets_grid');
		$this->setDefaultSort('sort_order');
		$this->setDefaultDir('asc');
		$this->setUseAjax(true);
		$this->setSaveParametersInSession(true);
		$this->setFilterVisibility(false);
	}
	
	public function getGridUrl(){
		return $this->getUrl('*/adminhtml_fieldsets/grid',array('id'=> $this->getRequest()->getParam('id')));
	}

	public function getRowUrl($row){
		return $this->getUrl('*/adminhtml_fieldsets/edit', array('id' => $row->getId(), 'webform_id' => $this->getRequest()->getParam('id')));
	}
	
	public function _prepareCollection(){
		/* $collection = Mage::getModel('webforms/fieldsets')->getCollection()->addFilter('webform_id', $this->getRequest()->getParam('id'));
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
			'index'     => 'name'
		));

		/* $this->addColumn('is_active', array(
			'header'    => Mage::helper('webforms')->__('Status'),
			'index'     => 'is_active',
			'type'      => 'options',
			'options'   => Mage::getModel('webforms/webforms')->getAvailableStatuses(),
		));
 */
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
