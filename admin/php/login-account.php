<?php

require_once 'connect.php';
header("Content-type: application/json; charset=utf-8");

session_start();

if (isset($_POST['login']) and isset($_POST['password'])) { 
    $login = $_POST['login'];
    $password = md5($_POST['password']); 

    $query = "SELECT id,login,password FROM user WHERE login = '$login' AND password = '$password'";    
    $request = $dbo->query($query);

    $results = $request->fetch_all(MYSQLI_ASSOC);
    
    @$loginDB = ($results[0]['login']);
    @$id = ($results[0]['id']);
    
    if (!empty($loginDB)) {
        $_SESSION["userID"] = $id;
        $_SESSION["userLogin"] = $loginDB;
    } else {
        $error = ['status' => 'error'];
        echo json_encode($error);
    }
    
    if (isset($_SESSION["userID"])) {
       $error = ['status' => 'okey'];
        echo json_encode($error);
    };
} else {
    $error = ['status' => 'error'];
    echo json_encode($error);
};