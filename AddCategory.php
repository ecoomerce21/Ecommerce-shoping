<?php
  session_start();
   /*include("Admin_header.php");*/
   include_once("../INC/pdb.php"); 

     if($_SESSION["user"]!="") /* if($_SESSION["user"]=="admin") */
     {

        if(isset($_POST["btn_insert"]))
        {
              $name=$_POST["cate_name"];
              $desc=$_POST["cate_desc"];

              $sql_query = "INSERT INTO category VALUES(0,'$name','$desc');";
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
              <a class="navbar-brand" href="#">Add Category</a> <br><br>
              <!--<a class="navbar-brand" href="AddSubCategory.php">Add SubCategory</a> <br><br>  -->
           </div>
        </div>
        <form action="" method="post">
            <div class="row">
               <div class="col-lg-4 col-md-6">
                   <div class="form-group">
                       <label for="">Category Name</label> <br>
                      <input type="text" class="form-control" name="cate_name" aria-describedby="helpId" placeholder="">
                   </div>
 
                    <br><br>
                   <div class="form-group">
                      <label for="">Category Description</label>
                      <textarea name="cate_desc" class="form-control" rows="5" style="resize:none;width:100%;"></textarea>
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
    include("Cat_footer.php"); */
   
}
    else
    {
      header("Location:login.php");
    }
     
?>