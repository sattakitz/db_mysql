<?php
    require_once '../configs/db.class.php';

    class user extends connectDB {
        function getUser() {
            $sql = "SELECT * FROM users";
            return $this->conn->query($sql);
        }
        function getLoginUser($user, $password) {
            $sql = "SELECT * FROM users where username='$user' and password='$password'";
            return $this->conn->query($sql);
        }
    }
?>