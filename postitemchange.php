<?php
 include'class.php';
 $product = new product;
 $product -> set_for_edit($_POST["id"],$_POST["type"],$_POST["price"],$_POST["subject"],$_POST["stock"],$_POST["supid"],$_POST["name"],$_POST["description"],$_POST["location"],$_POST["avaliability"]);
 $product -> edit_product();
?>