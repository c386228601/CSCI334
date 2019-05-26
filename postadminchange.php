<?php
 include'class.php';
 $admin = new admin;
 $admin -> set_for_edit($_POST["id"],$_POST["un"],$_POST["pw"],$_POST["role"],$_POST["phone"],$_POST["avaliability"],$_POST["shop"]);
 $admin -> edit_admin();
?>