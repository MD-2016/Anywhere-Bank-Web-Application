<?php
	session_start();
	
	$dbhost = "localhost";
	$dbname = "anywherebankdb";
	$dbuser = "root";
	$dbpass = "KingKane90";
	
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);


if ($mysqli->connect_errno) 
{
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
   die();
}
?>