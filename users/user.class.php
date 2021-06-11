<?php
    require_once '../configs/db.class.php';

    class user extends connectDB {
        function getUser() {
            $sql = "SELECT * FROM user";
            return $this->conn->query($sql);
        }
        function getLoginUser($user, $password) {
            $sql = "SELECT * FROM user where username='$user' and password='$password'";
            return $this->conn->query($sql);
        }
    }
?>