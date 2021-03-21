<?php

require_once './BackendClass.php';
$action = $_POST["action"];
define("login", "login");
switch ($action) {
    case login:
        $res = json_encode(BackendClass::login($_POST["email"], $_POST["password"]));
        die($res);

    default:
        die(json_encode(BackendClass::response(false, "undefined")));
}