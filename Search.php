<?php

include_once("INC/pdb.php");
 
 /* $sql="SELECT * FROM product  ";
  $result=$conn->query( $sql);*/
  global $result_s;
  if(isset($_POST["btn_search"]))
 {
      $search_by=$_POST["search_by_txt"];
      $search_name=$_POST["search_txt"];

      if($search_by=="ProductName")
      {
           $sql_query_p="SELECT * FROM product WHERE prdct_name='$search_name' ";
           $result_s=$conn->query( $sql_query_p);
      }

     if($search_by =="CategoryName")
      {
        $sql_query_c="SELECT * FROM product WHERE prdct_cat=(SELECT cat_id FROM  category WHERE cat_name ='$search_name') ";
        $result_s=$conn->query( $sql_query_c);
      }

 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0s/css/all.css"/>  -->
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
     
          <!--             SHOW THE SEARCHED PRODUCTS                         
            =====================================================================================
            ===================================================================================== -->

      <div class="container row">
           <?php
         
            if($result->num_rows > 0)
            {
               while($row=$result_s->fetch_assoc())
               {
                ?>
                 <div class="col-md-3">
                     <img src="<?php echo $row['prdct_img']; ?> " style="width:100px;height:300px;">
                      <h5><?php echo $row['prdct_name']; ?></h5>
                       <p>Price Rs.<?php echo $row['prdct_price']; ?> /=</p>
                       <p>Quantity: <?php echo $row['prdct_qty']; ?> </p>
                 </div>
                <?php
               }
            }
          else{
            echo "No record Found";
          }
           ?>
     </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>






     
                  