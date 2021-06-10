<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json; charset=UTF-8");

class connectDB {

    //Enter your database connection details here.
    public $pdo;
    private $host = 'localhost'; //HOST NAME.
    private $db_name = 'market_doll_db'; //Database Name
    private $db_username = 'root'; //Database Username
    private $db_password = ''; //Database Password

    function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->db_username, $this->db_password);
        } catch (PDOException $e) {
            http_response_code(404);
            exit('Error Connecting To DataBase');
        }
    }
}
