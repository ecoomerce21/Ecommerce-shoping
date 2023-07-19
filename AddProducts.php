<?php
  session_start();
   /*include("Admin_header.php");*/
   include_once("../INC/pdb.php"); 

     if($_SESSION["user"]!="")   /* if($_SESSION["user"]=="admin") */
     {

       
        $sql_query1="SELECT * FROM category;";
       $result=$conn->query($sql_query1);
       $sql_query2="SELECT *  FROM sub_category"; /*where cat_id = $ct ;"; */
       $result1=$conn->query($sql_query2);

        
           global $subcat;
        if(isset($_POST["btn_insert"]))
        {
              $name=$_POST["pdct_name"];
              $qty= $_POST["pdct_qty"];
              $price= $_POST["pdct_price"];
              $image=  $_POST["pdct_img"];            //'products/f2.jpg';         //$_POST["pdct_img"];
              $cat= $_POST["pdct_cat"];
              $desc=$_POST["pdct_desc"];
             // $sbcat  = $_POST["pdct_subcat"];  
              $cat_name="";
              $subcat=$cat;
              
         
             $sql_query = "INSERT INTO product VALUES('0','$name',$qty,'$price','$image','$cat','$desc');";
             if($conn->query($sql_query))
             {
                  echo '<script> alert("Record Added");</script>';
                  header("Location:ViewProduct.php");
             }
            else
            {
               echo $conn->error();
            }


             
        }
        /* Heder work  */
        include("Cat_header.php");
       
     ?>   
     
    

      <div class="content" style="margin-top:50px;">
        <div class="container">
        <div class="row">
           <div class="col-md-12">
              <a class="navbar-brand" href="javascript:;">Add Product</a> <br><br>
           </div>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                   <div class="form-group">
                       <label for="">Product Name</label> <br>
                      <input type="text" class="form-control" name="pdct_name" aria-describedby="helpId" placeholder="" required>
                   </div>

                   <div class="form-group">
                       <label for="">Product Quantity</label> <br>
                      <input type="number" class="form-control" name="pdct_qty" aria-describedby="helpId" placeholder="" min=1 required>
                   </div>

                   <div class="form-group">
                       <label for="">Product Price</label> <br>
                      <input type="text" class="form-control" name="pdct_price" aria-describedby="helpId" placeholder="" required>
                   </div>


                   <div class="upload">
                       <label for="">Product Price</label> <br>
                      <input type="file" class="form-control" name="pdct_price" aria-describedby="helpId" placeholder="" required>
                   </div>
                  
                   


                   <div class="form-group">
                       <label for="">Product Category</label> <br>
                       
                       <select class="form-control" name="pdct_cat" aria-describedby="helpId" placeholder="">
                           <option >Select Category</option>
                            <?php  
                                    global $catt;
                                   if($result->num_rows > 0)
                                  {
                                      while($row=$result->fetch_assoc())
                                      {
                                         echo' <option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';
                                         $catt = $row["cat_id"];
                                      }
                                    }   
                             ?>

                             
                       </select>
                     
                    </div>

                    <br>
                    <!--<php
                  /*
                     global $ct;
                     if(isset($_POST["submit"]))
                     {
                        $ct=$_GET["submit"];
                     }
                     if($ct=="Men")
                     {
                        $ct=1;
                     }
                     else if($ct=="Women")
                     {
                        $ct=2;
                     }
                     else if($ct=="Kids")
                     {
                        $ct=3;
                     }
                     else if($ct=="Infants")
                     {
                        $ct=4;
                     }
                     else if($ct=="Toys")
                     {
                        $ct=5;
                     }*/
                     $sql_query1="SELECT *  FROM sub_category"; /*where cat_id = $ct ;"; */
                     $result=$conn->query($sql_query1);

                 ?> -->
                    <div class="form-group">
                       <label for="">Product SubCategory</label> <br>
                       <select class="form-control" name="pdct_subcat" aria-describedby="helpId" placeholder="">
                           <option >Select subCategory</option>
                            <?php  

                                   if($result2->num_rows > 0)
                                  {
                                      while($row=$result2->fetch_assoc())
                                      {
                                        echo' <option value="'.$row["sub_id"].'">'.$row["sub_name"].'</option>';
                                      }
                                    }   
                             ?>

                             
                       </select>
                    </div>
 
                    <br>
                   <div class="form-group">
                      <label for="">Product Description</label>
                      <textarea name="pdct_desc" class="form-control" rows="9" style="resize:none;width:100%;"></textarea>
                   </div>

                   

                </div>
            </div>

          <div class="row">
               <a class="btn btn-primary pull-right"style="color:white;" href="ViewProduct.php">Back</a>
               <button type="submit" class="btn btn-primary pull-right" name="btn_insert">Insert</button>
          </div>
       </form>
        </div>
      </div>
     
  <?php
    
  
      /* FOOTER WORK  
    include("Cat_footer.php"); */
   
}
    else
    {
      header("Location:login.php");
    }
     
?>