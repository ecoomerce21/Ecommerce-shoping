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
include_once("INC/pdb.php");

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
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0s/css/all.css"/>  -->
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.html">Home</a></li>
                 <!--Dropdown menu-->
                 <div class="btn-group-horizontal" role="group" aria-label="">
                  
                  <div class="normal" class="btn-group" role="group">
                  <button id="dropdownId"  type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> Products
                      
                      </button>  <!-- id="dropdownId" --> 
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                       
                    <?php
                   
                   if($result->num_rows > 0)
                   {
                       while($row=$result->fetch_assoc())
                       {
                          
                         
                           echo ' <a class="dropdown-item"  href="products.php?cat_name= '.$row["cat_name"].'&pg=1">'.$row["cat_name"].'</a>';
                       }
                   }

                    ?>
                             <!-- <a class="dropdown-item" href="#">heloo</a>
                             <a class="dropdown-item" href="#">yheee</a> -->
                    </div>
                  </div>
                 </div>
                <li><a href="Blog.html">Blog</a></li>
                <li><a href="AboutUS.php">AboutUS</a></li>
                <li><a href="Contact.html">Contact</a></li>
            <li><a href="Addtocart.php"><img src="BAGG.png" height="20px" class="bag" alt="">Cart</a></li>
                
              
                 <!-- SEARCH BUTTON -->

                 <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="text" placeholder="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                   </form>
            
            
            
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
    <section id="page-header">
       
       <h2>#Stayhome Products</h2>
       <p>Save more with coupons & upto 70% off!</p>
      
   </section>
</body>
</html>






      <!-- Login logout user/customer 
                  
  <php
                    if($_SESSION["customer_name"]!=null)
                    {
                        ?>
                        <p style="color:orange;" class="btn btn-outline-success my-2 my-sm-0 ml-1"><php echo $_SESSION["customer_name"];?></p>
                        <a href="login_customer.php" class="btn btn-outline-success my-2 my-sm-0 ml-1">Logout</a>
                      <php
                    }
                 else{
                    
                      $cust_name=$_SESSION["customer_name"];
                       $cust_email=$_SESSION["customer_email"];
                       $cust_phoneno=$_SESSION["customer_phone_no"];
                    ?>
                      <a href="login_customer.php" class="btn btn-outline-success my-2 my-sm-0 ml-1">Login</a> 
                    <php
                 } 
                 > 
                 -->


                <!-- <php
                   if(!empty($_SESSION["customer_name"]))
                   {
                     
                      echo' <a href="#"  class="btn btn-outline-success my-2 my-sm-0 ml-1"><php echo $_SESSION["customer_name"];?></a>';
                        
                      echo' <a href="login_customer.php" class="btn btn-outline-success my-2 my-sm-0 ml-1">Logout</a>';
                      
                   }
                else
                 {

                     echo ' <a href="login_customer.php" class="btn btn-outline-success my-2 my-sm-0 ml-1">Login</a>';
                   
                   }
                ?> -->