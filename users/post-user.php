<?php
require_once '../configs/db.class.php';

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
if (isset($postdata) && !empty($postdata)) {
    $pwd = trim($request->password);
    $username = trim($request->username);
    $sql = "SELECT * FROM users where username='$username' and password='$pwd'";
    if ($result->num_rows >= 1) {
        $member = $result->fetch_assoc();
        $_SESSION['Member'] = $member;
        $_SESSION['newLogin'] = 'Welcome.';
        echo "<script> window.location.href = './'; </script>";
    } else {
        echo "<script> window.alert('Username or Password incorrected!'); </script>";
    }
}
?>