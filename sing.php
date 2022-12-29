<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="css/sing.css">
   <link rel="stylesheet" href="css/all.css">

    <title>صفحة تسسجيل الدخول</title>
</head>
<body>
    <div class="navbar">
        <div class="box">
                <img src="./img/logo.png" alt="">
                <a  href="https://mot.gov.eg" target="_blank">وزاره النقل</a>
                <div class="navbar-links">
                    <ul>
                        <li><a href="index.php">الصفحة الرئيسيه</a></li>
                        <li><a href="login.php">انشاء حساب</a></li>
                        <li><a href="sing.php">تسجيل دخول</a></li>

                    </ul>
                </div>
        </div>
    </div>
    <div class="form">
        <img src="./img/hh.jpeg" alt="">
        <h2>تسجيل الدخول</h2>
        <form action="go_login.php" method="post">
            <div class="input">
                <input type="email" placeholder="ايميل" name="username">
                <label for="">ايميل</label>
            </div>
            <div class="input">
                <input type="password" placeholder="كلمة السر" name="password">
                <label for="">كلمة السر</label>
            </div>
                <input type="submit" name="login_user" value="دخول">
        </form>
    </div>
</body>
</html>