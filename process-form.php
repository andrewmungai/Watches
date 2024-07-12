<?php

$servername = "localhost";
$dbname ="clients";
$username ="root";
$password ="";

$conn =new mysqli($servername,$dbname,$username,$password);
if ($conn->connect_error){
    die("Connection error:" . $conn->connect_error);
}

echo"Record saved";






