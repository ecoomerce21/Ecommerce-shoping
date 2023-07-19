<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>
<style>
   a{
    background:grey;
    font-size:30px;
   
    width:30px;

   }

    </style>
<body>
     <center>
    <h4 class="mt-5 text-center"> Thank You For Your Order ... Your Order Id is:<?php echo $_SESSION["order_id"]; ?></h4>
  <br>
  
    <!--<button href="Feedback.php" class="btn btn-success w-50" name="btn_cnfrm_order">Feedback</a> -->
    <a href="Feedback.php"  class="btn btn-primary w-50">Do You Want to Give Feedback? Click Here</a>
   </center>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
   <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
</body>
</html>