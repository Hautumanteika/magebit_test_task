<?php
include 'core/User.php';

$user = new User();

if(isset($_POST['Login'])) {
    $useremail = $_POST["login_user_email"];
    $userpass = $_POST["login_user_password"];
    if(empty($useremail) || empty($userpass)) {
        header("Error: 'one of fields is empty'");
        header("Location: ../uncompleted.html");
    }
    else {
        $user -> login($useremail , $userpass);
    }
}
?>
