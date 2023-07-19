<?php
include_once('pdb.php');
/*$sql_query="SELECT * FROM product";
$result=$conn->query($sql_query);*/
$num_per_page=12;
$start=0;
 if(isset($_GET['start']))
 {
    $start=$_GET['start'];
    $start--;
    $start=$start*$num_per_page;
 }
 /*else{
    $start=1;
 }*/
 /*$start_from=($page-1)*05;*/
 $sql_query="SELECT * FROM product where prdct_cat=1 limit $start,$num_per_page";
 $result=$conn->query($sql_query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $sql_query="SELECT * FROM product where prdct_cat=1";
      $result=$conn->query($sql_query);
      $total_record=mysqli_num_rows($result);
     // echo  $total_record ."<br>";
      $total_pages=ceil($total_record/$num_per_page);
     // echo $total_pages;
      for($i=1;$i<=$total_pages;$i++){
       echo "<a href='?start=".$i."'>".$i."</a> ";
       //<a href="?start=<?php echo $i >"><php echo $i ></a> 
      }
    ?>
</body>
</html>

