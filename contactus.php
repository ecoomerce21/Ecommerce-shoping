<?php
 
 session_start();
if($_SERVER['REQUEST_METHOD'] == "POST")
{ 
            
if(isset($_POST['Name'])){
if(empty($_POST['Name']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])){
    $_SESSION['result'] = "All the field is required!";
    header("Location: contactus.php");
} else if(strlen($_POST['phone'])<11){
   $_SESSION['result'] = "Enter at least 11 digit in phone field";
   header("Location: contactus.php");
   
} else if(!filter_var($_POST['email'] ,FILTER_VALIDATE_EMAIL)){
   $_SESSION['result'] = "Enter valid Email";
   header("Location: contactus.php");

} else if(strlen($_POST['message'])<10){
   $_SESSION['result'] = "Message length should be greater then 10 Character";
   header("Location: contactus.php");

} else{
   /* include("INC/Pdb.php");*/
    
    $host = "localhost";
   $user= "root";
   $password ="";
    $db= "ecommerce";
     $con =new mysqli( $host, $user, $password , $db);
   if(!$con){
    echo "connection fail";
     }
                      
   if(isset($_POST['save'])){
      $textarea=trim($_POST['message']);
     $sql= "INSERT INTO contact(Name, phone , email ,subject, message) VALUE('" .$_POST['Name']. "', '".$_POST['phone']."','".$_POST['email']."','".$_POST['subject']."',('".$textarea."'))";
      $r= $con->query($sql);
      $email = $_POST['email'];
      $q=mysqli_query($con,"SELECT  email  FROM customer_tbl WHERE email='$email'");
      $num= mysqli_fetch_array($q);
      if(!$num){
        $_SESSION['result']= "Sorry You Should Signup first";

      }
      else{
     if($r == TRUE){
     // $_SESSION['result'] = "Thanks for sending Message";
      header("Location: contactmail.php");
     }
   else{
    
       $_SESSION['result']= "Sorry something wrong";
       header("Location: contactus.php");
   }
 }
}

}
}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Contect Us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="style16.css">
</head>
  <body>
     <section class="contact">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 mx-auto col-md-8 col-sm-12">
                    <div class="card col-md-12 col-sm-12">
                        <div class="card-bod ">
                            <div class="row">
                                <div class="col-lg-12  col-md-12 col-sm-12 col-xs-sm-6">
                                    <div class="head text-center text-white py-3">
                                        <h3>Contact Us</h3>


                                    </div>
                                </div>
                            </div>
                            <div class="form p-3">
                            <form method="post" action= "">
                                <div class="form-row my-5">
                                    
                                    <div class="col-lg-6 col-md-8 col-xsm-12">
                                     <input type="text"  class="effect-1" name="Name" placeholder="Name">
                                      <span class="Focus-border"></span>
                                    </div>
                                    <div class="col-lg-6 col-md-8">
                                        <input type="text" class="effect-1" name="phone"   placeholder="+92xxxxxxxxx">
                                         <span class="Focus-border"></span>

                                       </div>

                                </div>
                                <div class="form-row pb-4">
                                    <div class="col-lg-6 col-md-8">
                                        <input type="text"  class="effect-1" name="email"  placeholder="Email Address">
                                        <span class="Focus-border"></span>
                                    </div>
                                    <div class="col-lg-6 col-md-8">
                                        <input type="text"  class="effect-1" name="subject"  placeholder="Subject">
                                        <span class="Focus-border"></span>
                                    </div>

                                </div>
                                <div class="form-row pt-5">
                                    <div class="col-lg-12 col-md-8">
                                        <input name="message"  class="effect-1"  placeholder="Your Message">
                                        <span class="Focus-border"></span>

                                    </div>

                                </div>
          <div class="alert">
          <?php if(isset($_SESSION['result'])){
                
                echo $_SESSION['result']; 
              }?>
         
</div>
                                <div class="form-row pt-4">
                                    <div class="col-lg-6 col-md-8">
                                        <p class="check"><input type="checkbox" >I'm not a Robort</p>
                                    </div>
                                    <div class="offset-2 col-lg-4 col-md-12">
                                        <input class="btn1" type="submit" name = "save" value="SEND MESSAGE">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>