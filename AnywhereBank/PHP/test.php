<?php
include ("base.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF--8">
  <meta name="description" content="Login to Your Account">
  <meta name="keywords" content="Anywhere, Account, Money">
  <meta name="author" content="Charlette, Glen, Jay, Luke">
  <title>Login to Anywhere National Bank</title>
  <link rel="stylesheet"  type="text/css" href="../CSS/anb-style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(function(){
        $('#browse_app').click(function(){
            window.location='/account_overview.html'
        });
    });
  </script>
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="../PHP/login.php">Anywhere National Bank</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="login.html">Home</a></li>
        <li><a href="../HTML/about_us.html">About Us</a></li>
        <li><a href="../HTML/contact_us.html">Contact Us</a></li> 
      </ul>
    </div>
  </nav>
  <div class="container login" role="form">
    <div class="row">
      <div class="col-offset-5 col-3">
        <div class="form-login">
          <h4 class="login-element">Welcome back! Please log in.</h4>
          <div class="error" id="no-match" style="display: none"> The Username and Password you have entered do not match our records. </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="SignUpLogic.js"></script>
</body>

<footer>
  <div class="anb-footer secondary-button navbar-fixed-bottom">
    <a href="login.html">Home</a>
    |
    <a href="#">Locations</a>
    |
    <a href="../HTML/contact_us.html">Contact Us</a>
    |
    <a href="#">Privacy, Security  &  Legal</a>
    |
    <a href="../PHP/login.php">Sign Off</a>
    <div>            
        <img src="eq_housing.gif" alt="" width="14" height="10" border="0"/>
        <span id="equalhousinglender">Equal Housing Lender</span>
    </div>
    &copy; 1995 &#8211; 2016 Anywhere National Bank, Member FDIC. All rights reserved.
  </div>
</footer>

</html>