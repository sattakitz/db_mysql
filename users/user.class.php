<?php
    require_once '../configs/db.class.php';

    class user extends connectDB {
        function getUser() {
            $query = $this->pdo->query('SELECT * FROM users');
            return $query;
        }
    }
?>