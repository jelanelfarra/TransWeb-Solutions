
<?php
require 'config/db_function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Asap&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        
    <title>Contact Us</title>
    <link rel="shortcut Icon" href="img/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/animate.css">
</head>

<body class="En">
    
<?php


if(isset($_POST['contact'])){
    if(isset($_POST['name']) && $_POST['name'] !="" &&
        isset($_POST['email']) && $_POST['email'] !="" &&
        isset($_POST['subject']) && $_POST['subject'] !="" &&
        isset($_POST['message']) && $_POST['message'] !=""  ){



        $retval=contact($_POST['name'],$_POST['email'],$_POST['subject'],$_POST['message']);
        if($retval ==1){
            $message="Thank you for contacting us &#128515;";
        }else{
            $message="cannot send message";
        }

    }else{
        $message="All Fields must be filled &#128543; ";
    }
}


?>
    <!--******************** Start Navbar*************** -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
        <li class="nav-item dropdown" id="lang">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        LANGUAGES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="contact-rtl.php">Arabic</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item active" href="contact.php">English</a>
        </div>
      </li>
            <img class="logo hvr-pulse shrink" src="img/logop.png">
            <a class="navbar-brand hvr-pop" href="#">
                <span>Trans</span><span>Web</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link hvr-pop" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-pop" href="read.php">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown services">
         <a class="nav-link dropdown-toggle hvr-pop" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SERVICES
        </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="web.php">Web development</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="lang.php">Translation</a>
                </div>
                </li>
                    <li class="nav-item active">
                        <a class="nav-link hvr-pop" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-pop" href="join.php"target="-blank">Join Us</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!--------------Contact Us----------------------->
    <section class="contact-us text-center" id="contact-us">
        <div class="filed">
            <div class="container">
            <!-- <div class="overlay-contact"></div> -->
                <i class="contact fa fa-headphones fa-3x"></i>
                <h2> Tell Us What you want to say!</h2>
                <p class="lead">Feel Free To Contact Us Anytime</p>
                <form role="form" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php
                            if(isset($message) && $message!=""){


                                ?>


                                <div class="alert alert-primary btn-lg " role="alert">
                                    <?php  echo $message; ?>
                                </div>




                                <?php
                            }
                            ?>
                            
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" placeholder="Name"  name="name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" placeholder="Subject" name="subject" >
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="message" class="form-control input-lg"
                                    placeholder="Your message" ></textarea>
                            </div>
                         <a href="#contact-us" class="cont-link"><button type="submit"  class="btn btn-danger btn-lg btn-block" name="contact">Contact Us</button></a>
                        </div>
                        <div class="col-lg-6">
                            <p class="par">We can't wait to hear from you!</p>
                            <div class="whats"> <i class="fab fa-whatsapp"></i> +972567841422</div>
                            <div class="email"> <i class="fas fa-envelope"></i> <a href="#">transweb.0056@gmail.com</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>

    
    <!---------------Start Copy Right------------------------------>

    <footer>
        <div class="container ">
            <div class="row text-left">

            <div class="col-sm-3 hosting">
                <img src="img/host.png" class="host">
                <p>
TransWeb solutions is hosted by Gaza Goes Global incubator: a sustainable ICT program at SYFS
                </p>
                
                </div>
                <div class="col-sm-3 footer-ser">
                    <h4>Our Services</h4>
                   <p><a href="web.php">Website devevlopment.</a></p>
                   <p><a href="lang.php">Translation.</a></p>
                </div>
                <div class="col-sm-3">
                <h4>Quick Links</h4>
                <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="read.php">About</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                </ul>
                </div>
                <div class="col-sm-3 social">
                <h4>Social Media</h4>
                <a href="https://www.facebook.com/Transweb.Soultions/?modal=admin_todo_tour"
                                target="_blank">
                    <i class="fab fa-facebook-square face"></i>
                </a>
                <a href="https://twitter.com/TransWeb4" target="_blank">
                <i class="fab fa-twitter-square tw"></i>
                </a>
                <a href="https://www.linkedin.com/company/transwebsolutions" target="_blank">
                <i class="fab fa-linkedin linked"></i>
                </a>
                <a href="https://www.instagram.com/trans.web/" target="_blank">
                <i class="fab fa-instagram insta"></i>
                </a><br><br>

                <a href="index-rtl.php" class="global">
                <i class="fas fa-globe-europe"></i>  
                <span>العربية</span>
                </a>
                </div>
            </div>
        </div>
        <div class="copy-right">
                <p class="text-center"><i class="far fa-copyright"></i> 
                2020 <span style="color:#ff4557;">transwebsolutions.net</span> All Rights Reserved.
            </p>
            </div>
    </footer>

    <script src="js/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="js/app.js"></script>
</body>

</html>