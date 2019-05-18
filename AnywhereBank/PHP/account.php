<!--Site is made using HTML5 and formats to the users device-->
<!--This page is made for logging in users to the site-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF--8">
  <meta name="description" content="Account Overview">
  <meta name="keywords" content="Anywhere, Account, Money">
  <meta name="author" content="Charlette, Glen, Jay, Luke">
  <title>Account Overview</title>
  <link rel="stylesheet"  type="text/css" href="../CSS/anb-style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../PHP/login.php">Anywhere National Bank</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Summary</a></li>
          <li><a href="#">Make Payment</a></li>
          <li><a href="#">Transfer Funds</a></li>
          <li><a href="#">Service Center</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../PHP/login.php">Home</a></li>
          <li><a href="../PHP/aboutus.php">About Us</a></li>
          <li><a href="../PHP/contactus.php">Contact Us</a></li> 
          <li><a href="../PHP/Logout.php">Log Off</a></li> 
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container">
  <h2>Account Overview</h2>
  <h4>Hello, Bob Smith</h2>
    <div class="panel-group">

      <div class="panel panel-primary">
        <div class="panel-heading">Deposits and Investments</div>
        <div class="panel-body">
          <table class="table">
            <tr>
              <th>Account Name</th>
              <th>Balance</th>
              <th>Available</th>
            </tr>
            <tr>
              <td>
                Checking<br>
                XXXX-XXXX-0911
              </td>
              <td>$8,344.32</td>
              <td>$7,344.32</td>
            </tr>
            <tr>
              <td>
                Saving<br>
                XXXX-XXXX-0912
              </td>
              <td>$14,903.43</td>
              <td>$14,903.43</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="panel panel-primary">
        <div class="panel-heading">Credit Cards and Loans</div>
        <div class="panel-body">
          <table class="table">
            <tr>
              <th>Account Name</th>
              <th>Total Balance</th>
              <th>Available Credit</th>
            </tr>
            <tr>
              <td>
                Credit<br>
                XXXX-XXXX-3422
              </td>
              <td>$1,887.98</td>
              <td>$11.381.00</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="panel panel-primary">
        <div class="panel-heading">Scheduled Internal Transfers</div>
        <div class="panel-body">No Pending Transfers</div>
      </div>

      <div class="panel panel-primary">
        <div class="panel-heading">Scheduled Payments To a Anywhere National Bank Account</div>
        <div class="panel-body">No Scheduled Payments on Credit, Loan or Line.</div>
      </div>
    </div>
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
