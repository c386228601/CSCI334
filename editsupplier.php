<?php
 $id = $_POST["id"];
 include 'config.php';
 $sql = "select * from supplier where id ='$id'";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 $current = "edit-supplier";
 include 'theme/index.html';
 $conn->close();
?>