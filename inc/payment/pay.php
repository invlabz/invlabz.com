
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

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">



    <link rel="stylesheet" href="/assets/css/animate.min.css">



    <link rel="stylesheet" href="/assets/css/boxicons.min.css">



    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">



    <link rel="stylesheet" href="/assets/css/odometer.min.css">



    <link rel="stylesheet" href="/assets/css/meanmenu.css">



    <link rel="stylesheet" href="/assets/css/magnific-popup.min.css">



    <link rel="stylesheet" href="/assets/css/style.css">



    <link rel="stylesheet" href="/assets/css/responsive.css">



    <link rel="stylesheet" href="/assets/css/muhStyle.css">

    

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

            <img src="/assets/img/logo1.png" class="img-fluid" />

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

          </button>
              <!-- navbar included here -->


            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">

                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="/index.php">

                        Home

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="/about.php">

                         About

                        </a>

                    </li>


<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Downloads
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/phylab.php">PHYLAB</a>
          <a class="dropdown-item" href="/chemlab.php">CHEMLAB</a>

          <a class="dropdown-item" href="/invlabz.php">INVLABZ</a>
          
        </div>
      </li>

                     <li class="nav-item">

                        <a class="nav-link" href="/blogs.php">

                         Blogs

                        </a>

                    </li>



                    <li class="nav-item">

                        <a class="nav-link" href="/contact.php">



                        Contact Us

                        </a>

                    </li>



                    


                </ul>

<div class="others-options">

<a href="/login.php" class="default-btnn">
<i class="bx bx-log-in"></i>Log In<span></span>
</a>
</div>

            </div>

          



           <!-- ./navbar -->

        </div>

    </nav>

    

    










<!-- ./navbar & header end here -->
<!-- MultiStep Form -->
<div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>Pay Now</strong></h2>
                <p>Fill all form field to go to next step</p>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Account</strong></li>
                                <li id="personal"><strong>Personal</strong></li>
                                <li id="payment"><strong>Payment</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Account Information</h2> <input type="email" name="email" placeholder="Email Id" /> <input type="text" name="uname" placeholder="UserName" /> <input type="password" name="pwd" placeholder="Password" /> <input type="password" name="cpwd" placeholder="Confirm Password" />
                                </div> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Personal Information</h2> <input type="text" name="fname" placeholder="First Name" /> <input type="text" name="lname" placeholder="Last Name" /> <input type="text" name="phno" placeholder="Contact No." /> <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Payment Information</h2>
                                    <div class="radio-group">
                                        <div class='radio' data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                        <div class='radio' data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div> <br>
                                    </div> <label class="pay">Card Holder Name*</label> <input type="text" name="holdername" placeholder="" />
                                    <div class="row">
                                        <div class="col-9"> <label class="pay">Card Number*</label> <input type="text" name="cardno" placeholder="" /> </div>
                                        <div class="col-3"> <label class="pay">CVC*</label> <input type="password" name="cvcpwd" placeholder="***" /> </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3"> <label class="pay">Expiry Date*</label> </div>
                                        <div class="col-9"> <select class="list-dt" id="month" name="expmonth">
                                                <option selected>Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option>
                                            </select> <select class="list-dt" id="year" name="expyear">
                                                <option selected>Year</option>
                                            </select> </div>
                                    </div>
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Success !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5>Payment Successfull</h5>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- body content end here -->


    <style type="text/css">
    	




#grad1 {
    background-color: : #9C27B0;
    background-image: linear-gradient(180deg, #ff612f, #080a3c)
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset .form-card {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;
    position: relative
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E
}

#msform input,
#msform textarea {
    padding: 0px 8px 4px 8px;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 2px solid #ff612f;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: #ff612f;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button:hover,
#msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #ff612f
}

#msform .action-button-previous {
    width: 100px;
    background: #080a3c;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #080a3c
}

select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px
}

select.list-dt:focus {
    border-bottom: 2px solid #ff612f
}

.card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #000000
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 25%;
    float: left;
    position: relative
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f023"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #ff612f
}

.radio-group {
    position: relative;
    margin-bottom: 25px
}

.radio {
    display: inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
}

.radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
}

.fit-image {
    width: 100%;
    object-fit: cover
}
    </style>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type="text/javascript">
    	

    	$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 600
});
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});

$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

$(".submit").click(function(){
return false;
})

});
    </script>









    <!-- footer  -->



    <footer class="footer-area ">

        <div class="divider "></div>

        <div class="container ">

            <div class="row ">

                <div class="col-lg-5 col-md-6 col-sm-6 ">

                    <div class="single-footer-widget ">

                        <div class="logo ">

                            <a href="index.php "><img src="/assets/img/logo1.png"></a>

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

                            <li>Location: <a href="https://goo.gl/maps/MQ78iGP5g9VgZcJ38 " target="_blank ">Plot 24B, Khalighat Colony, Vuda Colony Phase 1 back side, Vizianagaram, AP, India - 535003</a></li>

                            <li>Email: info@invlabz.com</li>

                            <li>Phone: +91 9063233996</li>

                        </ul>

                        <ul class="social ">

                            <li><a href="# " target="_blank "><i class="bx bxl-facebook "></i></a></li>

                            <li><a href="# " target="_blank "><i class="bx bxl-twitter "></i></a></li>

                            <li><a href="# " target="_blank "><i class="bx bxl-linkedin "></i></a></li>

                            <li><a href="# " target="_blank "><i class="bx bxl-instagram "></i></a></li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="copyright-area ">

                <p>Copyright @2021 INVLABZ Technologies Pvt Ltd. All Rights Reserved || powered by <a href="https://agumentik.com/" rel="noopener" target="_blank">Agumentik Software Private Limited</a></p>

                

            </div>

        </div>

    </footer>

    

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

    <script src="/assets/js/jquery.min.js "></script>

    <script src="/assets/js/popper.min.js "></script>

    <script src="/assets/js/bootstrap.min.js "></script>

    <script src="/assets/js/jquery.magnific-popup.min.js "></script>

    <script src="/assets/js/jquery.appear.min.js "></script>

    <script src="/assets/js/odometer.min.js "></script>

    <script src="/assets/js/owl.carousel.min.js "></script>

    <script src="/assets/js/jquery.meanmenu.js "></script>

    <script src="/assets/js/wow.min.js "></script>

    <script src="/assets/js/conversation.js "></script>

    <script src="/assets/js/jquery.ajaxchimp.min.js "></script>

    <script src="/assets/js/form-validator.min.js "></script>

    <script src="/assets/js/contact-form-script.js "></script>

    <script src="/assets/js/particles.min.js "></script>

    <script src="/assets/js/coustom-particles.js "></script>

    <script src="/assets/js/main.js "></script>

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