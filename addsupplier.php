<?php
 include 'class.php';
 $supplier = new supplier;
 $supplier -> set_for_insert($_POST["address"],$_POST["credit"],$_POST["phone"],$_POST["name"]);
 $supplier -> insert_supplier();
?>