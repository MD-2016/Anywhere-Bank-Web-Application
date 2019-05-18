<?php 
 include ("base.php");
 include ("pass.php");
 include ("redirect.php");
 //include("../PHP/pageCheck.php");
	$error = "";
	
	function postInput($htmlName)
	{
		if(isset($_POST[$htmlName]))
		{
			return $_POST[$htmlName];
		}
		return null;
	}
	
	//check if the user is already login.
			if(isset($_SESSION['email']))
			{
				//check the database for existing user.
				$usercheck = $mysqli->prepare("SELECT * FROM customer WHERE EmailAddress = ?");
				$usercheck->bind_param("s",$_SESSION['email']);
				$usercheck->execute();
				$usercheck->store_result();
				$results = $usercheck->num_rows;
				if($results == 1)
				{
					redirect('account.php');
				}
			}
	
	$loginemail = postInput('email');
	$loginpassword = postInput('password');
	
	
	if(isset($_POST['submit']))
	{
		
		if($loginemail == "" || $loginpassword == "")
		{
			$error = "Please Enter your user name and password";
			echo $error;
			
		}
		else
		{
				//user isnt logged in
				if($stmt = $mysqli->prepare("SELECT EmailAddress, password FROM customer WHERE EmailAddress = ? LIMIT 1"))
				{
					$stmt->bind_param("s",$loginemail);
					$stmt->execute();
					$stmt->bind_result($userid,$correctHash);
					$stmt->fetch();
				    if(ValidatePassword($loginpassword,$correctHash))
					{
						$_SESSION['email'] = $loginemail;
						redirect('account.php');
					}
					else
					{
							$error = "You dont exist in Database.";
							
					}
					$stmt->close();
					
				}
		}
	}
?>	

<!--Site is made using HTML5 and formats to the users device-->
<!--This page is made for logging in users to the site-->
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
            window.location='/account.php'
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
        <li class="active"><a href="../PHP/login.php">Home</a></li>
        <li><a href="../PHP/aboutus.php">About Us</a></li>
        <li><a href="../PHP/contactus.php">Contact Us</a></li> 
      </ul>
    </div>
  </nav>
  <div class="container login">
  <form class="form-horizontal" role="form" id="form"   method="post" action="login.php">
    <div class="row">
      <div class="col-offset-5 col-3">
        <div class="form-login">
          <h4 class="login-element">Welcome back! Please log in.</h4>
          <div class="error" id="no-match" style="display: none"> The Username and Password you have entered do not match our records. </div>
          <div class="form-group login-element">
            <label for="usr">Username:</label>
            <input type="text" class="form-control" id="usr" placeholder="Email address" name="email" autofocus>
            <div class="error" id="usr-empty" style="display: none"> You must enter your email address to login. </div>
          </div>
          <div class="form-group login-element">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
            <div class="error" id="pwd-empty" style="display: none"> You must enter your password to login. </div>
            <div class="checkbox pull-right">
              <label><input class="login-element" type="checkbox"> Remember me</input></label>
            </div>
          </div>
          <div id="login-btn" class="login-element">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
          </div>
          <div class="text-center login-element">
            <button id="lost_login_btn" type="button" class="btn btn-link"><span class="secondary-button">Forgot Password</span></button>
            <span class="secondary-button"> | </span>
            <button id="lost_register_btn" type="button" class="btn btn-link"><span class="secondary-button"><a href="signup.php">Register</a></span></button>
          </div>
        </div>
      </div>
    </div>
	</form>
  </div>
  <script type="text/javascript" src="../JS/SignUpLogic.js"></script>
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