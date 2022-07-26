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
    <link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
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
    <style>
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: whitesmoke;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 25px 25px;
    text-align: left;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
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

  <!-- Start header section -->  
  <header id="header">
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
            <li><a href="#about">ABOUT</a></li>  
            <li><a href="#service">SERVICES</a></li>                  
            <li><a href="#counter">COURSES</a></li>
            <li><a href="#portfolio">PLACEMENTS</a></li>
            <li><a href="#testimonial">TESTIMONIALS</a></li>           
            <li><a href="registration.php">REGISTER</a></li>      
            <li><a href="#contact">CONTACT</a></li>
          </ul>                            
        </div><!--/.nav-collapse -->
               
      </div>          
    </nav> 
  </section>
      </header>
   <?php
         $sql= mysql_query("select * from updates");
         while($ar=mysql_fetch_array($sql))
         {
            $a=$ar['id']; 
            $b=$ar['uupdate'];        
            ?>
  <marquee style="color:purple"><?php echo $b; ?> </marquee>
  <?php
         }
         ?>
    <div class="header-inner">
      <!-- Header image -->
      
      <img src="assets/images/success-goal.jpg" width="100" height="680" alt="img">
      <div class="header-overlay">
        <div class="header-content">
        <!-- Start header content slider -->
<!--        <h2 class="header-slide">WE GENERATE
          <span>MOST CREATIVE</span>
          <span>MOST Design</span>
          <span>MOST Valuable</span>
          IDEA</h2>-->
        <!-- End header content slider -->  
        <!-- Header btn area -->
<!--        <div class="header-btn-area">
          <a class="knowmore-btn" href="#">KNOW MORE</a>
          <a class="download-btn" href="#">DOWNLOAD Theme</a>
        </div>-->
      </div>
      </div>      
    </div>
  
  <!-- End header section -->

  <!-- Start menu section -->
  
  <!-- End menu section -->

  <!-- Start about section -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-area"><br><br><br>
            <div class="title-area">
              <h2 class="tittle">Welcome to <span>Right Soft Options</span></h2>
              <span class="tittle-line"></span>
              <p style="text-align:justify">Right soft options was found by a pool of experts in the field of IT and communication. We offer professional, competent training programs in demanding technologies in IT field. We never compromise on the quality of our training,which has resulted in getting the best output from our students, and thereby maintaining an excellent placement track record.

We believe that in the current competent IT job market scenario, it's not enough to just learn an overview, but need to develop true competence in new and demanding technologies, which can be achieved only through hands on practice. Our training system is designed in such a way that the students spend majority of the time in class doing structured practical exercises, projects, that enhance their confidence and competence.

We dream to be known as a socially committed organization that contributes to be advancement of the society, by means of quality education that transforms their life and career.</p>
            </div>
            <div class="welcome-content">
              <ul class="wc-table">
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-users wc-icon"></span>
                    <h4 class="wc-tittle">Academic Projects</h4>
                    <p style="text-align:justify">We offers Academic Projects in Computer related areas  for the students of B.Tech, MCA, M.Sc,B.Sc, Diploma of Computer Science / Computer Engineering / Information Technology branches  courses under the guidance of experts from academic institution and industry.</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-sellsy wc-icon"></span>
                    <h4 class="wc-tittle">Expert Trainers</h4>
                    <p style="text-align:justify">We have a team of expert trainers with rich industry experience. They are highly Qualified and self motivated people, who transfer the knowledge and support students even outside the classroom environment</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-line-chart wc-icon"></span>
                    <h4 class="wc-tittle">Live Projects</h4>
                    <p style="text-align:justify">We offers live projects according to the needs of client. </p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-bus wc-icon"></span>
                    <h4 class="wc-tittle">Good Learning Experiance</h4>
                    <p style="text-align:justify">The students will have a good learning experience from RIGHT SOFT OPTIONS. </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- End welcome area -->
        </div>
      </div>
    </div>
  </section> 
  <!-- End about section -->

  <!-- Start call to action -->
  <section id="call-to-action">
    <img src="assets/images/call-to-action-bg.png" alt="img">
    <div class="call-to-overlay">
      <div class="container">
        <div class="call-to-content wow fadeInUp">
          <h2>Wish to register on a golden oppurtunity..</h2>
          <a href="registration.php" class="button button-default" data-text="REGISTER NOW"><span>REGISTER NOW</span></a>
        </div>
      </div>
    </div> 
  </section>
  <!-- End call to action -->

  <!-- Start Team action -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-area"><br><br><br>
            <div class="title-area">
              <h2 class="tittle">WHAT WE DO</h2>
              <span class="tittle-line"></span>
              <p style="text-align:justify">With a range of digital solutions, we strive to build sophisticated web and mobile platforms through a refined process. We create purpose-driven mobile apps and websites with your success in mind.</p>
            </div>
            <div class="welcome-content">
              <ul class="wc-table">
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-gears wc-icon"></span>
                    <h4 class="wc-tittle">Web Development</h4>
                    <p style="text-align:justify">We create innovative web solutions that are visually appealing, responsive, result-oriented, and help achieve business goals.</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-mobile-phone wc-icon"></span>
                    <h4 class="wc-tittle">App Development</h4>
                    <p style="text-align:justify">We create mobile applications in hybrid technology</p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-shopping-cart wc-icon"></span>
                    <h4 class="wc-tittle">E-commerce</h4>
                    <p style="text-align:justify">With our expertise in this domain we create a user friendly and appealing ecommerce site which your customer will love to shop on. </p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-bullhorn wc-icon"></span>
                    <h4 class="wc-tittle">Digital Marketing</h4>
                    <p style="text-align:justify">We help companies attract, convert, and retain more customers through our NextGen content marketing services.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- End welcome area -->
        </div>
      </div>
    </div>
  </section>
  <!-- Start Team action -->

  <!-- Start service section -->
  <section id="service">
    <div class="container">
      <div class="row">
          <div class="col-md-12">
          <div class="service-area">
            <div class="title-area">
              <h2 class="tittle">Courses we offer</h2>
              <span class="tittle-line"></span>
            </div>
           <center> <A HREF="syllabus.php" style="color:red">CLICK HERE FOR SYLLABUS..</a></center>
            <!-- service content -->
            <div class="service-content">
             
              <ul class="service-table">
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class=""></span>
                    <img src="assets/images/php.png" width="220" height="100">
<!--                    <h4 class="service-title">UX Design</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>-->
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class=""></span>
                    <img src="assets/images/java.jpg" width="220" height="100">
<!--                    <h4 class="service-title">Strategy</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>-->
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                 <div class="single-service wow slideInUp">
                    <span class=""></span>
                    <img src="assets/images/android-logo.jpg" width="220" height="100">
<!--                    <h4 class="service-title">UI Design</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>-->
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class=""></span>
                    <img src="assets/images/Dot-Net-Technology.jpg" width="220" height="100">
<!--                    <h4 class="service-title">Analystic</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>-->
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class=""></span>
                    <img src="assets/images/codeigniter.jpg" width="220" height="100">
<!--                    <h4 class="service-title">Usibility</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>-->
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class=""></span>
                    <img src="assets/images/wordpress.png" width="220" height="100">
<!--                    <h4 class="service-title">Business solution</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>-->
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class=""></span>
                    <img src="assets/images/html-css-javascript-and-jquery.png" width="220" height="100">
<!--                    <h4 class="service-title">Creative concept</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>-->
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class=""></span>
                    <img src="assets/images/Software_Testing-300x167.jpg" width="220" height="100">
<!--                    <h4 class="service-title">Support</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>-->
                  </div>
                </li>
              </ul>
            </div>
<!--            <marquee onmouseover="this.stop();" onmouseout="this.start();"><a href="syllubus.php"><img src="assets/images/syl.png" width="200" height="50"></a></marquee>-->

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service section -->

  <!-- Start Portfolio section -->
  
 <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="portfolio-area">
            <div class="title-area">
              <h2 class="tittle">Our Alumni & Alumnae</h2>
              </div>
            <!-- Portfolio content -->
            <div class="portfolio-content">
                <!-- portfolio menu -->

               <!-- Portfolio container -->
               <div id="mixit-container" class="portfolio-container">
                                      <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/05.jpg" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="user/assets/images/05.jpg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Anseb K A</h4>
                          <span>Software Tester</span>
                        </div>
                     </div>
                   </div>
                 </div>
                                      <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/chithra.jpg" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/chithra.jpg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>chithra Viswambharan</h4>
                          <span>PHP Developer</span>
                        </div>
                     </div>
                   </div>
                 </div>
                                      <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/20161031_113415.jpg" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/20161031_113415.jpg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Akhil Davis</h4>
                          <span>Java Developer</span>
                        </div>
                     </div>
                   </div>
                 </div>
                                      <!--<div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/ANU PHOTO.jpg'" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/ANU PHOTO.jpg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Anu K B</h4>
                          <span>PHP Developer</span>
                        </div>
                     </div>
                   </div>
                 </div>
                                      <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/downloadfile.jpeg'" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/downloadfile.jpeg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Athira Ramakrishnan</h4>
                          <span>Software Tester</span>
                        </div>
                     </div>
                   </div>
                 </div>-->
                                      <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/image01.jpg" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/image01.jpg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Jacob Abraham</h4>
                          <span>Software Tester</span>
                        </div>
                     </div>
                   </div>
                 </div>
                                      <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/IMG_20160217_160532.JPG" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/IMG_20160217_160532.JPG"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Elby Samson</h4>
                          <span>Android Developer</span>
                        </div>
                     </div>
                   </div>
                 </div>
                  <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/defna.jpeg" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/defna.jpeg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Defna</h4>
                          <span>PHP Developer</span>
                        </div>
                     </div>
                   </div>
                 </div>
                    <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/1009 (2).jpg" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/1009 (2).jpg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Afif C P</h4>
                          <span>Python Developer</span>
                        </div>
                     </div>
                   </div>
                 </div>

                                      <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/sarath.jpeg" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/sarath.jpeg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Sarath Mohan</h4>
                          <span>Python Developer</span>
                        </div>
                     </div>
                   </div>
                 </div>
                                      <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/fayiz.jpeg" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/fayiz.jpeg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mohammed Fayiz</h4>
                          <span>Python Developer</span>
                        </div>
                     </div>
                   </div>
                 </div>
                  <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/ansar.jpeg" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/ansar.jpeg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mohamed Ansar</h4>
                          <span>Python Developer</span>
                        </div>
                     </div>
                   </div>
                 </div>
                    <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/97801 (1).jpg" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/97801 (1).jpg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Akash</h4>
                          <span>Digital Marketing</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <!--<div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/aswin.jpeg'" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/aswin.jpeg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Ashwin</h4>
                          <span>Python Developer</span>
                        </div>
                     </div>
                   </div>
                 </div>
                                      <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/akhila_php.jpeg'" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/akhila_php.jpeg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Akhila</h4>
                          <span>PHP</span>
                        </div>
                     </div>
                   </div>
                 </div>-->

                  <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/athulya.jpeg" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/athulya.jpeg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Athulya</h4>
                          <span>Python Developer</span>
                        </div>
                     </div>
                   </div>
                 </div>
                                      <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/elizabeth_st.jpeg" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/elizabeth_st.jpeg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Elizabeth</h4>
                          <span>Software Tester</span>
                        </div>
                     </div>
                   </div>
                 </div>
                                      <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/jishnu venu.jpeg" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/jishnu venu.jpeg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Jishnu Venu</h4>
                          <span>PHP Developer</span>
                        </div>
                     </div>
                   </div>
                 </div>
                                      <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/seshma.jpeg" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/seshma.jpeg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Seshma M S</h4>
                          <span>Software Tester</span>
                        </div>
                     </div>
                   </div>
                 </div>
                   <!--<div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/ashmitha t a.jpeg" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/ashmitha t a.jpeg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Ashmitha T A</h4>
                          <span>Software Tester</span>
                        </div>
                     </div>
                   </div>
                 </div>-->
                   <div class="single-portfolio mix photography">
                   <div class="single-item">
                       <img src="assets/images/anoop.jpeg" alt="img" style="border-radius:25px;">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="assets/images/anoop.jpeg"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Anoop Shaji</h4>
                          <span>PHP Developer</span>
                        </div>
                     </div>
                   </div>
                 </div>



  </section>
  
  <!-- End Portfolio section -->

  <!-- Start counter section -->
  
  <!-- End counter section -->

  <!-- Start Pricing Table section -->
  
  <!-- End Pricing Table section -->

  <!-- Start Testimonial section -->
  <section id="testimonial">
    <img src="assets/images/testimonial-bg.jpg" alt="img">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start Testimonial area -->
            <div class="testimonial-area">
              <div class="title-area">
                <h2 class="tittle">Our Students Say About Us</h2>
                <span class="tittle-line"></span>              
              </div>
              <div class="testimonial-conten">
                <!-- Start testimonial slider -->
                <div class="testimonial-slider">
                  <!-- single slide -->
                  <div class="single-slide">
                    <p>"First of all I have to thank the trainers at Right soft options who gave me the knowledge on PHP as well as on many general things. The classes are really nice and helped me to find my interest in web based programming. I am happy to be a student of Right soft options. The projects we did along with the training gave me great confidence when I attended interviews. I work as a web developer, and I am happy to be a student of Right soft options. "</p>
                    <div class="single-testimonial">
                        <img class="testimonial-thumb" src="assets/images/05.jpg" alt="img">
                      <p>Anseb K A</p>
                      <span>Software Tesing</span>
                    </div>
                  </div>
                  <!-- single slide -->
                  <div class="single-slide">
                    <p>" I did four month professional training in PHP, Codeigniter, Wordpress and related technologies at Right Soft Options Kochi. Detailed syllabus, interactive training sessions, great trainers, excellent placement support. I believe they are one of the best for PHP and related training at Kochi. I was given placement by their placement division “ Right Human Resourses”, as soon as I completed my training. "</p>
                    <div class="single-testimonial">
                        <img class="testimonial-thumb" src="assets/images/chithra.jpg" alt="img">
                      <p>Chithra</p>
                      <span>Php Developer</span>
                    </div>
                  </div>
                  <div class="single-slide">
                    <p>"ഞാൻ php training ചെയ്തതത് RIGHT SOFT OPTIONS നിന്നാണ്.ക്‌ളാസ്സുകൾ വളരെ നന്നായിരുന്നു.ഇന്റർവ്യൂ അറ്റൻഡ് ചെയ്യാനുള്ള അറിവ്  എനിക്ക് ഇവിടുത്തെ  training കാരണം  കിട്ടി.നല്ലൊരു ജോലിയും എനിക്ക് കിട്ടി. Thanks to RIGHT SOFT OPTIONS. "</p>
                    <div class="single-testimonial">
                      <img class="testimonial-thumb" src="assets/images/IMG_20160217_160532.jpg" alt="img">
                      <p>Elby Samson</p>
                      <span>Android Developer</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <!-- End Testimonial section -->

  <!-- Start from blog section -->
  
  <!-- End from blog section -->

  <section id="client">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="client-area">
            <ul class="client-table">
                <li><img src="assets/images/html5_logo.png" alt="client logo" width="100" height="100"></li>
                <li><img src="assets/images/javascript_logo.png" alt="client logo"  width="100" height="100"></li>
                <li><img src="assets/images/jquery-logo_0.png" alt="client logo"  width="100" height="100"></li>
                <li><img src="assets/images/cSS3.jpg" alt="client logo"  width="100" height="100"></li>
                <li><img src="assets/images/ajax-logo.jpg" alt="client logo"  width="100" height="100"></li>
                <li><img src="assets/images/sql.png" alt="client logo"  width="100" height="100"></li>
                <li><img src="assets/images/testing.png" alt="client logo"  width="100" height="100"></li>
                <li><img src="assets/images/vb-header.png" alt="client logo"  width="100" height="100"></li>
              <li><img src="assets/images/mysql.png" alt="client logo"  width="100" height="100"></li>
              <li><img src="assets/images/spring1.png" alt="client logo"  width="100" height="100"></li>
              <li><img src="assets/images/wordpress.png" alt="client logo"  width="100" height="100"></li>
              <li><img src="assets/images/codeigniter.jpg" alt="client logo"  width="100" height="100"></li>  
              <li><img src="assets/images/dm.jpeg" alt="client logo"  width="100" height="100"></li>
              <li><img src="assets/images/ai.jpeg" alt="client logo"  width="100" height="100"></li>
              <li><img src="assets/images/python.png" alt="client logo"  width="100" height="100"></li>                  
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Contact section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="contact-left wow fadeInLeft">
            <h2>Contact with us</h2>
            <address class="single-address">
              <h4>Postal address:</h4>
              <p>Right Soft Options
306, Penta Tower, Opp. Kaloor Bus Station, Kaloor, Kochi-17</p>
            </address>
             <address class="single-address">
              <h4>Phone</h4>
              <p>Phone Number: 9746498640</p>
              <p>Phone Number: 9633019801</p>
            </address>
             <address class="single-address">
              <h4>E-Mail</h4>
              <p>Support: abraham@righthumanresources.com</p>
              <p>Sales: neeta@righthumanresorces.com</p>
            </address>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="contact-right wow fadeInRight">
            <h2>Send a message</h2>
            <form action="" class="contact-form" method="post">
              <div class="form-group">                
                <input type="text" class="form-control" placeholder="Name" name="name">
              </div>
              <div class="form-group">                
                <input type="email" class="form-control" placeholder="Enter Email" name="email">
              </div>              
              <div class="form-group">
                <textarea class="form-control" name="message"></textarea>
              </div>
              <button type="submit" name="submit2" data-text="SUBMIT" class="button button-default"><span>SUBMIT</span></button>
              <?php
                    if(isset($_POST['submit2']))
                    {
                        $a=$_POST['name'];
                        $b=$_POST['email'];
                        $c=$_POST['message'];
                       mysql_query("insert into message(name,email,message) values('$a','$b','$c')");
                              echo '<script  type="text/javascript" language="javascript">';
                                     echo 'alert("You Are Successfully Registered..")';
                                     echo '</script>';
                    }
                    ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->
  <!-- Start Google Map -->
  <section id="google-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.2734245949887!2d76.28881531389474!3d9.994258275877439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d51221da0c1%3A0x56d08031b2342373!2sRight+Soft+Options!5e0!3m2!1sen!2sin!4v1477394469743" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>  
  </section>
  <!-- End Google Map -->

  <!-- Start Footer -->    
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-top-area">             
             
              <div class="footer-social">
                <a class="facebook" href=""><span class="fa fa-facebook"></span></a>
                <a class="twitter" href=""><span class="fa fa-twitter"></span></a>
                <a class="google-plus" href=""><span class="fa fa-google-plus"></span></a>
                <a class="youtube" href=""><span class="fa fa-youtube"></span></a>
                <a class="linkedin" href=""><span class="fa fa-linkedin"></span></a>
                <a class="dribbble" href=""><span class="fa fa-dribbble"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>Designed by <a href="http://www.righthumanresources.com/">Right Soft Options</a></p>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- initialize jQuery Library --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
    <script>
      function openColorBox(){
        $.colorbox({iframe:true, width:"80%", height:"100%", href: "reg.php"});
      }
      
      setTimeout(openColorBox, 2000);
    </script>
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
