<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة الرئيسيه</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/all.min.css">
<style>

.videoContainer video {
    position: fixed;
    height: 100vh;
    width: 110%;
    top: 0px;
    left: 0px;
    z-index: -1;
    object-fit: cover;
	margin-right:120px
}
</style>
</head>
<body>
    <header>
        <div class="box">
            <img src="./img/logo.png" alt="">
            <a  href="https://mot.gov.eg" target="_blank">وزاره النقل</a>
            <div class="navbar-links">
                <ul>
                    <li><a href="index.php">الصفحة الرئيسيه</a></li>
                    <li><a href="login.php" >انشاء حساب</a></li>
                    <li><a href="sing.php">تسجيل دخول</a></li>
                </ul>
            </div>
            <div class="introduction">
                <h1>اهلا بكم  <span> في وزاره النقل</span></h1>
               </div>
    </div>
    </header>
    <div class="articles" id="articles">
        <h2 class="dd">Articles</h2>
        <div class="container">
            <div class="box">
            <img src="img/درجه اولي1.jpg" alt="" />
            <div class="content">
                <h3>درجه اولي</h3>

            </div>
            <div class="info">
                <a href="">Read More</a>
                <i class="fas fa-long-arrow-alt-right"></i>
            </div>
            </div>
            <div class="box">
                <img src="img/درجه اولي1.jpg" alt="" />
            <div class="content">
                <h3>درجه تانيه</h3>
            </div>
            <div class="info">
                <a href="">Read More</a>
                <i class="fas fa-long-arrow-alt-right"></i>
            </div>
            </div>
            <div class="box">
                <img src="img/gt.jpg" alt="" />
            <div class="content">
                <h3>درجه تالته</h3>
            </div>
            <div class="info">
                <a href="">Read More</a>
                <i class="fas fa-long-arrow-alt-right"></i>
            </div>
            </div>
        </div>
        </div>

  
    		 <div id="video" class="videoContainer">
                    <video id="wallpaper-video" class="b-lazy b-loaded" playsinline="" autoplay="" loop="" muted=""> <source src="videos/videoHome-31174.mp4" type="video/mp4"></video>
             </div>
                
    <!-- start contact -->
    <div class="con">
        <div class="contener">
            <div class="hading">
                <h2>تواصل معنا</h2>
                <p>
				يمكنك ترك اتفسسار او مقترح او شكوى
                </p>
            </div>
            <div class="cont">
                <form action="send_msg.php">
                <input class="mian" type="text" name="name" placeholder="اسمك">
                <input class="mian" type="email" name="mail" placeholder="ايميل">
                <textarea name="massage" placeholder="اترك رساله او مقترح او شكوى" class="mian"></textarea>
                <input type="submit" value="Send Massege">
                </form>
                <div class="info">
                    <h4>ارقام التواصل</h4>
                    <span class="phon">01061018494</span>
                    <span class="phon">01063908516</span>
                    <h4>العنوان الرئيسي</h4>
                    <address>المحلة الكبرى </address>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!-- Start Footer  -->
    <footer>
        <div class="socil">
            <div class="socil-icon">
            <a href="https://www.facebook.com/MinistryTransportation"><i class="fa-brands fa-facebook-square"></i></a>
            </div>
            <div class="socil-icon">
            <a href="https://www.youtube.com/channel/UCQohChyiu_oOOxA6WOFY-jQ"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="socil-icon" >
            <a href="https://mot.gov.eg/"><i class="fa-solid fa-train-subway"></i></a>
            </div>

        </div>
    </footer>
    <!-- End Footer  -->
    
</body>
</html>