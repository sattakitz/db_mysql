<?php
require_once './user.class.php';

$userFn = new user();

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
if (isset($postdata) && !empty($postdata)) {
    // $pwd = mysqli_real_escape_string($mysqli, trim($request->password));
    // $name = mysqli_real_escape_string($mysqli, trim($request->username));
    $name = $request->username;
    $pwd = $request->password;
    echo "username: " . $name . ", password: " . $pwd;

    $result = $userFn->getLoginUser($name, $pwd);
    echo json_encode($result);
    if ($result->num_rows > 1) {
        echo json_encode($rows);
    } else {
        http_response_code(404);
    }
}
