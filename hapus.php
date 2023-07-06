<?php
$servername = "localhost";
$database = "db_web_programming";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

echo $_GET['nama'] ;


?>
