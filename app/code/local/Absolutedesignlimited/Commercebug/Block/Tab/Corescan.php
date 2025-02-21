<?php
/**
* Copyright © Pulsestorm LLC: All rights reserved
*/

class Absolutedesignlimited_Commercebug_Block_Tab_Corescan extends Absolutedesignlimited_Commercebug_Block_Html
{
    protected $_snapshotNames;
    public function __construct()
    {						
        $this->setTemplate('tabs/ascommercebug_corescan.phtml');
    }		
    
    public function getMageVersion()
    {
        return Mage::getVersion();
    }

    protected function getSnapshotNames()
    {
        if(!$this->_snapshotNames)
        {
            $this->_snapshotNames = Mage::getModel('commercebug/snapshot_name')->getCollection();
        }
        return $this->_snapshotNames;
    }
    
    protected function getHelperJson()
    {
        $shim = $this->getShim();
        
        $json = new stdClass();
        $json->url_diff 			= $this->getUrl('alanstormdotcom_corecheckup/diff/bynameid');
        $json->url_snapshot_core 	= $this->getUrl('commercebug/snapshot/core');
        return $shim->getSingleton('commercebug/jsonbroker')->jsonEncode($json);
    }
    
    protected function needsInstallSnapshotLink()
    {
        foreach($this->getSnapshotNames() as $snapshot)
        {
            if($snapshot->getSnapshotName() == $this->getMageVersion())
            {
                return false;
            }
        }
        return true;
    }

    function getShim()
    {
        $shim = Absolutedesignlimited_Commercebug_Model_Shim::getInstance();
        return $shim;		
    }				
}