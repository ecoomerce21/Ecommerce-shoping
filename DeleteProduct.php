<?php
  session_start();
   /*include("Admin_header.php");*/
   include_once("../INC/pdb.php"); 

     if($_SESSION["user"]!="")  /* if($_SESSION["user"]=="admin") */
     {

        if(isset($_GET["id"]))
        {
            $id=$_GET["id"];

            $sql_query_1 = "SELECT * FROM product WHERE prdct_id=$id";
            $result=$conn->query($sql_query_1);

           
        }


        if(isset($_POST["btn_delete"]))
        {
              $sql_query = "DELETE FROM product WHERE prdct_id='$id'";
              if($conn->query($sql_query))
              {
                   echo '<script> alert("Record Deleted");</script>';
                   header("Location:ViewProduct.php");
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
              <a class="navbar-brand" href="javascript:;">Delete Product</a>
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
                                    <label for="">Product Name</label>
                                     <p> <?php echo $row["prdct_name"];?></p>
                                 </div>

                             <div class="form-group">
                                  <label for="">Product Quantity</label>
                                  <p> <?php echo $row["prdct_qty"];?></p>
                             </div>


                             <div class="form-group">
                                  <label for="">Product Price</label>
                                  <p> <?php echo $row["prdct_price"];?></p>
                             </div>

                             <div class="form-group">
                                  <label for="">Product image</label>
                                  <p> <?php echo $row["prdct_img"];?></p>
                             </div>

                             <div class="form-group">
                                  <label for="">Product Category</label>
                                   <?php
                                      switch($row["prdct_cat"])
                                      {
                                          case '1':
                                            echo '<p> Men </p> ';break;
                                          case '2':
                                            echo '<p> Women </p>'; break;
                                          case '3':
                                          echo '<p> Kids </p>'; break;
                                          case '4':
                                          echo '<p> Infants </p>'; break;
                                      }
                                 
                                 ?>
                             </div>
 
                          <br><br>
                   <div class="form-group">
                        <label for="">Product Description</label>
                            <p> <?php echo $row["prdct_desc"];?> </p>  
                      </div>

                   </div>
               </div>

                    <div class="row">
                         <a class="btn btn-primary pull-right"style="color:white;" href="ViewProduct.php">No</a>
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