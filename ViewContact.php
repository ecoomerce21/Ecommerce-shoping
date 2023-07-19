<?php
  session_start();
   /*include("Admin_header.php");
   /*include_once("INC/pdb.php");*/ 
    include_once("../INC/pdb.php");

  


     if($_SESSION["user"]!="") /* if($_SESSION["user"]=="admin")*/
     {
        
        $sql_query = "SELECT * FROM contact" ;  
        $result=$conn->query($sql_query);

         include("Admin_header.php");
     ?>    

     <div class="content">
        <div class="container-fluid">

            

            <div class="row">

            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Contact Records</h4>
                 
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th> ID</th>
                      
                    
                      <th>EMAIL</th>
                      
                      <th> MESSAGE</th>
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
                                      <td><?php echo $row["id"]; ?></td>
                                      
                                      <td><?php echo $row["email"]; ?></td>
                                     
                                      <td><?php echo $row["message"]; ?></td>
                                      <td>
                                        <a href="DeleteContact.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
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
      </div>
  
  <?php
   /*
   include("Admin_footer.php"); */


}
    else
    {
      header("Location:login.php");
    }
     
?>