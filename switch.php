<?php 
   session_start();
  $current = $_GET['page'];	
  include "config.php";
  include "theme/index.html";
  $conn->close();
?>