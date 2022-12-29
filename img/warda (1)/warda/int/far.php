<?php
$conn = mysqli_connect('localhost', 'root', '', 'credit_card');
$cus_card_num = mysqli_real_escape_string($conn, $_GET['cus_card_num']);
$cont = mysqli_real_escape_string($conn, $_GET['cont']);
$query = "UPDATE `card_detals` SET `balance`=`balance`-$cont WHERE card_number ='$cus_card_num'";
$results = mysqli_query($conn, $query);
echo "tm bnga7";