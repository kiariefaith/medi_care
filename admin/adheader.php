<?php
session_start();
error_reporting(0);
include("../connections.php");
$dt = date("Y-m-d");
$tim = date("H:i:s");
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Medicare Services</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="assets/plugins/morrisjs/morris.css" rel="stylesheet" />
    

    <link href="assets/css/main.css" rel="stylesheet">
   
    <link href="assets/css/themes/all-themes.css" rel="stylesheet" />
   

</head>

<body class="theme-cyan">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-cyan">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Loading...</p>
        </div>
    </div>
    <div class="overlay"></div>


    <nav class="navbar clearHeader">
        <div class="col-12">
            <div class="navbar-header"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand"
                    href="#">MEDICARE</a> </div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a data-placement="bottom" title="Full Screen" href="adlogout.php"><i
                            class="zmdi zmdi-sign-in"></i></a>
                </li>               

            </ul>
        </div>
    </nav>
    <section>
        <aside id="leftsidebar" class="sidebar">
            <?php
                if(isset($_SESSION[adminid]))
                {
            ?>
            <div class="menu">
                <ul class="list" style="overflow: hidden; width: auto; height: calc(-184px + 100vh);">
                    <li class="header">MEDICARE</li>
                    <li class="active open"><a href="adminaccount.php"><i
                                class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>

                        <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-account-o"></i><span>Emergency Messages</span> </a>
                         <ul class="ml-menu">
                         <li><a href="viewemergency.php">View Messages</a></li></ul>
                        </li>

                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-calendar-check"></i><span>Appointment</span> </a>
                        <ul class="ml-menu">
                           
                            <li><a href="viewappointmentpending.php">View Pending Appointments</a>
                            </li>
                         
                        </ul>
                    </li>     
    
                    </ul>


                </ul>
            </div>
            <?php }?>


            <!-- manipulation Menu -->
            <?php
          if(isset($_SESSION[doctorid]))
            {
            ?>
            <div class="menu">
                <ul class="list">
                    <li class="header">MEDICARE</li>
                    <li class="active open"><a href="doctoraccount.php"><i
                                class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>


                    <li><a href="javascript:void(0);" class="menu-toggle"><i
                                class="zmdi zmdi-calendar-check"></i><span>Appointment</span> </a>
                        <ul class="ml-menu">
                            <li><a href="viewappointmentpending.php" style="width:250px;">View Pending Appointments</a>
                            </li>
                            
                        </ul>
                    </li>
                  
                  

                 


                  

                </ul>
            </div>

            <?php }; ?>
            <!-- doctor Menu -->




        </aside>
     
    </section>
     <section class="content home">
