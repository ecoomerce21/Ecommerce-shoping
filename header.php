<?php
session_start();
if(isset($_POST["btn_logout"]))
 {
          unset($_SESSION["customer_id"]);
         unset($_SESSION["customer_name"]);
         unset($_SESSION["customer_email"]);
         unset($_SESSION["customer_phone_no"]);
          header("Location:login.php");
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
 
    <!--
   <link href=" https://www.w3schools.com"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0s/css/all.css"/> -->
      <link rel="stylesheet" href="../style.css">
      
   <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>  -->

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
   
   
</head>
<body>
    <section id="header">
        <a href="#"><img src="logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.html">Home</a></li>

                   <!--Dropdown menu 
                   <div class="btn-group-horizontal" role="group" aria-label="">
                  
                    <div class="normal" class="btn-group" role="group">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
                    <!--<button id="dropdownId"  type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false"> Products
                        
                        </button> -->  <!-- id="dropdownId" 
                      <div class="dropdown-menu" aria-labelledby="dropdownId">
                         
                      <php
                     
                     if($result->num_rows > 0)
                     {
                         while($row=$result->fetch_assoc())
                         {
                            
                           
                             echo ' <a class="dropdown-item"  href="products.php?cat_id= '.$row["cat_id"].'">'.$row["cat_name"].'</a>';
                         }
                     }
 
                      ?>
                               <!-- <a class="dropdown-item" href="#">heloo</a>
                               <a class="dropdown-item" href="#">yheee</a>
                      </div>
                    </div>
                   </div>-->
                   <li><a href="products.php">Product</a></li>
                <li><a href="Blog.html">Blog</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="Contact.html">Contact</a></li>
                <li id="lg-bag"><a href="Addtocart.html"><img src="BAGG.png" height="20px" class="bag" alt=""></a></li>
                <!--<li id="lg-bag"><a href="Addtocart.php"><i class="fas fa-shopping-bag" height="20px"></i></a></li> -->
                <a href="#" id="close"><i class="fas fa-times"></i></a>
                
                 
                
                     <!-- SEARCH BUTTON 

                 <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="text" placeholder="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                   </form>  -->
             
                 <!-- Login logout user/customer -->
                 <!-- Login logout user/customer -->

             <form class="form-inline my-2 my-lg-0 " method="post">
                <?php
                   if(empty($_SESSION["customer_name"]))
                   {
                     
                     
                     /*echo' <a   class="btn btn-outline-success my-2 my-sm-0 ml-1"><?php echo $_SESSION["customer_name"];?></a>';*/
                      echo' <a href="login_customer.php"   my-2 my-sm-0 ml-3"><i class="fa fa-user-circle" style="color:black;font-size:35px;;margin-right: -10px;"></i></a>';
                      
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
    <section id="hero">
        <h4>Trade-in-Offer</h4>
        <h2>Supper value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & upto 70% off !</p>
        <button>Shop Now</button>
       
    </section> 
 <section id="feature" class="section-p1">
     <div class="fe-box">
      <img src="features/f1.png" alt="">
      <h6>Free Shipping</h6>
     </div>

     <div class="fe-box">
      <img src="features/f2.png" alt="">
      <h6>Online Order</h6>
     </div>

     <div class="fe-box">
      <img src="features/f3.png" alt="">
      <h6>Save Money</h6>
     </div>

     <div class="fe-box">
      <img src="features/f4.png" alt="">
      <h6>Promotions</h6>
     </div>

     <div class="fe-box">
      <img src="features/f5.png" alt="">
      <h6>Happy Selling</h6>
     </div>

     <div class="fe-box">
      <img src="features/f6.png" alt="">
      <h6>F24/7 Support</h6>
     </div>
  </section>


  <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p> Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="products/f1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="cart.html"><img src="cart.png" height="10px" class="cart" alt=""></a>
            </div>

            <div class="pro">
                <img src="products/f2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="cart.html"><img src="cart.png" height="10px" class="cart" alt=""></a>
            </div>

            <div class="pro">
                <img src="products/f3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="cart.html"><img src="cart.png" height="10px" class="cart" alt=""></a>
            </div>

            <div class="pro">
                <img src="products/f4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="cart.html"><img src="cart.png" height="10px" class="cart" alt=""></a>
            </div>

            <div class="pro">
                <img src="products/f5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="cart.html"><img src="cart.png" height="10px" class="cart" alt=""></a>
            </div>

            <div class="pro">
                <img src="products/f6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="cart.html"><img src="cart.png" height="10px" class="cart" alt=""></a>
            </div>

            <div class="pro">
                <img src="products/f7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="cart.html"><img src="cart.png" height="10px" class="cart" alt=""></a>
            </div>

            <div class="pro">
                <img src="products/f8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="cart.html"><img src="cart.png" height="10px" class="cart" alt=""></a>
            </div>
        </div>
    </section>
    <section id="banner" class="section-m1">
        <h4>Repair Services
            <h2>Up to <span>70%  off</span> - All T-shirts & accessories</h2>
            <button class="normal">Explore More</button>
        </h4>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p> Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="products/n1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="cart.html"><img src="cart.png" height="10px" class="cart" alt=""></a>
            </div>

            <div class="pro">
                <img src="products/n2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="cart.html"><img src="cart.png" height="10px" class="cart" alt=""></a>
            </div>

            <div class="pro">
                <img src="products/n3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="cart.html"><img src="cart.png" height="10px" class="cart" alt=""></a>
            </div>

            <div class="pro">
                <img src="products/n4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="cart.html"><img src="cart.png" height="10px" class="cart" alt=""></a>
            </div>

            <div class="pro">
                <img src="products/n5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="cart.html"><img src="cart.png" height="10px" class="cart" alt=""></a>
            </div>

            <div class="pro">
                <img src="products/n6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="cart.html"><img src="cart.png" height="10px" class="cart" alt=""></a>
            </div>

            <div class="pro">
                <img src="products/n7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="cart.html"><img src="cart.png" height="10px" class="cart" alt=""></a>
            </div>

            <div class="pro">
                <img src="products/n8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="cart.html"><img src="cart.png" height="10px" class="cart" alt=""></a>
            </div>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at card</span>
            <button class="white">Learn More</button>
        </div>

        <div class="banner-box banner-box2">
            <h4>Spring/Summer</h4>
            <h2>Upcomming Seasonal</h2>
            <span>The best classic dress is on sale at card</span>
            <button class="white">Collection</button>
        </div>
    </section>
    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
           
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW FOOTWARE COLLECTION</h2>
            <h3>Spring/Summer 2022</h3>
           
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy prints</h3>
           
        </div>
    </section>



 <script src="script.js"></script>

</body>

</html>




  
