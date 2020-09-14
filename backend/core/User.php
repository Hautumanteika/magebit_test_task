<?php 
include 'Database.php';
class User
{
    public function __construct() {
        session_start();
    }

    public function register($name , $email , $password) {
        $db    = new Database();
        $check = $db -> connection -> query("SELECT * FROM registred_users WHERE email = '$email'");                        //Check if user exists
        if(mysqli_num_rows($check) == 0) {                                                                                  //If user not exists
        $encrypted_password = password_hash($password,  PASSWORD_DEFAULT);
        $sql = "INSERT INTO registred_users (name , email , password) values ('$name' , '$email' , '$encrypted_password')"; //Insert into database
        $input = mysqli_query($db -> connection,$sql);                                                                      //Input to database
        if ($input === TRUE) {
            header("Location: ../completed.html");                                                                          //To completed page
        } else {
            header("Location: ../uncompleted.html");                                                                        //To uncompleted page
        }
        }
        else {
            header("Location: ../uncompleted.html");                                                                        //To uncompleted page
        }
    }

    public function login($email , $password) {
        $db  = new Database();
        $sql = $db -> connection -> query("SELECT * FROM registred_users WHERE email = '$email' LIMIT 1");                  //Search if user exists
        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
        if($verify = password_verify($password, $row['password'])) {                                                        //Check if input password = hashed password in database
            $_SESSION['logged_user_name']  = $row['name'];                                                                  //Set logged_user_name
            $_SESSION['logged_user_email'] = $row['email'];                                                                 //Set logged_user_email
            header("Location: ../profile.html");                                                                            //To profile
        }
        else {
            header("Location: ../uncompleted.html");                                                                        //To uncompleted notification page
        }
    }

    public function logout() {
        unset($_SESSION['logged_user']);
        header("Location: ../index.html");
    }
}

?>
