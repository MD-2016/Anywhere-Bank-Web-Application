<?php
?>

<!--Site is made using HTML5 and formats to the users device-->
<!--This page tells the user about the company-->
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF--8">
  <meta name="description" content="Login to Your Account">
  <meta name="keywords" content="Anywhere, Account, Money">
  <meta name="author" content="Charlette, Glen, Jay, Luke">
  <title>About Anywhere Bank</title>
  <link rel="stylesheet"  type="text/css" href="../CSS/anb-style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="../PHP/login.php">Anywhere National Bank</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class=""><a href="../PHP/login.php">Home</a></li>
        <li class="active"><a href="../PHP/aboutus.php">About Us</a></li>
        <li><a href="../PHP/contactus.php">Contact Us</a></li> 
      </ul>
    </div>
  </nav>
  <div class="container about-us-container">
    <h2>About Us</h2>
    <p>Anywhere National Bank - the bank you can access anywhere.</p>
    <p>
      We strive to be the most accessible and friendly bank in the world. We monitor all traffic that goes through our system to ensure customer safety and satisfaction. Our customer service representivies are always here to help with any problem you may have. Our hope is to be the only bank for you!
    </p>
	</div>
</body>
<footer>
  <div class="anb-footer secondary-button navbar-fixed-bottom">
    <a href="../PHP/login.php">Home</a>
    |
    <a href="#">Locations</a>
    |
    <a href="../PHP/contactus.php">Contact Us</a>
    |
    <a href="#">Privacy, Security  &  Legal</a>
    |
    <a href="../PHP/Logout.php">Sign Off</a>
    <div>            
        <img src="../Img/eq_housing.gif" alt="" width="14" height="10" border="0"/>
        <span id="equalhousinglender">Equal Housing Lender</span>
    </div>
    &copy; 1995 &#8211; 2016 Anywhere National Bank, Member FDIC. All rights reserved.
  </div>
</footer>
</html>