<?php
  if(session_start()) {
    
    session_destroy();
    header("Location: signin.php");
  } else {
    session_destroy();
    header("Location: signout.php");
  }
 
?>