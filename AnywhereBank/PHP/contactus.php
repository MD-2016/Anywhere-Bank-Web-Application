<!--Site is made using HTML5 and formats to the users device-->
<!--This page is made for contacintg the company-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF--8">
  <meta name="description" content="Sign Up for A Account">
  <meta name="keywords" content="Anywhere, Account, Money">
  <meta name="author" content="Charlette, Glen, Jay, Luke">
  <title>Register at Anywhere National Bank</title>
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
				<li><a href="../PHP/login.php">Home</a></li>
				<li><a href="../PHP/aboutus.php">About Us</a></li> 
				<li class="active"><a href="../PHP/contactus.php">Contact Us</a></li> 
        <li><a href="../PHP/login.php">Log on</a></li> 
			</ul>
		</div>
  </nav>
  <div class="container">
	<form class="form-horizontal" role="form">
		<h2>Contact Us</h2>
		<div class="form-group">
				<div class="error" id="empty-entry" style="display: none"> All entries with an * are required</div>
				<label for="first-name" class="col-sm-4 control-label">First Name *</label>
			<div class="col-sm-8">
				<input type="text" id="first-name" placeholder="First Name" class="form-control" autofocus>
			</div>
		</div>
		<div class="form-group">
				<label for="last-name" class="col-sm-4 control-label">Last Name *</label>
			<div class="col-sm-8">
				<input type="text" id="last-name" placeholder="Last Name" class="form-control">
			</div>
      </div>
	  <div class="form-group">
			<label for="account-number" class="col-sm-4 control-label">Account Number *</label>
			<div class="col-sm-8">
				<input type="text" id="account-number" placeholder="Account Number" class="form-control">
				<span class="help-block">This field is necessary to link your bank account.</span>
				<div class="error" id="account-error" style="display: none" > Error this account number does not exist. </div>
			</div>
      </div>
	  <div class="form-group">
			<label for="phoneNumber" class="col-sm-4 control-label">Phone Number *</label>
			<div class="col-sm-8">
				<input type="text" id="phone-number" placeholder="Phone Number" class="form-control">
			</div>
      </div>
      <div class="form-group">
			<label for="email" class="col-sm-4 control-label">Email *</label>
			<div class="col-sm-8">
				<input type="email" id="email" placeholder="Email" class="form-control">
			</div>
      </div>
	  <div class="form-group">
			<label for="comment" class="col-sm-4 control-label">Comment(s) / Question(s)</label>
			<div class="col-sm-8">
				<textarea id="comment" rows="5" placeholder="Your Feedback" class="form-control"></textarea>
			</div>
      </div>
	  <div class="form-group">
        <div class="col-sm-9 col-sm-offset-3">
          <button type="submit" class="btn btn-primary btn-block" onclick="return ValidateContactUs()">Contact Us</button>
        </div>
      </div>
	</form>
  </div>
  <script type="text/javascript" src="SignUpLogic.js"></script>
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
