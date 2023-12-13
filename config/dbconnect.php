<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "swiss_collection";
$port = "3307";

$conn = mysqli_connect($server,$user,$password,$db, $port);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}

?>