<?php
 include'class.php';
 $supplier = new supplier;
 $supplier -> set_for_show($_POST["id"],$_POST["address"],$_POST["credit"],$_POST["phone"],$_POST["name"]);
 $supplier -> edit_supplier();
?>