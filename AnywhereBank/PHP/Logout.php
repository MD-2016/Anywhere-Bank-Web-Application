<?php
	include("base.php");
	include("pageCheck.php");
	include("redirect.php");
	
		session_destroy();
		redirect("login.php");
?>