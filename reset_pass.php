<?php
session_start();



$host = "localhost";
                $user= "root";
                $password ="";
                 $db= "login";
                 $con =mysqli_connect( $host, $user, $password , $db);
                 if(!$con){
                 echo "connection fail";
                 }  

            ?>
                 
<!doctype html>
<html lang="en">
  <head>
    <title>Forget Password</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
    <link rel="stylesheet" href="style14.css">
  </head>
  <body>
      <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                
                    <div class="myLeftCtn">

                        <form class="myForm text-center" method="post" action= "send.php">  
                        <header>Reset Password</header>
                    
                        <div class="form-group">
                            <i class="fas fa-envelope"></i>
                            <input class="myInput" type="text" name = "email"  placeholder="Enter email" ><br><br>

                        </div>
                        <div class="form-group">
                            <i class="fas fa-lock"></i>
                            <input class="myInput" type="text" name = "password"  placeholder="Enter password" ><br><br>
                        </div>

            
                        <input type="submit" name = "save" value="Reset" class="butt">
                      
                    </form>
                    <div class="alert">
    <?php
    if(isset($_POST['save']))
    {
     $email = $_POST['email'];
     $password= $_POST['password'];

      $q=mysqli_query($con,"SELECT  email , password FROM signupform WHERE email='$email'");
      $num= mysqli_fetch_array($q);
     if($num){
        $query="UPDATE signupform SET password='$password' WHERE email='$email'";
         $data=mysqli_query($con,$query);
    if($data)
     {
        $_SESSION['email']= $email; 
        header("Location: login.php");
        
     }
     else{
        echo "Reset Fail";
      }
  }
}

?>


             </div>
              <div class="forget"><p>If you don't have an account!</p><a href="Signup.php"> Click Here</a>
        </div>              


                    
                    </div>

                </div>
        
        </div>
</div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>
























<!--<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background-color: khaki;
            }
            h1{
                margin-top: 70px;
                color: rgb(134, 19, 19);
            }
            label{
                font-size: 20px;
                color: rgb(134, 19, 19);
                margin-top: 30px;
            }
            input[type="text"]{
                border-radius: 5px;
                border: 2px solid rgb(134, 19, 19) ;
                width: 260px;
                height: 50px;
            }
            input[type="password"]{
                margin-top: 10px;
                border-radius: 5px;
                border: 2px solid rgb(134, 19, 19) ;
                width: 260px;
                height: 50px;
            }
            input[type="submit"]{
                color:antiquewhite;
                background-color: rgb(134, 19, 19);
                border-radius: 10px;
                width: 130px;
                height: 40px;
                margin-top: 40px;
                margin-right: 120px;
            }
            .hh{
                color: white;
                background-color:rgb(134, 19, 19);
                width:265px;
                height:25px;
                text-align:center;
                margin-right: 40px;
                border-radius: 10px;
                margin-top: 55px;
                margin-left: 50px;
               


               
            }
            p{

            }


        </style>
    </head>
    <body> 

        <center>
        <h1> Reset Your Password</h1>
      
        <form  action="" method="post">
            <label>Enter Your Email</label><br><br>
            <input type="text" name="email" placeholder="Enter you Email.."><br><br>
            <label>Enter new Password</label><br><br>
            <input type="text" name="password"  placeholder="Enter new Password.."><br>
           
            <input type="submit" name="save" value="Submit"><br><br>
            
            <p>If you dont have an account!</p><a href="validation.php"> Click Here</a>


            
            

        </form>
       




     
    </center>
         
    </body>
</html>-->

