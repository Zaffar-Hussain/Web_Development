<?php
	function calc_intrest_amt($principal,$years,$interest_rate)
	{
		$int_amt=($principal*$years*$interest_rate)/100;
		return $int_amt;
	}
	
	

?>