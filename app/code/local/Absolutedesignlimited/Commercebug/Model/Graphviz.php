<?php
/**
* Copyright © Pulsestorm LLC: All rights reserved
*/
class Absolutedesignlimited_Commercebug_Model_Graphviz
{
    public function capture()
    {    
        $collector  = new Absolutedesignlimited_Commercebug_Model_Collectorgraphviz; 
        $o = new stdClass();
        $o->dot = Absolutedesignlimited_Commercebug_Model_Observer_Dot::renderGraph();
        $collector->collectInformation($o);
    }
    
    public function getShim()
    {
        $shim = Absolutedesignlimited_Commercebug_Model_Shim::getInstance();        
        return $shim;
    }    
}