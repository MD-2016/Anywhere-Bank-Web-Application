<?php
   include("base.php");
   include("passEncrypt.php");
   include("formCheck.php");
   
   function postInput($htmlName)
   {
	   if(isset($_POST[$htmlName]))
	   {
		   return $_POST[$htmlName];
	   }
	   return null;
   }
   
   $fname = postInput('fname');
   $lname = postInput('lname');
   $accountNum = postInput('accountNum');
   $phone = postInput('phone');
   $email = postInput('email');
   $pass = postInput('pass');
   $birthdate = postInput('birthdate');
   $contact = postInput('contact');
   
   $dateObj = new DateTime($birthdate);
   
   $resultDate = $dateObj->format("Y-m-d");
   
   if(isset($_POST['submit'])])
   {
	   $passhash = HashPassword($pass);
	   
	   if(validateImportantFields($fname, $lname, $accountNum, $phone, $email, $pass, $birtdate))
	   {
		    $result = $mysqli->prepare("SELECT * FROM customer WHERE EmailAddress = ?");
			$result->bind_param("s", $email);
			$result->execute();
			$result->store_result();
			$count = $result->num_rows();
			$result->close();
			
			if($count == 1)
			{
				$error = "Email already exists";
			}
			else
			{
				if($stmt = $mysqli->prepare("INSERT INTO customer(EmailAddress, Fname, Lname, PhoneNo, Password, DateOfBirth, ContactPreference) VALUES(?,?,?,?,?,?,?)") or die($mysqli->error))
				{
					$stmt->bind_param("sssssss",$email, $fname, $lname, $phone, $pass, $resultDate, $contact);
					$stmt->execute();
					$stmt->close();
					header("Location: login.php");
					
				}
				else
				{
					$error = "Could not add to database";
					
				}
			}
			
	   }
   }
   
?>

<!--Site is made using HTML5 and formats to the users device-->
<!--This page is made for signing up users to the site-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF--8">
  <meta name="description" content="Sign Up for A Account">
  <meta name="keywords" content="Anywhere, Account, Money">
  <meta name="author" content="Charlette, Glen, Jay, Luke">
  <title>Register at Anywhere National Bank</title>
  <link rel="stylesheet"  type="text/css" href="anb-style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="JS/SignUpLogic.js"></script>
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="login.html">Anywhere National Bank</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.html">Home</a></li>
        <li><a href="#">About Us</a></li> 
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <form class="form-horizontal" role="form" id="form"  onsubmit="return ValidateSignUp()">
      <h2>Registration Form</h2>
      <div class="form-group">
        <div class="error" id="empty-entry" style="display: none"> All entries with an * are required. </div>
        <label for="first-name" class="col-sm-4 control-label">First Name *</label>
        <div class="col-sm-8">
          <input type="text" id="first-name" placeholder="First Name" class="form-control" name="fname" autofocus>
        </div>
      </div>
      <div class="form-group">
        <label for="last-name" class="col-sm-4 control-label">Last Name *</label>
        <div class="col-sm-8">
          <input type="text" id="last-name" placeholder="Last Name" name="lname" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label for="account-number" class="col-sm-4 control-label">Account Number *</label>
        <div class="col-sm-8">
          <input type="text" id="account-number" placeholder="Account Number" class="form-control" name="accountNum">
          <span class="help-block">This field is necessary to link your bank account.</span>
          <div class="error" id="account-error" style="display: none" > Error this account number does not exist. </div>
        </div>
      </div>
      <div class="form-group">
        <label for="phoneNumber" class="col-sm-4 control-label">Phone Number *</label>
        <div class="col-sm-8">
          <input type="text" id="phoneNumber" placeholder="Phone Number" class="form-control" name="phone">
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-4 control-label">Email *</label>
        <div class="col-sm-8">
          <input type="email" id="email" placeholder="Email" class="form-control" name="email">
          <span class="help-block">This will be your username.</span>
          <div class="error" id="email-error" style="display: none" > Error the email you entered is already tied to an account. </div>
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-4 control-label">Password *</label>
        <div class="col-sm-8">
          <input type="password" id="password" placeholder="Password" class="form-control" name="pass">
          <div class="error" id="pwd-error" style="display: none" name="password"> Error you must conform to our password requirements. </div>
        </div>
      </div>
      <div class="form-group">
        <label for="birth-date" class="col-sm-4 control-label">Date of Birth *</label>
        <div class="col-sm-8">
          <input type="date" id="birthDate" class="form-control" name="birthdate">
        </div>
      </div>
      <div class="form-group">
        <label for="contact-preference" class="col-sm-4 control-label">Contact Preference</label>
        <div class="col-sm-8">
          <select id="contact-method" class="form-control" name="contact">
            <option>No Preference</option>
            <option>Email</option>
            <option>Phone</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-9 col-sm-offset-3">
          <div class="checkbox">
            <label>
              <input id="privacy-policy" type="checkbox">I have read the <a href="#">Privacy Policy</a>.
              <div class="error" id="pp-error" style="display: none" > Error you must accept the privacy policy. </div>
            </label>
          </div>
        </div>
        <div class="col-sm-9 col-sm-offset-3">
          <div class="checkbox">
            <label>
              <input id="terms-of-agreement" type="checkbox">I accept the <a href="#">Terms of Agreement</a>.
              <div class="error" id="toa-error" style="display: none" > Error you must accept the Terms of Agreement. </div>
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-9 col-sm-offset-3">
          <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
        </div>
      </div>
    </form>
  </div>
  <script type="text/javascript" src="SignUpLogic.js"></script>
</body>

<footer>
  <div class="anb-footer secondary-button navbar-fixed-bottom">
    <a href="login.html">Home</a>
    |
    <a href="#">Locations</a>
    |
    <a href="#">Contact Us</a>
    |
    <a href="#">Privacy, Security  &  Legal</a>
    |
    <a href="login.html">Sign Off</a>
    <div>            
        <img src="eq_housing.gif" alt="" width="14" height="10" border="0"/>
        <span id="equalhousinglender">Equal Housing Lender</span>
    </div>
    &copy; 1995 &#8211; 2016 Anywhere National Bank, Member FDIC. All rights reserved.
  </div>
</footer>

</html>
