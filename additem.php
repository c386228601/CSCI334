<?php
 $name = $_POST["name"];
 $description = $_POST["description"];
 $price = $_POST["price"];
 $stock = $_POST["stock"];
 $location = $_POST["location"];
 $subject = $_POST["subject"];
 $type = $_POST["type"];
 $sid = $_POST["sid"];
 $avaliability = $_POST["avaliability"];
 include 'config.php';

 $sql = "Insert into product(type,subject,stock,price,location,supid,name,description,avaliability) value('$type','$subject','$stock','$price','$location','$sid','$name','$description','$avaliability')";
 $result = $conn->query($sql);
 header("location:switch.php?page=product");
 $conn->close();
?>