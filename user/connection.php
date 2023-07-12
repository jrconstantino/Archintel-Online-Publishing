<?php
$connection = mysqli_connect('localhost', 'u955852768_root', 'Abcd1234');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'u955852768_archintel');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>