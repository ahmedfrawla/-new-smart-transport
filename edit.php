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
                    <li><a href="users.php" >اداره المستخدمين</a></li>
                    <li><a href="add_user.php">اضافة المستخدمين</a></li>
                </ul>
            </div>
            <div class="introduction">
                <h1>اهلا بكم  <span> في وزاره النقل</span></h1>
                <p >صفحة التحكم الخاصة بالاداره </p>
            </div>
    </div>
    </header>
    <div id="video" class="videoContainer">
        <video id="wallpaper-video" class="b-lazy b-loaded" playsinline="" autoplay="" loop="" muted=""> <source src="videos/videoHome-31174.mp4" type="video/mp4"></video>
 </div>
 <?php

$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `customer` where customer_id='$id'");
$row=mysqli_fetch_array($query);
?>
<section id="all">

	<div class="container">
		<div class="content col-xs-12 col-md-12">

<div class="jumbotron jumbotron-fluid" >
<div class="container">

<form method="POST" action="update.php?id=<?php echo $id; ?> "  style="font-family:he1 ; font-size:16px">
<fieldset>
<legend> تعديل البيانات</legend>
	<label>اسم المستخدم</label><br><input type="text" value="<?php echo $row['customer_name']; ?>" name="username"><br><br>
	<label>الايميل</label><br><input type="text" value="<?php echo $row['customer_email']; ?>" name="email"><br><br>
	<label>كلمة السر</label><br><input type="text" value="<?php echo $row['password']; ?>" name="password"><br><br>
	<label>رقم البطاقة</label><br><input type="text" value="<?php echo $row['customer_card_num']; ?>" name="card_num"><br><br>
	<label>الرصيد</label><br><input type="text" value="<?php echo $row['balance']; ?>" name="balance"><br><br>
	
	
	<input type="submit" name="submit" Value="تعديل" ><br><br>
	<button type="button" class="btn btn-success"><a href="users.php">للعودة </a></button>
	</fieldset>
</form>

</div>
</div>
	  </div>

</div>



	  




</sectio

    
</body>
</html>
n>

  