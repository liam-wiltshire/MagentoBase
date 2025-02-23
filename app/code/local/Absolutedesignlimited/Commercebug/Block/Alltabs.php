<?php
/**
* Copyright © Pulsestorm LLC: All rights reserved
*/

class Absolutedesignlimited_Commercebug_Block_Alltabs extends Absolutedesignlimited_Commercebug_Block_Html
{
    protected $_config;
            
    protected function _toHtml()
    {
        ob_start();
        $helper = $this->getShim()->helper('commercebug');
        ?>      
        <script type="text/javascript">
            jQueryCommercebug(document).ready(function(){
                jQueryCommercebug("#ascommercebug-tabs").commercebug(commercebug_json);
                
                <?php if($this->getShim()->getStoreConfig('commercebug/options/keyboard_shortcuts')): ?>		
                    jQueryCommercebug(document).bind('keyup',function(e){		
                        var code = (e.keyCode ? e.keyCode : e.which);
                        
                        //bail if we're in certain tags.  Not ideal as it kills
                        //tab navigation, but that's why we let them turn it off
                        if( jQueryCommercebug(e.target).is('input') || 
                        jQueryCommercebug(e.target).is('textarea') 	||
                        jQueryCommercebug(e.target).is('select') 	||
                        jQueryCommercebug(e.target).is('option')	)
                        {
                            return true;
                        }
                        
                        if(code == 76)
                        {
                            jQueryCommercebug('#ascommercebug-tabs').commercebug.tab_forward('#ascommercebug-tabs');
                        }
                        else if (code == 72)
                        {
                            jQueryCommercebug('#ascommercebug-tabs').commercebug.tab_backwards('#ascommercebug-tabs');
                        }				
                    });		
                <?php endif; ?>		
                
            });			
        </script>
        
        <?php        
        return ob_get_clean();
    }
}