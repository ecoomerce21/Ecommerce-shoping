<?php
  session_start();
   /*include("Admin_header.php");
   /*include_once("INC/pdb.php");*/ 
    include_once("../INC/pdb.php");

  


     if($_SESSION["user"]!="")   /* if($_SESSION["user"]=="admin")*/
     {
        
        $sql_query = "SELECT * FROM category" ;  
        $result=$conn->query($sql_query);

        /* Query for sub category */

        $sql_query1 = "SELECT * FROM sub_category" ;  
        $result1=$conn->query($sql_query1);



         include("Admin_header.php");
     ?>    

     <div class="content">
        <div class="container-fluid">

             <div class="row">
                <div class="col-md-12">
                     <a class="navbar-brand" href="AddCategory.php">Add Category</a>
                    <!-- <a class="navbar-brand" href="AddCategory.php">Add SubCategory</a> -->
                 </div>
            </div>

            <div class="row">

            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Category Records</h4>
                 
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>CATEGORY ID</th>
                      <th>CATEGORY NAME</th>
                      <th>CATEGORY DESCRIPTION</th>
                      <th></th>
                    </thead>
                    <tbody>

                      <?php
                            
                            if($result->num_rows > 0)
                            {
                               while($row=$result->fetch_assoc())
                               {
                                 ?>
                                    <tr>
                                      <td><?php echo $row["cat_id"]; ?></td>
                                      <td><?php echo $row["cat_name"]; ?></td>
                                      <td><?php echo $row["cat_des"]; ?></td>
                                      <td>
                                        <a href="EditCategory.php?id=<?php echo $row["cat_id"]; ?>">Edit</a> | 
                                        <a href="DeleteCategory.php?id=<?php echo $row["cat_id"]; ?>">Delete</a></td>
                                    </tr>
                                <?php
                               }
                            }
    
                       ?>

                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

         </div>

       <!-- </div>
      </div> -->

      <!--  SUB CATEGORY  -->

     <!-- <div class="content"> -->
        <div class="container-fluid"> 
           <br><br>
             <div class="row">
                <div class="col-md-12">
                     <!--<a class="navbar-brand" href="AddCategory.php">Category</a> -->
                     <a class="navbar-brand" href="AddSubCategory.php">Add SubCategory</a>
                 </div>
            </div>

            <div class="row">

            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">SubCategory Records</h4>
                 
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>SubCATEGORY ID</th>
                      <th>SubCATEGORY NAME</th>
                      <th>CATEGORY ID</th>
                      <th>BRAND</th>
                      <th></th>
                    </thead>
                    <tbody>

                      <?php
                            
                            if($result1->num_rows > 0)
                            {
                               while($row=$result1->fetch_assoc())
                               {
                                 ?>
                                    <tr>
                                      <td><?php echo $row["sub_id"]; ?></td>
                                      <td><?php echo $row["sub_name"]; ?></td>
                                      <td><?php echo $row["cat_id"]; ?></td>
                                      <td><?php echo $row["sub_brand"]; ?></td>
                                      <td>
                                        <a href="EditSubCategory.php?id=<?php echo $row["sub_id"]; ?>">Edit</a> | 
                                        <a href="DeleteSubCategory.php?id=<?php echo $row["sub_id"]; ?>">Delete</a></td>
                                    </tr>
                                <?php
                               }
                            }
    
                       ?>

                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

         </div>
        <!-- containers div tag -->
        </div>
        </div>
      </div>


  
  <?php
   
   include("Admin_footer.php");


}
    else
    {
      header("Location:login.php");
    }
     
?>





