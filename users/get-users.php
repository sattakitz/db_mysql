<?php

include_once './user.class.php';

$userFn = new user();

$users = $userFn->getUser();

echo json_encode($users->fetch_all());

// while ($user = $users->fetch()) {
//     // print_r($user);
//     echo "id: " . $user['id'] . " | username: " . $user['username'] . " | password: " . $user['password'];
//     echo "<br>";
// }
