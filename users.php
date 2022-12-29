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
 <div class="containe" width="50%">


 <section id="all">

        <div class="containe">
            <div class="content col-xs-12 col-md-12">

<div class="jumbotron jumbotron-fluid" >
  <div class="containe">

       <form action="#" method="POST" style="font-family:he1 ; font-size:18px;background-color:#ffffffaa">
	             <h3>بيانات المستخدمين   </h3>
             <table class="table table-striped" style="border-collapse: collapse !important;" dir="rtl">
			<thead>
				<th>اسم المستخدم</th>
				<th>الايميل</th>
				<th>كلمة السر</th>
				<th>رقم الكارت</th>	
				<th>الرصيد</th>
				
				
		
			</thead>
			<tbody>
				<?php
					
					$query=mysqli_query(mysqli_connect('localhost', 'root', '', 'credit_card'),"SELECT * FROM `customer`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['customer_name']; ?></td>
							<td><?php echo $row['customer_email']; ?></td>
							<td><?php echo $row['password']; ?></td>
							<td><?php echo $row['customer_card_num'];?></td>
							<td><?php echo $row['balance'];?></td>
							
							
							
							<td>	
								<button type="button" class="btn btn-success"><a href="edit.php?id=<?php echo $row['customer_id']; ?>">تعديل البيانات</a></button>
							    <button type="button" class="btn btn-danger"><a href="delete.php?id=<?php echo $row['customer_id']; ?> " >حذف البيانات </a></button>

								<button type="button" class="btn btn-his" style="background-color:#bfbfbf" ><a href="payment_history.php?card_num=<?php echo $row['customer_card_num']; ?> " >payment_history</a></button>

								</td>
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
</div></center>
    </header>
    <div id="video" class="videoContainer">
        <video id="wallpaper-video" class="b-lazy b-loaded" playsinline="" autoplay="" loop="" muted=""> <source src="videos/videoHome-31174.mp4" type="video/mp4"></video>
 </div>

    
</body>
</html>