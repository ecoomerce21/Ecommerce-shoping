<?php
  session_start();
   /*include("Admin_header.php");*/
   include_once("../INC/pdb.php"); 

     if($_SESSION["user"]!="")  /* if($_SESSION["user"]=="admin") */
     {

       
        $sql_query1="SELECT * FROM category;";
       $result=$conn->query($sql_query1);

      // $sql_query2="SELECT *  FROM sub_category";      /*where cat_id = $ct ;"; */
       //$result1=$conn->query($sql_query2);
        /* global $catt;
           if(isset($_POST["pdct_cat"]))
           {
              $catt=$_POST["pdct_cat"];
              echo $catt;
           }*/

           $sql_query3="SELECT *  FROM sub_category"; /*WHERE cat_id=$catt";     /*where cat_id = $ct ;"; */
           $result1=$conn->query($sql_query3);


        if(isset($_POST["btn_insert"]))
        {
              $name=$_POST["pdct_name"];
              $qty= $_POST["pdct_qty"];
              $price= $_POST["pdct_price"];
            
              $cat= $_POST["pdct_cat"];
              $desc=$_POST["pdct_desc"];
               $sbcat= $_POST["pdct_subcat"];
              $cat_name="";
              
              /* For Image File */
              $sql_query2="SELECT * FROM category WHERE cat_id='$cat';";
              $result2=$conn->query($sql_query2);
              if($result2->num_rows > 0)
              {
                  while($row1=$result2->fetch_assoc())
                  {
                       $cat_name=$row1["cat_name"];
                  }
              }

              $target_dir="../INC/".$cat_name."/";
              $target_file=$target_dir.basename($_FILES["pdct_img"]["name"]);

              $uploadok=1;
              $imgfiletype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

               // check if image or not
               $check=getimagesize($_FILES["pdct_img"]["tmp_name"]);
                if($check!==false)
                {
                   echo "File is an image";
                   $uploadok=1;
                }
              else{
                    echo "File is not an image";
                    $uploadok=0;
                }

             if(file_exists($target_file))
             {
                echo "File already exists";
                $uploadok=0;
             }

             
              // File Size Check

             if($_FILES["pdct_img"]["size"] > 500000)
             {
                echo 'Sorry Your Image Size is Large';
                $uploadok=0;
             }
     
             // Formate check png jpeg 
             if($imgfiletype !='jpg' && $imgfiletype !='png' && $imgfiletype !='jpeg')
             {
                  echo 'Sorry Your Image not JPEG PNG jpg';
                  $uploadok=0;
             }

             if($uploadok==0)
             {
                echo 'Sorry Your File will not be Uploaded';
             }
           else
             {
                if(move_uploaded_file($_FILES["pdct_img"]["tmp_name"],$target_file))
                {

                  $target_d="INC/".$cat_name."/";
                  $target_f=$target_d.basename($_FILES["pdct_img"]["name"]);

                  

                    $sql_query = "INSERT INTO product VALUES('0','$name','$qty','$price','$target_f','$cat','$desc', '$sbcat');"; //  ,$sbcat;
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
        <form action="" method="post" enctype="multipart/form-data" >
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
                       <label for="">Product Image</label> <br>
                      <input type="file"  class="upload"  name="pdct_img" aria-describedby="helpId" placeholder="">
                    </div>
                
                   


                   <div class="form-group">
                       <label for="">Product Category</label> <br>
                       <select class="form-control" name="pdct_cat" aria-describedby="helpId" placeholder="">
                           <option >Select Category</option>
                            <?php  

                                   if($result->num_rows > 0)
                                  {
                                      while($row=$result->fetch_assoc())
                                      {
                                        echo' <option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';
                                      }
                                    }   
                             ?>

                             
                       </select>
                    </div>
                    <br>

                   
                    <div class="form-group">
                       <label for="">Product SubCategory</label> <br>
                       <select class="form-control" name="pdct_subcat" aria-describedby="helpId" placeholder="">
                           <option >Select subCategory</option>
                            <?php  

                                   if($result1->num_rows > 0)
                                  {
                                      while($row=$result1->fetch_assoc())
                                      {
                                        echo' <option value="'.$row["cat_id"].'">'.$row["sub_name"].'</option>';
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