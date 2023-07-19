<?php
  session_start();
  /*$_SESSION["user"]="";*/
   //include("Admin_header.php");
   /*include_once("INC/pdb.php");*/ 
    include_once("../INC/pdb.php");
  // $result="";
   /*if(isset($_POST["btn_login"]))
  {
    $user=$_POST["user_txt"];
    $paswrd=$_POST["pswrd_txt"];
  }*/
   if($_SESSION["user"] !=""){
    $userr= $_SESSION["user"];
     echo $userr. 'heloo';
    $sql_query = "SELECT * FROM admin_login WHERE username='$userr'" ;  
    $result=$conn->query($sql_query);
     // Id fetch

     $sql_query1 = "SELECT id FROM admin_login WHERE username='$userr'" ;  
     $i=$conn->query($sql_query1);
     global $id;
     if($i->num_rows > 0){
        if($r=$i->fetch_assoc())
        {
          echo $r["id"];
           $id=$r["id"];
        }
     }
     
  
    if(isset($_POST["btn_update"])) 
    {
        
        // $i=$_POST["a_id"];
         $n=$_POST["A_name"];
         $p= $_POST["pswrd"];
         $e= $_POST["email"];
         $fn= $_POST["F_name"];
         $ln= $_POST["L_name"];
         $c = $_POST["city"];
         $cntry = $_POST["country"];



         $sql_query2 = "UPDATE admin_login SET  username ='$n', pasword='$p',Email_Address='$e', First_Name='$fn',Last_Name='$ln',City='$c',Country='$cntry' WHERE admin_login . id='$id'";
         if($conn->query($sql_query2))
         {
              echo '<script> alert("Record Updated");</script>';
              header("Location:Viewprofile.php");
         }
        else{
           echo $conn->error();
        }
    }
    
   }
  
      /* Heder work  */
      include("Admin_header.php");
       

  ?> 
      <!-- End Navbar -->
      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <p  class="card-title">Edit Profile</a>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form action="" method="post">
                  <?php
                     if($result->num_rows > 0)
                     {
                      
                        while($row=$result->fetch_assoc())
                        {
                          ?>
                          <div class="row">
                        
                           <div class="col-md-3">
                             <div class="form-group">
                               <label class="bmd-label-floating">ID</label>
                               <input type="text" name="a_id" class="form-control"  value=" <?php echo $row["id"]; ?>" disabled>
                            </div>
                            </div>
                          <div class="col-md-4">
                            <div class="form-group">
                            <label class="bmd-label-floating">User Name</label>
                            <input type="text" name="A_name" class="form-control" value=" <?php echo $row["username"]; ?>">
                         </div>
                        </div>
                       </div>

                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="text" name="pswrd" class="form-control"value=" <?php echo $row["pasword"]; ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email Address</label>
                          <input type="email" name="email" class="form-control" value=" <?php echo $row["Email_address"]; ?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" name="F_name" class="form-control" value=" <?php echo $row["First_Name"]; ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" name="L_name" class="form-control" value=" <?php echo $row["Last_Name"]; ?>">
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" name="city" class="form-control" value=" <?php echo $row["City"]; ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" name="country" class="form-control" value=" <?php echo $row["Country"]; ?>">
                        </div>
                      </div>
                    </div>
                  
                  
                  <?php

              }
                }
                
                  ?>
                  <div class="row">
                    
                  <a class="btn btn-primary pull-right"style="color:white;" href="ViewProfile.php">Back</a>
                  <button type="submit" name="btn_update" class="btn btn-primary pull-right">Update Profile</button>
                   </div> 
                  <!--<div class="clearfix"></div> -->
              </form>
             
            </div>




              </div>
            </div>
            <!--
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>

      <?php  
       include("Admin_footer.php");
      ?>
    </body>
    </html>