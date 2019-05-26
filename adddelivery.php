<?php
 $price = $_POST["total"];
 $supid = $_POST["sid"];
 $shop = $_POST["shop"];
 $name = $_POST["name"];
 $phone = $_POST["phone"];
 include 'config.php';

 $sql = "Insert into delivery(price,supid,shop,name,phone) value('$price','$supid','$shop','$name','$phone')";
 $result = $conn->query($sql);
 header("location:switch.php?page=supplier");
 $conn->close();
?>