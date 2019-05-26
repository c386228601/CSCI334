<?php
session_start();
 $id = $_POST["id"];
 include 'config.php';
 $sql = "select * from customer where id ='$id'";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 $conn->close();
  $current = "edit-customer";
 include'theme/index.html';
?>
