
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>صفحة انشاء الحساب</title>
    <link rel="stylesheet" href="css/loogn.css">
    <link rel="stylesheet" href="css/all.css">

</head>
<body>   
     <div class="navbar">
    <div class="box">
            <img src="./img/logo.png" alt="">
           
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
    <div class="contener">
        <h1 class="hh">واجهة انشاء حساب</h1>
        <form action="reg_user.php" method="POST"  enctype="multipart/form-data" >
        <div class="input">
            <input type="text"  placeholder="اسم المستخدم" name="username">
            <input type="password" placeholder="كلمة السر" name="password"> 
			<input type="email"        placeholder="ايميل" name="email">
            <input type="text"        placeholder="العنوان" name="cus_address">
            <input type="text"    placeholder="رقم الهاتف" name="customer_contact">
            <input type="text"   placeholder="رقم البطاقه" name="card_num">
            <br><br><lable style="color:white;"> الصورة الشخصيه</lable><input type="file" name="fileToUpload" id="fileToUpload">
        </div>
          <input type="submit"  name="submit" Value="تسجيل" >
    </form>
</div>
</div>
</body>
</html>