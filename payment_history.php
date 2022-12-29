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
td{
border: 1px solid #ddd !important;}
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

     <section id="all">

    <div class="container">
        <div class="content col-xs-12 col-md-12">

    <div class="jumbotron jumbotron-fluid" >
    <div class="container">

    <form action="#" method="POST" style="font-family:he1 ; font-size:18px">
            <h3>سجل العمليات للمسخدم   </h3>
        <table class="table table-striped"  dir="rtl">
        <thead>
            <th>id</th>
            <th>تاريخ العمليه</th>
            <th>وقت العمليه</th>
            <th>التكلفه</th>	
            <th>تفاصيل</th>
            <th>النوع</th>
            
            

        </thead>
        <tbody>
            <?php
                include('conn.php');
                $query=mysqli_query($conn,"SELECT * FROM `payment` WHERE `purchase_user_card`=$_GET[card_num]");
                while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['payment_id']; ?></td>
                        <td><?php echo $row['payment_date']; ?></td>
                        <td><?php echo $row['payment_time']; ?></td>
                        <td><?php echo $row['payment_amount'];?></td>
                        <td><?php echo $row['payment_type'];?></td>
                        <td><?php echo $row['payment_details'];?></td>
                        
                        
                        
                        
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table><br><br><br>
    <h3>سجل التذاكر  </h3><table class="table table-striped"  dir="rtl">
        <thead>
            <th>id</th>
            <th>قيام</th>
            <th>وصول</th>
            <th>النوع</th>	
            <th>تفاصيل</th>
            <th>عدد الركاب</th>
            
            

        </thead>
        <tbody>
            <?php
                include('conn.php');
                $query=mysqli_query($conn,"SELECT * FROM `reservation` WHERE `user_card_id`=$_GET[card_num]");
                while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['from_s']; ?></td>
                        <td><?php echo $row['to_s']; ?></td>
                        <td><?php echo $row['type_s'];?></td>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['cont_s'];?></td>
                
                        
                        
                        
                        
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
    </div>
    </div>

    </div>

    </div>

    




    </section>

    </center>
    </header>
    <div id="video" class="videoContainer">
        <video id="wallpaper-video" class="b-lazy b-loaded" playsinline="" autoplay="" loop="" muted=""> <source src="videos/videoHome-31174.mp4" type="video/mp4"></video>
 </div>

    
</body>
</html>