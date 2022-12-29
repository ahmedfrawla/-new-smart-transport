<?php
	session_start();
	include('conn.php');
	
	//load phpmailer
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

	
	
	//variable
	$username = $_POST['username']; 
	$email=$_POST['email'];
	$password=$_POST['password'];
	$customer_contact=$_POST['customer_contact'];
	$cus_address=$_POST['cus_address'];
	$card_num=$_POST['card_num'];
	$_SESSION['username']=$email;

	mysqli_query($conn,"INSERT INTO `customer`(`customer_name`, `customer_address`, `customer_contact`, `customer_email`, `customer_card_num`, `password`) VALUES 
		('$username','$cus_address','$customer_contact','$email','$card_num','$password')");
	
	
	
	//upload image
	$target_dir = "admin/userimg/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 1;
	}
	}

	// Check if file already exists
	if (file_exists($target_file)) {
	echo "Sorry, file already exists.";
	$uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
	}
	//echo $target_dir ."=========".$target_file."=========".$card_num;
	rename($target_file,$target_dir.$card_num.".jpg");
	
	//send email confirm
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
				$mail->Subject = 'wellcome';
				$mail->Body    = 'hello DEAR CUSTOMER ,welcome to ';
				$mail->send();
				echo 'Message has been sent';
				
			
			} catch (Exception $e) {
				echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
			}

			$_SESSION['username'] = $email;
			$_SESSION['success'] = "لقد قمت بتسجيل دخولك بنجاح";
			header('location: home.php');
	
?>