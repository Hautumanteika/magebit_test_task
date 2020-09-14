<?php

include_once '../backend/config.php';

class Database {
    public $connection;

    public function __construct() {
        $this->connection = mysqli_connect(hostname, user, password, database);
        $this->connect();
        if (!$this->connection)
            die("Connection failed: " . mysqli_connect_error());
    }

    public function connect() {
        $tbl_users = 'CREATE TABLE IF NOT EXISTS registred_users (
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(64) NOT NULL,
            email VARCHAR(30) NOT NULL,
            password VARCHAR(256) NOT NULL
          )';
        mysqli_query($this -> connection,$tbl_users);
    }
}

?>