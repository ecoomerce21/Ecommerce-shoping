<?php
include("INC/Product header.php");
include_once("INC/pdb.php");
//include("INC/header.php");
$cat_name="";
if(isset($_GET["cat_name"]))
{
    $catname=$_GET["cat_name"];
}

$sql_query = "SELECT * FROM product WHERE prdct_cat=(SELECT cat_id FROM category WHERE cat_name='$catname');";
$result=$conn->query($sql_query);

?>

  
 <!--<div class="container">
    <h2>Product</h2>

    <h4 style="color:black;"><php echo  $catname; ?>Category</h4>-->
    <section id="product1" class="section-p1">
       
       <div class="pro-container">
        <?php
            if($result->num_rows > 0)
            {
                while($row=$result->fetch_assoc())
                {
                    ?>
                    <div class="pro" >
                    <img src="<?php echo $row["prdct_img"]; ?> ">                                 <!--<img src="products/f2.jpg" alt="">-->
                    <div class="des">
                        <span>adidas</span>
                        <h5><?php echo $row["prdct_name"]; ?></h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Price : Rs.<?php echo $row["prdct_price"]; ?>/=</h4>
                    </div>
                    <button class="normal">Add to Cart</button>
                    <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
                </div>
                <?php
                }
            }
          ?>
     
  </div>
  </section>

<section id="pagination" class="section-p1">
    
       <a href="products.php">1</a>
      <a href="products1.php">2</a>
       <a href="products1.php">Next >></i></a>

  </section> 
     <!--
        </section>
           <div class="pro" >
                <img src="products/f2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Price : Rs.4500/=</h4>
                </div>
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
           </div> 

           <div class="pro" >
                <img src="products/f3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Price : Rs.4500/=</h4>
                </div>
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
           </div>

           
           <div class="pro" >
                <img src="products/f4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Price : Rs.4500/=</h4>
                </div>
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
           </div>

           <div class="pro" >
                <img src="shop/1.jpg" alt="">
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
                    <h4>Price : Rs.3000/=</h4>
                </div>
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
           </div>

           <div class="pro" >
                <img src="shop/24.jpg" alt="">
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
                    <h4>Price : Rs.3000/=</h4>
                </div>
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
           </div>

           <div class="pro" >
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
                    <h4>Price : Rs.4500/=</h4>
                </div>
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
           </div>

           <div class="pro" >
                <img src="products/n4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Price : Rs.4500/=</h4>
                </div>
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
           </div>

           <div class="pro" >
                <img src="products/f8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut frock</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Price : Rs.4000/=</h4>
                </div>
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
           </div>

           <div class="pro" >
                <img src="products/n5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Price : Rs.4500/=</h4>
                </div>
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
           </div>

           <div class="pro" >
                <img src="products/n7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Price : Rs.4500/=</h4>
                </div>
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
           </div>

           <div class="pro" >
                <img src="products/n8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Price : Rs.4500/=</h4>
                </div>
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
           </div>
    </div>
  </section>

  <section id="pagination" class="section-p1">
    <a href="products.php">1</a>
    <a href="products1.php">2</a>
    <a href="products1.php">Next >></i></a>
  </section> -->

<?php  
include("INC/footer.php"); 
?>
   <!--
     <php
       if($result->num_rows>0)
       {
        while($row=$result->fetch_assoc())
        {
         ?>
         <div class= "col-md-3">
            <img src="<php echo $row["prdct_img"] ?>"style="width:100%;"/>
            <h4 style="color:white;"><php echo $row["prdct_name"];?></h4>
            <p style="color:white;">price:Rs.<php echo $row["prdct_price"];?> /=</p>
            <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
         </div>
         <php
        }
       }
    ?>
    </div>-->

<!--<!DOCTYPE html> -->
 <!--<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce</title>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0s/css/all.css"/> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="header">
        <a href="#"><img src="logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.html">Home</a></li> -->
                <!--Dropdown menu-->
                <!--
                <div class="dropdown">
                    <button class="dropbtn">Products
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="Man.html">Men</a>
                      <a href="Women.html">Women</a>
                      <a href="#">kids</a>
                    </div>
                  </div> -->

                <!--<li><a class="active" href="Shop.html">Shop</a></li>--> 
               <!-- <li><a href="Blog.html">Blog</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="Contact.html">Contact</a></li>
            <li><a href="cart.html"><img src="BAGG.png" height="20px" class="bag" alt=""></a></li>
            <a href="https://www.flaticon.com/free-icons/cross" id="close"></a>
            <a href="#" id="close"><i class="fa-duotone fa-square-xmark"></i></a>
         </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><img src="BAGG.png" height="20px" class="bag" alt=""></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>
    <section id="page-header">
       
        <h2>#Stayhome</h2>
        <p>Save more with coupons & upto 70% off!</p>
       
    </section>
    <section id="product1" class="section-p1">
       
        <div class="pro-container">
        
            <div class="pro" >
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
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
               <!-- <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a> -->
           <!-- </div>

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
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
               <!-- <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a> -->
           <!-- </div>

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
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
               <!-- <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a> -->
           <!-- </div>

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
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
              
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
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
              
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
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
              
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
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
             
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
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
              
            </div>
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
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
               <!-- <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a> 
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
                 <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
               <!-- <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a> 
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
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
               <!-- <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a> 
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
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
               <!-- <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a> 
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
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
               <!-- <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a> 
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
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
               <!-- <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a> 
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
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
               <!-- <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a> 
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
                <button class="normal">Add to Cart</button>
                <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a>
               <!-- <a href="cart.html"><img src="cart.png" height="5px" class="cart" alt=""></a> 
            </div>
        
        </div>
    </section>

  <section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#">Next >></i></a>
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

    <section id="newsletter" class="section-p1 section-m1" >
    <div class="newstext">
        <h4>Sign Up For newsletters</h4>
        <p>Get Email updates about our latest shop and <span>special offers.</span></p>
    </div> 
     <div class="form">
    <input type="text" placeholder="Your email address">
    <button class="normal">sign Up</button>
    </div>
    </section>
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="logo.png" alt="">
            <h4>Contact</h4><br>
            <p><strong>Address: </strong> wellington Road, streat 32, San Francisco</p>
           <p> <strong>Phone: </strong>+01 2222 365 /(+92) 01 2345 6789</p>
            <p><strong>Hours: </strong>10:00-18:00,Mon - Sat</p>
            <div class="follow">
             <h4>Follow Us</h4>
             <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
             </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery information</a>
            <a href="#">Privacy policy</a>
            <a href="#">Terms and Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
           <div class="row">
            <img src="pay/app.jpg" alt="">
            <img src="pay/play.jpg" alt="">
            
           </div>
           <p>Secured Payment Gateways</p>
           <img src="pay/pay.png" alt="">
        </div>
        <div class="copyright">
            <p>© 2021, FYP etc - HTML CSS Ecommerce Platform</p>
        </div>
    </footer>
    <script src="script.js"></script> 
    
</body>
</html> -->