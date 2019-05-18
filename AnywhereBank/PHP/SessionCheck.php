<?php
//used to check for already login.
if(!isset($_SESSION['email']))
{
header("Location: login.php");
die();
}
else
{
$usercheck = $mysqli->prepare("SELECT * FROM customer WHERE email = ?");
$usercheck->bind_param("s",$_SESSION['email']);
$usercheck->execute();
$usercheck->store_result();
$results = $usercheck->num_rows;
if($results == 0)
{
header("Location: login.php");
die();
}
}