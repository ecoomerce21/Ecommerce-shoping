<?php
$host = "localhost";
        $user= "root";
        $password ="";
         $db= "login";
          $con =new mysqli( $host, $user, $password , $db);
        if(!$con){
          echo "conected fail";
          }
       
    
        ?>