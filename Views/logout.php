<?php
UserController::logout();
header("location: login");
  // session_unset();
  // session_destroy();
 
?>