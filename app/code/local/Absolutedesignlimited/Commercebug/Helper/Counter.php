<?php
/**
* Copyright © Pulsestorm LLC: All rights reserved
*/
class Absolutedesignlimited_Commercebug_Helper_Counter
{
	public $_count=0;
	
	public function execute($string='counter')
	{
		$this->_count++;
		return $string . ' ' . $this->_count;
	}
}