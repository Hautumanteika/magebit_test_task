<?php
include 'core/User.php';

$user = new User();

if(isset($_POST["Sign_up"])) {
    $username  = $_POST['user_name'];                               //Get name
    $useremail = $_POST['user_email'];                              //Get email
    $userpass  = $_POST['user_password'];                           //Get password
    if(empty($username) || empty($useremail) || empty($userpass)) { //Check if inputs aren't empty
        header("Location: ../uncompleted.html");
    }
    else {
        $user -> register($username , $useremail , $userpass);       //Send data to User class
    }
}
?>
