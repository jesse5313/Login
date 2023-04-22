<?php
  session_start();
  if(!isset($_SESSION["username"])) {
  header("location: index.html");
  } 

  else {
  ?>  
  <h2>¡Bienvenido, <span><?php echo $_SESSION['username'];?>! </span></h2>
  
  <?php
  }
  ?>