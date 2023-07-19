<?php
  session_start();
   /*include("Admin_header.php");*/
   include_once("../INC/pdb.php"); 

     if($_SESSION["user"]!="")     /* if($_SESSION["user"]=="admin") */
     {

        if(isset($_GET["id"]))
        {
            $id=$_GET["id"];

            $sql_query_1 = "SELECT * FROM category WHERE cat_id=$id";
            $result=$conn->query($sql_query_1);
        }


        if(isset($_POST["btn_delete"]))
        {
              $sql_query = "DELETE FROM category WHERE cat_id=$id";  /* $sql_query = "DELETE FROM category WHERE cat_id='$id'";*/
              if($conn->query($sql_query))
              {
                   echo '<script> alert("Record Deleted");</script>';
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
              <a class="navbar-brand" href="javascript:;">Delete Category</a>
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
                                    <label for="">Category Name</label>
                                     <p> <?php echo $row["cat_name"];?></p>
                                 </div>
 
                          <br><br>
                   <div class="form-group">
                        <label for="">Category Description</label>
                            <p> <?php echo $row["cat_des"];?> </p>  
                      </div>

                   </div>
               </div>

                    <div class="row">
                         <a class="btn btn-primary pull-right"style="color:white;" href="Category.php">No</a>
                         <button type="submit" class="btn btn-primary pull-right" name="btn_delete">Yes</button>
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