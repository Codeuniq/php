<!DOCTYPE html>
<?php
  include('Connection.php');
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CodeUniq Vlogs</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../blog/css/bootstrap.css">
  <link rel="stylesheet" href="../blog/vendors/linericon/style.css">
  <link rel="stylesheet" href="../blog/css/font-awesome.min.css">
  <link rel="stylesheet" href="../blog/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="../blog/css/magnific-popup.css">
  <link rel="stylesheet" href="../blog/vendors/nice-select/css/nice-select.css">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../blog/css/style.css">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: CodeUniq
    Theme URL: https://bootstrapmade.com/CodeUniq-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">CodeUniq</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="../img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="../index.html#intro">Home</a></li>
          <li><a href="../index.html#about">About Us</a></li>
          <!-- <li><a href="#services">Services</a></li> -->
          <li><a href="../index.html#portfolio">Portfolio</a></li>
          <li><a href="../index.html#team">Team</a></li>
          <li class="menu-has-children"><a href="../index.html#services">Services</a>
            <ul>
              <li><a href="../android.html">Android App</a></li>
              <li><a href="../webdesigning.html">Web Designing</a></li>
              <li><a href="../marketing.html">Digital Marketing</a></li>
              <li><a href="../vlogs">Video Bloging</a></li>
              <li><a href="../projects.html">Project Team</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="../img/intro-carousel/6.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Video Bloging</h2>
                  <p>Dedicated online vloging team to deliver cool tricks and techniques. We also share latest tech news and other valuable informations.</p>
                  <a href="#services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section><!--intro-->

  <main id="main">

    <!-- #services -->
    <section id="services">
        <header class="section-header wow fadeInUp">
          <h3>VIDEO BLOGING</h3>
        </header>
      <BR>
    </section>
    <!-- #services -->


    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area section_gap_top" style="margin-top: -200px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="../posts/cat/cat-10.jpeg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="vlogtest.html"><h5>Technology</h5></a>
                                <div class="border_line"></div>
                                <p>Update Technolgy together</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="../posts/cat/cat-2.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="vlogtest.html"><h5>Earnings</h5></a>
                                <div class="border_line"></div>
                                <p>Earn from home </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="../posts/cat/cat-3.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="vlogtest.html"><h5>Programming</h5></a>
                                <div class="border_line"></div>
                                <p>Be good in Programming</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->


    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">

                      <?php
    $query=mysqli_query($con,"select * from `vlogs` ORDER BY `Video_Count` DESC ");
    while($row=mysqli_fetch_array($query)){
      ?>

                        <article class='row blog_item'>
                            <div class='col-md-3'>
                                <div class='blog_info text-right'>
                                    <div class='post_tag'>
                                        <a href="#"><?php echo $row['Playlist']; ?></a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#"><?php echo $row['Vloger']; ?><i class="lnr lnr-user"></i></a></li>
                                        <li><a href="#"><?php echo $row['Date']; ?><i class="lnr lnr-calendar-full"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="../posts/<?php echo $row['Thumbnail']; ?>" alt="">
                                    <div class="blog_details">
                                        <a href="single-blog.php?id=<?php echo $row['Video_Id']; ?>"><h2><?php echo $row['Heading']; ?></h2></a> 
                                        <p><?php echo $row['Title']; ?> <br> Powered by Codeuniq</p>
                                        <a href="single-blog.php?id=<?php echo $row['Video_Id']; ?>" class="primary_btn"><span>View More</span></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                      <?php
                          }
                      ?>
                        
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                        
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
                            <?php
                            $query=mysqli_query($con,"select * from `vlogs` ORDER BY `Views` DESC ");
                            while($row=mysqli_fetch_array($query)){
                            ?>
                            <div class="media post_item">
                                <img src="../posts/ico_<?php echo $row['Thumbnail']; ?>" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.php?id=<?php echo $row['Video_Id']; ?>"><h3><?php echo $row['Heading']; ?></h3></a>
                                    <p><?php echo $row['Date']; ?></p>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="../img/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Post Catgories</h4>
                            <ul class="list cat-list">

                            <?php
                            $query=mysqli_query($con,"select * from `Playlist` ORDER BY `Count` DESC ");
                            while($row=mysqli_fetch_array($query)){
                            ?>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p><?php echo $row['Name']; ?></p>
                                        <p><?php echo $row['Count']; ?></p>
                                    </a>
                                </li>

                            <?php
                            }
                            ?>
                                            
                            </ul>
                            <div class="br"></div>
                        </aside>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address><b style="color: black;" >CodeUniq IT Solutions</b> <br>College of Engineering vadakara<br>Kozhikode,Kerala,India -673568</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+917559922829">+91 75599 22829</a><br>
                 <a href="tel:+918139042819">+91 81390 42819</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:codeuniqprojects@gmail.com">codeuniqprojects@gmail.com</a></p>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3 style="color: white;">CodeUniq</h3>
            <p>CodeUniq IT Solutions is an easy accessible hub for IT services and solutions. We have expert IT professionals with experience in providing and maintaining high quality IT services for business firms and corporate entities. We keep highest quality standards and blend the latest innovations in our software development projects.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="../index.html">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="../index.html#about">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="../index.html#services">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              <b style="color: white;">CodeUniq Pvt Ltd. </b><br>
              College of Engineering Vadakara<br>
              Vadakara,Kozhikode <br>
              Kerala,India - 673568 <br>
              <strong>Phone 1 : </strong> +91 75599 22829<br>
              <strong>Phone 2 : </strong> +91 81390 42819<br>
              <strong>Email:</strong> codeuniqprojects@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/CodUniq/" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/CodeUniq-114912996586353/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/codeuniqprojects/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCPdUQF0fLsrmcqENU6-Biew?view_as=subscriber" class="google-plus"><i class="fa fa-youtube"></i></a>
              <a href="https://www.linkedin.com/in/code-uniq-a8311b196/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>To get notified on latest update subscribe our Chanel.</p>
            <!--
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          -->
          <a target="_blank" href="https://www.youtube.com/channel/UCPdUQF0fLsrmcqENU6-Biew" > <BUTTON style="background-color:#18d26e; color: white; size: 1.5em; border: white; width: 100px; height: 30px;" >Subscribe </BUTTON> </a>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>CodeUniq IT solutions</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=CodeUniq
        -->
        <!-- Designed by <a href="#">CodeUniq IT solutions</a> -->
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
   <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib/isotope/isotope.pkgd.min.js"></script>
  <script src="../lib/lightbox/js/lightbox.min.js"></script>
  <script src="../lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
</html>