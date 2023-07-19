<?php
  session_start();
   /*include("Admin_header.php");*/
   include_once("../INC/pdb.php"); 

     if($_SESSION["user"]!="") /*  if($_SESSION["user"]=="admin")*/
     {

        if(isset($_GET["id"]))
        {
            $id=$_GET["id"];

            $sql_query_1 = "SELECT * FROM category WHERE cat_id=$id";
            $result=$conn->query($sql_query_1);
        }


        if(isset($_POST["btn_update"]))
        {
              $name=$_POST["cate_name"];
              $desc=$_POST["cate_desc"];

              $sql_query = "UPDATE category SET cat_name='$name',cat_des='$desc' WHERE cat_id='$id'";
              if($conn->query($sql_query))
              {
                   echo '<script> alert("Record Updated");</script>'; 
                   header("Location:Category.php");
              }
             else{
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
              <a class="navbar-brand" href="javascript:;">Edit Category</a>
           </div>
        </div>
         <br><br>
            <?php

                 if($result->num_rows > 0)
                 {
                   while($row=$result->fetch_assoc())
                   {
                     
                    ?>


                     <form action="" method="post">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="form-group">
                                     <label for="">Category Name</label><br>
                                     <input type="text" class="form-control" name="cate_name" aria-describedby="helpId" placeholder="Enter Category Name" value="<?php echo $row["cat_name"]; ?>">
                                 </div>
 
                          <br><br>
                   <div class="form-group">
                        <label for="">Category Description</label><br>
                         <textarea name="cate_desc" class="form-control" rows="5" style="resize:none;width:100%;">
                             <?php echo $row["cat_des"];?>
                          </textarea>
                      </div>

                   </div>
               </div>

                    <div class="row">
                         <a class="btn btn-primary pull-right"style="color:white;" href="Category.php">Back</a>
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