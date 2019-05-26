<?php
 include 'class.php';
 
 $order = new order;
 $order -> set_for_insert($_POST["cid"],$_POST["total"],$_POST["discount"]);
 $order -> insert_order();
 $conn->close();
?>