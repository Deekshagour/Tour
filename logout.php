<?php
session_start();
   $_SESSION['email']= null;
   $_SESSION['userlevel'] = null;
   unset($_SESSION['email']);
    unset($_SESSION['userlevel']);
header('location:index.php');
    

?>