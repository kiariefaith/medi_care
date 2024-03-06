 
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>One_Care</title>
   <meta name="keywords" content="Help, GPS, Hospital, local-chat">
   <meta name="description" content="A quick stop for urgent help, quick navigation, and seamless access to health and other ammenities">
   <meta name="author" content="F_K-CopyRight">
   <!-- Site Icons -->
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

 <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">


<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>

   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   </head>


<body>


   <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
          
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a data-scroll href="index.php">About us</a></li>
                        <li><a data-scroll href="index.php">Services</a></li>
                        <li><a data-scroll href="index.php">Chat Room</a></li>   
                        <li><a data-scroll href="index.php">News</a></li>
                        <li><a data-scroll href="contact_us.php">Report emergency</a></li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>

 <div class="page-section">
    <div class="container">
    
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Get in Touch</h2>
            </div>
        

      <form class="contact-form mt-5" action="to-contact.php" name="myemailform" method="post">
        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="fullName">Name</label>
            <input type="text" id="fullName" class="form-control" placeholder="Full name.." name="name">
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="emailAddress">Email</label>
            <input type="text" id="emailAddress" class="form-control" placeholder="Email address.." name="email">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="subject">Subject</label>
            <input type="text" id="subject" class="form-control" placeholder="Enter subject.." name="subject">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" rows="8" placeholder="Enter Message.." name="message"></textarea>
          </div>
        </div>
        <a href=""><button type="submit" class="btn btn-primary wow zoomIn" value="submit">Send Message</button></a>
      </form> 
    </div>
  </div>

 <!--<div class="maps-container wow fadeInUp">
    <div id="google-maps"></div>
  </div>-->

<!--footer-->
<?= include("foooter.php")?>


      
      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

      <!-- all js files -->
      <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>




<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/google-maps.js"></script>

<script src="../assets/js/theme.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=Atf4RAOVy6fD7kG5lJYmmyYTJhb16YLVB7YIcZ-mg-WY4HGlbipKWlonschA4IbH&callback=myMap"></script>
</body>
</html>