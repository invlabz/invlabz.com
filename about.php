<?php session_start(); ?>

<style type="text/css">



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

            <h1>About Us</h1>



        </div>

    </div>

    <div class="row" style="margin-left: 5%;margin-right: 5%;margin-bottom: 10%;">

        <div class="column" style="padding: 5%;">

            <img src="assets/img/about-img.jpg" alt="Avatar" class="avatar">

        </div>


<?php 



include($_SERVER['DOCUMENT_ROOT']."/connection.php");



    $fetchqry = "SELECT * FROM `about_aboutus` ORDER BY id ASC"; 

    $result=mysqli_query($connection,$fetchqry);

    $num=mysqli_num_rows($result);

    if($num > 0){

    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){





?>

        <div class="column" style="padding: 5%;">

            <h3 style="text-align: justify;margin-top:20%;margin-bottom: 2%;"><b>Vision</b></h3>

            <p style="text-align: justify;"> <?php echo $row['vision'];?>

                <!--<span style="color: #ff7701; font-size: 25px;"><strong>Featured by</strong></span> - Ramana krishnamurthy and Harvey Johnson.-->

            <h3 style="text-align: justify;"><b>Mission </b></h3>

            <p style="text-align: justify;margin-bottom: 8%;"> <?php echo $row['mission'];?>

                <!--<span style="color: #ff7701; font-size: 25px;"><strong>Featured by</strong></span> - Ramana krishnamurthy and Harvey Johnson.-->

            </p></p>

            





        </div>

<?php

    }

    }

    ?>

    </div>







    <div class="container-fluid" style="margin-right: 5%;background-color: #f4f6fc; padding-top: 0px;">

        <div class="section-title" style="margin-top: 12%;">

            <h2 style="padding-top:37px;">Our Team</h2>

        </div>

        <div class="row" style="margin:5%">
            <?php 
$sql = "SELECT * FROM teams ";
$result = mysqli_query($connection, $sql);
	  //$count = mysqli_num_rows($result);
	  
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>

            <div class="col-lg-3 col-md-6 col-sm-6">

                  <div class="single-team-box">

                    <div class="image">

                        <img src="assets/img/team-image/<?php echo $row['photo'];?>" alt="image">

                        <ul class="social">

                            <li><a href="<?php echo $row['fb']?>" target="_blank"><i class="bx bxl-facebook"></i></a></li>

                            <li><a href="<?php echo $row['twitter']?>" target="_blank"><i class="bx bxl-twitter"></i></a></li>

                            <li><a href="<?php echo $row['linked']?>" target="_blank"><i class="bx bxl-linkedin"></i></a></li>

                            <li><a href="<?php echo $row['insta']?>" target="_blank"><i class="bx bxl-instagram"></i></a></li>

                        </ul>

                    </div>

                    <div class="content">

                        <h3>

                        <?php echo $row['name'];?>

                      </h3>

                        <span><?php echo $row['designation']?></span>

                    </div>

                </div>

            </div>

            <!--div class="col-lg-3 col-md-6 col-sm-6">
     <div class="single-team-box">

                    <div class="image">

                        <img src="assets/img/team-image/reddy.jpg" alt="image">

                        <ul class="social">

                            <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>

                            <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>

                            <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>

                            <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>

                        </ul>

                    </div>

                    <div class="content">

                        <h3>K.V.V. Gangadhar Reddy</h3>

                        <span>Co Founder & CMO</span>

                    </div>

                </div>
           

            </div-->

            <!--div class="col-lg-3 col-md-6 col-sm-6">

                <div class="single-team-box">

                    <div class="image">

                        <img src="assets/img/team-image/sravani.jpg" alt="image">

                        <ul class="social">

                            <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>

                            <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>

                            <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>

                            <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>

                        </ul>

                    </div>

                    <div class="content">

                        <h3>Bade Sravani Kumari</h3>

                        <span>Creative Head</span>

                    </div>

                </div>

            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">

                <div class="single-team-box">

                    <div class="image">

                        <img src="assets/img/team-image/srinivas.jpg" alt="image">

                        <ul class="social">

                            <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>

                            <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>

                            <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>

                            <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>

                        </ul>

                    </div>

                    <div class="content">

                        <h3>Bade Srinivas</h3>

                        <span>Well Wisher and Advisor</span>

                    </div>

                </div>

            </div-->
            <?php
  }
            ?>

        </div>

    </div>



    <section class="feedback-area" style="margin: 10px;">

        <div class="container-fluid">

            <div class="section-title">

                <h2>What do our clients say <span>about us?</span></h2>

            </div>

            <div class="feedback-slides owl-carousel owl-theme" style="margin-right: 0px;">

                <div class="single-feedback-item">

                    <img src="assets/img/woman1.png" style="height: 100%;" alt="image">

                    <div class="feedback-desc">

                        <p>With Invlabz I understood the concepts well and fast. The video sessions were really helpful in clearing all my doubts. Invlabz gave me the confidence in myself and with that I cleared all Olympiad levels with ease.

                        </p>

                        <div class="rating">

                            <i class="bx bxs-star"></i>

                            <i class="bx bxs-star"></i>

                            <i class="bx bxs-star"></i>

                            <i class="bx bxs-star"></i>

                            <i class="bx bxs-star"></i>

                        </div>

                        <div class="client-info">

                            <h3>Sarah Taylor</h3>

                            <span>Asha school Visakhapatnam </span>

                        </div>

                    </div>

                </div>

                <div class="single-feedback-item">

                    <img src="assets/img/woman2.png" style="height: 100%;" alt="image">

                    <div class="feedback-desc">

                        <p>Invlabz has been an extremely helpful and stress free approach for my kids. Ever since I subscribed My kids totally enjoyed it.</p>

                        <div class="rating">

                            <i class="bx bxs-star"></i>

                            <i class="bx bxs-star"></i>

                            <i class="bx bxs-star"></i>

                            <i class="bx bxs-star"></i>

                            <i class="bx bxs-star"></i>

                        </div>

                        <div class="client-info">

                            <h3>Olivar Lucy</h3>

                            <span>Pragathi college Hyderabad</span>

                        </div>

                    </div>

                </div>

                <div class="single-feedback-item">

                    <img src="assets/img/man1.png" style="height: 100%;" alt="image">

                    <div class="feedback-desc">

                        <p>Asha school Visakhapatnam.</p>

                        <div class="rating">

                            <i class="bx bxs-star"></i>

                            <i class="bx bxs-star"></i>

                            <i class="bx bxs-star"></i>

                            <i class="bx bxs-star"></i>

                            <i class="bx bxs-star"></i>

                        </div>

                        <div class="client-info">

                            <h3>Steven Smith</h3>

                            <span>Usha vignan college Chennai</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>





    <section class="free-trial-area pb-5 bg-f4f5fe">

        <div class="container text-center" style="padding-top:37px;margin-top:5%;margin-bottom: 5%;">

            <h2>Book Your Lab Today</h2>

        </div>

        <div class="container-fluid">





            <div class="row" style="margin-left: 5%;margin-right: 5%;margin-bottom: 5%;">

                <div class="column">

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">

                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                        </ol>

                        <div class="carousel-inner">

                            <div class="carousel-item active">

                                <img class="d-block w-100" src="assets/img/chem-lab.jpg"  alt="First slide">

                            </div>

                            <div class="carousel-item">

                                <img class="d-block w-100" src="assets/img/ChemLab.jpg"  alt="Second slide">

                            </div>

                            <div class="carousel-item">

                                <img class="d-block w-100" src="assets/img/nvblab.jpg"  alt="Third slide">

                            </div>

                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                            <span class="sr-only">Previous</span>

                        </a>

                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

                            <span class="carousel-control-next-icon" aria-hidden="true"></span>

                            <span class="sr-only">Next</span>

                        </a>

                    </div>

                </div>

                <div class="column">

                    <div class="container text-center" style=" margin-top: 85px;">

                        <p>Get our virtual labs and learn for the future.</p>

                        <a href="/index.php#price" class="default-btn"><i class="bx bxs-hot"></i> Buy Now <span></span></a>

                    </div>



                </div>

            </div>



        </div>

        

        <div class="shape10"><img src="assets/img/shape/10.png" alt="image"></div>

        <div class="shape11"><img src="assets/img/shape/7.png" alt="image"></div>

        <div class="shape12"><img src="assets/img/shape/11.png" alt="image"></div>

        <div class="shape13"><img src="assets/img/shape/12.png" alt="image"></div>

    </section>

     <div class="contact-cta-box mwidth-1000 wow fadeInUp animated " data-wow-delay=".8s " style="margin-bottom: 37px;">

            <h3>Have any question about us?</h3>

            <p>Don't hesitate to contact us.</p>

            <a href="/contact.php " class="default-btn "><i class="bx bxs-edit-alt "></i>Contact Us <span></span></a>

        </div>

    <!--<div class="container mt-5 mb-5">

        <div class="contact-cta-box mwidth-1000 wow fadeInUp animated " data-wow-delay=".8s ">

            <h3 class="ml2" style="font-size: 30px;">Practice with our audio lessons</h3>

            <p>Our super explanatory audio files help your child learn better and faster.</p>

            <a href="/contact.html" class="default-btn "><i class="bx bxs-edit-alt "></i>Contact Us <span></span></a>

        </div>

    </div>-->

    




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

                            <li><a href="/blogs.php ">Blogs</a></li>
                            

                            <li><a href="/phylab.php ">Phylab</a></li>

                            <li><a href="/chemlab.php ">Chemlab</a></li>

                            <li><a href="/invlabz.php ">Invlabz</a></li>
                            
                            

                        
                            
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

    <script src="assets/js/particles.min.js"></script>

    <script src="assets/js/coustom-particles.js"></script>

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