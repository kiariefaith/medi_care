<?php

session_start();
include("connections.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
 { 
	$username=$_POST['username'];
	$password=$_POST['password'];

	if(!empty($username)&& !empty($password)&& !is_numeric($username)) 
	{
		//read from dtb
	$query="SELECT * FROM `login` WHERE `username` = '$username' limit 1";
	$result = mysqli_query($con,$query);

  	if($result)
  		{
  		
  		if($result && mysqli_num_rows($result)>0) 
		{
		
		$user_data = mysqli_fetch_assoc($result);
		
			if($user_data['password'] === $password) 
			{
        $_SESSION['user_id'] = $user_data['user_id'];
				$_SESSION['username'] = $user_data['username'];
				header("Location: index.php");
				die;
			}
		}
	}

		echo "Either username or password is wrong";
  	}
 else 
	 {
		echo "Please enter valid credentials!";
	}

}



?>

<html>
<head>
<title>Med_Care</title>

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

<body>

    
     <div class="container" style="width:40vw;">
                  <div class="appointment-form">
                     <h3><span>+</span> Login</h3>
                     <div class="form">
                        <form method="post">
                           <fieldset>

                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="text" id="name" placeholder="Your Name" name="username"  />
                                    </div>
                                 </div>
                              </div>

 
                               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="password" id="name" placeholder="Password" name="password"  />
                                    </div>
                                 </div>
                              </div>
  
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <div class="center"><button type="submit" id="appointmentSubmit" value="Login">Submit</button></div>
                                    </div>
                                 </div>
                              </div>
     
                           </fieldset>

                        </form>
                     </div>
                     <center><a href="signup.php"> Not a member? Join us today!</a></center>
                     <center><a href="admin/adminlogin.php"> Admin Login</a></center>

                  </div>
          </div>



</body>
</html>
