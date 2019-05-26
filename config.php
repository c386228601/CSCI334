<?php
header("Content-type:text/html;charset=utf-8");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "334";

// create link to db
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connect fail: " . $conn->connect_error);
}

?>