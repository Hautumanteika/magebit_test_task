<?php
include 'core/User.php';

$user = new User();

if(isset($_POST['Login'])) {
    $useremail = $_POST["login_user_email"];        //Get email
    $userpass  = $_POST["login_user_password"];     //Ger password
    if(empty($useremail) || empty($userpass)) {     //Check if not empty
        header("Location: ../uncompleted.html");    //To error page
    }
    else {
        $user -> login($useremail , $userpass);     //Send data to user class
    }
}
?>
