<?php
session_start();
// LOGIN USER
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";
$db = mysqli_connect('localhost', 'root', '', 'credit_card');
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
       echo "اسم المستخدم مطلوب من فضلك";
    }
    if (empty($password)) {
       echo "كلمة السر مطلوبة من فضلك ";
    }

    if (count($errors) == 0) {
        $password = $password;
        $query = "SELECT * FROM customer WHERE customer_email='$username' AND password='$password'";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "تم تسجيل دخولك بنجاح ";
            header('location: home.php');
        }else {
           echo "يوجد خطا فى البيانات المدخلة";
        }
    }
}
    ?>