<?php
/*session_start();*/
/*include("INC/Pro_subcategory.php");*/
include("INC/Product headerr.php");
include_once("INC/pdb.php");
/*
if(isset($_POST["sub_cat"]))
{
   $_Session["table"]=$_POST["sub_cat"];
}
else{
  $_Session["table"]=products;
}

*/
/*
$p_cat_id="";
if(isset($_GET["cate_name"]))
{
    $page_no=1;
    $limit=12;
    $offset=($page_no-1)*$limit;

    $p_cat_id=$_GET["cate_name"];

    $csql="SELECT * FROM category WHERE cat_id=$p_cat_id;";
    $cresult=$conn->query($csql);
    if($cresult->num_rows > 0)
    {
        $crow=$cresult->fetch_assoc();
    }

     // Pagination

     $cnt_sql="SELECT count(*) FROM product WHERE prdct_cat=$p_cat_id";
      $cnt_result=$conn->query($cnt_sql);
     if($cnt_result->num_rows > 0)
     {
        $cntrow=$cnt_result->fetch_assoc();
     }

     $total_count=$cntrow["count(*)"];
     echo $total_count;

     $psql_query="SELECT * FROM product WHERE prdct_cat=$p_cat_id LIMIT $limit OFFSET $offset;";
     $p_result=$conn->query($psql_query);
} */

/* FETCH THE SEARCHED PRODUCTS FROM DATABASE 
===================================================
=================================================== */

//global $result_s;
/*global $catid ;
 global $page_no;
 global $limit;
 global $total_count;
 global $crow;*/
  /* Fetch the search products from database */
  /*if(isset($_POST["btn_search"]))
 {
     
      $search_by=$_POST["search_by_txt"];
      $search_name=$_POST["search_txt"];

      if($search_by=="ProductName")
      {
           $sql_query_p="SELECT * FROM product WHERE prdct_name ='$search_name' ";
           $result=$conn->query( $sql_query_p);
      }

     if($search_by =="CategoryName")
      {
        $sql_query_c="SELECT * FROM product WHERE prdct_cat=(SELECT cat_id FROM  category WHERE cat_name ='$search_name') ";
        $result=$conn->query( $sql_query_c); 
      }

 } */
 










 global $catid ;
 global $page_no;
 global $limit;
 global $total_count;
 global $crow;
 
if(isset($_GET["cat_id"]) )
{
    if(isset($_GET["pg"]))
    {
     
     $page_no=$_GET["pg"];
     $limit=12;

    $offset=($page_no-1)*$limit;

     $catid=$_GET["cat_id"]; 

   // Fetch the prdct records According to the category
     
     $csql="SELECT * FROM category WHERE cat_id=$catid";
     $cresult=$conn->query($csql);
     if($cresult->num_rows > 0)
     {
        $crow=$cresult->fetch_assoc();
     }
     
    // Pagination

    
     $cnt_sql="SELECT count(*) FROM product WHERE prdct_cat=$catid";                  /*(SELECT cat_id FROM category WHERE cat_name='$catname')";*/
     $cnt_result=$conn->query($cnt_sql);
     
     if($cnt_result->num_rows > 0)
     {
        $cntrow=$cnt_result->fetch_assoc();
     }

       $total_count=$cntrow["count(*)"];
       echo $total_count; 

    // Fetch the prdct records According to the category 
        $sql_query = "SELECT * FROM product WHERE prdct_cat=$catid  ";/*(SELECT cat_id FROM category WHERE cat_name='$catname') LIMIT $limit OFFSET $offset";*/
        if (isset($_GET['sub_cat'])) $sql_query .= " AND sub_cat = {$_GET['sub_cat']} ";
        $sql_query .= "LIMIT $limit OFFSET $offset ;" ;
        $result=$conn->query($sql_query);
    
    } 
   }

 /* global $page_no1;
  global  $total_records;
   global $limit1;
   global $offset1;*/

    if(isset($_POST["btn_search"]))
   {

    /*$page_no1=1;
    $total_records=0;
    $limit1 = 5;
    $offset1=0;*/
     
      //$search_by=$_POST["search_by_txt"];
      $search_name=$_POST["search_txt"];
      $price_name=$search_name;
      /*echo $search_name; */

     /* if(isset($_GET["pg_no"]))
        {
            $page_no1=$_GET["pg_no"] + 1;
            $offset1 = $limit1 * ($page_no1);
        }
        else
        {
           $page_no1=1;
           $offset1=0;
        } */
      
      
      /*$sql_query3="SELECT count(*) FROM product";
      $result3=$conn->query($sql_query3);
      $row3=$result3->fetch_assoc();
      $total_records=$row3["count(*)"];
      
       $cnt_result=$conn->query($cnt_sql);
     
     if($cnt_result->num_rows > 0)
     {
        $cntrow=$cnt_result->fetch_assoc();
     }

       $total_count=$cntrow["count(*)"];
       echo $total_count;
      
      */

     


    /* if($search_by=="ProductName") 
      { 
        $page_no1=0;
        $total_records=0;
         $limit1 = 5;
        $offset1=0;


         //Pagination    
          // GIVES TOTAL NO. OF RECORDS
        $sql_query_p="SELECT count(*) FROM product WHERE prdct_name ='$search_name' ";
        $result3=$conn->query($sql_query_p);
        if($result3->num_rows > 0)
        {
           $row3=$cnt_result->fetch_assoc();
       }
        $total_records=$row3["count(*)"];
        echo  $total_records;

         
        $offset1 = $limit1 * ($page_no1);
        
        if(isset($_GET["pg_no"]))
        {
            $page_no1=$_GET["pg_no"] + 1;
            $offset1 = $limit1 * ($page_no1);
        }
        else
        {
           $page_no1=1;
           $offset1=0;
        } 
          
           //$left_rec = $total_records - ($page_no1 * $limit1);

       

           $sql_query_p="SELECT * FROM product WHERE prdct_name ='$search_name'LIMIT $limit1 OFFSET $offset1  ";
           $result=$conn->query( $sql_query_p);

           

     // }*/

   /* else if(($search_by =="CategoryName") )
     {*/
      if(( $search_name >= 'A' && $search_name <='Z') || ( $search_name >= 'a' && $search_name <='z') ){
        $page_no1=1;
        $total_records=0;
         $limit1 = 5;
         $offset1=0;

        $sql_query_c="SELECT count(*) FROM product WHERE prdct_name  ='$search_name'";      /*prdct_cat=(SELECT cat_id FROM  category WHERE cat_name ='$search_name') ";*/
        $result3=$conn->query($sql_query_c);
        if($result3->num_rows > 0)
        {
           $row3=$result3->fetch_assoc();
       }
        
        $total_records=$row3["count(*)"];
        echo  $total_records;


        if(isset($_GET["pg_no"]))
        {
            $page_no1=$_GET["pg_no"] + 1;
            $offset1 = $limit1 * ($page_no1);
        }
        else
        {
           $page_no1=1;
           $offset1=0;
        }
          
           //$left_rec = $total_records - ($page_no1 * $limit1);
      



      // Fecth the record
     
       
      $sql_query_p="SELECT * FROM product WHERE prdct_name ='$search_name'LIMIT $limit1 OFFSET $offset1  ";
      $result=$conn->query( $sql_query_p);


       /* $sql_query_c="SELECT * FROM product WHERE prdct_cat=(SELECT cat_id FROM  category WHERE cat_name ='$search_name')LIMIT $limit1 OFFSET $offset1  ";
        $result=$conn->query( $sql_query_c); */

       
     // }
  }  
   
 
   
 else 
  {
    
    $page_no1=1;
    $total_records=0;
     $limit1 = 5;
     $offset1=0;

    $sql_query_c="SELECT count(*) FROM product WHERE prdct_price = $search_name";      /*prdct_cat=(SELECT cat_id FROM  category WHERE cat_name ='$search_name') ";*/
    $result3=$conn->query($sql_query_c);
    
    if($result3->num_rows > 0)
    {
       $row3=$result3->fetch_assoc();
   }
    
    $total_records=$row3["count(*)"];
    echo  $total_records;


    if(isset($_GET["pg_no"]))
    {
        $page_no1=$_GET["pg_no"] + 1;
        $offset1 = $limit1 * ($page_no1);
    }
    else
    {
       $page_no1=1;
       $offset1=0;
    }
      
       //$left_rec = $total_records - ($page_no1 * $limit1);
  
       


  // Fecth the record

   
  $sql_query_p="SELECT * FROM product WHERE prdct_price = $search_name /*LIMIT $limit1 OFFSET $offset1*/  ";
  $result=$conn->query( $sql_query_p);


   /* $sql_query_c="SELECT * FROM product WHERE prdct_cat=(SELECT cat_id FROM  category WHERE cat_name ='$search_name')LIMIT $limit1 OFFSET $offset1  ";
    $result=$conn->query( $sql_query_c); */

   
 // }
}   




     
  } 


?>

  
 <div class="container-fluid row"  class="container"  >
    <h2>Product</h2>

   <!-- <h4 style="color:black;"><php echo $crow["cat_name"]; ?>Category</h4> -->
    <section id="product1" class="section-p1" class="container-fluid" >
       
      <div>
       <div  class="pro-container" >
       <?php 
         if(isset($_GET["cat_id"])=="")
        { 
         ?> 
             <div class="pro"class="col md-3">
                <img src="products/m1.webp"  alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Unstitched SHIRT</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div> 
                    <h4>RS. 2200/=</h4>
                </div>
                <a href="#"><img src="cart.png" height="5px" class="cart" alt=""></a>
              </div> 


              <div class="pro"class="col md-3">
                <img src="products/j12.webp"  alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>stitched SHIRT</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>RS. 2200/=</h4>
                </div>
                <a href="#"><img src="cart.png" height="5px" class="cart" alt=""></a>
              </div>


            <div class="pro"class="col md-3">
                <img src="products/j3.webp"  alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Light Frock</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>RS. 2200/=</h4>
                </div>
                <a href="#"><img src="cart.png" height="5px" class="cart" alt=""></a>
              </div>


              <div class="pro"class="col md-3">
                <img src="products/m4.webp"  alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>SHIRT</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>RS. 2200/=</h4>
                </div>
                <a href="#"><img src="cart.png" height="5px" class="cart" alt=""></a>
              </div>


              <div class="pro"class="col md-3">
                <img src="products/j11.webp"  alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Unstitched SHIRT</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>RS. 2200/=</h4>
                </div>
                <a href="#"><img src="cart.png" height="5px" class="cart" alt=""></a>
              </div> 

              <div class="pro"class="col md-3">
                <img src="products/j2.webp"  alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Unstitched SHIRT</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>RS. 2200/=</h4>
                </div>
                <a href="#"><img src="cart.png" height="5px" class="cart" alt=""></a>
              </div> 


              <div class="pro"class="col md-3">
                <img src="products/j9.webp"  alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Unstitched SHIRT</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>RS. 2200/=</h4>
                </div>
                <a href="#"><img src="cart.png" height="5px" class="cart" alt=""></a>
              </div> 


              <div class="pro"class="col md-3">
                <img src="products/j13.webp"  alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Unstitched SHIRT</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>RS. 2200/=</h4>
                </div>
                <a href="#"><img src="cart.png" height="5px" class="cart" alt=""></a>
              </div> 

<!--
              <div class="pro"class="col md-3">
                <img src="products/j13.webp"  alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Unstitched SHIRT</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>RS. 2200/=</h4>
                </div>
                <a href="#"><img src="cart.png" height="5px" class="cart" alt=""></a>
              </div> 



              
             <div class="pro" class="col md-3">
                <img src="products/j12.webp"  alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>SHIRT</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>RS. 2200/=</h4>
                </div>
                <a href="#"><img src="cart.png" height="5px" class="cart" alt=""></a>
             </div> -->


<!--
             <div class="pro"class="col md-3">
                <img src="products/j3.webp"  alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Unstitched SHIRT</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>RS. 2200/=</h4>
                </div>
                <a href="#"><img src="cart.png" height="5px" class="cart" alt=""></a>
              </div> -->
  <!--<style>
    .container{
        width: 400px;
        /*background:#111; */
        padding: 20px 30px;
        border:1px solid #444;
        border-radius:5px;
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:column;
    }
    .container .star-widget input{
         display: none;
    }
    .star-widget label{
        font-size:40px;
        color:#444;
        padding:10px;
        float:right;
        transition:all 0.2s ease;
    }
     input:not(:checked) ~ label:hover,
     input:not(:checked) ~ label:hover ~ label{ 
        color:#fd4;
    }
    input:checked ~ label{
        color:#fd4;
    }
    input#rate-5:checked ~ label{
        color:#fe7;
        text-shadow:0 0 20px #952;

    }
    form header{
        width:100%;
        font-size:25%;
        color:#fe7;
        font-weight:500;
        margin:0 20px 0;
        text-align:center;
        transition :all 0.2s ease;
    }
  </style> -->

          
              <section class="category">  

           <h1 class="heading"> shop by <span>category</span> </h1>

            <div class="box-container">

               <div class="box">
                 <img src="INC/images/cat-1.jpg" style="" alt="">
                <div class="content">
                    <span>upto 50% off</span>
                     <h3>for womans</h3>
                   <a href="#" class="btn">shop now</a>
                </div>
              </div>

             <div class="box">
           <img src="INC/images/cat-2.jpg" alt="">
            <div class="content">
             <span>upto 50% off</span>
             <h3>for mans</h3>
             <a href="#" class="btn">shop now</a>
           </div>
          </div>

        </div>
   </section> 


         
           <?php 
        }
     ?>   
    <!-- category section ends -->
      
        <?php
         
            if($result->num_rows > 0)
            {
                
                while($row=$result->fetch_assoc())
                {
                    ?>
                    
                    <div class="pro" class="col md-3" >
                    
                    <img src="<?php echo $row["prdct_img"]; ?> ">                                 <!--<img src="products/f2.jpg" alt="">-->
                    <div class="des">
                        <span>adidas</span>
                        <h5><?php echo $row["prdct_name"]; ?></h5>
                       
                    <!-- <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div> -->
                        <h4>Price : Rs.<?php echo $row["prdct_price"]; ?>/=</h4>
                    </div>
                    <button class="normal">  <a href="product_dt.php?id=<?php echo $row["prdct_id"]; ?>" style="text-decoration:none; color:white;">View Details</a></button>
                    
                    <a href="Addtocart.php"><img src="cart.png"  height="5px" class="cart" alt=""></a>
                </div>

                <?php
                }
            }
            else{
                echo "No Record Found";
            }
          ?>
    </div>
  </div> 



    <!-- This include the search product and pagination code  
    ================================================================
    =================================================================   -->
  
    
      <!--  <div class="text-center">
        <php
        if(isset($_GET["pg"]))
        {

           $left_rec=$total_count-($page_no * $limit);
           
          
      if($page_no==1)
          {
              $nxt=$page_no+1;
              echo '<a  href="products.php?cat_id='.$catid.'&pg='.$nxt.'" class="btn btn-primary"  >Next</a>';
          }
      else if($left_rec < 0 )
        {
            $bck=$page_no-1;
            echo '<a  href="products.php?cat_id='.$catid.'&pg='.$bck.'" class="btn btn-primary"  >Back</a>';
        }
     else
       {
            $nxt=$page_no+1;
            $bck=$page_no-1;
           echo '<a  href="products.php?cat_id='.$catid.'&pg='.$bck.' " class="btn btn-primary" >Back</a>  <a  href="products.php?cat_id='.$catid.'&pg='.$nxt.' " class="btn btn-primary">Next</a>';
        }
     }



  if(isset($_POST["btn_search"]) || isset($_POST["pg_no"]))
   {
      $left_rec = $total_records - ($page_no1 * $limit1);

    if($page_no1 ==1)
    {
        
         echo ' <a >Previous</a> | <a href="products.php?pg_no='.$page_no1.'">Next</a>';
    }
  else if($left_rec < 0)
  {

     $last= $page_no1 - 2;
     echo '<a href="products.php?pg_no='.$last.'">Previous</a> | <a>Next</a>';

  }
  else
  {
     $last= $page_no1 - 2;
    
     echo ' <a href="products.php?pg_no='.($last).'" >Previous</a> | <a href="products.php?pg_no='.($page_no1).'">Next</a>';
  }
 }
      ?>
  
  </div>  -->
  </section>
 </div>
 
 <!--
<section id="pagination" class="section-p1">
 <php
      $sql_query="SELECT * FROM product";
      $result=$conn->query($sql_query);
      $total_record=mysqli_num_rows($result);
     // echo  $total_record ."<br>";
      $total_pages=ceil($total_record/$num_per_page); ?>
     // echo $total_pages;
      for($i=1;$i<=$total_pages;$i++){
     echo "<a href='?start=".$i."'>".$i."</a> ";
     // <a href="?start= <php echo $i ?> "><php echo $i ?></a> 
      }
     </section> -->
     
  <!-- <a href="products.php">1</a>
      <a href="products1.php">2</a>
       <a href="products1.php">Next >></i></a> 
       <php include("INC/Pagination.php"); >-->

 
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

<!--
<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
</div>


    -->