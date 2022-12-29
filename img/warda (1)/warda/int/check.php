<?php
$conn = mysqli_connect('localhost', 'root', '', 'credit_card');
$cus_card_num = mysqli_real_escape_string($conn, $_POST['cus_card_num']);
$q = mysqli_query($conn, "SELECT `card_number`, `bank_name`, `cvv`, `valid_through`, `balance` FROM `card_detals` WHERE card_number=$cus_card_num") or die(mysqli_connect_error());
$c = mysqli_num_rows($q);
if($c==0)
{echo "card number not found";}
else{
    while($row = mysqli_fetch_array($q)){
        $balane = $row['balance'];
        
    }

    echo "balance is $balane";
}

?>