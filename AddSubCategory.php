<?php
  session_start();
   /*include("Admin_header.php");*/
   include_once("../INC/pdb.php"); 

     if($_SESSION["user"]!="") /* if($_SESSION["user"]=="admin") */
     {

        if(isset($_POST["btn_insert"]))
        {
              $name=$_POST["subcate_name"];
              $sub_id=$_POST["subcate_id"];
              $sub_brand=$_POST["subcate_brand"];

              $sql_query = "INSERT INTO sub_category VALUES(0,'$name','$sub_id','$sub_brand');";
              if($conn->query($sql_query))
              {
                   echo '<script> alert("Record Added");</script>';
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
              <a class="navbar-brand" href="javascript:;">Add SubCategory</a> <br><br>
           </div>
        </div>
        <form action="" method="post">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                   <div class="form-group">
                       <label for="">SubCategory Name</label> <br>
                      <input type="text" class="form-control" name="subcate_name" aria-describedby="helpId" placeholder="">
                   </div>
 
                    <br><br>
                   <div class="form-group">
                      <label for="">Category ID</label>
                      <input type="text" name="subcate_id" class="form-control"  aria-describedby="helpId" placeholder="">
                   </div>
                  <br><br>
                  <div class="form-group">
                      <label for="">Category Brand</label>
                      <input type="text" name="subcate_brand" class="form-control"  aria-describedby="helpId" placeholder="">
                   </div>
                </div>
            </div>

          <div class="row">
               <a class="btn btn-primary pull-right"style="color:white;" href="Category.php">Back</a>
               <button type="submit" class="btn btn-primary pull-right" name="btn_insert">Insert</button>
          </div>
       </form>
        </div>
      </div>
     
  <?php
    
  
      /* FOOTER WORK  
    include("Cat_footer.php");*/
   
}
    else
    {
      header("Location:login.php");
    }
     
?>