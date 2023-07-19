<?php

session_start();
include("INC/Product_dt_header.php");
include_once("INC/pdb.php");

$index_id="";
 if(isset($_GET["id"])){
    $index_id=$_GET["id"];
   unset($_SESSION["cart_items"][$index_id]);
 }
 if(isset($_GET["action"]))
 {
     unset($_SESSION["cart_items"]);
 }
?>

   <div class="container">
       <h3>Add to Cart</h3>
        <div class="row">
     <table  class="table table-hover" boder="1" style="width:100%;" >   <!--  class="table table-bordered"  -->
            <thead>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Product Quantity</th>
                <th>Product Price</th>
                <th>Total Price </th>
                <th>Delete</th>
           </thead>
           <tbody>
            <?php
              $i=0;
             if(isset($_SESSION["cart_items"]))
            {
               $total=0;
               $a=0;$b=1;$c=2;$d=3;
              foreach($_SESSION["cart_items"] as $item)
              {
                // $a=0;$b=1;$c=2;$d=3;
                echo "<tr>";
                echo "<td>". $item[$a]."</td>";
                echo "<td>". $item[$b]."</td>";
                echo "<td>". $item[$c]."</td>";
                echo "<td>". $item[$d]."</td>";
                echo "<td>". $item[$c]*$item[$d]."</td>";   //echo "<td><a href='Addtocart.php?id=".$i."'><img src='Delete icon.png' height='20px'alt='Remove item'></a></td>";
                $total=$total+($item[$c]*$item[$d]);
                 //echo "<td>"."<a href='Addtocart.php?action=remove id=".$i."'><img src='Delete icon.png' height='20px'alt='Remove item'></a>"."</td>";
                 echo "<td><a href='Addtocart.php?id=".$i."'><img src='Delete icon.png' height='20px'alt='Remove item'></a></td>";
                echo "</tr>";
                $i++;
              }
              
                // $total=$total+($item[$c]*$item[$d]);
                echo "<tr>";
               echo "<td colspan='4' align='right'>".'Total \='."</td>";
               echo "<th  align='right'>".$total."</td>";
                echo "</tr>";
                
              }
             /* echo "<tr>";
               echo "<td colspan='4' align='right'>".'Total \='."</td>";
               echo "<th  align='right'>".$total."</td>";
              echo "</tr>";*/
              
              ?> 
        </tbody>
    </table>
    </div>
       <div class="modal-footer">
            <a href="Addtocart.php?action=empty" class="btn btn-danger" style="margin:10px;">Empty Cart</a>
            <?php
            if(empty($_SESSION["cart_items"]))
            {
             echo '<script> alert("Your Cart is Empty!"); </script>';
             }
           
           else{
           echo' <a href="checkout.php" class="btn btn-danger">CheckOut</a>';
           }
           ?>
         </div>
  
</div>

<?php  
include("INC/footer.php"); 
?>

<!-- // unset($_SESSION["cart_items"][4]);
             // unset($_SESSION["cart_items"][5]);  -->
