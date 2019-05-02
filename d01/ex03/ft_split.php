<?php

	function ft_split($str){
	    $str = trim($str);
		$str = preg_replace("/\s{2,}/", " ", $str);
		$arr = explode(" ", $str);
		sort($arr);
		return($arr);
	}
?>
