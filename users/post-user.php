<?php
require_once './user.class.php';

$userFn = new user();

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
// echo json_encode($postdata);
if (isset($postdata) && !empty($postdata)) {
    // $name = (trim($request->username));
    // $pwd = (trim($request->password));
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
