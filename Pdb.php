<?php
// Define username and password;
$host="localhost";
$user="root";
$password="";
$Database="ecommerce";

// Connect to database;
 $conn=new mysqli($host,$user,$password,$Database);
 if($conn)
 {echo"Connection created:";}
 else{echo" ERROR:";}
?>