<?php
     include("INC/Contact_header.php");
      include_once("INC/pdb.php");
      if(isset($_POST["btn_submit"]))
      {
         $name=$_POST["name_txtbx"];
         $email=$_POST["email_txtbx"];
         $msg=$_POST["msg_txtbx"];
         $sql_query="INSERT INTO contact values(0,'$name','$email','$msg')";

         if($conn->query($sql_query))
         { 
            echo '<script> alert("Inserted");</script>';
         }
         else{
             echo "Error Message: ".$conn->error;
         }
      }

?>
   <div class="Container">
      <h2>Contact</h2>
      <div class="row">
          <div class="col-md-6">
               <form action="" method="post">

                    <div class="form-group">
                            <input type="text" 
                            class="form-control" name="name_txtbx" aria-describedby="helpId" placeholder="Enter Your Name">
                    </div>
                      <br>
                    <div class="form-group">
                            <input type="email" 
                            class="form-control" name="email_txtbx" aria-describedby="helpId" placeholder="Enter Your Email">
                    </div>
                     <br>
                    <div class="form-group">
                       <label for="">Your Message</label>
                       <textarea class="form-control" name="msg_txtbx"  rows="3" ></textarea> <!-- style="resize:none;" -->
                    </div>
                     <br>
                     <button type="submit" class="btn btn-success" name="btn_submit">Submit</button>

             </form>
          </div>


          <div class="col-md-6">

          </div>
      </div>
 </div>




<?php
   include("INC/footer.php");
?>