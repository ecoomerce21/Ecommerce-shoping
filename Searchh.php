<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive e-commerce website design tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  
    <link rel="stylesheet" href="stylee.css">-->

    <style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
   /*.container {
     width:100%;
     min-height:10vh;
     padding: 10px;
    /* background-image: linear-gradient(rgba(0,8,51,0.9), rgba(0,8,51,0.9));*/
     /*background-position:center;
     background-size:cover;
     display:flex;
     align-items:center;
    justify-content:center;
     

    }*/
    .search-bar{
        width:20%;
        max-width:700px;
       
        background:lightgrey;  /*rgba(255,255,255,0.2);*/
        display:flex;
       /* align-items:center;*/
        border-radius:60px;
       
       /* padding:10px 10px;*/
    }
    .search-bar input{
         background:transparent;
         
         flex:1;
         
         border:0;
         outline:none;
         padding:10px 10px;
         font-size:20px;
         color:black;
    }
    ::placeholder{
        color: rgba(255,255,255,0.2);/*#cac7ff;*/

    }
    .search-bar button .img{
        width:25px; 
          
    }

  
.search-bar button{
        border:0;
        font-size:1.5rem;
        /*margin-right: 20px;*/
        border-radius:50%;
        width:90px;
       /* height:20px;*/
        background:lightgrey;
        cursor:pointer;
    }
    /* button:hover{
        color:var(--orange);
    }*/
  
    .container form button:hover{
      color:var(--orange);
}
 </style>

</head>
<body>
    
<!-- header section starts  -->

<div class="container" id="header">
   <!-- <a href="#" class="logo">fahion<span>.</span></a> -->
    <form action="" class="search-bar">
        <input type="search" name="search_txt" id="search_bar">
        <button type="submit" name="btn_search"  class="fas fa-search"></button>
    </form>

</div>




<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>