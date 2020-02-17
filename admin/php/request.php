<?php

require 'connect.php';
header("Content-type: application/json; charset=utf-8");

$id = (int)$_POST['id'];

$query = "SELECT * FROM `request`";
$request = $dbo->query($query);
$results = $request->fetch_all(MYSQLI_ASSOC);
echo json_encode($results);