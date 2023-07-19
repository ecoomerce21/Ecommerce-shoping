<?php
session_start();
if(isset($_POST["btn_logout"]))
 {
          unset($_SESSION["customer_id"]);
         unset($_SESSION["customer_name"]);
         unset($_SESSION["customer_email"]);
         unset($_SESSION["customer_phone_no"]);
          header("Location:login_customer.php");
 }
include("INC/pdb.php");
$sql_query="SELECT * FROM category;";
$result=$conn->query($sql_query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce</title>
 
    
   <link href=" https://www.w3schools.com"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0s/css/all.css"/> 
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <section id="header">
        <a href="#"><img src="logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                   <!--Dropdown menu -->
                   <div class="dropdown">
                    <button class="dropbtn">Products
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">

                    <?php
                     
                     if($result->num_rows > 0)
                     {
                         while($row=$result->fetch_assoc())
                         {
                            
                           
                             echo ' <a href="products.php?cat_name='.$row["cat_name"].'">'.$row["cat_name"].'</a>';
                         }
                     }
 
                      ?>
                    
                    </div>
                  </div>
                
                <li><a href="Blog.html">Blog</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="Contact.html">Contact</a></li>
                <li><a href="Addtocart.php"><img src="BAGG.png" height="20px" class="bag" alt="">Cart</a></li>
             
                 <!-- Login logout user/customer -->
                 <!-- Login logout user/customer -->
             <form class="form-inline my-2 my-lg-0" method="post">
                <?php
                   if(empty($_SESSION["customer_name"]))
                   {
                     
                     
                     /*echo' <a   class="btn btn-outline-success my-2 my-sm-0 ml-1"><?php echo $_SESSION["customer_name"];?></a>';*/
                      echo' <a href="login_customer.php" class="btn btn-outline-success my-2 my-sm-0 ml-1">Login</a>';
                      
                   }
                  else
                  {
                    $cust_name=$_SESSION["customer_name"];
                    $cust_email=$_SESSION["customer_email"];
                    $cust_phoneno=$_SESSION["customer_phone_no"];
                       
                     echo ' <button type="submit" class="btn btn-outline-success my-2 my-sm-0 ml-1" name="btn_logout">Logout</button>';
                   
                   }
                ?>
                 </form>
            </ul>
         
        </div>
        <div id="mobile">
            <a href="cart.html"><img src="BAGG.png" height="20px" class="bag" alt=""></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
 
</body>
</html>