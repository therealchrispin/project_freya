<?php
$obj->username = $_POST["username"];
$obj->firstname = $_POST["firstname"];
$obj->lastname = $_POST["lastname"];
$obj->age = $_POST["age"];
$obj->password = $_POST["password"];

echo json_encode($obj);
?>
