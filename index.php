<?php

session_start();
include("connections.php");
include("functions.php");
$user_data=check_login($con);

include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
 
   <title>Med_Care</title>
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

   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loaders/Loader_1.gif" alt="Getting everything ready...">
      </div>
      <!-- END LOADER -->
      

      <!--Third part-->
      <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/boda3.jpg');">
         <!--Start container-->
         <div class="container">         
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="text-contant">
                     <h2>
                     <span class="center">
                        <span class="icon"><img src="images/icon-logo.png" alt="#" />
                        </span>
                     </span>
                        <a style="color: #fff;" href="" class="typewrite" data-period="2000" data-type='[ "Welcome to Boda Smart_Care", "We care for you", "Your Safety our priority!", "chat seamlessly", "appointments with specialists", "Find Hospitals"," police stations",  "Social_Ammenities", "A handy GPS map", "Advertise to thousands of users", "Quality Assured"]'>
                        <span class="wrap"></span>
                        </a>
                     </h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--start three tab cards-->
      <div id="time-table" class="time-table-section">
         <div class="container">

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time one" style="background:#2895f1;">
                     <a href="#doctors"><span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></a></span>
                     <h3>Emergency Case</h3>
                     <p>Get quick tips from our dedicated Admin incase of an emergency.</p>
                  </div>
               </div>
            </div>

               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">
                  <div class="service-time middle" style="background:#0071d1;">

                     <span class="info-icon"><a href="#doctors"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></span>

                     <h3>Free ChatRoom</h3>
                   <p>Talk to anyone, anywhere, for free! </p> 
                     <p>Join our chat room today and experience super-fast relay of messages amongst your friends.</p>
                      <p>Share vital information, Keep up with the latest news from our blog</p>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <div class="row">      
                  <div class="service-time one" style="background:#2895f1;">
                     <span class="info-icon"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a></span>
                     <h3>Our Services</h3>
                     <p>Talk to a specialist right now! Our doctors and security specialists are top-notch.</p>
                  </div>
               </div>
            </div>



         </div>
      </div>


      <div id="about" class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>About us</h2>
            </div>

            <div class="row">
               <div class="col-md-6">
                  <div class="message-box">
                     <h4>What We Do</h4>
                     <h2>Our Services</h2>
                     <p class="lead">Boda Smart care is a one stop for quick access to services for riders and motorists alike. Our interface is simplistic and easy to use for everyone.Report emergencies and book appointments with qualified specialists on the go. Looking to grow your business? Advertise on our site at guaranteed best prices and get your brand out there.</p>
                     <p> Our unique feature is free real-time chat services 24/7 around the globe. Join a chat room today and chat with anyone seamlessly.</p>
                     <a href="#service" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Explore</a>
                  </div>
            
               </div>
              
               <div class="col-md-6">
                  <div class="post-media wow fadeIn">
                     <img src="images/emeg_hosp.jpg" alt="A descriptive video" class="img-responsive">
                     <a href="http://www.youtube.com/watch?v=a4kglGGFEVY" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                  </div>
               
               </div>
            
            </div>
            
            <hr class="hr1">
            <div class="row">
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/contact-bg.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/contact-bg.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Dedicated Administrator</h3>
                  </div>
                  
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/clinic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/clinic_02.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>News Blog</h3>
                  </div>
                
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/clinic_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/clinic_03.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Qualified Specialists</h3>
                  </div>
                
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/clinic_01.jpg" alt="" class="img-responsive">
                     </div>
                     <h3>Chat Room</h3>
                  </div>
                  
               </div>
            </div>
            
         </div>
       
      </div>



 <!-- doctor -->
     
     <div id="doctors" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
        <div class="container">
      
      <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Qualified Specialists</h2>
            </div>
            <!-- ONE -->
            <div class="row dev-list text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="images/doctor_01.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>Humphrey Karua</h3>
                            <small>Laboratory Researcher</small>
                        </div>
                        <!-- end title -->
                        <p>Hello guys,i am a Ph.D holder in Medical Science. Visit my state of art laboratory in downtown.</p>

                        <div class="footer-social">
                            <a href="https://www.github.com" class="btn grd1"><i class="fa fa-github"></i></a>
                            <a href="tel:+254792624672p000" class="btn grd1"><i class="fa fa-phone"></i></a>
                            <a href="https://www.twitter.com" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.linkedin.com" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
           
                <!--TWO-->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="images/bg-doctor.png" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>Marion wenger</h3>
                            <small>Cardiologist</small>
                        </div>
                        <!-- end title -->
                        <p>I work with the Doctors' Plaza as an analyst for cardiovascular</p>

                        <div class="footer-social">
                            <a href="https://www.facebook.com" class="btn grd1"><i class="fa fa-facebook"></i></a>
                            <a href="tel:+254792624672p000" class="btn grd1"><i class="fa fa-phone"></i></a>
                            <a href="https://www.twitter.com" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.linkedin.com" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                  </div>
              
               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="images/doctor_03.jpg" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3>Samaya Ali</h3>
                            <small>Nutritionist</small>
                        </div>
                        <!-- end title -->
                        <p>Looking to eat good? I write down good diet for all and sundry. visit me!</p>

                        <div class="footer-social">
                            <a href="https://www.github.com" class="btn grd1"><i class="fa fa-github"></i></a>
                            <a href="tel:+254792624672p000" class="btn grd1"><i class="fa fa-phone"></i></a>
                            <a href="https://www.twitter.com" class="btn grd1"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.linkedin.com" class="btn grd1"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


      <div id="service" class="services wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                  <div class="inner-services">
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                           <h4>PREMIUM FACILITIES</h4>
                           <p>All our facilities meet minimum ISO requirements.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                           <h4>DECENT HEALTH-CARE</h4>
                           <p>You health matters are our primary concern.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                           <h4>MEET SPECIALIST</h4>
                           <p>Book an appoitment and talk to a specialist today.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                           <h4>TALK WITH POLICE</h4>
                           <p>The law is your friend!</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                           <h4>MODERN TECHNOLOGY</h4>
                           <p>Your data is secured using cutting-edge technology.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon6.png" alt="#" /></span>
                           <h4>FREE LABORATORY TESTS</h4>
                           <p>Yes! For our dedicated clients.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="appointment-form">
                     <h3><span>+</span> Book Appointment</h3>
                     <div class="form">
               <!--start of form-->
                        <form method="post" action="apoint-to-dtb.php">
                           <fieldset>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="text" id="name" placeholder="Your Name" name="name" />
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
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                 <div class="row">
                                    <div class="form-group">
                                       <select class="form-control" name="day">
                                          <option>Day</option>
                                          <option>Monday</option>
                                          <option>Wednesday</option>
                                          <option>Friday</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <select class="form-control" name="time">
                                          <option>Time</option>
                                          <option>9.00 AM</option>
                                          <option>11.00 AM</option>
                                          <option>3.00 PM</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <select class="form-control" name="doctor">
                                          <option>Specialist Name</option>
                                          <option>Mr. Marcus Opiyo</option>
                                          <option>Mr. Alfred Mbaga</option>
                                          <option>Miss Celina Trump</option>
                                          <option>Dr. Juan Hesi</option>
                                          <option>Mrs. Patrice Hakinnen</option>
                                          <option>Prof. Humphrey Karua</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <textarea rows="4" name="message" id="textarea_message" class="form-control" placeholder="Your Message..."></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <div class="center"><button onclick="this.reset();"type="submit" value="Submit" id="appointmentSubmit" name="appointmentSubmit">Book Now</button></div>
                                    </div>
                                 </div>
                              </div>
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

    <!-- end doctor section -->
    
      <div id="testimonials" class="section wb wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Testimonials</h2>
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                  <div class="testimonial clearfix">
                     <div class="desc">
                        <h3><i class="fa fa-quote-left"></i> Amazing Specialists!</h3>
                        <p class="lead">I am humbled by how one can easily book and talk to a qualifed specialist. And they actually run big business!</p>
                     </div>
                     <div class="testi-meta">
                        <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                        <h4>Fernando Alonso<small>- Rider</small></h4>
                     </div>
                     <!-- end testi-meta -->
                  </div>
                  <!-- end testimonial -->
               </div>
               <!-- end col -->
               <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="testimonial clearfix">
                     <div class="desc">
                        <h3><i class="fa fa-quote-left"></i> Thanks for your help!</h3>
                        <p class="lead">I was in an emergency situation and thanks to boda smart care, my wife was able to deliver at a specialist hospital downtown. very happy!</p>
                     </div>
                     <div class="testi-meta">
                        <img src="images/testi_02.png" alt="" class="img-responsive alignleft">
                        <h4>Andrew Atenya <small>- Rider</small></h4>
                     </div>
                     <!-- end testi-meta -->
                  </div>
                  <!-- end testimonial -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
            <hr class="invis">
            <div class="row">
               <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="testimonial clearfix">
                     <div class="desc">
                        <h3><i class="fa fa-quote-left"></i> What a website!</h3>
                        <p class="lead">can you believe that I managed to talk to a DCI agent who guided me through a difficult time? Simply amazing!</p>
                     </div>
                     <div class="testi-meta">
                        <img src="images/testi_03.png" alt="" class="img-responsive alignleft">
                        <h4>Jeremih Kosgey <small>- Rider</small></h4>
                     </div>
                     <!-- end testi-meta -->
                  </div>
                  <!-- end testimonial -->
               </div>
               <!-- end col -->
               <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                  <div class="testimonial clearfix">
                     <div class="desc">
                        <h3><i class="fa fa-quote-left"></i> Excellent customer care</h3>
                        <p class="lead">I enjoyed their timely response to my mails, and the professionalism expressed by their staff. Keep up! Good work!</p>
                     </div>
                     <div class="testi-meta">
                        <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                        <h4>Martin Johnson <small>- Rider</small></h4>
                     </div>
                     <!-- end testi-meta -->
                  </div>
                  <!-- end testimonial -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->

<!--Advert board-->
<div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Pay Less for More</h2>
            </div>
    <div id="price" class="section pr wow fadeIn" style="background-image:url('images/price-bg.png');">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="tab-content">
                     <div class="tab-pane active fade in" id="tab1">
                        <div class="row text-center">
                           <div class="col-md-4">
                              <div class="pricing-table">
                                 <div class="pricing-table-header grd1">
                                    <h2>Starter Pack</h2>
                                    <h3>Kshs 5,000/month</h3>
                                 </div>
                                 <div class="pricing-table-features">
                                    <p><i class="fa fa-envelope-o"></i> <strong>250 Mails</strong> Admin Support</p>
                                    <p><i class="fa fa-database"></i> <strong>125 Slots</strong> Appointments</p>
                                    <p><i class="fa fa-life-ring"></i> <strong>Free</strong> News-Bits</p>
                                    <p><i class="fa fa-rocket"></i> <strong>24/7 Chat Room</strong> Services</p>
                                 </div>
                                 <div class="pricing-table-sign-up">
                                    <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="pricing-table pricing-table-highlighted">
                                 <div class="pricing-table-header grd1">
                                    <h2>Special Offer</h2>
                                    <h3>kshs 38,500/lifetime</h3>
                                 </div>
                                 <div class="pricing-table-space"></div>
                                 <div class="pricing-table-text">
                                    <p>This is the perfect choice</p>
                                 </div>
                                 <div class="pricing-table-features">
                                    <p><i class="fa fa-envelope-o"></i> <strong>FREE MAILS</strong> Admin Support</p>
                                    <p><i class="fa fa-database"></i> <strong>3650 Slots</strong> Appointments</p>
                                    <p><i class="fa fa-life-ring"></i> <strong>NEWS ALERTS</strong> News Bits</p>
                                    <p><i class="fa fa-rocket"></i> <strong>24/7 Chat Room</strong> Services</p>
                                 </div>
                                 <div class="pricing-table-sign-up">
                                    <a href="#contact" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 effect-1">Get Now</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="pricing-table">
                                 <div class="pricing-table-header grd1">
                                    <h2>Advanced Pack</h2>
                                    <h3>kshs 14,500/year</h3>
                                 </div>
                                 <div class="pricing-table-features">
                                    <p><i class="fa fa-envelope-o"></i> <strong>2,000 Mails</strong> Admin Support</p>
                                    <p><i class="fa fa-database"></i> <strong>650 Slots</strong> Appointments</p>
                                    <p><i class="fa fa-life-ring"></i> <strong>Free</strong> News Bits</p>
                                    <p><i class="fa fa-rocket"></i> <strong>24/7 Chat Room</strong> Services </p>
                                 </div>
                                 <div class="pricing-table-sign-up">
                                    <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Oder</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- end pane -->
                     

                  </div>
                  <!-- end content -->
               </div>
               <!-- end col -->
            </div>
         </div>
      </div>





<!--News segment-->

<div class="heading" id="newss">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>News</h2>
            </div>      
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Covid19</a>
              </div>
              <a href="#" class="post-thumb">
                <img src="images/blog/blog_1.jpg" alt="">
              </a>
            </div>
            <div class="bodyy">
              <h5 class="post-title"><a href="#">List of Countries without Coronavirus case</a></h5>
              <div class="site-info">
                   <div class="testimonial clearfix">
                    <div class="testi-meta">
                        <img src="images/testi_03.png" alt="" class="img-responsive alignleft">
                        <h4><a href="#">Marion Saphire</a><small>- Channel_One News</small></h4>
                     </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Ward</a>
              </div>
              <a href="#" class="post-thumb">
                <img src="images/blog/blog_2.jpg" alt="">
              </a>
            </div>
            <div class="bodyy">
              <h5 class="post-title"><a href="#">Recovery Room: What kenyan Specialists are doing</a></h5>
              <div class="site-info">
              <div class="testimonial clearfix">
                    <div class="testi-meta">
                        <img src="images/testi_01.png" alt="" class="img-responsive alignleft">
                        <h4><a href="#">Ambrose Singer </a><small>- Your Eye blog</small></h4>
                     </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">International</a>
              </div>
              <a href="#" class="post-thumb">
                <img src="images/blog/blog_3.jpg" alt="">
              </a>
            </div>
            <div class="bodyy">
              <h5 class="post-title"><a href="#">What is the impact of poor diet on your general health?</a></h5>
              <div class="site-info">
                 <div class="testimonial clearfix">
                    <div class="testi-meta">
                        <img src="images/testi_02.png" alt="" class="img-responsive alignleft">
                        <h4><a href="#">Martin Kimani </a><small>- Standard_Today</small></h4>
                     </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
     
     <?php
     include("foooter.php");
     ?>

   </body>
    <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>
      
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>-->
<!-- first key -->
<script src="https://maps.googleapis.com/maps/api/js?key=Atf4RAOVy6fD7kG5lJYmmyYTJhb16YLVB7YIcZ-mg-WY4HGlbipKWlonschA4IbH&callback=myMap"></script>

 <script type="text/javascript">
     document.getElementById('frmSearch').onsubmit = function() {
     window.location = 'http://www.google.com/search?q=site:http://localhost/life-care/index.php' + document.getElementById('txtSearch').value;
   return false;
  }
   </script>
</html>
