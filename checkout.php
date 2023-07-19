<?php
session_start();
include("INC/Product_dt_header.php");

/*
if(empty($_SESSION["cart_items"]))
{
  echo '<script> alert("cannot go to checkout!"); </script>';
}
else{*/
// if($_SESSION["customer_name"]=="")
//   {
//     header("Location:login.php"); // header("Location:login_customer.php");
//   }
 /*global $name;
 if(isset($_POST["full_name_txt"]))
 {
  $name=$_POST["full_name_txt"];
 }
 if(($name>='a'&& $name <='z') || ($name >='A' && $name <='Z'))
//if(if(isset($_POST["full_name_txt"]))>='a' && if(isset($_POST["full_name_txt"])<='z')) || (($_POST['full_name_txt'])>='A' && ($_POST["full_name_txt"])<='Z'))
{
   //$_SESSION['result']="Enter name in Alphabet";
   echo '<script> alert("cannot go to checkout!"); </script>';
   header("Location:checkout.php");
}
else{ */
   
  /*$cust_name = $cust_email =  $cust_phoneno = $comment = $website = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cust_name = test_input($_POST["full_name_txt"]);
    $cust_email = test_input($_POST["email_txt"]);
    $cust_phoneno = test_input($_POST["phone_no_txt"]);
    //$comment = test_input($_POST["comment"]);
    //$gender = test_input($_POST["gender"]); 
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  } */

  $cust_name = $cust_email = "";//$cust_phoneno="";
  $cust_email=isset($_POST["email_txt"]);
  $cust_name=isset($_POST["full_name_txt"]);
  $cust_phoneno=isset($_POST["phone_no_txt"]);
  /*if (!preg_match("/^[a-zA-Z-' ]*$/",$cust_name)) {
    $nameErr = "Only letters and white space allowed";
      echo '<script> alert("Only letters and white space allowed"); </script>';
  }
 
   if(!preg_match("/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/",$cust_email))
  {echo '<script> alert("Invalid Email-ID"); </script>';}*/
  
   if($cust_phoneno >11)
  {echo '<script> alert("Invalid phone number"); </script>';} 


 // else{
    if(isset($_POST["btn_cnfrm_order"]))
    {
        $cust_id=$_SESSION["customer_id"];
       
        //$cust_name=$_POST["full_name_txt"];
        
        //$cust_email=$_POST["email_txt"];
        $cust_cntry=$_POST["country_txt"];
        $cust_city=$_POST["city_txt"];
        $cust_adres=$_POST["adres_txt"];
       // $cust_phoneno=$_POST["phone_no_txt"];
        $payment_method=$_POST["p_metdh"];

        $card_name=$_POST["crd_name"];
        $card_cvv=$_POST["crd_cvv"];
        $card_no=$_POST["crd_no"];
        $card_expiry=$_POST["crd_exp"];

        $vchr_code=$_POST["vcode_txt"];
        $delivery_charges=$_POST["delverycharge_txt"];
        $total_bill_amnt=$_SESSION["Total_bill"];        //$total;
        $order_date=date("y/m/d");

       

        /* for order id query */
       /* =================================================*/

          $sql_order="INSERT INTO order_tbl values(0,'$cust_id',' $order_date')";
          // $conn->query($sql_order);
          if($conn->query($sql_order)===TRUE)
           {
              $last_order_id=$conn->insert_id;

              /* For  Billing id query */
           /* ==================================================================*/
          
          

           $sql_bill="INSERT INTO billing_tbl values(0,'$cust_name','$cust_email','$cust_cntry','$cust_city','$cust_adres','$cust_phoneno',$cust_id,$last_order_id,$total_bill_amnt,'$order_date','$payment_method','none')";
             
             $conn->query($sql_bill);
              
             if(!empty($_SESSION["cart_items"]))
             {
               
               foreach($_SESSION["cart_items"] as $item)
               {
                  $a=0;$b=1;$c=2;$d=3;

                 $p_id=$item[$a];
                 $p_price=$item[$d];
                 $p_qty=$item[$c];
                 $ordr_id=$last_order_id;
                 /*  FOR ORDER DETAIL QUERY */
               /* ===========================================================================*/
                 $sql_order_detail="INSERT INTO order_dt_tbl values(0,$p_id,$p_price,$p_qty,$ordr_id)";
                 $conn->query( $sql_order_detail);

               }

             }

               $_SESSION["order_id"]=$last_order_id;

           }
          else{
            echo "Error: " .$sql_order. "<br>" .$conn->error;
          }

        header("Location:confirm_order.php");
    }
  // }
  //} 
?>
  
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
 <section class="container-fluid mt-6 mb-5">                                                                    <!--<section id="prodetails" class="section-p1"> -->
    <div class="row">
    <div class="col-md-9 p-3">
         <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

   <div class="row">

    <div class="col-md-6">
                        <h4><b>Shipping/Billing Address</b></h4><br><br>
                        <!-- Form Making -->

         
                      <div class="form-group">
                            <i class="fa fa-user"></i>
                              <label for="exampleInputFullname1">Full Name</label>
                                <input type="text" class="form-control"  style="width:40%;" name="full_name_txt" id="exampleInputFullname1" aria-describedby="nameHelp" placeholder="Enter Full Name" required  >
                                 <!--<php
                                  if(isset($_SESSION['result'])){
                                    echo $_SESSION['result'];
                                  }
                                 ?> -->
                                
                        </div>


                          <div class="form-group">
                           <br>
                       <i class="fa fa-envelope"></i>
                          <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" style="width:40%;" name="email_txt" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" >
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                             </div>

                    <!--<div class="form-group">
                       <br>
                       <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" style="width:40%;" id="exampleInputPassword1" placeholder="Password" required >
                   </div>  -->

                   <div class="form-group">
                         <br>
                         <i class="fa fa-flag"></i>
                       <label for="exampleInputcountry1"> Country</label>
                        <select class="form-control" name="country_txt" style="width:40%;">
                        <option selected>Select Country</option>
                        <option value= "pakistan"> Pakistan </option>
                         <option value="India">India</option>
                          <option value="Dubai"> Dubai</option>
                       </select>
                   </div>

               <div class="form-group">
                        <br>
                        <i class="fa fa-city"></i>
                       <label for="exampleInputcountry1"> City</label>
                       <select class="form-control" name="city_txt" class="custom-select" style="width:40%;">
                          <option selected>Select City</option>
                          <option value= "Lahore"> Lahore </option>
                            <option value="Karachi">Karachi</option>
                            <option value="Islamabad"> Islamabad</option>
                      </select>
                  </div>

           <div class="form-group">
                  <br>
                  <i class="fa fa-address-card"></i>
                 <label for="exampleInputStreetAddress1">Street Address</label>
                   <input type="text" class="form-control" name="adres_txt" style="width:40%;" id="exampleInputStreetAddress1" placeholder=" Street Address" required>
                 </div>

             <div class="form-group">
                     <br>
                     <i class="fa fa-envelope"></i>
                       <label for="exampleInputPhoneNumber1">Phone Number</label>
                        <input type="text" class="form-control" name="phone_no_txt"  style="width:40%;"  id="exampleInputPhoneNumber1" placeholder="Phone Number" required  >
            </div>

      <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
    </div>
         <div class="col-md-6">
                 <h4><b>Payments</b></h4><br><br>
                  <label for=""><b>Payment Method</b></label><br><br>
                    <div class="form-check form-check-inline">
                         <label class="form-check-label">
                              <input class="form-check-input ml-5" type="radio" name="p_metdh" id="COD" value="COD">Cash on Delivery
                                <br>
                              <input class="form-check-input ml-5" type="radio" name="p_metdh" id="OP" value="OP">Online Payment
                                <br>
                              <input class="form-check-input ml-5" type="radio" name="p_metdh" id="EP" value="EP">Easypaisa
                                 <br>
                              <input class="form-check-input ml-5" type="radio" name="p_metdh" id="PP" value="PP">Paypal
                          </label>
                    </div>
                    <br>
                       <!-- Card Form Code -->
             <div class="card_div" id="card_div">
                       <h4 class="mt-3"><b>Card Information</b></h4>
                     <div class="row mt-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for=""></label>
                                 <input type="text" class="form-control" name="crd_name" aria-describedby="helpId" placeholder="">
                                 <small id="helpId" class="form-text text-muted">Card Name</small>
                            </div>

                            <div class="form-group">
                                <br>
                                <label for=""></label>
                                 <input type="number" class="form-control" name="crd_cvv" aria-describedby="helpId" placeholder="">
                                 <small id="helpId" class="form-text text-muted">CVV Code</small>
                            </div>
                                 
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for=""></label>
                                 <input type="text" class="form-control" name="crd_no" aria-describedby="helpId" placeholder="">
                                 <small id="helpId" class="form-text text-muted">Credit Card Number</small>
                            </div>

                            <div class="form-group">
                                <br>
                                <label for=""></label>
                                 <input type="date" class="form-control" name="crd_exp" aria-describedby="helpId" placeholder="">
                                 <small id="helpId" class="form-text text-muted">Card Expiry</small>
                            </div>

                      </div>
                  </div>
             </div>


  <script>
       $(document).ready(function(){

        $(".card_div").hide();

        $("input[id='OP']").click(function(){
            $(".card_div").show();
        });

        $("input[id='PP']").click(function(){
            $(".card_div").hide();
        });


        $("input[id='COD']").click(function(){
            $(".card_div").hide();
        });
    });    
 </script>


                  <div class="form-group mt-3">
                        <label for="">Vocher Code</label>
                        <input type="text" class="form-control" name="vcode_text" id="" aria-describedby="helpId" placeholder="">
                    </div>
                   <div class="form-group mt-3">
                        <label for="" name="delverycharge_txt">Delivery Charges :</label>
                        <label for="">Rs.100/=</label>
                  </div>
             </div>
      </div>  
   <div class="row">
       <div class="col-md-12 text-center">
             <br>
       <button type="submit" class="btn btn-success w-50" name="btn_cnfrm_order">Confirm Order</button>
       </div>
   </div>
   </form>
  </div> 
         
          <!-- Form End -->            
  
 
        <div class="col-md-3 p-3">
            <h4><strong>Cart Items</strong></h4>
        <table   class="tbl-cart" width="90%" align-items=center>   <!--  class="table table-bordered"  -->
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
             if(!empty($_SESSION["cart_items"]))
            {
               $total=0;
               $a=0;$b=1;$c=2;$d=3;
              foreach($_SESSION["cart_items"] as $item)
              {
                // $a=0;$b=1;$c=2;$d=3;
                echo "<tr>";
                //echo "<td>". $item[$a]."</td>";
                
                echo "<td style=text-align:left>". $item[$b]." "."</td>";
                echo "<td style=text-align:center>". $item[$c]."</td>";
               // echo "<td style=text-align:center>". $item[$d]."</td>";
                 echo "<td style=text-align:right>". $item[$c]*$item[$d]."</td>";   //echo "<td><a href='Addtocart.php?id=".$i."'><img src='Delete icon.png' height='20px'alt='Remove item'></a></td>";
                  $total=$total+($item[$c]*$item[$d]);
                 //echo "<td>"."<a href='Addtocart.php?action=remove id=".$i."'><img src='Delete icon.png' height='20px'alt='Remove item'></a>"."</td>";
                // echo "<td><a href='Addtocart.php?id=".$i."'><img src='Delete icon.png' height='20px'alt='Remove item'></a></td>";
                echo "</tr>";
                $i++;
              }
              
                // $total=$total+($item[$c]*$item[$d]);
              
                echo "<tr  class='bg-light'>";
               echo "<td colspan='2'  align='right'>".' Total \=    '."</td>";
               echo "<td  align='right'>"."<b>".$total."</b>"."</td>"; $_SESSION["Total_bill"]=$total;
                echo "</tr>";
                
              }
             /* echo "<tr>";
               echo "<td colspan='4' align='right'>".'Total \='."</td>";
               echo "<th  align='right'>".$total."</td>";
              echo "</tr>";*/   
              ?> 
       </tbody>
        </table>
        <br>
       
        </div>
       
     </div>    
    
</section> 


  
<?php  
include("INC/footer.php"); 
?>















<!--
          <form>
          <div class="form-group">
              <i class="fa fa-user"></i>
                <label for="exampleInputfullname1">Full Name</label>
                <intput type="text" class="form-control"style="width:30%;" name="full_name_text"  id="exampleInputfullname1" aria-describedby="exampleInputfullname1Help" placeholder="Enter Full Name"  required>
               
            </div>

            <div class="form-group">
              <i class="fa fa-envelope"></i>
                <label for="">Email</label><br>
                <intput type="email" class="form-control"style="width:30%;" name="email_text"  aria-describedby="helpId" required>
                <span></span>
            </div>

            <div class="form-group">
             
                <label for="">Country</label><br>
                <select  class="form-select form-select" style="width:30%;" name="country_text" >
                    <option selected> Select country </option>
                    <option value= "pakistan"> Pakistan </option>
                    <option value="India">India</option>
                    <option value="Dubai"> Dubai</option>
                    <span style="color:red;">*</span>
               </select>
             </div> 

             <div class="form-group">
                <label for="">City</label><br>
                <select class="form-select form-select" class="form-control" style="width:30%;" name="city_text" >
                    <option selected> Select city </option>
                    <option value= "Karachi"> Karachi </option>
                    <option value="Dehli">Dehli</option>
                    <option value="Lahore"> Lahore</option>
                    <span style="color:red;">*</span>
               </select>
             </div> 

             <div class="form-group">
              <i class="fa fa-envelope"></i>
                <label for=""> Street Address</label><br>
                <intput type="text" class="form-control" style="width:30%;" name="adres_text"  aria-describedby="helpId" required>
                <span style="color:red;">*</span>
            </div>   -->
    