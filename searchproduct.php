<?php 
session_start();
 include'config.php';
 $sql = "SELECT * FROM sproduct where name = '".$_POST["search"]. "'";
 $current = "searchproduct";
  include'theme/index.html';
?>


