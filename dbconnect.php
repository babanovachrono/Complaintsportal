<?php
$servername = "localhost";
$database = "dbproject";
$username = "root";
$password = "toor";

$conn = mysqli_connect($servername, $username, $password, $database);


if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}




?>