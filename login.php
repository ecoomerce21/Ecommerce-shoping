<?php
require_once 'validatelogin.php';

if(isset($_COOKIE['username']))
{
?>
   <meta http-equiv="refresh" content="5">
<?php
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Login form design</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     
    <link rel="stylesheet" href="style4.css">
  </head>
  <body>
      <div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                
                    <div class="myLeftCtn">

                        <form class="myForm text-center" method="post" action= "login.php">  
                        <header>LOGIN</header>
                        <div class="form-group">
                            <i class="fas fa-user"></i>
                            <input class="myInput" type="text" name = "username"   placeholder="Enter username--"   ><br><br>
                            
                        </div>
                        <div class="form-group">
                            <i class="fas fa-envelope"></i>
                            <input class="myInput" type="text" name = "email"  placeholder="Enter email--" ><br><br>

                        </div>

                        <div class="form-group">
                            <i class="fas fa-lock"></i>
                            <input class="myInput" type="text" name = "password"  placeholder="Enter password--" ><br><br>
                        </div>
                        <div class="form-group">
                            <label>
                                <input  type="checkbox" name="check_1" >
                            Remember me</input>
                            
                        </label>
                          
                        </div>
                        <input type="submit" name = "save" value="Login" class="butt">
                      
                    </form>
                    <div class="alert">
             <?php if(isset($_SESSION["r"])){
                
                 echo $_SESSION["r"]; 
            }?>
             </div>
                        
           

                    
                    </div>

                </div>
           
               
                <div class="col-md-6">
                    <div class="myRightCtn">
                        <div class="box"><header>Hello World!</header></div>
                        <div class="box1">
                        <p>Welcome  to E-commerce 
                            website, you can easily shop 
                            here enjoy this website.</p><br>
                            <input type="button" class="butt_out" value="learn more"/>

                        </div>
                           
                           
                            
                          
                     
                     
      
                    </div>
                   
                    <div class="forget"> <a href="send.php">Forget Password?</a><div>
                    
                    
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