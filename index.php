
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
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>TransWeb Solutions</title>
    <link rel="shortcut Icon" href="img/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheat" href="css/normalize.css">
    <link rel="stylesheat" href="css/main-rtl.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Asap&display=swap" rel="stylesheet">
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


    <!-- ******************** Start Navbar*************** --> 
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
        
    <li class="nav-item dropdown" id="lang">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        LANGUAGES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index-rtl.php">Arabic</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item active" href="index.php">English</a>
        </div>
      </li>
            <img class="logo hvr-pulse shrink" src="img/logop.png">
            <a class="navbar-brand wow rubberBand" href="#">
                <span class="wow bounceInDown" data-wow-duration="1s" data-wow-offset="200" data-wow-delay=".5s">Trans</span><span class="wow bounceInDown" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="1s">Web</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav ml-auto Ar">
                    <li class="nav-item active">
                        <a class="nav-link hvr-pop" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-pop" href="#about-us">About <span class="sr-only">(current)</span></a>
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
                    <li class="nav-item">
                        <a class="nav-link hvr-pop" href="#contact-us">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-pop" href="join.php">Join Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!----------------Start Header---------------------->
    <section class="header">
    <div class="overlay wow zoomIn">
    <div class="content">
    <h1 class="text-left En"><span class="transweb">TransWeb</span>
            <span class="solutions" style="color:#fff">Solutions</span> <br>
                A company specialized in providing multilingual<br> translation and web development services.
            </h1>
        </div>
        </div>
    </section>
    <!------------Section Overview--------------------->
    <section class="overview text-center" id="about-us">
        <div class="container">
        <h2 class="head-after">Company Overview</h2>
        <video controls="controls" poster="img/logop.png" class="wow zoomIn" data-wow-duration="2s" data-wow-offset="270"> 
      <source src="img/Ad.mp4" type="video/mp4">
     <source src="img/Ad.ogg" type="video/ogg"> 
        </video>
        </div>
        <button type="button" class="btn-md btn-block hvr-shrink">
                    <a href="read.php"> Read More .. </a>
                </button>
    </section>
    <!----------------Our Services----------------->
    <section class="our-services" id="ser">
        <div class="container">
            <h2 class="head-after text-center">Our Services</h2>
            <div class="row">
                <!----------Card 1--------------->
                <div class="col-md-6 text-left wow fadeInLeft" data-wow-duration="2s">
                    <div class="card">
                        <img class="card-img-top" src="img/trans1.png">
                        <div class="card-body">
                            <h4 class="card-title">Translation</h4>
                            <p class="card-text">Transweb enables you to access a high-quality translation service from your place without effort, and we can translate all of your administrative files and professional correspondence, and translate your films and presentations.</p>
                                <a class="link hvr-shrink" href="lang.php">Available Languages</a>
                        </div>
                    </div>
                </div>
                
                <!---------Card 2------------------->
                <div class="col-md-6 text-left wow fadeInRight" data-wow-duration="2s">
                    <div class="card">
                        <img class="card-img-top" src="img/web.jpg">
                        <div class="card-body" id="card-body">
                            <h4 class="card-title">Web Development</h4>
                            <p class="card-text">We provide web design and development service to suit your business and take it to the next level by helping the most skilled programmers and designers. Our web development services include all websites from corporate introductory websites to internal applications and self-service websites. </p>
                                <a class="link hvr-shrink" href="web.php">Web Development Services</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        
    </section>
    <!----------------Featured Work---------------------->
    <section class="featured_work text-center">
        <div class="container">
        <div class="container-feat">
            <h2 class="head-after">More Services</h2>
            <p>Our company provides many services related to translation, languages ​​and website development!</p>
        </div>
        <div class="feature-box">
        <div class="row">
        <div class="box wow bounceInDown" data-wow-duration="2s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
                <span><i class="fas fa-code"></i></span>
                <h4>Front_End</h4>
                <p> producing HTML, CSS and JavaScript for a website.</p>
            </div>
        </div>
        <div class="box wow bounceInDown" data-wow-duration="2.5s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
                <span><i class="fas fa-laptop-code"></i></span>
                <h4>Back_End</h4>
                <p> Make the website interface more dynamic.</p>
            </div>
        </div>
        <div class="box wow bounceInDown" data-wow-duration="3s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
                <span><i class="fas fa-tasks"></i></span>
                <h4>Full-Stack</h4>
                <p>Website development and interface design.</p>
            </div>
        </div>
                </div>
        <!-- ******************************* -->
        <div class="row">
        <div class="box wow bounceInDown" data-wow-duration="2s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
            <span><i class="fas fa-pen-alt"></i></span>
            <h4>Content Writing</h4>
            <p>Writing the content of your company’s website etc.</p>
            </div>
        </div>
        <div class="box wow bounceInDown" data-wow-duration="2.5s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
            <span><i class=" voice fas fa-microphone-alt"></i></span>
            <h4>Voice Over</h4>
            <p>Employing talented voice over actor for you.</p>
            </div>
        </div>
        <div class="box wow bounceInDown" data-wow-duration="3s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
            <span><i class="fas fa-globe-europe"></i></span>
            <h4>Translation</h4>
            <p>Converting a text from one language to another.</p>
            </div>
        </div>
                </div>
        <!-- ******************************* -->
        <div class="row">
        <div class="box wow bounceInDown" data-wow-duration="2s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
            <span><i class="fas fa-keyboard"></i></span>
            <h4>Transcription</h4>
            <p>Converting audios into text.</p>
            </div>
        </div>
        <div class="box wow bounceInDown" data-wow-duration="2.5s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
            <span><i class="fas fa-language"></i></span>
            <h4>Subtitle</h4>
            <p>Adding text to your videos or translating them.</p>
            </div>
        </div>
        <div class="box wow bounceInDown" data-wow-duration="3s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
            <span><i class="fas fa-audio-description"></i></span>
            <h4>Interpretation</h4>
            <p>Instant oral translation.</p>
            </div>
        </div>
                </div>
            </div>
        </div>
    </section>
    <!------------------Why Choose Us------------------------>
    <section class="choose-us">
        <div class="container">

            <div class="dexc text-center">
                <h2 class="head-after">Why TransWeb ?</h2>
                <p>TransWeb is a dynamic team of people who are passionate towards taking information from one source to
                    the other, breaking different barriers of communication. Our dedicated customer service
                    professionals are easily accessible to help you with updates on work progress and quality assurance.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="team-work">
                        <div class="letter  text-center wow bounceInDown"><span>T</span></div>
                        <div class="info">
                            <h3>Team Work</h3>
                            <p>We have talented teams for your services. </p>
                        </div>
                    </div>
                    <!--  -->
                    <div class="team-work">
                        <div class="letter  text-center wow bounceInDown"><span>R</span></div>
                        <div class="info">
                            <h3>Responsive</h3>
                            <p>Our designs look flawless on any screen. </p>
                        </div>
                    </div>
                    <!--  -->
                    <div class="team-work ">
                        <div class="letter text-center wow bounceInDown"><span>A</span></div>
                        <div class="info">
                            <h3>Availability</h3>
                            <p>We are available 24/7.</p>
                        </div>
                    </div>
                    <!--  -->
                    <div class="team-work">
                        <div class="letter  text-center wow bounceInDown"><span>N</span></div>
                        <div class="info">
                            <h3>Network of freelancers</h3>
                            <p>We connect you to the most qualified freelancers in the<br> fields of translation and
                                web-development.</p>
                        </div>
                    </div>
                </div>
                <!--  -->

        <div class="col-lg-6">
            <div class="team-work">
                <div class="letter text-center wow bounceInDown" ><span>S</span></div>
                    <div class="info">
                        <h3>Scalability </h3>
                        <p>We optimize an application's architecture to withstand high loads without increasing response time. </p>
                    </div>
                </div> 
                <!--  -->
            <div class="team-work">
                <div class="letter text-center wow bounceInDown"><span>W</span></div>
                    <div class="info">
                        <h3>World Class</h3>
                       <p>We provide your request with world class outcomes. </p>
                    </div>
                </div>
                    <!--  -->
            <div class="team-work">
                <div class="letter text-center wow bounceInDown"><span>E</span></div>
                    <div class="info">
                           <h3>Easy Communication</h3>
                            <p>We are easy to communicate with. </p>
                    </div>
                </div>
                    <!--  -->
            <div class="team-work">
                <div class="letter text-center wow bounceInDown"><span>B</span></div>
                    <div class="info">
                        <h3>Best to hire</h3>
                        <p>You won’t regret hiring our team to do your website or translation. </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--******************* Start Statistic**************** -->
    <section class="stats text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 stat-box wow bounceIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay=".5s">
                    <i class="fa fa-users fa-fw fa-3x"></i>
                    <span class="number">9+</span>
                    <p class="stats-text">Happy Clients</p>
                </div>
                <div class="col-sm-6 col-lg-3 stat-box wow bounceIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="1s">
                    <i class="fa fa-briefcase fa-fw fa-3x"></i>
                    <span class="number">45+</span>
                    <p class="stats-text">Projects Done</p>

                </div>
                <div class="col-sm-6 col-lg-3 stat-box wow bounceIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="1.5s">
                    <i class="fas fa-globe fa-3x"></i>
                    <span class="number text-center">300+</span>
                    <p class="stats-text">Freelancers</p>
                </div>
                <div class="col-sm-6 col-lg-3 stat-box wow bounceIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="2s">
                    <i class="fa fa-comments fa-fw fa-3x"></i>
                    <span class="number">100+</span>
                    <p class="stats-text">Question Answerd</p>
                </div>
            </div>
        </div>
    </section>
    <!--------------Contact Us----------------------->
    <section class="contact-us text-center" id="contact-us">
    <!-- <div class="overlay"></div> -->
        <div class="filed">
            <div class="container">
                
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
    <!-------------------Start Scroll To Top------------------------->
    <div id="scroll-top">
        <i class="fa fa-chevron-up fa-3x"></i>
    </div>

    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="js/app.js"></script>

    <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="106177740950680"
  theme_color="#ff4557">
      </div>
<!-- Load Facebook SDK for JavaScript --> <div id="fb-root"></div> <script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&amp;version=v2.12&amp;autoLogAppEvents=1'; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script> <!-- Your customer chat code --> <div class="fb-customerchat" attribution="setup_tool" page_id="469234840503746"> </div>


</body>

</html>