<?php
session_start();
include("INC/Product_dt_header.php");

?>

<section class="container-fluid mt-6 mb-5">
<div class="row">
        <div class="col-md-9">
            
        <h4>Shipping/Billing Address</h4>
            <form action="" method="post">
          
          <div class="form-group">
              <i class="fa fa-user"></i>
                <label for="">Full Name</label>
                <intput type="text" class="form-control"style="width:30%;" name="full_name_text"  aria-describedby="helpId" required>
                <span style="color:red;">*</span>
            </div>

            <div class="form-group">
              <i class="fa fa-envelope"></i>
                <label for="">Email</label>
                <intput type="email" class="form-control"style="width:30%;" name="email_text"  aria-describedby="helpId" required>
                <span style="color:red;">*</span>
            </div>

            <div class="form-group">
              <i class="fa fa-envelope"></i> 
                <label for="">Country</label>
                <select class="custom-select" name="country_text" >
                    <option selected> Select country </option>
                    <option value= "pakistan"> Pakistan </option>
                    <option value="India">India</option>
                    <option value="Dubai"> Dubai</option>
                <!--<intput type="email" class="form-control"style="width:30%;" name="email_text"  aria-describedby="helpId" required>
                <span style="color:red;">*</span>-->
            </div> 

         </form>
    </div>
</div>
</section>

<section class="container-fluid mt-6 mb-5">
    <div class="row">
        <div class="col-md-3 p-3">
            <h4><strong>Cart Items</strong></h4>
        <table   class="tbl-cart" width="80%" align-items=center>   <!--  class="table table-bordered"  -->
            <thead >
                <tr class="bg-light " >
               <!-- <th>Product Id</th> -->
                <th style="text-align:left"> Name</th>
                <th style="text-align:right"> Qty</th>
                
                <th style="text-align:right">Total Price </th>
             </tr>
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
                //echo "<td>". $item[$a]."</td>";
                
                echo "<td style=text-align:left>". $item[$b]." "."</td>";
                echo "<td style=text-align:right>". $item[$c]."</td>";
               // echo "<td style=text-align:center>". $item[$d]."</td>";
                 echo "<td style=text-align:right>". $item[$c]*$item[$d]."</td>";   //echo "<td><a href='Addtocart.php?id=".$i."'><img src='Delete icon.png' height='20px'alt='Remove item'></a></td>";
                  $total=$total+($item[$c]*$item[$d]);
                 //echo "<td>"."<a href='Addtocart.php?action=remove id=".$i."'><img src='Delete icon.png' height='20px'alt='Remove item'></a>"."</td>";
                // echo "<td><a href='Addtocart.php?id=".$i."'><img src='Delete icon.png' height='20px'alt='Remove item'></a></td>";
                echo "</tr>";
                $i++;
              }
              
                // $total=$total+($item[$c]*$item[$d]);
              ;
                echo "<tr  class='bg-light'>";
               echo "<td colspan='2'  align='right'>".' Total \=    '."</td>";
               echo "<td  align='right'>"."<b>".$total."</b>"."</td>";
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
    </div>   
</section>




<?php
include("INC/footer.php"); 
?>