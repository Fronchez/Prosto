<?php

require_once 'connect.php';
header("Content-type: application/json; charset=utf-8");

$newValue = $_POST['newValue'];
$select = (int)$_POST['select'];

switch ($select) {
    case 1:
        $dbo->query("UPDATE data_shop SET address = '$newValue' WHERE id = 1");
        break;
    case 2:
        $dbo->query("UPDATE data_shop SET time = '$newValue' WHERE id = 1");
        break;
    case 3:
        $dbo->query("UPDATE data_shop SET phone = '$newValue' WHERE id = 1");
        break;
    case 4:
        $dbo->query("UPDATE data_shop SET email = '$newValue' WHERE id = 1");
        break;
}

$status = ['status' => 'Successfully'];
echo json_encode($status);