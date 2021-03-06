<?php

session_start();

?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">

                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="index.php">

                        Home

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="about.php">

                         About

                        </a>

                    </li>


<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Downloads
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="phylab.php">PHYLAB</a>
          <a class="dropdown-item" href="chemlab.php">CHEMLAB</a>

          <a class="dropdown-item" href="invlabz.php">INVLABZ</a>
          
        </div>
      </li>

                     <li class="nav-item">

                        <a class="nav-link" href="blogs.php">

                         Blogs

                        </a>

                    </li>



                    <li class="nav-item">

                        <a class="nav-link" href="contact.php">



                        Contact Us

                        </a>

                    </li>



                    


                </ul>

<?php 
//print_r($_SESSION);

if(empty($_SESSION['user'])) {

 ?>

<!--<div class="others-options">

<a href="login.php" class="default-btnn">
<i class="bx bx-log-in"></i>Login
<span></span>
</a>
</div>-->


 <?php
}   

else {

?>

<div class="others-options">

<a href="logout.php" class="default-btnn">
<i class="bx bx-log-in"></i>Logout
<span></span>
</a>
</div>
<?php
}



?>



          