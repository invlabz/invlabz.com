<?php if(!isset($_SESSION)) 
     { 
         session_start(); 
     }
?>

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

    

    

    





    <section >

        <div class="shape-rotate rotateme" style="z-index: -1;">

            <img src="assets/img/saas-shape/shape-rotate.png" alt="img">

            <div id="particles-js"></div>

        </div>




        <div id="carouselExampleIndicators" class="carousel " data-ride="carousel" style="border-top: 3px solid #ff7701;">

  <ol class="carousel-indicators">

    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

  </ol>

  <div class="carousel-inner">

    <div class="carousel-item carousel-item-img active">

       <img src="assets/img/ch1.jpg" class="d-block w-100" alt="...">



        <div class="carousel-caption d-none d-md-block ml-auto">

   <h1 class="animate_animated animate_backInDown">PHYSICS LAB</h1>



    

    <p>



        <p><a  href="#price"  class="default-btn animate_animated animate_backInLeft "><i class='bx bxs-arrow-to-right'></i>Buy Now <span></span></a>

                            <a href="http://saumya.agumentikgroup.com/about.php " class="default-btn animate_animated animate_backInRight  "><i class='bx bxs-arrow-to-right'></i>Know More <span></span></a>

                        </p>

        



    

  </div>

    </div>

    <div class="carousel-item carousel-item-img">

      <img src="assets/img/py1.png" class="d-block w-100" height="300px" alt="..." />

        <div class="carousel-caption d-none d-md-block ml-auto">

   <h1 class="animate_animated animate_backInDown">CHEMISTRY  LAB</h1>



    

    <p>



        <p><a  href="#price"  class="default-btn animate_animated animate_backInLeft "><i class='bx bxs-arrow-to-right'></i>Buy Now <span></span></a>

                            <a href="http://saumya.agumentikgroup.com/about.php " class="default-btn animate_animated animate_backInRight  "><i class='bx bxs-arrow-to-right'></i>Know More <span></span></a>

                        </p>

        



    

  </div>

    </div>

    <div class="carousel-item carousel-item-img">



      <img src="assets/img/ch2.jpg" class="d-block w-100" alt="..." />



        <div class="carousel-caption d-none d-md-block ml-auto">

   <h1 class="animate_animated animate_backInDown">INVLABZ</h1>



    

    <p>



        <p><a href="#price" class="default-btn animate_animated animate_backInLeft "><i class='bx bxs-arrow-to-right'></i>Buy Now <span></span></a>

                            <a href="http://saumya.agumentikgroup.com/about.php" class="default-btn animate_animated animate_backInRight  "><i class='bx bxs-arrow-to-right'></i>Know More <span></span></a>

                        </p>

        





  </div>

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

    </section>




    <section class="services-area ptb-100">







        <div class="container-fluid">

            <h1 class="text-center">What is INVLABZ</h1>

            <div class="row align-items-center">

                <div class="services-image wow fadeInLeft" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">

                    <div class="image"><img src="assets/img/main.png" alt="image"></div>

                </div>

                <div class="services-content it-service-content">

                    <h3 style="text-align: left;">Learn Faster, Retain Better & Score Best</h3>



                    <div class="content" style="text-align: center;">

                        <div class="features-inner-content">

                            <p  style="text-align: center;">You retain only up to <b>10%</b> of what you read,<br>You retain only <b>30% </b>of what you learn by watching, and <br>You retain up to <b>70%</b> of what you apply.<br>Join with<br><b>INVLABZ - Interactive Virtual Labs </b>

<br>for new-age immersive & practical oriented learning.

</p><a href="#price" class="default-btn  "><i class='bx bxs-arrow-to-right'></i>Join Now <span></span></a>



                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="shape9"><img src="assets/img/shape/9.png" alt="image"></div>

    </section>

    <section class="ptb-100 bg-f4f6fc ">

        <div class="container-fluid ">

            <div class="section-title ">

                <h2 class="mb-2 ">More to Discover</h2>

                <p>Our products curated for only for your needs.</p>

            </div>

        </div>

        <div class="overview-item wow fadeInUp animated " data-wow-delay=".2s ">

            <div class="container max-width-1290 ">

                <div class="row align-items-center ">

                    <div class="col-lg-6 col-md-6 ">

                        <div class="overview-left-img "><img src="assets/img/PhyTutorial.gif " alt="image "></div>

                    </div>

                    <div class="col-lg-6 col-md-6 ">

                        <div class="overview-content pl-3 "><span class="number ">01</span>

                            <h3>PHYLAB:  <span style="color: #000;

    font-size: 16px; text-transform: initial;">A Virtual Physics Lab for Class 11 & 12.</span> </h3>

                            <p>PhyLab gives freedom to perform physics practicals any number of times without any time limits.

</p>

                            <ul>

                                <li style="font-weight: 800;"><i class='bx bx-badge-check'></i>Simulator: <span style="font-weight: 400; color: #000;">A play-ground for you to perform the experiment & record the observations.

</span></li>

                                <li style="font-weight: 800;"><i class='bx bx-badge-check'></i>Tutorial: <span style="font-weight: 400; color: #000;">A video guide to assist you.

</span></li>

                                <li  style="font-weight: 800;"><i class='bx bx-badge-check'></i>Theory: <span style="font-weight: 400; color: #000;">A textual guide to explore concept behind the experiment.

</span>

                                <li   style="font-weight: 800;"><i class='bx bx-badge-check'></i>Viva-Voce:  <span style="font-weight: 400; color: #000;">A Tool To Test Your Knowledge. Download Record: A PDF proof for your completed experiment.

</span> </li>

                                

                            </ul><a href="#price" class="default-btn  "><i class='bx bxs-arrow-to-right'></i>Buy Now <span></span></a></div>

                    </div>

                </div>

            </div>

        </div>

        <div class="overview-item wow fadeInUp animated " data-wow-delay=".4s " style="background-color: #fff;  padding-bottom: 37px;">

            <div class="container max-width-1290 ">

                <div class="row align-items-center  ">

                    <div class="col-lg-6 col-md-6 ">

                        <div class="overview-content pl-3 mt-3"><span class="number ">02</span>

                            <h3>CHEMLAB: <span style="color: #000;

    font-size: 16px; text-transform: initial;"> A Virtual Chemistry Lab for Class 11 & 12 Students.</span></h3>

                            <p>ChemLab gives freedom to perform chemistry practicals any number of times without any time limits.</p>

                           

                            <ul>

                                <li style="font-weight: 800;"><i class='bx bx-badge-check'></i>Simulator: <span style="font-weight: 400; color: #000;">A play-ground for you to perform the experiment & record the observations.



</span></li>

                                <li style="font-weight: 800;"><i class='bx bx-badge-check'></i>Tutorial: <span style="font-weight: 400; color: #000;">A video guide to assist you.



</span></li>

                                <li  style="font-weight: 800;"><i class='bx bx-badge-check'></i>Theory: <span style="font-weight: 400; color: #000;">A textual guide to explore concept behind the experiment.



</span>

                                <li   style="font-weight: 800;"><i class='bx bx-badge-check'></i>Viva-Voce:  <span style="font-weight: 400; color: #000;">A Tool To Test Your Knowledge



</span> </li>

 <li   style="font-weight: 800;"><i class='bx bx-badge-check'></i>Download Record:  <span style="font-weight: 400; color: #000;">A PDF proof for your completed experiment.



</span> </li>

                                

                            </ul><a href="#price" class="default-btn  "><i class='bx bxs-arrow-to-right'></i>Buy Now <span></span></a></div>

                    </div>

                    <div class="col-lg-6 col-md-6 order-first order-md-last">

                        <div class="overview-right-img "><img  class="img-fluid" src="assets/img/ChemLab.jpg " alt="image " ></div>

                    </div>

                </div>

            </div>

        </div>

        <div class="overview-item wow fadeInUp animated " data-wow-delay=".6s ">

            <div class="container max-width-1290 ">

                <div class="row align-items-center ">

                    <div class="col-lg-6 col-md-6 ">

                        <div class="overview-left-img "><img src="assets/img/nvblab.jpg " alt="image "></div>

                    </div>

                    <div class="col-lg-6 col-md-6 col order-1 ">

                        <div class="overview-content pl-3 "><span class="number ">03</span>

                            <h3 style="text-transform: uppercase;">INVLABZ: <span style="color: #000;

    font-size: 16px; text-transform: initial;">The Learning App for Class 9 & 10. </span> </h3>

                            <p>The self learning app offers simulations for all topics in Physics and Chemistry, including lab experiments.</p>

                            <ul>

                                <li style="font-weight: 800;"><i class='bx bx-badge-check'></i>Tutorial: <span style="font-weight: 400; color: #000;">A video tutorial explains the concept using our top notch simulator.



</span></li>

                                <li style="font-weight: 800;"><i class='bx bx-badge-check'></i>Simulator: <span style="font-weight: 400; color: #000;">A play-ground for you to understand and solve real world problems in a controlled & challenged environment.



</span></li>

<li style="font-weight: 800;"><i class='bx bx-badge-check'></i>Unit Test: <span style="font-weight: 400; color: #000;"> A tool to test your knowledge on learned concepts.



</span></li>

                                <li  style="font-weight: 800;"><i class='bx bx-badge-check'></i>Board Exam Questions: <span style="font-weight: 400; color: #000;">A list of important board questions backed with corresponding simulators.



</span>

                                <li   style="font-weight: 800;"><i class='bx bx-badge-check'></i>Doubt Clarification:  <span style="font-weight: 400; color: #000;">A weekly, monthly and special live doubt clarification sessions.



</span> </li>



                                

                            </ul><a href="#price" class="default-btn  "><i class='bx bxs-arrow-to-right'></i>Subscribe to Us <span></span></a></div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="features-area pt-100 pb-70 bg-f4f6fc " style="background-color: #fff;">

        <div class="container max-width-1290 ">

            <div class="section-title ">

                <h2>Our amazing features</h2>

            </div>

            <div class="row ">

                <div class="col-lg-12 col-md-6 as">

                    <div class="features-box-one wow fadeInLeft  ml-2 " data-wow-delay=".4s "> <i class="fa fa-user-secret bg-13c4a1"></i> 

                        <h3>Innovative Faculty </h3>

                        <p>Courses curated with the innovative faculty dedicated to teach the practical way.</p>

                    </div>

                      <div class="features-box-one wow fadeInLeft  ml-2" data-wow-delay=".4s "><i class="fa fa-file-text bg-ffb700"></i> 

                        <h3>Immersive Content </h3>

                        <p>You can now retain more with the finest Immersive cotent that will help you visualize as you are learning.</p>

                    </div> 

                       <div class="features-box-one wow fadeInLeft  ml-2 " data-wow-delay=".4s "> <i class="fa fa-street-view bg-00d280"></i> 

                        <h3>Practical Learning </h3>

                        <p>Not just learn for today or tomorrow; learn for future by using our top notch Simulations for every concept.

</p>

                    </div>

<div class="features-box-one wow fadeInLeft  ml-2 " data-wow-delay=".4s "> <i class="fa fa-building bg-fc3549"></i>

                        <h3>Integrated Into Academics </h3>

                        <p>No need to run to different places to manage academics and learning.

</p>

                    </div>

                     <div class="features-box-one wow fadeInLeft  ml-2 " data-wow-delay=".4s ">   <i class="fa fa-male bg-00d280"></i> 

                        <h3>Test Yourself </h3>

                        <p>No one is better than yourself to measure your progress. Practice your learning on every concept learned.

</p>

                    </div>



            </div>

        </div>

    </section>




    <section class="pricing-area pt-100 pb-70 bg-f4f5fe " id="price" >

        <div class="container">

            <div class="section-title ">

                <h2>Choose The Pricing Plan</h2>

            </div>

            <?php 



// include("connection.php");



//     $fetchqry = "SELECT * FROM `plan` ORDER BY id ASC"; 

//     $result=mysqli_query($connection,$fetchqry);

//     $num=mysqli_num_rows($result);

//     if($num > 0){

//     while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){





// ?>


            <div class="tab pricing-list-tab ">

                <div class="tab_content ">

                    <div class="tabs_item ">

                        <div class="row ">

                            <div class="col-lg-4">

                                <div class="single-pricing-table left-align "  ><!-- style="min-height: 620px !important;" -->

                                    <?php
                                    include("connection.php");
                                    
                                    $fetchqry = "SELECT * FROM `plan` WHERE plan_name='basic'"; 

                                    $result=mysqli_query($connection,$fetchqry);
                                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                                    {
                                    ?>

                                    <div class="pricing-header ">

                                        <h3>Basic</h3>

                                    </div>

                                    <div class="price">
                                            <!--<del style=" font-size: 18px!important;">Free</del>-->

                                         
                                        <!-- <del style=" font-size: 18px!important;"><?php echo $row['selling_price']; ?></del> -->

                                         


                                        <span style=" font-size: 20px!important;"><?php echo $row['discounted_price']; ?></span>

                                        <span style=" font-size: 10px!important;">For lifetime</span>

                                    </div>

                                    

                                    <ul class="pricing-features ">

                                        <li><i class="bx bxs-badge-check "></i>Have access to both PhyLab and ChemLab.</li>

                                        <li><i class="bx bxs-badge-check "></i>PhyLab - Have access to 2 experiments. </li>

                                        <li><i class="bx bxs-badge-check "></i>ChemLab - Have access to 1 experiment. </li>

                                        <br>

                                    </ul>

                                    <div class="btn-box "><a href="/signup.php?plan=<?php  echo $row['plan_name'] ?>&amount=<?php echo $row['discounted_price'] ?>" class="default-btn "><i class="bx bxs-hot text-danger"></i>Sign Up <span style="top: 3.21875px; left: 190.5px; "></span></a></div>
                                    <?php
                                    }
                                    ?>
                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="single-pricing-table left-align " style="padding-bottom: 54px; "><!-- min-height: 620px !important; -->

                                <?php
                                    include("connection.php");
                                    
                                    $fetch = "SELECT * FROM `plan` WHERE plan_name='individual'"; 

                                    $res=mysqli_query($connection,$fetch);
                                    while($row1 = mysqli_fetch_array($res,MYSQLI_ASSOC))
                                {
                                ?>
                                    <div class="pricing-header ">

                                        <h3>Indivdual</h3>

                                    </div>

                                        <div class="price">

                                    

                                    

                                        <del style=" font-size: 18px!important;">₹ <?php echo $row1['selling_price']; ?></del>

                                         

                                        <span style=" font-size: 20px!important;">₹ <?php echo $row1['discounted_price']; ?></span>

                                

                                        <span style=" font-size: 10px!important;">Per Year</span>
                                        

                                    </div>

                                    

                                    <ul class="pricing-features ">

                                        <li><i class="bx bxs-badge-check "></i>Either PhyLab or ChemLab</li>

                                        <li><i class="bx bxs-badge-check "></i>PhyLab - Have access to all experiments.</li>

                                         <li><i class="bx bxs-badge-check "></i>ChemLab - Have access to all experiments.</li>

                                         <br><br> 
                                         

                                    </ul>

                                   <div class="btn-box "><a href="/signup.php?plan=<?php  echo $row1['plan_name'] ?>&amount=<?php echo $row1['discounted_price'] ?>" class="default-btn " style="    background-color: #080a3c;"><i class="bx bxs-hot text-danger "></i>Sign Up<span style="top: 31.2188px; left: -10.5px; "></span></a></div>

                                    <?php
                                    }
                                    ?>

                                </div>

                            </div>

                            <div class="col-lg-4 ">

                                <div class="single-pricing-table left-align "  style="padding-bottom: 21px; "> <!-- min-height: 620px !important; -->

                                <?php
                                    include("connection.php");
                                    
                                    $fetch = "SELECT * FROM `plan` WHERE plan_name='combo'"; 

                                    $res=mysqli_query($connection,$fetch);
                                    while($row2 = mysqli_fetch_array($res,MYSQLI_ASSOC))
                                {
                                ?>
                                    <div class="pricing-header ">

                                        <h3>Combo</h3>

                                    </div>

                                        <div class="price">

                                        

                                        

                                            <del style=" font-size: 18px!important;">₹ <?php echo $row2['selling_price']; ?></del>

                                        

                                        <span style=" font-size: 20px!important;">₹ <?php echo $row2['discounted_price']; ?></span>

                                       


                                        <span style=" font-size: 10px!important;">Per Year</span>

                                        

                                    </div>

                                  

                                    <ul class="pricing-features ">

                                        <li><i class="bx bxs-badge-check "></i>Both PhyLab and ChemLab.</li>

                                        <li><i class="bx bxs-badge-check "></i>PhyLab - Have access to all experiments.</li>

                                           <li><i class="bx bxs-badge-check "></i>ChemLab - Have access to all experiments.</li>

                                        <br><br>
                                    </ul>

                                        <div class="btn-box "><a href="/signup.php?plan=<?php  echo $row2['plan_name'] ?>&amount=<?php echo $row2['discounted_price'] ?>" class="default-btn " style="    background-color: #080a3c;"><i class="bx bxs-hot text-danger"></i>Sign Up <span style="top: 31.2188px; left: -10.5px; "></span></a></div>
                                    <?php
                                    }
                                    ?>
                                </div>

                            </div>

                

                        </div>

                    </div>

                </div>

            </div>

<?php

    // }

    // }

    ?>

        </div>

    </section>

    <section class="video-presentation-area ptb-100 " style="background-color: #fff;">

        <div class="container ">

            <div class="section-title ">

                <h2>Why choose us - VIDEO</h2>

            </div>



            <div class="row">

                

                <div class="col-md-6 col-10"> <div class="video-box "><img src="assets/img/video-bg.jpeg " class="main-image " alt="image ">
                <a href="#" class="video-btn popup-youtube "><i class="bx bx-play "></i></a>

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

                                <li><i class='bx bx-badge-check'></i>Real time interactive simulations.  </li>

                                <li><i class='bx bx-badge-check'></i>Concepts explained using the same simulations.</li>

                                <li><i class='bx bx-badge-check'></i>Learn not just read and memorize. </li>

                                <li><i class='bx bx-badge-check'></i>Weekly performance report.  </li>



                                 <li><i class='bx bx-badge-check'></i>Suggestions and guidance.  </li>



                                

                            </ul><a href="http://saumya.agumentikgroup.com/about.php " class="default-btn  "><i class='bx bxs-arrow-to-right'></i>Read More <span></span></a></div>

                    </div>

            </div>

           

            <div class="funfacts-inner" style="display: none;">

                <div class="row">

                    <div class="col-lg-3 col-12 col-sm-6">

                        <div class="single-funfacts funfact-style-two wow fadeInLeft" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;"><i class="bx bx-smile"></i>

                            <h3><span class="odometer odometer-auto-theme" data-count="850"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span>

                                </span>

                                </span>

                                </span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span>

                                </span>

                                </span>

                                </span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span>

                                </span>

                                </span>

                                </span>

                        </div>

                        </span><span class="sign-icon">+</span></h3>

                        <p>Satisfied Client</p>

                    </div>

                </div>

                <div class="col-lg-3 col-12 ">

                    <div class="single-funfacts funfact-style-two wow fadeInLeft" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;"><i class="bx bxs-star"></i>

                        <h3><span class="odometer odometer-auto-theme" data-count="850"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">8</span></span>

                            </span>

                            </span>

                            </span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span>

                            </span>

                            </span>

                            </span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span>

                            </span>

                            </span>

                            </span>

                    </div>

                    </span><span class="sign-icon">+</span></h3>

                    <p>Appreciation</p>

                </div>

            </div>

            <div class="col-lg-3 col-12">

                <div class="single-funfacts funfact-style-two wow fadeInLeft" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;"><i class="bx bx-time-five"></i>

                    <h3><span class="odometer odometer-auto-theme" data-count="120"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span>

                        </span>

                        </span>

                        </span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span>

                        </span>

                        </span>

                        </span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span>

                        </span>

                        </span>

                        </span>

                </div>

                </span><span class="sign-icon">K</span></h3>

                <p>Response Time</p>

            </div>

        </div>

        <div class="col-lg-3 col-12 wow fadeInLeft" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">

            <div class="single-funfacts funfact-style-two"><i class="bx bx-data"></i>

                <h3><span class="odometer odometer-auto-theme" data-count="100"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">1</span></span>

                    </span>

                    </span>

                    </span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span>

                    </span>

                    </span>

                    </span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span>

                    </span>

                    </span>

                    </span>

            </div>

            </span><span class="sign-icon">M</span></h3>

            <p>Data Entry</p>

        </div>

        </div>

        </div>

        </div>

        <div class="contact-cta-box mwidth-1000 wow fadeInUp animated " data-wow-delay=".8s ">

            <h3>Have any question about us?</h3>

            <p>Don't hesitate to contact us.</p>

            <a href="http://saumya.agumentikgroup.com/contact.php " class="default-btn  "><i class='bx bxs-arrow-to-right'></i>Contact Us <span></span></a>

        </div>

        </div>

        <div class="shape-map1 "><img src="assets/img/map1.png " alt="image "></div>

        <div class="shape7 "><img src="assets/img/shape/7.png " alt="image "></div>

        <div class="shape8 "><img src="assets/img/shape/8.png " alt="image "></div>

        <div class="shape9 "><img src="assets/img/shape/9.png " alt="image "></div>

    </section>
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