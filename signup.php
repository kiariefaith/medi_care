<?php

session_start();
include("connections.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
 { //collect data from post method
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];

	if(!empty($username) && !empty($password)) 
	{
	//$user_id=random_num(5);
	$query="INSERT INTO `login` (`username`, `password`, `email`) VALUES ('$username', '$password', '$email')";

	mysqli_query($con,$query);
	header("Location: login.php");
	}

 else 
{
	echo "Logical error from database!";
}

}


?>

<html>
<head>
<title>Med_Care</title>
 <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <link rel="stylesheet" type="text/css" href="https://www.flaticon.com/free-icons/hospital">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
    <!--Other styles-->
    <link rel="stylesheet" href="css/new.css">  

   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>

</head>
<body>

      <div class="container" style="width:40vw;">
                  <div class="appointment-form">
                     <h3><span>+</span> Signup</h3>
                     <div class="form">
                        <form method="post" >
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
                                       <input type="email" placeholder="Email Address" id="email" name="email" />
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
                                       <div class="center"><button type="submit" id="appointmentSubmit" value="Signup">Submit</button></div>
                                    </div>
                                 </div>
                              </div>
                               
                           </fieldset>

                          <center><a href="login.php"> Already a member?Sign in.</a></center>

                        </form>
                     </div>
                  </div>
          </div>




</body>
</html>
