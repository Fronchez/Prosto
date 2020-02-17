<?php

session_start();

if (isset($_SESSION["userID"])) {
    $result = ['status' => 'ok'];
} else {
    $result = ['status' => 'error'];
}

header("Content-type: application/json; charset=utf-8");
echo json_encode($result);
