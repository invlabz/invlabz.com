<?php session_start(); ?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <link href="" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <title>INV Labz</title>
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/boxicons.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/odometer.min.css">
      <link rel="stylesheet" href="assets/css/meanmenu.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/responsive.css">
      <link rel="stylesheet" href="assets/css/muhStyle.css">
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
         />
   </head>
   <body>
      <div class="preloader-area">
         <div class="spinner">
            <div class="inner">
               <div class="disc"></div>
               <div class="disc"></div>
               <div class="disc"></div>
            </div>
         </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
         <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
            <img src="assets/img/logo1.png" class="img-fluid" />
            </a>
            <!-- header & navbar end here  -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- navbar included here -->
            <?php
               require 'navbar.php';
               ?>
            <!-- ./navbar -->
         </div>
      </nav>
      <div class="page-title-area">
         <div class="container">
            <div class="page-title-content">
               <h2>Blog Details</h2>
               <p>News and Insights</p>
            </div>
         </div>
      </div>
      <?php 
         include($_SERVER['DOCUMENT_ROOT']."/connection.php");
         
         	$id = $_GET['id'];
         
             $fetchqry = "SELECT * FROM `blog` WHERE id='$id'"; 
         
             $result=mysqli_query($connection,$fetchqry);
         
             $num=mysqli_num_rows($result);
         
             if($num > 0){
         
             while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
         
         
         
         
         
         ?>
      <section class="blog-details-area ptb-100">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-12">
                  <div class="blog-details-desc">
                     <div class="article-image">
                        <img src="assets/img/blog-image/1.jpg" alt="image">
                     </div>
                     <div class="article-content">
                        <div class="entry-meta">
                           <ul>
                              <li><i class="bx bx-time"></i> <a ><?php echo $row['date']; ?></a></li>
                              <li><i class="bx bx-user"></i> <a ><?php echo $row['author']; ?></a></li>
                           </ul>
                        </div>
                        <h3><?php echo $row['title']; ?></h3>
                        <p><?php echo $row['content']; ?></p>
                     </div>
               <!--  -->
                  </div>
               </div> <?php
         }
         
         }
         
         ?>


         <?php

               include ($_SERVER['DOCUMENT_ROOT'] . "/Admin/connection.php");

                 $query = "SELECT * FROM blog ORDER BY RAND() ASC LIMIT 3 ";

                $query_run = mysqli_query($connection, $query);

                

            ?>



               <div class="col-lg-4 col-md-12">
                  <aside class="widget-area" id="secondary">
                    
                     <section class="widget widget_spacle_posts_thumb">
                        <h3 class="widget-title">Latest Posts</h3>

                             <?php

                if(mysqli_num_rows($query_run) > 0)        

                {

                    while($row = mysqli_fetch_assoc($query_run))

                    {

                       ?>
                        <article class="item">
                           <a href="/blog-single.php?id=<?php echo $row['id']; ?>" class="thumb">
                           <span class="fullimage cover bg1" role="img"></span>
                           </a>
                           <div class="info">
                              <time><?php echo $row['date']; ?></time>
                              <h4 class="title usmall"><a href="/blog-single.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h4>
                           </div>
                           <div class="clear"></div>
                        </article>
                     
                       <?php

                    } 

                }

                else {

                    echo "No Record Found";

                }

                ?>
                     </section>
                   
                    
                  </aside>
               </div>
            </div>
         </div>
      </section>
     
      <?php 
         include($_SERVER['DOCUMENT_ROOT']."/connection.php");
         
         
         
             $fetchqry = "SELECT * FROM `contact_details` ORDER BY id ASC"; 
         
             $result=mysqli_query($connection,$fetchqry);
         
             $num=mysqli_num_rows($result);
         
             if($num > 0){
         
             while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
         
         
         
         
         
         ?>
      <footer class="footer-area ">
         <div class="divider "></div>
         <div class="container ">
            <div class="row ">
               <div class="col-lg-5 col-md-6 col-sm-6 ">
                  <div class="single-footer-widget ">
                     <div class="logo ">
                        <a href="index.php "><img src="assets/img/logo1.png"></a>
                     </div>
                     <p>“Not just learn for today or tomorrow; <br>lean for the future”.
                     </p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-8 ">
                  <div class="single-footer-widget ">
                     <h3>Useful links</h3>
                     <ul class="services-list ">
                        <li><a href="/index.php ">Home</a></li>
                        <li><a href="/about.php ">About Us</a></li>
                        <li><a href="/contact.php">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-8 ">
                  <div class="single-footer-widget ">
                     <h3>Contact Info</h3>
                     <ul class="footer-contact-info ">
                        <li>Location: <a href="https://goo.gl/maps/MQ78iGP5g9VgZcJ38 " target="_blank "><?php echo $row['address'];?></a></li>
                        <li>Email: <?php echo $row['email'];?></li>
                        <li>Phone: +91 <?php echo $row['pnumber'];?></li>
                     </ul>
                     <ul class="social ">
                        <li><a href="<?php echo $row['fb'];?>" target="_blank "><i class="bx bxl-facebook "></i></a></li>
                        <li><a href="<?php echo $row['twitter'];?> " target="_blank "><i class="bx bxl-twitter "></i></a></li>
                        <li><a href="<?php echo $row['link'];?>" target="_blank "><i class="bx bxl-linkedin "></i></a></li>
                        <li><a href="<?php echo $row['insta'];?>" target="_blank "><i class="bx bxl-instagram "></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright-area ">
               <p>Copyright @2021 INVLABZ Technologies Pvt Ltd. All Rights Reserved || powered by <a href="https://agumentik.com/" rel="noopener" target="_blank">Agumentik Software Private Limited</a></p>
            </div>
         </div>
      </footer>
      <?php
         }
         
         }
         
         ?>
      <div class="go-top "><i class='bx bx-chevron-up'></i></div>
      <script>
         function myFunction() {
         
             var x = document.getElementById("navbar");
         
             if (x.className === "navbar") {
         
                 x.className += " responsive";
         
             } else {
         
                 x.className = "topnav";
         
             }
         
         }
         
      </script>
      <!-- scripts -->
      <script src="../particles.js"></script>
      <script src="js/app.js"></script>
      <!-- stats.js -->
      <script src="js/lib/stats.js"></script>
      <script>
         var count_particles, stats, update;
         
         stats = new Stats;
         
         stats.setMode(0);
         
         stats.domElement.style.position = 'absolute';
         
         stats.domElement.style.left = '0px';
         
         stats.domElement.style.top = '0px';
         
         document.body.appendChild(stats.domElement);
         
         count_particles = document.querySelector('.js-count-particles');
         
         update = function() {
         
             stats.begin();
         
             stats.end();
         
             if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
         
                 count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
         
             }
         
             requestAnimationFrame(update);
         
         };
         
         requestAnimationFrame(update);
         
      </script>
      <script src="assets/js/jquery.min.js "></script>
      <script src="assets/js/popper.min.js "></script>
      <script src="assets/js/bootstrap.min.js "></script>
      <script src="assets/js/jquery.magnific-popup.min.js "></script>
      <script src="assets/js/jquery.appear.min.js "></script>
      <script src="assets/js/odometer.min.js "></script>
      <script src="assets/js/owl.carousel.min.js "></script>
      <script src="assets/js/jquery.meanmenu.js "></script>
      <script src="assets/js/wow.min.js "></script>
      <script src="assets/js/conversation.js "></script>
      <script src="assets/js/jquery.ajaxchimp.min.js "></script>
      <script src="assets/js/form-validator.min.js "></script>
      <script src="assets/js/contact-form-script.js "></script>
      <script src="assets/js/particles.min.js "></script>
      <script src="assets/js/coustom-particles.js "></script>
      <script src="assets/js/main.js "></script>
      <!-- Optional JavaScript;
         choose one of the two! -->
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js " integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW " crossorigin="anonymous "></script>
   </body>
</html>
<style type="text/css">
   li{
   list-style: none!important;
   }
   section.margin-top {
   margin-top: 120px;
   }
   .hero-image {
   background-image: url("./assets/img/contactus.jpeg");
   height: 50%;
   background-position: center;
   background-repeat: no-repeat;
   background-size: cover;
   position: relative;
   }
   .hero-text {
   text-align: center;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   color: white;
   }
   .nav-item a{
   color:#ff7701!important;
   /color:#fff!important;/
   font-weight: bold!important;
   font-size: 18px!important;
   text-transform: uppercase!important;
   }
   .carousel-caption{
   position: absolute;
   left: !important;
   top: 200!important;
   margin-top: 100!;
   }
   .features-box-one{
   height: 330px!important;
   text-align: justify-all;
   }
</style>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
   
   
   
       $('.as').slick({
   
         dots: true,
   
         infinite: true,
   
         autoplay: true,
   
         autoplaySpeed: 1000,
   
         pauseOnFocus: true,
   
         pauseOnHover: true,
   
         pauseOnDotsHover: true,
   
         slidesToShow: 3,
   
         slidesToScroll: 1,
   
   
   
         responsive: [
   
       
   
           {
   
            breakpoint: 991,
   
            settings: {
   
              slidesToShow: 1,
   
              slidesToScroll: 1
   
            }
   
           },
   
          {
   
            breakpoint: 700,
   
            settings: {
   
              slidesToShow: 1,
   
              slidesToScroll: 1
   
            }
   
          },
   
          {
   
            breakpoint: 480,
   
            settings: {
   
              slidesToShow: 1,
   
              slidesToScroll: 1
   
            }
   
          }
   
          // You can unslick at a given breakpoint now by adding:
   
          // settings: "unslick"
   
          // instead of a settings object
   
        ]
   
      
   
       });
   
      
   
   
   
     
   
       $('.as').slick({
   
         dots: true,
   
         infinite: true,
   
         autoplay: true,
   
         autoplaySpeed: 1000,
   
         pauseOnFocus: false,
   
         pauseOnHover: false,
   
         pauseOnDotsHover: false,
   
         slidesToShow: 1,
   
         slidesToScroll: 1,
   
         fade: true,
   
         cssEase: 'linear'
   
       });
   
     
   
     });
   
   
   
   
   
   
   
   
   
   
   
   
   
    
</script>
<script type="text/javascript">
   $(document).ready(function() {
   
   
   
       $('.bs').slick({
   
         dots: true,
   
         infinite: true,
   
         autoplay: true,
   
         autoplaySpeed: 1000,
   
         pauseOnFocus: false,
   
         pauseOnHover: false,
   
         pauseOnDotsHover: false,
   
         slidesToShow: 1,
   
         slidesToScroll: 1,
   
   
   
         responsive: [
   
       
   
           {
   
            breakpoint: 991,
   
            settings: {
   
              slidesToShow: 1,
   
              slidesToScroll: 1
   
            }
   
           },
   
          {
   
            breakpoint: 700,
   
            settings: {
   
              slidesToShow: 1,
   
              slidesToScroll: 1
   
            }
   
          },
   
          {
   
            breakpoint: 480,
   
            settings: {
   
              slidesToShow: 1,
   
              slidesToScroll: 1
   
            }
   
          }
   
          // You can unslick at a given breakpoint now by adding:
   
          // settings: "unslick"
   
          // instead of a settings object
   
        ]
   
      
   
       });
   
      
   
   
   
     
   
       $('.bs').slick({
   
         dots: true,
   
         infinite: true,
   
         autoplay: true,
   
         autoplaySpeed: 1000,
   
         pauseOnFocus: false,
   
         pauseOnHover: false,
   
         pauseOnDotsHover: false,
   
         slidesToShow: 1,
   
         slidesToScroll: 1,
   
         fade: true,
   
         cssEase: 'linear'
   
       });
   
     
   
     });
   
   
   
   
   
   
   
   
   
   
   
   
   
    
</script>
<style type="text/css">
   --------------------------------------------------------------
   # Frequently Asked Questions
   --------------------------------------------------------------
   .faq .faq-list {
   }
   .faq .faq-list ul {
   padding: 0;
   list-style: none;
   }
   .faq .faq-list li + li {
   margin-top: 15px;
   }
   .faq .faq-list li {
   padding: 20px;
   background: #ff7701;
   border-radius: 4px;
   position: relative;
   }
   .faq .faq-list a {
   display: block;
   position: relative;
   font-family: "Poppins", sans-serif;
   font-size: 16px;
   line-height: 24px;
   font-weight: 500;
   padding: 0 30px;
   outline: none;
   }
   .faq .faq-list .icon-help {
   font-size: 24px;
   position: absolute;
   right: 0;
   left: 20px;
   color: lightgray;
   }
   .faq .faq-list .icon-show, .faq .faq-list .icon-close {
   font-size: 24px;
   position: absolute;
   right: 0;
   top: 0;
   }
   .faq .faq-list p {
   margin-bottom: 0;
   padding: 10px 0 0 0;
   }
   .faq .faq-list .icon-show {
   display: none;
   }
   .faq .faq-list a.collapsed {
   color: #800080;
   transition: 0.3s;
   }
   .faq .faq-list a.collapsed:hover {
   color: #ff7701;
   }
   .faq .faq-list a.collapsed .icon-show {
   display: inline-block;
   }
   .faq .faq-list a.collapsed .icon-close {
   display: none;
   }
   .single-pricing-tabl{
   height: 700px!important;}
   .it-service-content .content p {
   margin-bottom: 2px;
   }
</style>
<!-- GetButton.io widget -->
<script type="text/javascript">
   (function () {
   
       var options = {
   
           whatsapp: "+919063233996", // WhatsApp number
   
           call: "+919063233996", // Call phone number
   
           call_to_action: "Message us", // Call to action
   
           button_color: "#ff7701", // Color of button
   
           position: "left", // Position may be 'right' or 'left'
   
           order: "whatsapp,call", // Order of buttons
   
       };
   
       var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
   
       var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
   
       s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
   
       var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
   
   })();
   
</script>
<!-- /GetButton.io widget -->