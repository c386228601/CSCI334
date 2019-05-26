<?php 
session_start();
 include'config.php';
 $table = $_POST["table"];
 
 $sql = "SELECT * FROM ".$table." where id = '".$_POST["search"]. "'";
 $current = "searchresult";
  include'theme/index.html';
?>


