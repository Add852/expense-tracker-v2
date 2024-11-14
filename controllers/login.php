<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $findUser = $db->query("select * from users where username = ?", [$username])->fetch(PDO::FETCH_ASSOC);
    if (!isset($findUser['userid'])) {
        $errorMessage = "Username not found!";
    } else if (!password_verify($password, $findUser['password'])) {
        $errorMessage = "Incorrect password!";
    } else {
        dd("Logged in successfully!");
    }
}

require("views/login.view.php");
