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
/*
function Show()
{
    $menus='';
    $menus.=multilevel_dropdown()
    return   $menus
}

function multilevel_dropdown($parent_id=NULL)
{
    $menu='';
    $sql='';
    if(is_null($parent_id)) /* null 
    {
        $sql="SELECT * FROM category WHERE `parent_id` IS NULL";
    }
    else{
        $sql="SELECT * FROM category WHERE `parent_id`= $parent_id";
    }
    $result1=$conn->query($sql);
    if($result1->num_rows > 0)
    {
        while($row=$result1->fetch_assoc())
        {
        
            $menu .='<li><a href="products.php?cat_id= '.$row["parent_id"].'&pg=1">'.$row1["cat_name"].'</a>';

           $menu.='<ul class="dropdown">'.multilevel_dropdown($row["cat_id"]).'</ul>';
       $menu.='</li>';
        }
    }
     return $menu;   
}*/

/*
if(isset($_GET["sub_qry"]))
{

echo"hello";
$sql_query1="SELECT * FROM sub_category WHERE cat_id=$id;";
$result1=$conn->query($sql_query1);


if($result1->num_rows > 0)
{
echo "yes";
while($row1=$result1->fetch_assoc())
{ 
echo '<a class="dropdown-item"  href="products.php?cat_id= '.$row1["sub_id"].'&pg=1">'.$row1["sub_name"].'</a>';

} 
} 

}*/






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce</title>

<style>
    *{
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
     

    }*/
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
    /* button:hover{
        color:var(--orange);
    }*/
  
    .container form button:hover{
      color:var(--orange);
  }
</style>






   <!--

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0s/css/all.css"/>
-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
   <link rel="stylesheet" href="stylee.css">
   
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
                 
              
                
                 <div class="btn-group-horizontal" role="group" aria-label="">
                  
                  <div class="normal" class="btn-group" role="group">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><strong><b>Products</b></strong></a>
                 <!-- <button id="dropdownId"  type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> Products 
                      
                      </button>  <!-- id="dropdownId" --> 
                   <div class="dropdown-menu" aria-labelledby="dropdownId"> 
               
                       
                    <?php
                    global $id;
                   if($result->num_rows > 0)
                   {
                       while($row=$result->fetch_assoc())
                       { 
                         $id=$row["cat_name"];
                          

                         echo '<a class="dropdown-item"  href="products.php?cat_id= '.$row["cat_id"].'&pg=1">'.$row["cat_name"].'</a>';
                         /*<i class="fa fa-caret-down"></i>*/
                         ?>
                         <!--
                         <php
                           if(isset($_POST["sub_qry"]))
                      {

                      echo"hello";
                       $sql_query1="SELECT * FROM sub_category WHERE cat_id=$id;";
                        $result1=$conn->query($sql_query1);
                   
 
                      if($result1->num_rows > 0)
                      {
                          echo "yes";
                         while($row1=$result1->fetch_assoc())
                     { 
                     echo '<a class="dropdown-item"  href="products.php?cat_id= '.$row1["sub_id"].'&pg=1">'.$row1["sub_name"].'</a>';
     
                    } 
                     } 
                     


                    }   
                        
                      

                       > -->
                    <?php



                   /*   
                   if(isset($_GET["btn_qry"]))
                  {

                      echo"hello";
                  $sql_query1="SELECT * FROM sub_category WHERE cat_id=$id;";
                     $result1=$conn->query($sql_query1);
                   
 
                      if($result1->num_rows > 0)
                      {
                          echo "yes";
                         while($row1=$result1->fetch_assoc())
                     { 
                     echo '<a class="dropdown-item"  href="products.php?cat_id= '.$row1["sub_id"].'&pg=1">'.$row1["sub_name"].'</a>';
     
                    } 
                     } 
                     


                    }  */ 
                            

               
                          
                          
                         /*
                           echo ' <a class="dropdown-item"  href="products.php?cat_id= '.$row["cat_id"].'&pg=1">'.$row["cat_name"].'</a>';
                         */

                          }
                   }

                  





                   

                    ?>


                            
                    </div>
                  </div>
                 </div> 
                <li><a href="Blog.html">Blog</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="Contact.html">Contact</a></li>
            <li><a href="Addtocart.php"><img src="BAGG.png" height="30px" class="bag" alt=""></a></li>
            <a href="#" id="close"><i class="fas fa-times"></i></a>
                
              
                 <!-- SEARCH BUTTON -->

                  
                <!--<div class="container" id="header"> -->
                <!-- <a href="#" class="logo">fahion<span>.</span></a> -->

                <!--
                 <form action="" method="post" class="search-bar">
                      <input type="search" name="search_txt" id="search_bar">
                      <button type="submit" name="btn_search"  class="fas fa-search"></button>
                 </form> -->
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
                      echo' <a href="login_customer.php"  my-2 my-sm-0 ml-1"><i class="fa fa-user-circle" style="color:black;font-size:35px;;margin-left: 30px;"></i></a>';
                      
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