<?php
  session_start();
   /*include("Admin_header.php");
   /*include_once("INC/pdb.php");*/ 
    include_once("../INC/pdb.php");

  
      

     if($_SESSION["user"]!="") /* if($_SESSION["user"]=="admin") */
     {
         $page_no=0;
         $total_records=0;
         $rec_limit = 5;
         $offset=0;

          /*  GIVES TOTAL NO. OF RECORDS */

         $sql_query3="SELECT count(*) FROM product";
         $result3=$conn->query($sql_query3);
         $row3=$result3->fetch_assoc();
         $total_records=$row3["count(*)"];
        
 
          if(isset($_GET["pg_no"]))
          {
              $page_no=$_GET["pg_no"] + 1;
              $offset = $rec_limit * ($page_no);
          }
          else
          {
             $page_no=0;
             $offset=0;
          }
            
             $left_rec = $total_records - ($page_no * $rec_limit);
        
              $sql_query = "SELECT * FROM product LIMIT $rec_limit OFFSET $offset" ;  
              $result=$conn->query($sql_query);

              /*$sql_query4 = "SELECT * FROM product" ;  
              $result4=$conn->query($sql_query4);*/

             include("Admin_header.php");
       ?>       

     <div class="content">
        <div class="container-fluid">

             <div class="row">
                <div class="col-md-12">
                     <a class="navbar-brand" href="AddProduct.php">Add Product</a>
                 </div>
            </div>

          <div class="row">

            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Products Records</h4>
                 
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>NAME</th>
                      <th>Quantity</th>
                      <th>PRICE</th>
                      <th>IMAGE</th>
                      <th>SUB CATEGORY</th>
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
                                      <td><?php echo $row["prdct_id"]; ?></td>
                                      <td><?php echo $row["prdct_name"]; ?></td>
                                      <td><?php echo $row["prdct_qty"]; ?></td>
                                      <td>Rs. <?php echo $row["prdct_price"]; ?></td>
                                      <td><img src="../<?php echo $row["prdct_img"]; ?>" alt="" style="width:70px;height:90px;"></td>
                                      <td> <?php echo $row["sub_cat"]; ?></td>
                                      <td>
                                        <a href="EditProduct.php?id=<?php echo $row["prdct_id"]; ?>">Edit</a> | 
                                        <a href="DeleteProduct.php?id=<?php echo $row["prdct_id"]; ?>">Delete</a></td>
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

        </div>

          <div class="container-fluid">
              
            <p style="float:right;">
            <?php
               
             if($page_no == 0)
             {
                 
                  echo ' <a >Previous</a> | <a href="ViewProduct.php?pg_no='.$page_no.'">Next</a>';
             }
           else if($left_rec < $rec_limit)
           {

              $last= $page_no - 2;
              echo '<a href="?pg_no='.$last.'">Previous</a> | <a>Next</a>';

           }
           else
           {
              $last= $page_no - 2;
             
              echo ' <a href="ViewProduct.php?pg_no='.($last).'" >Previous</a> | <a href="ViewProduct.php?pg_no='.($page_no).'">Next</a>';
           }
          ?>          
      </p>
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