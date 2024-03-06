<?php
session_start();

?>
<?php
error_reporting(0);
include("../connections.php");
$dt = date("Y-m-d");
$tim = date("H:i:s");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Med_Care Admin</title>
   <meta name="keywords" content="Help, GPS, Hospital, local-chat">
   <meta name="description" content="A quick stop for urgent help, quick navigation, and seamless access to health and other ammenities">
   <meta name="author" content="F_K-CopyRight">
     <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <link rel="stylesheet" type="text/css" href="https://www.flaticon.com/free-icons/hospital">
     <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="css/colors.css">
     <link rel="stylesheet" href="css/versions.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/new.css">  
   <script src="js/modernizer.js"></script>
</head>
<body class = "admin_body" style = "background-color:#343434 !important; background:none;">

<?php
if(isset($_SESSION[adminid]))
{
	echo "<script>window.location='adminaccount.php';</script>";
}
$err='';
if(isset($_POST[submit]))

{	
	$sql = "SELECT * FROM admin WHERE loginid='$_POST[loginid]' AND password='$_POST[password]' AND status='Active'";
	$qsql = mysqli_query($con,$sql);
	if(mysqli_num_rows($qsql) == 1)
	{
		$rslogin = mysqli_fetch_array($qsql);
		$_SESSION[adminid]= $rslogin[adminid] ;
		echo "<script>window.location='adminaccount.php';</script>";
	}
	else
	{
		$err = "<div class='alert alert-danger'>
		<strong>Oh !</strong> Incorrect Credentials
	</div>";
	}
}
		
?>

<div class="container" style="width:40vw;">
    <div class="appointment-form">
  <h3><span>+</span> Admin Login</h3>
  <div class="form">

    <form method="post" action="" name="frmadminlogin" id="sign_in" onSubmit="return validateform()">
<fieldset>
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   		<div class="row">
             <div class="form-group">
					<input type="text" name="loginid" id="loginid" class="form-control" placeholder="Username" autofocus/>
			</div>
    </div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   		<div class="row">
             <div class="form-group">
					<input type="password" name="password" id="password" class="form-control"  placeholder="Password" />
			</div>
    </div>
	</div>

	 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="row">
             <div class="form-group">
             	<div class="center">
                <button type="submit" name="submit" id="submit" value="Login" class="center">Login</button>
            	</div>
       </div>
       </div>
      </div>
                
	</fieldset>
	<div class="center"><a href="../login.php">Go To User</a></div>
   </form>



        </div>
    </div>    
</div>

 <div class="clear"></div>
 <div class="theme-bg"></div>
  


<script src="assets/bundles/libscripts.bundle.js"></script> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> 

<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>
<script type="application/javascript">
var alphaExp = /^[a-zA-Z]+$/;
var alphaspaceExp = /^[a-zA-Z\s]+$/;
var numericExpression = /^[0-9]+$/; 
var alphanumericExp = /^[0-9a-zA-Z]+$/;
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; 

function validateform()
{
	if(document.frmadminlogin.loginid.value == "")
	{
		document.getElementById("err").innerHTML ="<div class='alert alert-info'><strong>Heads up!</strong> Please enter Password</div>";
		document.frmadminlogin.loginid.focus();
		return false;
	}
	else if(!document.frmadminlogin.loginid.value.match(alphanumericExp))
	{
		document.getElementById("err").innerHTML ="<div class='alert alert-Warning'><strong>Heads up!</strong> Invalid Password</div>";
		document.frmadminlogin.loginid.focus();
		return false;
	}
	else if(document.frmadminlogin.password.value == "")
	{
		document.getElementById("err").innerHTML ="<div class='alert alert-info'><strong>Heads up!</strong> Should not be empty</div>";
		document.frmadminlogin.password.focus();
		return false;
	}
	else if(document.frmadminlogin.password.value.length < 8)
	{
		document.getElementById("err").innerHTML ="<div class='alert alert-info'><strong>Heads up!</strong> Length should be 8</div>";
		document.frmadminlogin.password.focus();
		return false;
	}
	else
	{
		return true;
	}
}
</script>