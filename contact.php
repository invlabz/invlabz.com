<?php session_start(); ?>



<?php

require 'class.phpmailer.php';

require 'class.smtp.php';

?>



<!doctype html>

<html lang="en">



<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>NV Labs</title>

    <link rel="stylesheet" href="assets/css/contactcss.css">

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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>

        body,

        html {

            height: 100%;

            margin: 0;

            font-family: Arial, Helvetica, sans-serif;

        }

        

        .row {

            display: flex;

            flex-wrap: wrap;

        }

        /* Create four equal columns */

        

        .column {

            flex: 30%;

            padding: 20px;

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

        

        .avatar {

            vertical-align: middle;

            width: 850px;

            height: 400px;

        }

        

        * {

            box-sizing: border-box;

        }

        /* Create two equal columns that floats next to each other */

        

        .column {

            float: left;

            width: 50%;

            padding: 10px;

            height: auto;

            /* Should be removed. Only for demonstration */

        }

        /* Clear floats after the columns */

        

        .row:after {

            content: "";

            display: table;

            clear: both;

        }

        

        li {

            list-style: none!important;

        }

        

        .nav-item a {

            color: #ff7701!important;

            font-size: 18px!important;

            text-transform: uppercase!important;

        }

        

        .carousel-caption {

            position: absolute;

            left: !important;

            top: 200!important;

            margin-top: 100!;

        }

        

        @media screen and (max-width: 600px) {

            nav.navbar.navbar-expand-lg.navbar-dark.bg-dark.fixed-top {

    border-bottom: 2px solid #ff7701;

}

            .column {

                width: 100%;

            }

            .hero-image {

                background-image: url("assets/img/contactus.jpeg");

                height: 34%;

                background-position: center;

                background-repeat: no-repeat;

                background-size: cover;

                position: relative;

            }

            .hero-text {

                text-align: center;

                position: absolute;

                top: 70%;

                left: 50%;

                transform: translate(-50%, -50%);

                color: white;

                font-size: 20px

            }

        }

        a {

    color: #080a3c;

}

nav.navbar.navbar-expand-lg.navbar-dark.bg-dark.fixed-top {

    border-bottom: 2px solid #ff7701;

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

           <?php


           require 'navbar.php';
           ?>
           <!-- ./navbar -->

        </div>

    </nav>

    <div class="hero-image mt-5"  style="border-top: 3px solid #ff7701;">

        <div class="hero-text">



            <h1 style="font-size:50px">Contact Us</h1>



        </div>

    </div>

    </div>



    <section class="features-area pt-100 pb-70 bg-f4f6fc ">

        <div class="container max-width-1290 ">

            <div class="section-title ">

                <h2 style="padding-bottom: 5%;">Why choose us?</h2>

                <p style="text-align: center;">

                    We have mastered the art of teaching effectively. A very board planned syllabus with many useful exercises and activities will not only keep your child engaged but will also lay foundation for his future.

                </p>

            </div>

            <div class="row ">

                <div class="col-lg-3 col-md-3 ">

                    <div class="features-box-one wow fadeInLeft animated " data-wow-delay=".4s ">

                        <img src="assets/img/scienceicon.png" style="border-radius: 200%; border: 2px solid#ff7701;" alt="">

                        <br><br>

                        <h3>Science related games

                        </h3>



                    </div>

                </div>

                <div class="col-lg-3 col-md-3 ">

                    <div class="features-box-one wow fadeInLeft animated " data-wow-delay=".4s ">

                        <img src="assets/img/skills.png" style="border-radius: 200%; border: 2px solid#ff7701;" alt="">

                        <br><br>

                        <h3>Skill test every week</h3>



                    </div>

                </div>

                <div class="col-lg-3 col-md-3 ">

                    <div class="features-box-one wow fadeInLeft animated " data-wow-delay=".4s ">

                        <img src="assets/img/report.png" style="border-radius: 200%; border: 2px solid #ff7701;" alt="">

                        <br><br>

                        <h3>Monthly performance report </h3>



                    </div>

                </div>

                <div class="col-lg-3 col-md-3 ">

                    <div class="features-box-one wow fadeInLeft animated " data-wow-delay=".4s ">

                        <img src="assets/img/integrate.png" style="border-radius: 200%; border: 2px solid #ff7701;" alt="">

                        <br><br>

                        <h3>Integrated Into Academics</h3>



                    </div>

                </div>

            </div>

        </div>

    </section>

<section id="contact_form"></section>
    <div class="container mt-5">

        <div class="contact-image">

            <h2 style="text-transform: uppercase;">Have Any Questions About Us?</h2>

            <br>

            <img src="assets/img/line.PNG" alt="">

            <p>Don't hesitate to contact us.</p>



        </div>

    </div>
</section>
    </div>



    <div class="row" style="margin-left:30px;

    margin-bottom:30px;

    margin-right:30px;">

        <div class="column">

            <div class="shadow-lg p-3 mb-5 bg-white rounded" style="border:2px solid #ff7701;">

                <div class="card border-0">

                    <div class="card border-0">

                        <div class="card-body">

                            <div class="address">

                                <h4>

                                    <a href=""><img src="assets/img/location-icon.png " width="20 " height="20 " /></a> Location:

                                </h4>

                                <p>Plot 24B, Khalighat Colony, Vuda Colony Phase 1 back side, Vizianagaram, AP, India - 535003</p>

                            </div>

                        </div>

                        <div class="card border-0">

                            <div class="card-body">

                                <div class="email ">

                                    <h4>

                                        <a href="# "><img src="assets/img/email-icon.jpg " width="20 " height="20 " /></a> Email:

                                    </h4>

                                    <p><a href="mailto:info@phylab.co.in "> info@invlabz.com</a></p>

                                </div>

                            </div>



                        </div>

                        <div class="card border-0">

                            <div class="card-body">

                                <div class="phone ">

                                    <h4>

                                        <a href="# "><img src="assets/img/contact-icon.png " width="20 " height="20 " /></a> Call:

                                    </h4>

                                    <p><a href="tel:+917893489989 "> +91 9063233996</a></p>

                                </div>



                            </div>

                        </div>

                        <div class="card">

                            <div class="card-body">

                                <iframe src="https://maps.google.com/maps?q=Vizianagaram,%20AP,%20India%20-%20535003&t=&z=13&ie=UTF8&iwloc=&output=embed " frameborder="0 " style="border:0; width: 100%; height: 290px; " allowfullscreen=" "></iframe>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        

<?php



if (isset($_GET['message']))



{



?>

 <script src="assets/js/sweetalert.min.js"></script> 

<?php





    if ($_GET['message'] == "sent")



    {



?>







            <script type="text/javascript">



                swal({



                    title: "Thank you for contacting us! We will be in touch with you shortly",



                    icon: "success",



                    button: "Ok",



                });



            </script>







            <?php



    }















    if ($_GET['message'] == "failed")



    {



?>







            <script type="text/javascript">



                swal({



                    title: "Message Sending failed",



                    icon: "error",



                    button: "Ok",



                });



            </script>







            <?php



    }







}









?>

        <div class="column p-3 mb-7">

            <div class="shadow-lg p-3 mb-5 bg-white rounded" style="border:2px solid #ff7701;">

                <div class="card border-0">

                    <form name="frmContact" id="frmContact" method="post" action="<?=$_SERVER['PHP_SELF'];?>" enctype="multipart/form-data" novalidate>

                        <div class="col-md-12">

                            <div class="form-group">

                                <label for="userName">Your Name :</label>

                                <span id="userName-info" class="invalid-feedback"></span>

                                <input type="text" name="userName" id="userName" class="form-control" placeholder="Your Name *" required />

                            </div>

                            <div class="form-group">

                                <label for="userEmail">Your E-Mail :</label>

                                <span id="userEmail-info" class="invalid-feedback"></span>

                                <input type="text" name="userEmail" id="userEmail" class="form-control" placeholder="Your Email *" required />

                                <small id="emailHelp" class="form-text text-muted">Your email will

                                    not be shared.</small>

                            </div>

                            <div class="form-group">

                                <label for="phone">Your Phone Number :</label>

                                <span id="phone-info" class="invalid-feedback"></span>

                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone Number *" required/>

                            </div>

                            <div class="form-group">

                                <label for="subject">Your Subject :</label>

                                <span id="subject-info" class="invalid-feedback"></span>

                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Your Subject *" required/>

                            </div>

                            <div class="form-group">

                                <label for="message">Your Message :</label>

                                <span id="content-info" class=" invalid-feedback"></span>

<textarea class="form-control" rows="4"  placeholder="Your Message *" name="message" id="message" required ></textarea>

                            </div>

                            <br>

                            <div class="form-group" style="float: right;">



                                <button type="submit" name="send" class="default-btn">Send Message</button>

                                <br><br> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            </div>





                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>





    </div>

    </div>



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

    <script type="text/javascript" src="assets/js/validation.js"></script>

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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js " integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW " crossorigin="anonymous "></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!--

         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js " integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU " crossorigin="anonymous "></script>

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js " integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj " crossorigin="anonymous "></script>

         -->

</body>



</html>



<?php



if (isset($_POST["send"]) && !empty($_POST)) 

{


	$owner_email = "rkundan27@gmail.com";

    $name = $_POST["userName"];

    $email = $_POST["userEmail"];

    $subject = $_POST["subject"];

    $message = $_POST["message"];

    $phone = $_POST["phone"];

    $mail = new PHPMailer;

    //Tell PHPMailer to use SMTP

    $mail->isSMTP();

    //Enable SMTP debugging

    // 0 = off (for production use)

    // 1 = client messages

    // 2 = client and server messages

    $mail->SMTPDebug = 0;

    //Set the hostname of the mail server

    $mail->Host = 'smtp.gmail.com';

    // use

    // $mail->Host = gethostbyname('smtp.gmail.com');

    // if your network does not support SMTP over IPv6

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission

    $mail->Port = 587;

    //Set the encryption system to use - ssl (deprecated) or tls

    // $mail->SMTPSecure = 'ssl';

    //Whether to use SMTP authentication

    $mail->SMTPAuth = true;

    $mail->isHTML(false);

    //Username to use for SMTP authentication - use full email address for gmail

    $mail->Username = "muheebcoder@gmail.com";

    //Password to use for SMTP authentication

    $mail->Password = "Welcome@123";

    //Set who the message is to be sent from

    $mail->setFrom('info@invlabz.com', 'INV Labz');

    //Set an alternative reply-to address

    //Set who the message is to be sent to



  



    $mail->addAddress($owner_email);

    $mail->addCC($owner_email);



    //Set the subject line

    $mail->Subject = $subject;

    //Read an HTML message body from an external file, convert referenced images to embedded,

    //convert HTML into a basic plain-text alternative body

    //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

    //Replace the plain text body with one created manually



    //Attach an image file

    //$mail->addAttachment('images/phpmailer_mini.png');

    

    



    $mail->Body = "New Query Name: " .$name. "\r\nEmail: " .$email. "\r\nMobile Number: " .$phone.  "\r\nSubject: " .$subject. "\r\nMessage/Query: " .$message. ".";

    

    

    // $mail->AddEmbeddedImage($target_file, 'my-attach');



    //send the message, check for errors

    


    if (!$mail->send()) {

    //   echo "<pre>";

    //     echo "<br/>Mailer Error: " . $mail->ErrorInfo;

    //   echo "</pre>";



        echo "<script>alert('Error Occurred!');</script>";

    } 

    else {

      

     
        ?>

        <script> location.replace("contact.php?message=sent"); </script>



       

?>

        <?php

        

    }



}

?>

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

