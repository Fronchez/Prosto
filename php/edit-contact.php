<?php

require_once 'connect.php';
header("Content-type: application/json; charset=utf-8");

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$dbo->query("INSERT INTO `request` (`id`, `name`, `phone`, `email`) VALUES (NULL, '$name', '$phone', '$email');");

$status = array(
    'message' => 'Успешно', 
);

echo json_encode($status);
