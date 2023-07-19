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
  <!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  -->

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0s/css/all.css"/> 
    <!--
    <style>
     .about-header{
         background-image: url("about/banner.png");
   }
     </style> -->
    
    
    
    
    
    <link rel="stylesheet" href="style.css">

    

   


</head>
<body>
    <section id="header">
        <a href="#"><img src="logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                
                 <!--Dropdown menu -->
                 <li><a href="products.php">Products</a></li>
                <!-- <div class="dropdown">
                    <button class="dropbtn">Products
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                    <php
                     
                    if($result->num_rows > 0)
                    {
                        while($row=$result->fetch_assoc())
                        {
                            echo '<a href="products.php?cat_name='.$row["cat_name"].'">'.$row["cat_name"].'</a>';
                        }
                    }

                     ?>
                    
                    </div>
                  </div> -->
                <li><a href="Blog.html">Blog</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="Contact.html">Contact</a></li>
            <li><a href="Addtocart.php"><img src="BAGG.png" height="20px" class="bag" alt="">Cart</a></li>
            <a href="#" id="close"><i class="fas fa-times"></i></a>

              <form class="form-inline my-2 my-lg-0" method="post">
                <!-- Login logout user/customer -->
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

    <section id="page-header" class="about-header">
         <h2> #KNOW US </h2>
          <p> Know About E-Commerce Platform Easy Shopping</p>
    </section>

      <section id="about-head" class="section-p1">
         
          <img src="about/a6.jpg" alt="">
        <!--  <img src="about/a7.png" alt="">   -->
            <div>
             <h2><strong>Who We Are?</strong></h2>
              <p>Website is one that allows people to buy and sell physical goods, services, 
                and digital products over the internet rather than at a brick-and-mortar location.
                 Through an e-commerce website, a business can process orders, accept payments, 
                 manage shipping and logistics, and provide customer service.. View Our Site On  <a href="https://youtu.be/9Wzl8_u5M5w"> <i class="fab fa-youtube"></i></a>
                 </p>
                   <abbr title="">Create Stunning Images with as much or as little control as you
                       like thanks to a Choice of Basic and Creative modes.
                   </abbr>
                   <br><br>
                <marquee bgcolor="#ccc"  loop="-1" width="100%">
                   Create Stunning Images with as much or as little control as you
                    like thanks to a Choice of Basic and Creative modes.
                </marquee>
             </div>     
      </section>


      <section id="about-head" class="section-p1"> 
         
          <img src="about/a4.png" alt="">
        <!--  <img src="about/a7.png" alt="">   -->
            <div>
             <h2><strong>Buying Products</strong></h2>
              <p>The project team will determine and identify the required steps for developing an e-commerce 
                website that covers the combination of business models. Our website will establish the process 
                of buying the products from our Web site online. We will examine the business model and incorporate 
                it onto the website. The project team will discover possible solutions for the new e-commerce business.
                 The project team will become knowledgeable on how to develop an e-commerce website 
                  <a href="https://youtu.be/9Wzl8_u5M5w"> <i class="fab fa-youtube"></i></a>
                 </p>
                  <!-- <abbr title="">Create Stunning Images with as much or as little control as you
                       like thanks to a Choice of Basic and Creative modes.
                   </abbr> -->
                   
                <marquee bgcolor="#ccc"  loop="-1" width="100%">
                   Create Stunning Images with as much or as little control as you
                    like thanks to a Choice of Basic and Creative modes.
                </marquee>
             </div>     
      </section> 














      <section id="about-head" class="section-p1">
         
         <!--<img style="width=50%;height=80%;" src="about/a8.png" alt=""> -->
       <!--  <img src="about/a7.png" alt="">   -->
          <!-- <div>
            <h2><strong>Scope of Shopping Website</strong></h2>
             <p>We are going to develop an online shopping Website.
               The scope of the project deals with various key features and attributes
                that are to be incorporated into the online store. We are developing a
                 website which is support mobile user as well as desktop user. Our designed online
                  shopping system provides a 24/7 service that is customers can surf the website,
                   place orders anytime they wish to. Also, the delivery system works 24/7 hours a week. 
                    It will be completed in approximately within 3 months. People involved
                     in project are Amara Muqadas and Bushra Zafar. We use the tool of VS Code
                      and resources include HTML, CSS, JavaScript, PHP Languages.
                </p>
                 <!-- <abbr title="">Create Stunning Images with as much or as little control as you
                      like thanks to a Choice of Basic and Creative modes.
                  </abbr> -->
                
              <!-- <marquee bgcolor="#ccc"  loop="-1" width="100%">
                  Create Stunning Images with as much or as little control as you
                   like thanks to a Choice of Basic and Creative modes.
               </marquee> -->
            <!--</div>  -->   
     </section>









      <section id="about-app" class="section-p1">
         
          <h1><strong>Download Our <a href="#">App</a></strong></h1>
          <div class="video">
            <video autoplay muted loop src="about/1.mp4"></video>

          </div>
        
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

   
   
     <!--
      ==============================
           Footer 
      ==================================  -->



    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="logo.png" alt="">
            <h4><strong>Contact</strong></h4><br>
            <p><strong>Address: </strong> wellington Road, streat 32, San Francisco</p>
           <p> <strong>Phone: </strong>+01 2222 365 /(+92) 01 2345 6789</p>
            <p><strong>Hours: </strong>10:00-18:00,Mon - Sat</p>
            <div class="follow">
             <h4><strong>Follow Us</strong></h4>
             <div class="icon">
              <a href="https://m.facebook.com/story.php?story_fbid=pfbid02B2CyEJXGXYuGFJygL4aCxQPg1pvqsemSVJ2yEgBuosMHKfgJNeC3UY3LAKdg3KtSl&id=100057082296216"> <i class="fab fa-facebook-f"></i></a>
              <a href="#">  <i class="fab fa-twitter"></i></a>
              <a href="#">  <i class="fab fa-instagram"></i></a>
              <a href="#">  <i class="fab fa-pinterest-p"></i></a>
               <a href="https://youtu.be/9Wzl8_u5M5w"> <i class="fab fa-youtube"></i></a>
             </div>
            </div>
        </div>
        <div class="col">
            <h4><strong>About</strong></h4>
            <a href="#">About Us</a>
            <a href="#">Delivery information</a>
            <a href="#">Privacy policy</a>
            <a href="#">Terms and Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4><strong>My Account</strong></h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4><strong>Install App</strong></h4>
            <p>From App Store or Google Play</p>
           <div class="row">
            <img src="pay/app.jpg" style="display:inline-block; width:50%;" alt="">
            <img src="pay/play.jpg"style="display:inline-block; width:50%;margin-left:2px;" alt="">
         </div>
             <p>Secured Payment Gateways</p>
              <img src="pay/pay.png" alt="">
         </div>
        <div class="copyright">
            <p>© 2021, FYP etc - HTML CSS Ecommerce Platform</p>
        </div>
    </footer>
  

    <script src="script.js"></script>
  

     <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
</body>
</html>