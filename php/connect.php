<?php

$dbo = new mysqli('localhost', 'root', '', 'studio');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}