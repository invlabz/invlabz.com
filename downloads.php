<?php if(!isset($_SESSION)) 
     { 
         session_start(); 
     } ?>

<style type="text/css">

.margin_top{
    margin-top: 70px ;
}

    li{

        list-style: none!important;

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

</style>

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

    <style>

        body,

        html {

            height: 100%;

            margin: 0;

            font-family: Arial, Helvetica, sans-serif;

        }

        .download_anmi {
            -webkit-animation: imageChangedownload 2s linear 0.01s infinite;
    animation: imageChangedownload 2s linear 0.01s infinite;
        }

        .hero-image {

            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("./assets/img/ChemLab.jpg");

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

            font-size: 50px;

        }

        

        .avatar {

            vertical-align: middle;

            width: 850px;

            height: 300px;

            margin: 10%;

        }

        

        * {

            box-sizing: border-box;

        }

        /* Create two equal columns that floats next to each other */

        

        .column {

            float: left;

            width: 50%;

            padding: 10px;

            height: 300px;

            /* Should be removed. Only for demonstration */

        }

        /* Clear floats after the columns */

        

        .row:after {

            content: "";

            display: table;

            clear: both;

        }

        

        .ml2 {

            font-weight: 900;

            font-size: 5.5em;

            text-shadow: 2px 2px #ff7701;

        }

        

        .ml2 .letter {

            display: inline-block;

            line-height: 1em;

        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */

        

        @media screen and (max-width: 600px) {

            .column {

                width: 100%;

            }

            .hero-image {

                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/assets/img/ChemLab.jpg");

                height: 33%;

                background-position: center;

                background-repeat: no-repeat;

                background-size: cover;

                position: relative;

            }

            .hero-text {

                text-align: center;

                position: absolute;

                top: 75%;

                left: 50%;

                transform: translate(-50%, -50%);

                color: white;

                font-size: 20px

            }

            .avatar {

                vertical-align: middle;

                width: 850px;

                height: auto;

                margin: 0%;

            }

        }

    </style>





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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

        <div class="container-fluid">

            <a class="navbar-brand" href="/index.php">

                <img src="assets/img/logo1.png" class="img-fluid" />

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

          </button>

           
            <!-- navbar included here -->

           <?php require 'navbar.php';?>
           <!-- ./navbar -->

        </div>

    </nav>



    <div class="hero-image mt-5">

        <div class="hero-text">

            <h1>Downloads</h1>



        </div>

    </div>

   

<!--body content goes here-->


<!-- download option for phylab -->



<div class="container margin_top">

    <div class="section-title ">

                <h2 class="mb-2 ">Access PHYLAB On Multple Platforms</h2>

              

            </div>
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-features-box">
<div class="icon">
<i class='bx bxl-windows download_anmi'></i>
</div>
<h3><a href="https://github.com/pamrulla/phylab_supportfiles/releases/latest/download/PhyLabSetup.exe">Download for windows</a></h3>
<p>Use PHYLAB on your windows desktop of laptop</p>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-features-box">
<div class="icon">
<img class="bx download_anmi" src="/assets/img/browser_icon.png">
</div>
<h3><a href="https://www.phylab.co.in/webgl">Use in web browser</a></h3>
<p>Access PHYLAB in your browser Chrome or FireFox or Edge or Safari</p>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-features-box">
<div class="icon">
<i class='bx bxl-play-store download_anmi' ></i></div>
<h3><a href="https://play.google.com/store/apps/details?id=com.Amrulla.PhyLab">Android</a></h3>
<p>Access PHYLAB on your android mobile phone</p>
</div>
</div>


</div>
</div>


<!-- download optin for chem lab -->


<div class="container margin_top">

    <div class="section-title ">

                <h2 class="mb-2 ">Access CHEMLAB On Multple Platforms</h2>

              

            </div>
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-features-box">
<div class="icon">
<i class='bx bxl-windows download_anmi'></i>
</div>
<h3><a href="https://github.com/pamrulla/phylab_supportfiles/releases/latest/download/ChemLabSetup.exe">Download for windows</a></h3>
<p>Use INVLABZ on your windows desktop of laptop</p>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-features-box">
<div class="icon">
<img class="bx download_anmi" src="/assets/img/browser_icon.png">
</div>
<h3><a href="https://www.phylab.co.in/webgl">Use in web browser</a></h3>
<p>Access INVLABZ in your browser Chrome or FireFox or Edge or Safari</p>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-features-box">
<div class="icon">
<i class='bx bxl-play-store download_anmi' ></i></div>
<h3><a href="https://play.google.com/store/apps/details?id=com.invlabz.ChemLab">Android</a></h3>
<p>Access INVLABZ on your android mobile phone</p>
</div>
</div>


</div>
</div>






<!--  -->


<section class="video-presentation-area ptb-100 " style="background-color: #fff;">

        <div class="container ">

            <div class="section-title ">

                <h2>Why choose us to watch this video know more</h2>

            </div>



            <div class="row">

                

                <div class="col-md-6 col-10"> <div class="video-box "><img src="assets/img/video-bg.jpeg " class="main-image " alt="image "><a href="#" class="video-btn popup-youtube "><i class="bx bx-play "></i></a>

                <div class="shape1 "><img src="assets/img/shape/1.png " alt="image "></div>

                <div class="shape2 "><img src="assets/img/shape/2.png " alt="image "></div>

                <div class="shape3 "><img src="assets/img/shape/3.png " alt="image "></div>

                <div class="shape4 "><img src="assets/img/shape/4.png " alt="image "></div>

                <div class="shape5 "><img src="assets/img/shape/5.png " alt="image "></div>

                <div class="shape6 "><img src="assets/img/shape/6.png " alt="image "></div>

            </div></div>



            <div class="col-lg-5 col-md-5 ml-auto ">

                        <div class="overview-content pl-3 ">

                            <h3>Build a better future, enroll to INVLABZ



 </h3>

                            <p>The future of students is now. Time gone is time wasted. Never miss an opportunity.  With us you can build a bright tomorrow. Know your worth, know your potential. A platform where you can perform, explore, create and innovate. We will give you the materials and you will be the creator. </p>

                            <ul>

                                <li><i class="bx bx-badge-check"></i>Real time interactive simulations.  </li>

                                <li><i class="bx bx-badge-check"></i>Concepts explained using the same simulations.</li>

                                <li><i class="bx bx-badge-check"></i>Learn not just read and memorize. </li>

                                <li><i class="bx bx-badge-check"></i>Weekly performance report.  </li>



                                 <li><i class="bx bx-badge-check"></i>Suggestions and guidance.  </li>



                                

                            </ul><a href="http://saumya.agumentikgroup.com/contact.html " class="default-btn  "><i class="bx bxs-arrow-to-right"></i>Read More <span></span></a></div>

                    </div>

            </div>

           

            <div class="funfacts-inner">

                <div class="row">

                    <div class="col-lg-3 col-12 col-sm-6">

                        <div class="single-funfacts funfact-style-two wow fadeInLeft" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;"><i class="bx bx-smile"></i>

                            <h3><span class="odometer odometer-auto-theme" data-count="850"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span></span></span></span></div></span><span class="sign-icon">+</span></h3>

                        <p>Satisfied Client</p>

                    </div>

                </div>

                <div class="col-lg-3 col-12 ">

                    <div class="single-funfacts funfact-style-two wow fadeInLeft" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;"><i class="bx bxs-star"></i>

                        <h3><span class="odometer odometer-auto-theme" data-count="850"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span></span></span></span></div></span><span class="sign-icon">+</span></h3>

                    <p>Appreciation</p>

                </div>

            </div>

            <div class="col-lg-3 col-12">

                <div class="single-funfacts funfact-style-two wow fadeInLeft" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;"><i class="bx bx-time-five"></i>

                    <h3><span class="odometer odometer-auto-theme" data-count="120"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span></div></span><span class="sign-icon">K</span></h3>

                <p>Response Time</p>

            </div>

        </div>

        <div class="col-lg-3 col-12 wow fadeInLeft" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">

            <div class="single-funfacts funfact-style-two"><i class="bx bx-data"></i>

                <h3><span class="odometer odometer-auto-theme" data-count="100"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span></span></span></span></div></span><span class="sign-icon">M</span></h3>

            <p>Data Entry</p>

        </div>

        </div>

        </div>

        </div>

        <div class="contact-cta-box mwidth-1000 wow fadeInUp   animated" data-wow-delay=".8s " style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">

            <h3>Have any question about us?</h3>

            <p>Don't hesitate to contact us.</p>

            <router-link to="/contact " class="default-btn "><i class="bx bxs-edit-alt "></i>Contact Us <span></span></router-link>

        </div>

        </div>

        <div class="shape-map1 "><img src="assets/img/map1.png " alt="image "></div>

        <div class="shape7 "><img src="assets/img/shape/7.png " alt="image "></div>

        <div class="shape8 "><img src="assets/img/shape/8.png " alt="image "></div>

        <div class="shape9 "><img src="assets/img/shape/9.png " alt="image "></div>

    </section>


<!--  -->










<!--body content end here-->




<?php 



// include($_SERVER['DOCUMENT_ROOT']."/connection.php");
include("connection.php");



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



    <script type="text/javascript">

        // Wrap every letter in a span

        var textWrapper = document.querySelector('.ml2');

        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");



        anime.timeline({

                loop: true

            })

            .add({

                targets: '.ml2 .letter',

                scale: [4, 1],

                opacity: [0, 1],

                translateZ: 0,

                easing: "easeOutExpo",

                duration: 950,

                delay: (el, i) => 70 * i

            }).add({

                targets: '.ml2',

                opacity: 0,

                duration: 1000,

                easing: "easeOutExpo",

                delay: 1000

            });

    </script>


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




    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/popper.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/jquery.appear.min.js"></script>

    <script src="assets/js/odometer.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/jquery.meanmenu.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/conversation.js"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>


<!--     <script src="assets/js/particles.min.js"></script>

    <script src="assets/js/coustom-particles.js"></script> -->

    <script src="assets/js/main.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!--

         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

         -->

</body>



</html>

<!-- GetButton.io widget -->







<script type="text/javascript">

    (function () {

        var options = {

            whatsapp: "+917893489989", // WhatsApp number

            call: "+917893489989", // Call phone number

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

<style>

.bx {

    font-family: 'boxicons'!important;

    font-weight: normal;

    font-style: normal;

    font-variant: normal;

    line-height: 2;

    display: inline-block;

    text-transform: none;

    speak: none;

    -webkit-font-smoothing: antialiased;

    -moz-osx-font-smoothing: grayscale;

}


.single-features-box .icon img {
    position: absolute;
    left: 0;
    right: 0;
    margin: 0 auto;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}


@-webkit-keyframes imageChangedownload {
    0% {
        opacity: 1
    }
    75% {
        opacity: 0
    }
    100% {
        opacity: 1
    }
}

@keyframes imageChangedownload {
    0% {
        opacity: 1
    }
    75% {
        opacity: 0
    }
    100% {
        opacity: 1
    }
}



nav.navbar.navbar-expand-lg.navbar-dark.bg-dark.fixed-top {

    border-bottom: 2px solid #ff7701;

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