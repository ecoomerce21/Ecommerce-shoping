<?php
  session_start();
   /*include("Admin_header.php");*/
   include_once("../INC/pdb.php"); 

     if($_SESSION["user"]!="") /*  if($_SESSION["user"]=="admin")*/
     {

        if(isset($_GET["id"]))
        {
            $id=$_GET["id"];

            $sql_query_1 = "SELECT * FROM contact WHERE id=$id";
            $result=$conn->query($sql_query_1);
        }


        if(isset($_POST["btn_delete"]))
        {
              $sql_query = "DELETE FROM contact WHERE id='$id'";
              if($conn->query($sql_query))
              {
                   echo '<script> alert("Record Deleted");</script>';
                   header("Location:ViewContact.php");
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
              <a class="navbar-brand" href="javascript:;">Delete Contact</a>
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
                                <!--<div class="form-group">
                                    <label for="">Name</label>
                                     <p> <?php echo $row["name"];?></p>
                                 </div> -->
 
                          
                      <div class="form-group">
                           <label for="">Email</label>
                            <p> <?php echo $row["email"];?> </p>  
                      </div>


                      <div class="form-group">
                           <label for="">Message</label>
                            <p> <?php echo $row["message"];?> </p>  
                      </div>

                   </div>
               </div>

                    <div class="row">
                         <a class="btn btn-primary pull-right"style="color:white;" href="ViewContact.php">No</a>
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