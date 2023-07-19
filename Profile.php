<?php

session_start();
$host = "localhost";
$user= "root";
$password ="";
 $db= "login";
 $con =new mysqli( $host, $user, $password , $db);
 if(!$con){
    echo "connection fail";
 }
 

 $query=mysqli_query($con, "SELECT * FROM `signupform`") or die(mysqli_error());
 
 while($fetch= mysqli_fetch_array($query)){
    $username=$fetch['username'];
    $pass=$fetch['password'];
    $email=$fetch['email'];
    

 }

?>





<!DOCTYPE html>
<html>
    <head>
        <style>
            .Containar{ 
                background-image:url('pro1.jpeg') ;

             border :5px solid red; 
             font :normal 16px helvetica;
             font-size: 22px;
             color: pink;
             
             
         
             
            }
            body ,html{
                background-color:pink;
                 
               
                
                

              
            }
            th> img{
                width:150px;
                border :4px solid pink; 



            }
            center{
                margin-top:120px;
            }
            p{
                color:blue;
                font-size:30px;
            }
            </style>
        
    </head>
    <body>
        <center>
        <table class="Containar" border="0" cellpadding="10"
        cellspacing="10" bgcolor="white">
        
        <th colspan="10" align="center"  ><u>User Profile</u></th>
        <th ><img src="user.jpeg"></th>
        <p >WELCOME TO E-COMMERCE PLATEFORM </p>
        <?php if(isset($_SESSION['username'])){  ?>
        <tr><th>Username:</th> <td><?php  echo $_SESSION['username'];?></td></tr>
        <tr><th>Password:</th><td><?php echo $_SESSION['password']; ?> </td></tr>
        <tr><th>Email:</th><td><?php echo $_SESSION['email']; ?></td></tr>
        
      <?php  }?>
        
                
    
        </center>
            
        </table>
    </body>
</html>