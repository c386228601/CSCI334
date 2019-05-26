<?php
 include 'class.php';
 
 $customer = new customer;
 $customer -> set_for_insert($_POST["address"],$_POST["ms"],$_POST["name"],$_POST["phone"],$_POST["credit"],$_POST["balance"],$_POST["subject"],$_POST["type"]);
 $customer -> insert_customer();
?>