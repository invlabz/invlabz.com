<?php

if(!isset($_SESSION)) 
     { 
         session_start(); 
     }

?>

<?php   ob_start(); ?>
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

    

    

    




<section class="signup-area">
<div class="row m-0">
<!-- <div class="col-lg-6 col-md-12 p-0">
<div class="signup-image">
<img src="assets/img/signup-bg.jpg" alt="image">
</div>
</div> -->
<div class="col-lg-12 col-md-12 p-0">
<div class="signup-content">
<div class="d-table">
<div class="d-table-cell">
<div class="signup-form">
<div class="logo">
<a href="index.html"><img src="assets/img/logo.png" alt="image"></a>
</div>
<h3>Login</h3>
<p>Create an account <a href="/index.php?#price">Sign up</a></p>


<!-- form submit processs -->
<?php
if(isset($_POST['submit'])) {
    
    // include ($_SERVER['DOCUMENT_ROOT'] . "/connection.php");
    include ("connection.php");

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
   

    $check = "SELECT * FROM users WHERE email='$email'";

    $check_run = mysqli_query($connection,$check);

    $num = mysqli_num_rows($check_run);
    $row = mysqli_fetch_assoc($check_run);
   
    if ($num > 0) {
        
        

            if ($email == $row['email'] && $pwd== $row['pwd']) {
               
                $_SESSION['user'] = $row['email'];
               
               ?>
               <script>
                   window.location.href = 'index.php';

               </script>
               
               <?php
                header('Location: index.php');

            }else {
                echo '<div class="error-msg">
  <i class="fa fa-times-circle"></i>
  Wrong username or password!
</div>';
            }

        
    }


else {
    echo '<div class="error-msg">
  <i class="fa fa-times-circle"></i>
  Wrong username or password!
</div>';
}
}




?>








<!-- form submit process end -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div class="form-group">
<input type="email" name="email" placeholder="Registred email address" class="form-control" required>
</div>
<div class="form-group">
<input type="password" name="pwd" placeholder="Your password" class="form-control" required>
</div>

<button type="submit" class="default-btn" name="submit"><i class="bx bx-log-in"></i>Login<span style="top: -9px; left: 133.5px;"></span></button>
<!-- <div class="connect-with-social">
<span>Or</span>
<button type="submit" class="facebook"><i class="bx bxl-facebook"></i> Connect with Facebook</button>
<button type="submit" class="google"><i class="bx bxl-google"></i> Connect with Google</button>
</div> -->
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="br_tag">


<br><br>
</div>


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

    @media(max-width: 991px) {
    	.br_tag {
    		display: none !important;
    	}
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




.info-msg,
.success-msg,
.warning-msg,
.error-msg {
  margin: 10px 0;
  padding: 10px;
  border-radius: 3px 3px 3px 3px;
}
.info-msg {
  color: #059;
  background-color: #BEF;
}
.success-msg {
  color: #270;
  background-color: #DFF2BF;
}
.warning-msg {
  color: #9F6000;
  background-color: #FEEFB3;
}
.error-msg {
  color: #D8000C;
  background-color: #FFBABA;
}

/* Just for CodePen styling - don't include if you copy paste */

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

<?php ob_end_flush(); ?>