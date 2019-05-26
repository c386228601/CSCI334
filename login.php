<?php 
 include 'class.php';
 $admin = new admin;
 $admin -> set_for_verify($_POST["un"],$_POST["pw"]);
 $request = $admin -> verify_admin();
 if($request != "fail")
 {
	    header("location:switch.php?page=home");	 
 }
 else
 {
	  header("location:switch.php?page=login");
 }
?>