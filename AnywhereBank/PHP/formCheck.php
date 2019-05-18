<?php

   function validateImportantFields($fname, $lname, $accountNum, $phone, $email, $pass, $birthdate)
   {
	   
	   if((!$fname) || (!$lname) || (!$accountNum) || (!$phone) || (!$email) || (!$pass) || (!$birthdate))
		{
			$error = "Please fill in all fields";
			echo $error;
			return false;
		}
	   
		if(strlen($accountNum) != 16)
		{
			$error = "Account number must be 16 digits";
			echo $error;
			
			echo $accountNum;
			
			return false;
		}
		
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$error = "Enter vaild email address";
			echo $error;
			echo $email;
			return false;
		}
		
		if(strlen($pass) > 50 || strlen($pass) < 8)
		{
			$error = "Please enter pass that is 8 to 50 characters";
			echo $error;
			echo $pass;
			
			return false;
		}
		
		
		return true;
		
		
		
		
   }
?>