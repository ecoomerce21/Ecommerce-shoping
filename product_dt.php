<?php
session_start();

include("INC/Product_dt_header.php");
include_once("INC/pdb.php");
if(isset($_POST["btn_submit"]))
      {
         //$name=$_POST["name_txtbx"];
         $email=$_POST["email_txtbx"];
         $msg=$_POST["msg_txtbx"];
         $sql_query="INSERT INTO contact values(0,'$email','$msg')";

         if($conn->query($sql_query))
         { 
            echo '<script> alert("Inserted");</script>';
         }
         else{
             echo "Error Message: ".$conn->error;
         }
      }


$id="";
//$_SESSION["cart_items"];

if(isset($_GET["id"]))
{
    $id=$_GET["id"];
}
$sql_query = "SELECT * FROM product WHERE prdct_id=$id";
$result=$conn->query($sql_query);

//print_r($_SESSION["cart_items"]);

if(isset($_POST["btn_addcart"]))
 {
    echo '<script> alert("Items Added in Cart!"); </script>';
   
    $product_id=$id;
    $product_name=$_POST["p_name"];
    $product_qty=$_POST["p_qty"];
    $product_price=$_POST["p_price"];
    $product_size=$_POST["p_size"];
   
    $items_arr=array($product_id,$product_name,$product_qty,$product_price);
    if(!empty($_SESSION["cart_items"]))
    {
        array_push($_SESSION["cart_items"],$items_arr);
    }
    else{
        $_SESSION["cart_items"]=array();
        array_push($_SESSION["cart_items"],$items_arr);
    }
  }
  
    // print_r($items_arr);
     //array_push($_SESSION["cart_items"],$items_arr);
    // print_r($_SESSION["cart_items"]);
    //$_SESSION["cart_items"]=array_merge($_SESSION["cart_items"],$items_arr);
    /*$_SESSION["p_id"]=$product_id;
    $_SESSION["p_name"]=$product_name;
    $_SESSION["p_qty"]=$product_qty;
    $_SESSION["p_prz"]=$product_price;*/



?>

<section id="prodetails" class="section-p1">
    <?php
       if($result->num_rows > 0)
       {
           while($row=$result->fetch_assoc())
           {
              ?>
                  <div class="single-pro-image">
                      <img src="<?php echo $row["prdct_img"]; ?>" width="100%" id="MainImg" alt=""> 
                  </div>
                    <div class="single-pro-details">
                        <div>
                           <h6> Home/adidas </h6> </div>
                          <h4><?php echo $row["prdct_name"]; ?></h4>
                          <h2>Price : Rs.<?php echo $row["prdct_price"]; ?>/=</h2>
                          <form action="" method="post">
                          <?php
                          if($row["prdct_qty"]==0)
                          {
                             echo '<h4 style="color:red;">Out Of Stock </h4>';
                             echo '<button class="btn btn-info" name="btn_buynow" type="submit" style="width:70%;">Add to Wish List</button>';
                          }
                        else{
                            echo '<h4 style="color:green;">In Stock </h4>' ;
                            echo '  <select name="p_size" placeholder="" required>
                            <option>Select Size</option>
                            <option>XL</option>
                            <option>XXL</option>
                            <option>Small</option>
                            <option>Large</option>
                            <option>Medium</option>
                            </select>';
                            echo '<h4 style="color:black;">Quantity</h4>';
                            echo ' <input type="number" name="p_qty" value="1" min="1" max="'.$row["prdct_qty"].'" placeholder=""required>';
                           // echo '<button class="normal" name="btn_buynow" type="submit" style="background-color:red;">Buy Now </button>';
                            echo '<button class="normal"  name="btn_buynow" type="submit" style="background-color:red;">Buy Now</button>';
                            //echo '<a href="product_dt.php?id=<?php echo $row["prdct_id"]> action="Add" class="normal" ">Add To Cart</a>';
                           // echo ' <button class="normal" name="btn_addcart" type="submit"><a href="Addtocart.php"> Add To Cart </a></button>';
                             echo ' <button class="normal" name="btn_addcart" type="submit"> Add To Cart</button>';
                            echo '<h4>Product Details</h4>';
                            echo  $row["prdct_desc"];
                          
                        }

                        
                        
                        
                    





                        ?>

                          <input type="hidden" name="p_name" value="<?php echo $row["prdct_name"]; ?>" />
                          <input type="hidden" name="p_price" value="<?php echo $row["prdct_price"]; ?>" />
                     </form>
                       <br><br><br>
                       
                       <center>
                     <div class="col-md-3"></div>  
                        <div class="col-md-12 well"> 
                            <h3 class="text-primary"> Star Rating a Product</h3>
                            <hr style="border-top:1px dotted #ccc;"/>
                              <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div>
                                    <h3>Rating:</h3>
                                    <span id="1" style="font-size:45px; cursor:pointer;"  class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)" ></span>
                                    <span id="2"  style="font-size:45px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)"></span>
                                    <span id="3"  style="font-size:45px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)"></span>
                                    <span id="4"  style="font-size:45px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)"></span>
                                    <span id="5"  style="font-size:45px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)"></span>
                                </div>
                                <br>



                           <div class="row">
                          
                           <form action="" method="post">
                           
                                <div class="form-group">
                                    <h3>Email:</h3>
                                    <textarea type="email" id="review"  name="email_txtbx" class="form-control" style=" resize:none;height:100px;" placeholder="Enter Your Email"></textarea> <!--resize:none;  -->
                                </div>

                                <div class="form-group">
                                    <h3>Review:</h3>
                                    <textarea id="review" name="msg_txtbx" class="form-control" style=" resize:none;height:100px;"></textarea> <!--resize:none;  -->
                                </div>
                                <br>

                                
                               <center><button type="submit" name="btn_submit" class="btn btn-success" onclick="result()">SUBMIT</button></center>
                             <div id="result"></div>
                         </form>
                        </div>
                     <!-- </div>  -->
                            </div>
                        </div>
                    </center>
                      
                    <script src="js/scripts.js"></script>

                    </div>





                   





                  <?php

           }
       }
     ?>


                


























        
       <!-- <div class ="col-md-3 p-3" class="row">
        <div class="col-md-12 text-center">
        <h2 class="btn btn-success btn-lg btn-block w-50"  name="btn_cnfrm_order">Review</h2> 
        <button type="submit" class="btn btn-success w-30" name="btn_cnfrm_order">Confirm Order</button> 
        </div>
        </div> -->



 <!--<div class="col-md-3 p-3 "> 
        <div class="Container"> -->
        <!-- <h2> Give Review </h2> -->
         <!--<div class="btn btn-success btn-lg btn-block w-50"  name="btn_cnfrm_order">Confirm Order</div> -->
           <br><br>

           




















        <!-- <div class="row">
          <div class="col-md-15">
               <form action="" method="post">

                    <div class="form-group">
                            <input type="text" 
                            class="form-control" name="name_txtbx" aria-describedby="helpId" placeholder="Enter Your Name">
                    </div>
                      <br>
                    <div class="form-group">
                            <input type="email" 
                            class="form-control" name="email_txtbx" aria-describedby="helpId" placeholder="Enter Your Email">
                    </div>
                     <br>
                    <div class="form-group">
                       <label for="">Your Message</label>
                       <textarea class="form-control" name="msg_txtbx"  rows="3" ></textarea>  style="resize:none;" 
                    </div>
                     <br>
                     <button type="submit" class="btn btn-success" name="btn_submit">Submit</button>

             </form>
          </div>


          <div class="col-md-6">

          </div> -->
      <!--</div>
 </div> -->

    </div> 
  

    










    
</section>















<?php  
include("INC/footer.php"); 
?>

<!--

<section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="products/f1.jpg" width="100%" id="MainImg" alt="">

             <div class="small-img-group">
                 <div class="small-img-col">
                        <img src="products/f1.jpg" width="100%" class="small-img" alt=" ">
                  </div>
   
                    <div class="small-img-col">
                        <img src="products/f2.jpg" width="100%" class="small-img" alt=" ">
                    </div>

                    <div class="small-img-col">
                        <img src="products/f3.jpg" width="100%" class="small-img" alt=" ">
                    </div>

                    <div class="small-img-col">
                        <img src="products/f4.jpg" width="100%" class="small-img" alt=" ">
                    </div>
              </div>
        </div>
        <div class="single-pro-details">
         <h6> Home / T-Shirt</h6>
         <h4>Man's Fashion T shirt</h4>
         <h2>$139.00</h2>
         <select>
            <option>Select Size</option>
            <option>XL</option>
            <option>XXL</option>
            <option>Small</option>
            <option>Large</option>
            <option>Medium</option>
         </select>
         <input type="number" value="1">
         <button class="normal">Add To Cart</button>
         <h4>Product Details</h4>
         <span>The Giladen Uktra Cotton T-Shirt is made from a substantial 6.0 oz. pr sq. yd. 
            fabric constructed from 100% cotton, this classic fit preshrunk jersey knit provides
            unmatched comfort with each wear. Fearturing a taped neck and shoulder, and seemless double-needle
            collar, and available in a range of colors, it offers it all in the ultimate head-turning package.
         </span>
        </div>
    </section>
-->