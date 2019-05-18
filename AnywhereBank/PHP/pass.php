<?php
	function HashPassword($password)
	{
		$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
		$hash = hash("sha256", $salt . $password);
		$final = $salt . $hash;
		return $final;
	}
	
	function ValidatePassword($password, $correcthash)
	{
		$salt = substr($correcthash, 0, 64);
		$validhash = substr($correcthash, 64, 64);
		
		$testhash = hash("sha256", $salt . $password);
		
		return $testhash == $validhash;
	}
?>