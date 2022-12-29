<?php

session_start(); 
$card =$_SESSION['card_id'];
$from=$_POST['from'];
$to=$_POST['to'];
$cont=$_POST['count'];
$type=$_GET['type'];
$from_s="";
$to_s="";
$_type_s="";
$cont_s="";
$sum=0;
$conn = mysqli_connect("localhost","root","","credit_card");
if($from==1 || $to==6 || $cont==11){header('location:error.php');}
else{
  if($type==1){
    $_type_s="مونوريل";
    if($from==2){$from_s="العاصمة الاداريه";$sum+=5;}
    if($from==3){$from_s="6 اكتوبر";$sum+=5;}
    if($from==4){$from_s="مدينة نصر";$sum+=5;}
    if($from==5){$from_s="التجمع الخامس";$sum+=5;}

    if($to==7){$to_s="العاصمة الاداريه";$sum+=5;}
    if($to==8){$to_s="6 اكتوبر";$sum+=10;}
    if($to==9){$to_s="مدينة نصر";$sum+=15;}
    if($to==10){$to_s="التجمع الخامس";$sum+=20;}

    if($cont==12){$cont_s="1";$sum*=1;}
    if($cont==13){$cont_s="2";$sum*=2;}
    if($cont==14){$cont_s="3";$sum*=3;}
    if($cont==15){$cont_s="4";$sum*=4;}
    if($cont==16){$cont_s="5";$sum*=5;}
    if($cont==17){$cont_s="6";$sum*=6;}
    if($cont==18){$cont_s="7";$sum*=7;}
   
      mysqli_query($conn,"INSERT INTO `reservation`(`from_s`, `to_s`, `cont_s`, `type_s`, `user_card_id`, `reservation_details`) 
        VALUES('$from_s','$to_s','$cont_s','$_type_s','$card','15')");
	

  }
  elseif($type=2){
    $_type_s="قطار";
    if($from==2){$from_s="المنصورة";$sum+=5;}
    if($from==3){$from_s="المحلة الكبرى";$sum+=5;}
    if($from==4){$from_s="طنطا";$sum+=5;}
    if($from==5){$from_s="قويسنا";$sum+=5;}

    if($to==7){$to_s="المنصورة";$sum+=5;}
    if($to==8){$to_s="المحلة الكبري";$sum+=10;}
    if($to==9){$to_s="طنطا";$sum+=15;}
    if($to==10){$to_s="قويسنا";$sum+=20;}

    if($cont==12){$cont_s="1";$sum*=1;}
    if($cont==13){$cont_s="2";$sum*=2;}
    if($cont==14){$cont_s="3";$sum*=3;}
    if($cont==15){$cont_s="4";$sum*=4;}
    if($cont==16){$cont_s="5";$sum*=5;}
    if($cont==17){$cont_s="6";$sum*=6;}
    if($cont==18){$cont_s="7";$sum*=7;}

    mysqli_query($conn,"INSERT INTO `reservation`(`from_s`, `to_s`, `cont_s`, `type_s`, `user_card_id`, `reservation_details`) 
          VALUES('$from_s','$to_s','$cont_s','$_type_s','$card','15')");
	

  }
  else {
    $_type_s="مترو";
    if($from==2){$from_s="حلوان";$sum+=5;}
    if($from==3){$from_s="المرج الجديد";$sum+=5;}
    if($from==4){$from_s="شبرا";$sum+=5;}
    if($from==5){$from_s="المنيب";$sum+=5;}

    if($to==7){$to_s="حلوان";$sum+=5;}
    if($to==8){$to_s="المرج الجديد";$sum+=10;}
    if($to==9){$to_s="شبرا";$sum+=15;}
    if($to==10){$to_s="المنيب";$sum+=20;}

    if($cont==12){$cont_s="1";$sum*=1;}
    if($cont==13){$cont_s="2";$sum*=2;}
    if($cont==14){$cont_s="3";$sum*=3;}
    if($cont==15){$cont_s="4";$sum*=4;}
    if($cont==16){$cont_s="5";$sum*=5;}
    if($cont==17){$cont_s="6";$sum*=6;}
    if($cont==18){$cont_s="7";$sum*=7;}
      mysqli_query($conn,"INSERT INTO `reservation`(`from_s`, `to_s`, `cont_s`, `type_s`, `user_card_id`, `reservation_details`) 
            VALUES('$from_s','$to_s','$cont_s','$_type_s','$card','$sum')");
        

  }

}




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'C:\xampp\phpMyAdmin\vendor\autoload.php';

///
require 'C:\xampp\phpMyAdmin\vendor\PHPMailer-master/src/Exception.php';
require 'C:\xampp\phpMyAdmin\vendor\PHPMailer-master/src/PHPMailer.php';
require 'C:\xampp\phpMyAdmin\vendor\PHPMailer-master/src/SMTP.php';

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
// require 'C:\xampp\vendor\autoload.php';
// //require 'C:\xampp\vendor\phpmailer\phpmailer\src\PHPMailer.php';
// require 'C:\xampp\vendor\phpmailer\phpmailer\src\SMTP.php';

// //Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer(true);
$mail = new PHPMailer(true);


 
 $w = mysqli_query($conn, "SELECT * FROM `customer` WHERE customer_card_num=$card") or die(mysqli_connect_error());
 //$s = mysqli_num_rows($w);
 $rows = mysqli_fetch_array($w);
 $email=$rows['customer_email'];
 $query = "UPDATE `customer` SET `balance`=`balance`-$sum WHERE customer_card_num ='$card'";

 
 $results = mysqli_query($conn, $query);
if($results){
  //emal send
  try {
      //Server settings
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'transportationintelligent@gmail.com';                     //SMTP username
      $mail->Password   = 'cusyguotagmbogez';                               //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('transportationintelligent@gmail.com', 'INT Transportation');
      $mail->addAddress($email);     //Add a recipientبريد العكيل

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Payment confirmation';
      $mail->Body    = '
      hello customer,successfully booked, seat number 20 , ticket price '.$cont_s.'.
      ticket Details 
      from: '.$from_s.' to: '.$to_s.' number of passengers: '.$cont_s .' and tickets price '.$sum.'
      thank you for using the service.
      ';
      $mail->send();
      echo 'Message has been sent';
      header('location:su.php');

  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }




  }else{echo"error in system";}
  