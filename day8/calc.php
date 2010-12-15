<?php 




class calculator {
	
	/**
	 * Add two paramters
	 * @param $one
	 * @param $two
	 * @return Integer
	 */
	public function add($param1,$param2) { 
		return $one + $two;
	}
	public function subtract($one,$two) { 
		return $one - $two;
	}
	public function multiply($one,$two) { 
		return $one * $two;
	}
	public function divide($one,$two) { 
		return $one / $two;
	}
	
}

/*
$c = new calculator();
$r = $c->add(1,2);
$t = $c->subtract(5,2);
echo $r+$t;
echo " all done";
*/
?>