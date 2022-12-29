<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة التحكم</title>
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

input{background-color: transparent;
    border-radius: 8px;
    height: 22px;
    width: 50%;}
</style>
</head>
<body>
    <header>
        <div class="box">
            <img src="./img/logo.png" alt="">
            <a  href="https://mot.gov.eg" target="_blank">وزاره النقل</a>
            <div class="navbar-links">
                <ul>
                    <li><a href="qr.html"> qr سيستم</a></li>
                    <li><a href="users.php">اداره المستخدمين</a></li>
                    <li><a href="add_user.php">اضافة المستخدمين</a></li>
                </ul>
            </div>
            
    </div>
	<center>
 <div class="container" width="50%">

<form method="POST" action="new_users.php"  enctype="multipart/form-data" style="font-family:he1 ; font-size:16px;">

<legend>اضافة مستخدم جديد <legend><hr>

    <label>اسم المستخدم</label><br><input type="text" value="" name="username"><br><br>
    <label>الايميل</label><br><input type="text" value="" name="email"><br><br>
    <label>كلمة السر</label><br><input type="text" value="" name="password"><br><br>
    
    <label>رقم الهاتف</label><br><input type="text" value="" name="customer_contact"><br><br>
    <label>العنوان</label><br><input type="text" value="" name="cus_address"><br><br>
        
    <label>رقم البطاقة</label><br><input type="text" value="" name="card_num"><br><br>
    <label>الرصيد</label><br><input type="text" value="" name="balance"><br><br>
    <lable> الصورة الشخصيه</lable><input type="file" name="fileToUpload" id="fileToUpload"><br><br>
    
    <input type="submit" style="background-color: white;" name="submit" Value="اضافة" ><br><br>
    <button type="button" class="btn btn-success"><a href="users.php">للعودة </a></button>
  
</form>

</div></center>
    </header>
   
 <div id="video" class="videoContainer">
        <video id="wallpaper-video" class="b-lazy b-loaded" playsinline="" autoplay="" loop="" muted=""> <source src="videos/videoHome-31174.mp4" type="video/mp4"></video>
 </div>
    
</body>
</html>