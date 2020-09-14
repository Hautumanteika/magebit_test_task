<?php 
include 'Database.php';
class User
{
    public function __construct() {
        session_start();
    }

    public function register($name , $email , $password) {
        $db = new Database();
        $check = $db -> connection -> query("SELECT * FROM registred_users WHERE email = '$email'");
        if(mysqli_num_rows($check) == 0) {
        $encrypted_password = password_hash($password,  PASSWORD_DEFAULT);
        $sql = "INSERT INTO registred_users (name , email , password) values ('$name' , '$email' , '$encrypted_password')";
        $input = mysqli_query($db -> connection,$sql);
        if ($input === TRUE) {
            header("Location: ../completed.html");
        } else {
            header("Location: ../uncompleted.html");
        }
        }
        else {
            header("Location: ../uncompleted.html");
        }
    }

    public function login($email , $password) {
        $db = new Database();
        $sql = $db -> connection -> query("SELECT * FROM registred_users WHERE email = '$email' LIMIT 1");
        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        if($verify = password_verify($password, $row['password'])) {
            $_SESSION['logged_user_name'] = $row['name'];
            $_SESSION['logged_user_email'] = $row['email'];
            header("Location: ../profile.html");
        }
        else {
            header("Location: ../uncompleted.html");
        }
    }

    public function logout() {
        unset($_SESSION['logged_user']);
        header("Location: ../index.html");
    }
}

?>