<?php
/**
* Copyright © Pulsestorm LLC: All rights reserved
*/

class Absolutedesignlimited_Commercebug_Model_Resource_Mysql4_Setup extends Mage_Core_Model_Resource_Setup
{
    public function getShim()
    {
        $shim = Absolutedesignlimited_Commercebug_Model_Shim::getInstance();
        return $shim;
    }
}