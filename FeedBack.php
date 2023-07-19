<?php

  include "db.php";
  session_start();
 if($_SERVER['REQUEST_METHOD'] == "POST")
{ 
                 
 if(isset($_POST['Name'])){
     if(empty($_POST['Name']) || empty($_POST['email']) || empty($_POST['fb']) || empty($_POST['comments'])){
         $_SESSION['result'] = "All the field is required!";
         header("Location: feedback.php");
    
        
     } else if(!filter_var($_POST['email'] ,FILTER_VALIDATE_EMAIL)){
        $_SESSION['result'] = "Enter valid Email";
        header("Location: feedback.php");

     } else if(strlen($_POST['comments'])<10){
        $_SESSION['result'] = "Comments length should be greater then 10 Character";
        header("Location: feedback.php");

     } else{
    
       if(isset($_POST['save'])){
        $textarea=trim($_POST['comments']);
        $sql= "INSERT INTO feedback(Name, email ,fb, comments) VALUE('".$_POST['Name']. "','".$_POST['email']."','".$_POST['fb']."',('".$textarea."'))";
       $r= $con->query($sql);
       if($r == TRUE){
        //   $_SESSION['result'] = "Thanks for sending Feedback";
           header("Location: fbsend.php");
       }
       else{
          
        $_SESSION['result'] = "sending Fail";
        header("Location: FeedBack.php");
       }
     }
    }
}

 }


 
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style12.css">

</head>
  <body>
    
<!------ Include the above in your HEAD tag ---------->

<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>FEEDBACK</h2>
				<h4>We would love to hear from you!</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
            <form method="post" action= "">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname"  name="Name"  placeholder="Enter Name" >
				  </div>
				</div>
		        <div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
				  </div>
				</div>
				<div class="form-group">
					
					<label class="control">Bad</label>
                            <input type="radio" name="fb"  value="Bad" class="check_1"  >
                            <label class="control">Good</label>
                            <input type="radio" name="fb" value="Good" class="check">
                            <label class="control">Very Good</label>
                            <input type="radio" name="fb"  value="very Good" class="check">
                            <label class="control">Excellent</label>
                            <input type="radio" name="fb" value="Excellent" class="check">
				  </div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Comment:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="comment" name="comments"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name = "save" class="btn btn-default">Submit</button>
				  </div>
				  <div class="alert">
					<?php if(isset($_SESSION['result'])){
					
					  echo $_SESSION['result']; 
					}?>
	</div>
				</div>
			</div>
		</div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>