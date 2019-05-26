<?php
session_start();
 $id = $_POST["id"];
 include 'config.php';
 $sql = "select * from admin where id ='$id'";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 $current = "edit-admin";
 include'theme/index.html';
 $conn->close();
?>