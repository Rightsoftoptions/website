<?php
include 'sql.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Right Soft Options</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->
    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Raleway for Title -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Pacifico for 404 page   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div class="loader">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start menu section -->
<section id="menu-area">
    <nav class="navbar navbar-default main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                               
          <a class="navbar-brand logo" href="index.php"><img src="assets/images/rightsoftlogo.png" width="200" height="200" alt="logo"></a>                      
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="index.php">ABOUT US</a></li>                    
            <li><a href="index.php">COURSES</a></li> 
            <li><a href="index.php">PLACEMENTS</a></li>
            <li><a href="index.php">TESTIMONIALS</a></li>           
            <li><a href="registration.php">REGISTRATION</a></li>      
            <li><a href="index.php">CONTACT US</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->
               
      </div>          
    </nav> 
  </section>
  <!-- End menu section -->
  <!-- Start blog banner section -->
  
  <!-- End blog banner section -->

  <!-- Start blog section -->
  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-area">
            <div class="row">
              <div class="col-lg-8 col-md-7 col-sm-12">
                <div class="blog-left blog-details">
                  <!-- Start single blog post -->
                  
                  <div class="blog-comment">
                    <h2>Register Here..</h2>
                    <form class="comment-form" method="post">
                      <div class="form-group">                
                        <input type="text" placeholder="Name" name="name" class="form-control">
                      </div>
                      <div class="form-group">                
                        <input type="email" placeholder="Enter Email" name="email" class="form-control">
                      </div> 
                        <div class="form-group">                
                        <input type="text" placeholder="Enter Mobile Number" name="mobile" class="form-control">
                      </div>
                        <div class="form-group">  <label>COURSE YOU INTRESTED IN?</label>              
                            <select class="form-control" name="course"><option value="0">---SELECT---</option><option value="php">PHP</option><option value="java">JAVA</option><option value=".net">.NET</option><option value="android">ANDROID</option><option value="software testing">SOFTWARE TESTING</option>
                          </select>
                      </div>
                      <button class="button button-default" data-text="REGISTER" type="submit" name="submit"><span>REGISTER</span></button>
                    <?php
                    if(isset($_POST['submit']))
                    {
                        $a=$_POST['name'];
                        $b=$_POST['email'];
                        $c=$_POST['mobile'];
                        $d=$_POST['course'];
                       $details=array("$a","$b","$c","$d");
                       $datas=  implode("\n", $details);
                       mysql_query("insert into registration(name,email,mobile,course) values('$a','$b','$c','$d')");
                       mail("anjalirightsoft@gmail.com","Registrationform",$datas);
                      echo '<script  type="text/javascript" language="javascript">';
                                     echo 'alert("You Are Successfully Registered..")';
                                     echo '</script>';
                    }
                    ?>
                    </form>
                  </div>
                  <!-- End single blog post -->                  
                </div>
              </div>
              <div class="col-lg-4 col-md-5 col-sm-12">
                <aside class="blog-right">
                  <!-- Start Sidebar Single widget -->
                  
                  <!-- End Sidebar Single widget -->
                  <!-- Start Sidebar Single widget -->
                  
                  <!-- End Sidebar Single widget -->
                  <!-- Start Sidebar Single widget -->
                  <div class="single-widget">
                    <h2>COURSES</h2>
                    <div class="popular-post-widget">
                      <div class="media">
                          <div class="media-left">
                            <a href="">
                                <img class="media-object" src="assets/images/php.png" alt="img" width="100" height="75">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="">
                              <img class="media-object" src="assets/images/java.jpg" alt="img" width="100" height="75">
                          </a>
                          </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="">
                              <img class="media-object" src="assets/images/Dot-Net-Technology.jpg" alt="img" width="100" height="75">
                          </a>
                        </div>
                        <div class="media-body">
                          <a href="">
                              <img class="media-object" src="assets/images/testing.png" alt="img" width="100" height="75">
                          </a>
                        </div>
                      </div>
                      <div class="media">
                        <div class="media-left">
                          <a href="">
                              <img class="media-object" src="assets/images/android-logo.jpg" alt="img" width="100" height="75">
                          </a>
                        </div>
                        <div class="media-body">
                          <a href="">
                              <img class="media-object" src="assets/images/codeigniter.jpg" alt="img" width="100" height="70">
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Sidebar Single widget -->
                  <!-- Start Sidebar Single widget -->
                  
                  <!-- End Sidebar Single widget -->
                  <!-- Start Sidebar Single widget -->
                  
                  <!-- End Sidebar Single widget -->
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End blog section -->

  <!-- Start Footer -->    
  
  <!-- End Footer -->
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 

  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
  </body>
</html>