<?php

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'credit_card');

$cus_name = mysqli_real_escape_string($db, $_POST['cus_name']);
$cus_add = mysqli_real_escape_string($db, $_POST['cus_add']);
$cus_con_num = mysqli_real_escape_string($db, $_POST['cus_con_num']);
$cus_email = mysqli_real_escape_string($db, $_POST['cus_email']);
$cus_id= mysqli_real_escape_string($db,$_POST['cus_id']);

$cus_card_num = mysqli_real_escape_string($db, $_POST['cus_card_num']);
$cus_card_bank_name = mysqli_real_escape_string($db, $_POST['cus_card_bank_name']);
$cus_card_cvv = mysqli_real_escape_string($db, $_POST['cus_card_cvv']);
$cus_v_t = mysqli_real_escape_string($db, $_POST['cus_v_t']);
$cus_balance = mysqli_real_escape_string($db, $_POST['cus_balance']);

$query = "INSERT INTO `card_detals`(`card_number`, `bank_name`, `cvv`, `valid_through`, `balance`) VALUES ('$cus_card_num','$cus_card_bank_name','$cus_card_cvv','$cus_v_t','$cus_balance')";
$results = mysqli_query($db, $query);
$query = "INSERT INTO `customer`(`customer_name`, `customer_address`, `customer_contact`, `customer_email`, `customer_card_num`, `customer_id`) VALUES ('$cus_name','$cus_add','$cus_con_num','$cus_email','$cus_card_num','$cus_id')";
$results = mysqli_query($db, $query);
echo "add custom true";

