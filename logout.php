<?php
session_start(); 
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['email']);
if(session_destroy()){
    
    header("Location: dashboard.php");
    echo "<br>";
    exit();

}
?>