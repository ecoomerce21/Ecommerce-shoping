<?php
  session_start();
   /*include("Admin_header.php");*/
   include_once("../INC/pdb.php"); 

     if($_SESSION["user"] !="") /* if($_SESSION["user"]=="admin")*/
     {

        if(isset($_GET["id"]))
        {
            $id=$_GET["id"];

            
            $sql_query_1 = "SELECT * FROM product WHERE prdct_id=$id";
            $result=$conn->query($sql_query_1);

            $sql_query1="SELECT * FROM category;";
            $result1=$conn->query($sql_query1);
        }


        if(isset($_POST["btn_update"]))
        {
              $name=$_POST["p_name"];
              $qty=$_POST["p_qty"];
              $price=$_POST["p_price"];
              $cat=$_POST["p_cat"];
              
              $desc=$_POST["p_desc"];

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
              $target_file=$target_dir.basename($_FILES["p_img"]["name"]);

              $uploadok=1;
              $imgfiletype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

               // check if image or not
               $check=getimagesize($_FILES["p_img"]["tmp_name"]);
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

             if($_FILES["p_img"]["size"] > 500000)
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
                if(move_uploaded_file($_FILES["p_img"]["tmp_name"],$target_file))
                {

                  $target_d="INC/".$cat_name."/";
                  $target_f=$target_d.basename($_FILES["p_img"]["name"]);

                  

                  $sql_query = "UPDATE product SET prdct_name='$name',prdct_qty=$qty,prdct_price=$price,prdct_img='$target_f',prdct_cat='$cat',prdct_desc='$desc' WHERE prdct_id='$id'";
                  if($conn->query($sql_query))
                  {
                       echo '<script> alert("Record Updated");</script>';
                       header("Location:ViewProduct.php");
                  }
                 else{
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
              <a class="navbar-brand" href="javascript:;">Edit Product</a>
           </div>
        </div>
         <br><br>
            <?php

                 if($result->num_rows > 0)
                 {
                   while($row=$result->fetch_assoc())
                   {
                     
                    ?>


                     <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group">
                                     <label for="">Product Name</label><br>
                                     <input type="text" class="form-control" name="p_name" aria-describedby="helpId" placeholder="Enter Product Name" value="<?php echo $row["prdct_name"]; ?>">
                                 </div>


                                 <div class="form-group">
                                     <label for="">Product Quantity</label><br>
                                     <input type="number" class="form-control" name="p_qty" min=1 aria-describedby="helpId" placeholder="Enter Product quantity" value="<?php echo $row["prdct_qty"]; ?>">
                                 </div>

                                 <div class="form-group">
                                     <label for="">Product Price</label><br>
                                     <input type="text" class="form-control" name="p_price" aria-describedby="helpId" placeholder="Enter Product Price" value="<?php echo $row["prdct_price"]; ?>">
                                 </div>

                                 <div class="upload">
                                       <label for="">Product Image</label> <br>
                                       <?php echo $row["prdct_img"]; ?>
                                      <input type="file"  class="form-control" name="p_img" aria-describedby="helpId" placeholder="" value="">
                                  </div>
                                 

                                 <div class="form-group">
                                     <label for="">Product Category</label> <br>
                                       <select class="form-control" name="p_cat" aria-describedby="helpId" placeholder="" ?>>
                                        <?php echo $row["cat_name"];?>
                                        
                                         <?php  

                                           if($result1->num_rows > 0)
                                           {
                                             while($row1=$result1->fetch_assoc())
                                             {
                                               echo' <option value="'.$row1["cat_id"].'">'.$row1["cat_name"].'</option>';
                                             }
                                           }   
                                       ?>    
                                       </select>
                                  </div>
 
                         <br>
                   <div class="form-group">
                        <label for="">Product Description</label><br>
                         <textarea name="p_desc" class="form-control" rows="9" style="resize:none;width:100%;">
                             <?php echo $row["prdct_desc"];?>
                          </textarea>
                      </div>

                   </div>
               </div>

                    <div class="row">
                         <a class="btn btn-primary pull-right"style="color:white;" href="ViewProduct.php">Back</a>
                         <button type="submit" class="btn btn-primary pull-right" name="btn_update">Update</button>
                    </div>
             </form>

            <?php

       }
                    
   }

             ?>

     
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