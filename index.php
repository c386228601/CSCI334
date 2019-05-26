<?php 
   session_start();
  $current = "home";  
  include "config.php";

  include "theme/index.html";
  $conn->close();
?>