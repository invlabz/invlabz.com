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







    <title>Sign Up | INV Labz</title>



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

<h3>Signup</h3>

<p>Already signed up? <a href="login.php">Log in</a></p>



<?php



if (isset($_POST['signup-btn'])) {
	
	include ("connection.php");

	$fname = $_POST['fname'];

	$email = $_POST['email'];

	$pwd = $_POST['pwd'];

	$phone = $_POST['phone'];

	$pname = $_POST['pname'];

	$pphone = $_POST['pphone'];

	$college_name = $_POST['college_name'];

	$plan = $_POST['plan'];

	$check = "SELECT * FROM users WHERE email='$email'";

    $check_run = mysqli_query($connection,$check);

    $num = mysqli_num_rows($check_run);

    if ($num > 0) {

    	    echo '<div class="error-msg">

            <i class="fa fa-times-circle"></i>

            Already exists an account registered with this email

            </div>';

    }


    else {
        
	$insertquery = "INSERT INTO `users` (`fname`, `email`, `pwd`, `phone`, `pname`, `pphone`, `college`, `plan`) VALUES ('$fname', '$email', '$pwd', '$phone', '$pname', '$pphone', '$college_name', '$plan')";

	$run = mysqli_query($connection,$insertquery);

	if($run) {

		if($plan == "basic") {

			 echo '<div class="success-msg">

  <i class="fa fa-times-circle"></i>

  Signup Successfully ! Redirecting ..

</div>';

 header('Refresh: 3; URL=/index.php');

		}



		if($plan == "indivisual") {

			 echo '<div class="success-msg">

  <i class="fa fa-times-circle"></i>

  Signup Successfully ! Redirecting ..

</div>';



 header('Refresh: 3; URL=/index.php');

		}



		if($plan == "combo") {

			 echo '<div class="success-msg">

  <i class="fa fa-times-circle"></i>

  Signup Successfully ! Redirecting ..

</div>';



 header('Refresh: 3; URL=/index.php');

		}

	}



	else {

		echo '<div class="error-msg">

  <i class="fa fa-times-circle"></i>

 Something Went Wrong ! Please Try Again !

</div>';

	}



	

}





}




?>

<form action="pay.php" method="post">

<div class="form-group">

<input type="text" name="fname" id="name1" placeholder="Your full name" class="form-control" required>

</div>

<div class="form-group">

<input type="Email" name="email" id="email" placeholder="Your email address" class="form-control" required>

</div>

<div class="form-group">

<input type="password" name="pwd" id="password" placeholder="Create a password" class="form-control" required>

</div>



<div class="form-group">

<input type="number" name="phone" id="phonew" placeholder="Your phone number" class="form-control" required>

</div>



<div class="form-group">

<input type="text" name="pname" id="name2" placeholder="Your parent name" class="form-control" required>

</div>



<div class="form-group">

<input type="number" name="pphone" id="phonef" placeholder="Your parent phone " class="form-control" required>

</div>





<div class="form-group" >

   <select name="college_name"  class="form-control" required>

   	<option  value=""  selected> 

        Select your college 

      </option>

      <option value="Abv collage, Jangaon " id="slot2"> 

         Abv collage, Jangaon 

      </option>

      <option value="lakshya, mumbai " id="slot2"> 

         lakshya, mumbai 

      </option>

      <option value="JNTU, Kakinada " id="slot2"> 

         JNTU, Kakinada 

      </option>

      <option value="Narayana jr college, Guntur " id="slot2"> 

         Narayana jr college, Guntur 

      </option>

     

      <option value=" U.S.Academy , Gorakhpur " id="slot2"> 

         U.S.Academy , Gorakhpur 

      </option>

      <option value="Bejoy Narayan Mahavidyalaya ( BU), Burdwan " > 

         Bejoy Narayan Mahavidyalaya ( BU), Burdwan 

      </option>

      <option value="Subodh public school, Jaipur" id="slot2"> 

         Subodh public school, Jaipur 

      </option>

      <option value="WALCHAND COLLEGE, SOLAPUR" id="slot2"> 

         WALCHAND COLLEGE, SOLAPUR 	

      </option>

      <option value="BBMJ, Jalna "> 

         BBMJ, Jalna 

      </option>

      <option value="RV PU College, Bangalore" id="slot2"> 

         RV PU College, Bangalore 

      </option>

      <option value=" APEX Junior College &amp; Academy, Vizianagaram" id="slot2"> 

         APEX Junior College &amp; Academy, Vizianagaram 

      </option>

      <option value=" Ssp, Tirupathi" id="slot2"> 

         Ssp, Tirupathi 

      </option>

      <option value="Future Campus School , Kolkata" id="slot2"> 

         Future Campus School , Kolkata  

      </option>

      <option value="ITL PUBLIC SCHOOL, DELHI" id="slot2"> 

         ITL PUBLIC SCHOOL, DELHI 

      </option>

      <option value="DPSKLNKNP, KNP" id="slot2"> 

         DPSKLNKNP, KNP 

      </option>

      <option value=" Gjc, tallarevu, Kakinada" id="slot2"> 

         Gjc, tallarevu, Kakinada 

      </option>

      <option value=" SFR COLLEGE, Sivakasi" id="slot2"> 

         SFR COLLEGE, Sivakasi 

      </option>

      <option value="H L V N, Kannauj" id="slot2"> 

         H L V N, Kannauj 

      </option>

      <option value="narayana jr college,kakinada" id="slot2"> 

         narayana jr college , kakinada 

      </option>

      <option value="Sri Chaitanya Junior College, Khammam" id="slot2"> 

         Sri Chaitanya Junior College, Khammam 

      </option>

      <option value="Jr College Shivane, Sangola" id="slot2"> 

         Jr College Shivane, Sangola 

      </option>

      

      <option value="SIGMA, Hyderabad " id="slot2"> 

         SIGMA, Hyderabad 

      </option>

      <option value="IIT BOMBAY, BOMBAY" id="slot2"> 

         IIT BOMBAY, BOMBAY 

      </option>

      <option value="Piyari  devi  inter  college , Varanasi " id="slot2"> 

         Piyari  devi  inter  college , Varanasi 

      </option>

      <option value="Sujatha Junior College, Vizianagaram" id="slot2"> 

         Sujatha Junior College, Vizianagaram 

      </option>

      <option value="REHSS THOZHIYOOR, KUNNAMKULAM " id="slot2"> 

         REHSS THOZHIYOOR, KUNNAMKULAM 

      </option>

      <option value="tnintercollage, Saidpur " id="slot2"> 

         tnintercollage, Saidpur 

      </option>

      <option value="Government girls higher secondary school, Shillong " id="slot2"> 

         Government girls higher secondary school, Shillong 

      </option>

      <option value="other" id="slot1"> 

         Other 

      </option>

   </select>





</div>



<div  class="reason_display_none db">

<div class="form-group">

<input type="text" name="cname" id="namewe" placeholder="College name" class="form-control">

</div>





<div class="form-group">

<input type="text" name="ccity" id="namewew" placeholder="College city name" class="form-control">

</div>

</div>


<input type="hidden"  name="amount" value="<?php echo $_GET['amount'] ?>">

<input type="hidden" name="plan" value="<?php echo $_GET['plan'] ?>">

<input type="hidden" name="currency" value="INR">	

<button type="submit" name="signup-btn" class="default-btn "><i class="bx bx-log-in"></i>Sign Up<span style="top: -9px; left: 133.5px;"></span></button>

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





<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>







  <?php 







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

   

                        <script type="text/javascript">

                          

                          $("body").on('click','#slot1', function(){

$(".db").addClass('reason_display_block').removeClass('reason_display_none');



});







                                      $("body").on('click','#slot2', function(){

$(".db").addClass('reason_display_none').removeClass('reason_display_block');



});

                        </script>

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



.reason_display_block {

	display: block ;

}



.reason_display_none{

	display: none;

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