<?php
session_start();
/*
if(isset($_POST["sub_cat"]))
{
   $_Session["table"]=$_POST["sub_cat"];
}
else{
  $_Session["table"]=products;
}*/
if(isset($_POST["btn_logout"]))
 {
          unset($_SESSION["customer_id"]);
          unset($_SESSION["customer_name"]);
         unset($_SESSION["customer_email"]);
         unset($_SESSION["customer_phone_no"]);
          header("Location:login_customer.php");
 }
include_once("pdb.php");

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

     <!--<title>Search Bar in HTML and CSS</title>-->
    <!-- CSS 
    <link rel="stylesheet" href="stylee.css" />-->
    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

<style>
   /* *{
        margin:0;
        padding:0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    /*
   .container {
     width:100%;
     min-height:10vh;
     padding: 10px;
    /* background-image: linear-gradient(rgba(0,8,51,0.9), rgba(0,8,51,0.9));*/
     /*background-position:center; 
     background-size:cover;
     display:flex;
     align-items:center;
    justify-content:center; 
     

    } */
    .search-bar{
        width:50%;
        max-width:700px;
       
        background:lightgrey;  /*rgba(255,255,255,0.2);*/
        display:flex;
       /* align-items:center;*/
        border-radius:60px;
       
       /* padding:10px 10px;*/
    }
    .search-bar input{
         background:transparent;
         
         flex:1;
         
         border:0;
         outline:none;
         padding:10px 10px;
         font-size:20px;
         color:black;
    }
    ::placeholder{
        color: rgba(255,255,255,0.2);/*#cac7ff;*/

    }
    .search-bar button .img{
        width:25px; 
          
    }

  
.search-bar button{
        border:0;
        font-size:1.5rem;
        /*margin-right: 20px;*/
        border-radius:50%;
        width:90px;
       /* height:20px;*/
        background:lightgrey;
        cursor:pointer;
    }
     button:hover{
        color:var(--orange);
    }
  
    .container form button:hover{
      color:var(--orange);
  }
</style> 



<!--<style> 
/*
body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #d4def8; 
  } */
  /*.input-box {
    position: relative;
    height: 76px;
    max-width: 900px;
    width: 100%;
    background: #fff;
    margin: 0 20px;
    border-radius: 77px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  }
  .input-box i,
  .input-box .button {
    position: absolute; 
    top: 50%;
    transform: translateY(-50%);
  }
  .input-box i {
    left: 20px;
    font-size: 30px;
    color: #707070;
  }
  .input-box input {
    height: 100%;
    width: 100%;
    outline: none;
    font-size: 18px;
    font-weight: 400;
    border: none;
    padding: 0 155px 0 65px;
    background-color: transparent;
  }
  .input-box .button {
    right: 20px;
    font-size: 16px;
    font-weight: 400;
    color: #fff;
    border: none;
    padding: 12px 30px;
    border-radius: 8px;
    background-color: #4070f4;
    cursor: pointer;
  }
  .input-box .button:active {
    transform: translateY(-50%) scale(0.98);
  }
  
  /* Responsive */
  @media screen and (max-width: 500px) {
    .input-box {
      height: 66px;
      margin: 0 8px;
    }
    .input-box i {
      left: 12px;
      font-size: 25px;
    }
    .input-box input {
      padding: 0 112px 0 50px;
    }
    .input-box .button {
      right: 12px;
      font-size: 14px;
      padding: 8px 18px;
    }
  }

  </style> -->




   <!--

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0s/css/all.css"/> 
-->  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
   <!--<link rel="stylesheet" href="stylee.css"> -->
   
    <link rel="stylesheet" href="style.css">

     
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

       <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

       <!-- <link rel="stylesheet" href="stylee.css"> -->
</head>
<body>
    <section id="header">
        <a href="#"><img src="logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                 <!--Dropdown menu-->
                <?php 
                    while ($row = $result -> fetch_assoc()) {
                ?>
                     <div class="btn-group-horizontal" role="group" aria-label=""> 
                      
                      <div class="normal" class="btn-group" role="group">  
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="width:90px;"><strong><b><?php echo $row['cat_name']    ;?></b></strong></a>
                        <!-- <button id="dropdownId"  type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">  
                          
                          </button>  <!-- id="dropdownId" --> 
                        <div class="dropdown-menu" aria-labelledby="dropdownId"> 
                           
                        <?php

                        $allSubCats = $conn -> query("SELECT * FROM sub_category WHERE cat_id = {$row['cat_id']}");
                       
                       if($allSubCats->num_rows > 0)
                       {
                           while($singleCat=$allSubCats->fetch_assoc())
                           { 
                               echo ' <a class="dropdown-item"  href="products.php?cat_id='.$singleCat["cat_id"].'&pg=1&sub_cat='.$singleCat["sub_id"].'">'.$singleCat["sub_name"].'</a>';
                            }
                       }
                       

                        ?>
                        <!-- SEARCH ANY PRODUCT CODE -->
                        <!--   <form method="post" action="products.php">
                                 <intput type="text" name="cat" style="display: none;" value="<php echo  $row["cat_name"] ?>" >
                                 <intput type="submit" value="<php echo $result[$key]["sub"] ?>">
                             </form> -->

                          <!--  echo' <a class="dropdown-item"href="products.php ? cat_id=" '.$row["cat_id"].'&pg=1">'.$row["cat_name"].'</a>';-->
                       
                          <!--<dialouge id="dial">
                           <php
                              $sql_query="SELECT * FROM men_sub;";
                            $result=$conn->query($sql_query);
                             
                          
                          
                              foreach($result as $key => $value)
                              {
                                 ?>
                                <form method="post" action="products.php">
                                 <intput type="text" name="sub_cat" style="display: none;" value="<php echo $result[$key]["sub"] ?>" >
                                 <intput type="submit" value="<php echo $result[$key]["sub"] ?>" >
                                </form>
                                <php

                              }

                              ?>
     

                        </dialouge>

                         
                        <script>
                              function Multilevel_menu() 
                              {
                                  document.getElementbyId("dial").open=true;
                              }

                              </script> -->
                            


                               
                        </div>
                      </div>  
                     </div>
                 <?php } ?>
                <li><a href="Blog.html">Blog</a></li>
                <li><a href="AboutUs.php">AboutUs</a></li>
                <li><a href="Contact.html">Contact</a></li>
            <li><a href="Addtocart.php"><img src="BAGG.png" height="30px" class="bag" alt=""></a></li>
            <a href="#" id="close"><i class="fas fa-times"></i></a>
                
              
                 <!-- SEARCH BUTTON -->

                  <!-- SEARCH BUTTON -->

                  
                <!--<div class="container" id="header"> -->
                <!-- <a href="#" class="logo">fahion<span>.</span></a> -->
                 
                 <form action="" method="post" class="search-bar">
                      <input type="search" name="search_txt" id="search_bar">
                      <button type="submit" name="btn_search"  class="fas fa-search"></button>
                 </form> 
               <!-- </div> -->

  <!-- <form action="" method="post" class="search-bar">
    <div class="input-box">
      <i class="uil uil-search"></i>
      <input   type="search" name="search_txt" id="search_bar" placeholder="Search here..." />
      <button class="button"  name="btn_search">Search</button>
    </div>
</form> -->





                  
                <!--<div class="container" id="header"> -->
                <!-- <a href="#" class="logo">fahion<span>.</span></a> -->
                 <!--
                 <form action="" method="post" class="search-bar">
                      <input id="search-focus" type="search" name="search_txt" id="search_bar">
                      <button type="submit" name="btn_search"  class="fas fa-search"></button>
                 </form> 
    <script>
   const searchFocus = document.getElementById('search-focus');
const keys = [
  { keyCode: 'AltLeft', isTriggered: false },
  { keyCode: 'ControlLeft', isTriggered: false },
];

window.addEventListener('keydown', (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = true;
    }
  });

  const shortcutTriggered = keys.filter((obj) => obj.isTriggered).length === keys.length;

  if (shortcutTriggered) {
    searchFocus.focus();
  }
});

window.addEventListener('keyup', (e) => {
  keys.forEach((obj) => {
    if (obj.keyCode === e.code) {
      obj.isTriggered = false;
    }
  });
});

  </script>  -->
                <!--</div> -->



                  <!-- <php include("Searchh.php") ;?> -->
                 <!--<form action="" method="post" class="search_bar" class="form-inline my-2 my-lg-0" class="row"> <!--  class="form-inline my-2 my-lg-0" class="row" -->

                     <!--
                        <select class="form-control mr-sm-2" type="text"  name="search_by_txt">
                            <option> Search By</option>
                            <option value="ProductName">Product Name</option>
                            <option value="CategoryName">Category Name</option> 
                         </select> -->

                       <!--<input type="search" name="search_txt">
                      <label for="search-bar" class="fas fa-search"></label>
                      <!-- <input class="form-control mr-sm-1" name="search_txt" type="text" placeholder="Search"> -->
                    
                       <!--<button class="btn btn-outline-success my-2 my-sm-0" name="btn_search" type="submit">Search</button> -->
                  
                 
                       <!--<input type="text"  name="search_txt" id="" aria-describedby="helpId" placeholder="Search">
                        <button type="submit" class="btn btn-primary" name="btn_search">Search</button>   -->
                    <!--</form> -->
                  
            
            
                <!-- Login logout user/customer 
                  Login logout user/customer
        =====================================================================
        ===================================================================== -->
                <!-- -->
               <form action="" class="form-inline my-2 my-lg-0" method="post">
                 <?php
                   if(empty($_SESSION["customer_name"]))
                   {
                     
                     
                     /*echo' <a   class="btn btn-outline-success my-2 my-sm-0 ml-1"><?php echo $_SESSION["customer_name"];?></a>';*/
                      echo' <a href="login.php"  my-2 my-sm-0 ml-1"><i class="fa fa-user-circle" style="color:black;font-size:35px;;margin-left: 30px;"></i></a>';
                      
                   }
                  else
                  {
                    $cust_name=$_SESSION["customer_name"];
                    $cust_email=$_SESSION["customer_email"];
                    $cust_phoneno=$_SESSION["customer_phone_no"];
                    
                     echo ' <button type="submit" class="btn btn-outline-success my-2 my-sm-0 ml-1" name="btn_logout">Logout</button>';
                   
                   }
                ?>
               </form> <!---->

                
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
    
   <script src="script.js"></script>

    <!--<php include("Product_Static.php"); ?> -->  
    <!--<script src="script.js"></script> -->
   <!-- custom js file link -->
   <!--<script src="../js/script.js"></script> -->
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