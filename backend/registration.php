<?php
include 'core/User.php';

$user = new User();

if(isset($_POST["Sign_up"])) {
    $username = $_POST['user_name'];
    $useremail = $_POST['user_email'];
    $userpass = $_POST['user_password'];
    if(empty($username) || empty($useremail) || empty($userpass)) {
        header("Location: ../uncompleted.html");
    }
    else {
        $user -> register($username , $useremail , $userpass);
    }
}
?>