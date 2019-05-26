<?php

 include 'class.php';
 
 $admin = new admin;
 $admin -> set_for_insert($_POST["username"],$_POST["password"],$_POST["role"],$_POST["phone"],$_POST["avaliability"],$_POST["shop"]);
 $admin -> insert_admin();
?>