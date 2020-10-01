
<?php
require 'config/db_function.php';
?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">

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
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&family=Tajawal:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
</head>

<body class="Ar">


<?php


if(isset($_POST['contact'])){
    if(isset($_POST['name']) && $_POST['name'] !="" &&
        isset($_POST['email']) && $_POST['email'] !="" &&
        isset($_POST['subject']) && $_POST['subject'] !="" &&
        isset($_POST['message']) && $_POST['message'] !=""  ){



        $retval=contact($_POST['name'],$_POST['email'],$_POST['subject'],$_POST['message']);
        if($retval ==1){
            $message=" &#128515 شكرا لتواصلك معنا";
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
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link hvr-pop" href="index-rtl.php">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-pop" href="#about-us">عن الشركة</a>
                    </li>
                    <li class="nav-item dropdown services">
         <a class="nav-link dropdown-toggle hvr-pop" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          خدماتنا
        </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="web-rtl.php">تطوير المواقع الالكترونية</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="lang-rtl.php">الترجمة</a>
                </div>
                </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-pop" href="join-rtl.php">انضم الينا<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-pop" href="#contact-us">تواصل معنا <span class="sr-only">(current)</span></a>
                    </li> 
                </ul>
            </div>

            <img class="logo hvr-pulse shrink Ar" src="img/logop.png">
            <a class="navbar-brand wow rubberBand" href="#">
                <span class="wow bounceInDown Ar" data-wow-duration="1s" data-wow-offset="200" data-wow-delay=".5s">ترانز</span>
                <span class="wow bounceInDown Ar" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="1s">ويب</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <li class="nav-item dropdown" id="lang">
        <a class="nav-link dropdown-toggle Ar" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          اللغة
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item active" href="index-rtl.php">العربية</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php">الانجليزية</a>
        </div>
      </li>
        </div>
    </nav>
    <!----------------Start Header---------------------->
    <section class="header">
    <div class="overlay wow zoomIn">
    <div class="content">
            <h1 class="text-center Ar">
            <span class="solutions" style="color:#fff">ترانز</span><span class="transweb">ويب</span><br>
             <br>
              شركة مختصة في تقديم خدمات الترجمة<br> وتطوير المواقع الإلكترونية.</h1>
        </div>
        </div>
    </section>
    <!------------Section Overview--------------------->
    <section class="overview text-center" id="about-us">
        <div class="container">
        <h2 class="head-after Ar">نبذة عن الشركة</h2>
    
      <video controls="controls" poster="img/logop.png" class="wow zoomIn Ar" data-wow-duration="2s" data-wow-offset="270"> 
      <source src="img/Ad.mp4" type="video/mp4">
     <source src="img/Ad.ogg" type="video/ogg"> 
        </video>
        </div>
        <button type="button" class="btn-md btn-block hvr-shrink">
                    <a href="read-rtl.php" class="Ar">اقرأ المزيد.. </a>
                </button>
    </section>
    <!----------------Our Services----------------->
    <section class="our-services" id="ser">
        <div class="container">
            <h2 class="head-after text-center ser-Ar">خدماتنا</h2>
            <div class="row">
                <!----------Card 1--------------->
                <div class="col-md-6  text-right wow fadeInRight" data-wow-duration="2s">
                    <div class="card Ar">
                        <img class="card-img-top" src="img/trans1.png">
                        <div class="card-body">
                            <h4 class="card-title Ar">الترجمة</h4>
                            <p class="card-text Ar">
                            تمكنك شركة ترانزويب من الوصول الى خدمة ترجمة عالية الجودة من مكانك ودون جهد 
                            كما ويمكننا ترجمة جميع ملفاتك الإدارية و مراسلاتك المهنية و ترجمة أفلامك و عروضك التقديمية.
                               
                            </p>
                                <a class="link hvr-shrink Ar" href="lang-rtl.php">اقرأالمزيد</a>
                        </div>
                    </div>
                </div>
                <!---------Card 2------------------->
                <div class="col-md-6 text-right wow fadeInLeft" data-wow-duration="2s">
                    <div class="card Ar">
                        <img class="card-img-top" src="img/web.jpg">
                        <div class="card-body" id="card-body">
                            <h4 class="card-title Ar">تطوير الويب</h4>
                            <p class="card-text Ar">
                            نقدم خدمة تصميم وتطوير المواقع الإلكترونية للتناسب مع طبيعة عملك والإرتقاء به للمستوى التالي من خلال مساعدة أمهر المبرمجين والمصممين.
خدماتنا في تطوير الويب تشمل جميع المواقع الإلكترونية من المواقع التعريفية للشركات إلى التطبيقات الداخلية ومواقع الخدمات الذاتية.

                             </p>
                                <a class="link hvr-shrink Ar" href="web-rtl.php">خدمات تطوير الويب</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------------Featured Work---------------------->
    <section class="featured_work text-center">
        <div class="container">
        <div class="container-feat Ar">
            <h2 class="head-after featured-Ar">المزيد حول خدماتنا</h2>
            <p class="text-center Ar">
تقدم شركتنا العديد من الخدمات المتعلقة بالترجمة واللغات وتطوير مواقع الويب!
</p>
        </div>
        <div class="feature-box Ar">
        <div class="row">
        <div class="box wow bounceInDown" data-wow-duration="2s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
                <span class="Ar"><i class="fas fa-code"></i></span>
                <h4 class="Ar">تطوير الواجهات الأمامية</h4>
                <p class="Ar">  تصميم واجهات الموقع باستخدام لغات HTML, CSS ,JAVASCRIPT وغيرها.</p>
            </div>
        </div>
        <div class="box wow bounceInDown" data-wow-duration="2.5s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
                <span class="Ar"><i class="fas fa-laptop-code"></i></span>
                <h4 class="Ar">تطوير الواجهات الخلفية</h4>
                <p class="Ar"> تطوير وظائف الموقع وتمكين المستخدم من حفظ البيانات والتعامل معها. </p>
            </div>
        </div>
        <div class="box wow bounceInDown" data-wow-duration="3s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
                <span class="Ar"><i class="fas fa-tasks"></i></span>
                <h4 class="Ar">تصميم وتطوير المواقع</h4>
                <p class="Ar">تصميم وتطوير واجهات الموقع وجعل موقع الويب أكثر حيوية. </p>
            </div>
        </div>
                </div>
        <!-- ******************************* -->
        <div class="row">
        <div class="box wow bounceInDown" data-wow-duration="2s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
            <span class="Ar"><i class="fas fa-pen-alt"></i></span>
            <h4 class="Ar">كتابة المحتوى</h4>
            <p class="Ar"> كتاب محتوى جذاب لموقعك أو بضاعتك أو منشورات السوشيال ميديا الخاصة بك للحصول على المزيد من التفاعل والمجهور.</p>
            </div>
        </div>
        <div class="box wow bounceInDown" data-wow-duration="2.5s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
            <span class="Ar"><i class=" voice fas fa-microphone-alt"></i></span>
            <h4 class="Ar">التعليق الصوتي</h4>
            <p class="Ar">توظيف أمهر المعلقين الصوتيين لمنشوراتك الدعائية ووضع طابع جذاب في حملتك الإعلانية.</p>
            </div>
        </div>
        <div class="box wow bounceInDown" data-wow-duration="3s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
            <span class="Ar"><i class="fas fa-globe-europe"></i></span>
            <h4 class="Ar">الترجمة</h4>
            <p class="Ar">ترجمة النصوص والمقالات والكتب من لغتها الأم إلى اللغة المراد الترجمة لها مع الاهتمام بجوانبها الثقافية واللغوية.</p>
            </div>
        </div>
                </div>
        <!-- ******************************* -->
        <div class="row">
        <div class="box wow bounceInDown" data-wow-duration="2s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
            <span class="Ar"><i class="fas fa-keyboard"></i></span>
            <h4 class="Ar">التفريغ السمعي</h4>
            <p class="Ar">تحويل الملفات الصوتية المسموعة إلى نصوص مكتوبة. </p>
            </div>
        </div>
        <div class="box wow bounceInDown" data-wow-duration="2.5s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
            <span class="Ar"><i class="fas fa-language"></i></span>
            <h4 class="Ar">السبتايتل</h4>
            <p class="Ar">وضع الكتابة على الفيديوهات وترجمتها حسب رغبة الزبون.
</p>
            </div>
        </div>
        <div class="box wow bounceInDown" data-wow-duration="3s" data-wow-offset="270">
            <div class="col-md-4 col-lg">
            <span class="Ar"><i class="fas fa-audio-description"></i></span>
            <h4 class="Ar">الترجمة الفورية</h4>
            <p class="Ar"> نقدم خدمة الترجمة الفورية سواء على أرض الواقع أو أونلاين. </p>
            </div>
        </div>
                </div>
            </div>
        </div>
    </section>

    <!--******************* Start Statistic**************** -->
    <section class="stats text-center Ar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 stat-box wow bounceIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay=".5s">
                    <i class="fa fa-users fa-fw fa-3x"></i>
                    <span class="number">9+</span>
                    <p class="stats-text">العملاء الراضون</p>
                </div>
                <div class="col-sm-6 col-lg-3 stat-box wow bounceIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="1s">
                    <i class="fa fa-briefcase fa-fw fa-3x"></i>
                    <span class="number">45+</span>
                    <p class="stats-text">المشاريع المنجزة</p>

                </div>
                <div class="col-sm-6 col-lg-3 stat-box wow bounceIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="1.5s">
                    <i class="fas fa-globe fa-3x"></i>
                    <span class="number text-center">300+</span>
                    <p class="stats-text">فريلانسرز</p>
                </div>
                <div class="col-sm-6 col-lg-3 stat-box wow bounceIn" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="2s">
                    <i class="fa fa-comments fa-fw fa-3x"></i>
                    <span class="number">100+</span>
                    <p class="stats-text">الأسئلة المجابة</p>
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
                <h2 class="Ar"> تواصل معنا !</h2>
                <p class="lead Ar">لا تتردد في التواصل معنا في أي وقت
                </p>
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
                                <input type="text" class="form-control input-lg text-right Ar" placeholder="الاسم"  name="name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-lg text-right Ar" placeholder="البريد الالكتروني" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-lg text-right Ar" placeholder="الموضوع" name="subject" >
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="message" class="form-control input-lg text-right Ar"
                                    placeholder="رسالتك" ></textarea>
                            </div>
                         <a href="#contact-us" class="cont-link"><button type="submit"  class="btn btn-danger btn-lg btn-block" name="contact">تواصل معنا</button></a>
                        </div>
                        <div class="col-lg-6">
                            <p class="par Ar">سعداء بتواصلك معنا !</p>
                            <div class="whats Ar"> <i class="fab fa-whatsapp"></i> 972567841422+</div>
                            <div class="email Ar"> <i class="fas fa-envelope"></i> <a href="#">transweb.0056@gmail.com</a>
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
            <div class="row text-right">
            <div class="col-sm-3 hosting">
                <img src="img/host.png" class="host">
                <p>
شركة ترانزويب مستضافة من قبل حاضنة الأعمال Gaza Goes Global.
                </p>
                
                </div>
                <div class="col-sm-3 footer-ser">
                    <h4>خدماتنا</h4>
                   <p><a href="web-rtl.php"> تطوير المواقع الالكترونية</a></p>
                   <p><a href="lang-rtl.php">الترجمة بجميع مجالاتها</a></p>
                </div>
                <div class="col-sm-3">
                <h4>روابط سريعة</h4>
                <ul>
                <li><a href="index-rtl.php">الرئيسية</a></li>
                <li><a href="read-rtl.php">من نحن</a></li>
                <li><a href="contact-rtl.php">تواصل معنا</a></li>
                </ul>
                </div>
              
                <div class="col-sm-3 social">
                <h4>تواصل معنا </h4>
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
                </a>
                <br><br>

                <a href="index.php" class="global">
                <i class="fas fa-globe-europe"></i>  
                <span>English</span>
                </a>
                </div>
            </div>
        </div>
        <div class="copy-right">
                <p class="text-center"><i class="far fa-copyright"></i> 2020
                  جميع الحقوق محفوظة 
                <span style="color:#ff4557;">لشركة  TransWeb Solutions.</span>
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
</body>

</html>