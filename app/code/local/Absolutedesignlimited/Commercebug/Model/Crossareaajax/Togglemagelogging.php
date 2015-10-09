<?php
/**
* Copyright © Pulsestorm LLC: All rights reserved
*/
class Absolutedesignlimited_Commercebug_Model_Crossareaajax_Togglemagelogging extends Absolutedesignlimited_Commercebug_Model_Crossareaajax
{
    public function handleRequest()
    {
        $session = $this->_getSessionObject();        
        $c = $session->getData(Absolutedesignlimited_Commercebug_Model_Observer::MAGE_LOGGING_ON);
        $c = $c == 'on' ? 'off' : 'on';        
        $session->setData(Absolutedesignlimited_Commercebug_Model_Observer::MAGE_LOGGING_ON, $c);        
        $this->endWithHtml('Mage Logging ' . ucwords($c) .'');        
    }
}