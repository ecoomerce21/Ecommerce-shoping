<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!--
   <style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
   .container {
     width:100%;
     min-height:100vh;
     padding:20%;
     background-image: linear-gradient(rgba(0,8,51,0.9), rgba(0,8,51,0.9));
     background-position:center;
     background-size:cover;
     display:flex;
     align-items:center;
     justify-content:center;

    }
    .search-bar{
        width:100%;
        max-width:700px;
       
        background:lightgrey;  /*rgba(255,255,255,0.2);*/
        display:flex;
        align-items:center;
        border-radius:60px;
        padding:20px, 20px;
    }
    .search-bar input{
         background:transparent;
         
         flex:1;
         
         border:0;
         outline:none;
         padding:10px 10px;
         font-size:20px;
         color:white;
    }
    ::placeholder{
        color:#cac7ff;

    }
    .search-bar button img{
        width:25px; 
          
    }
.search-bar button{
        border:0;
        margin-right: 20px;
        border-radius:50%;
        width:40px;
        height:40px;
        background:#58629b;
        cursor:pointer;
    }

 </style> -->




<style>
    
    header form{
    display: flex;
    align-items: center;
    width: 40rem;
    border-radius: 10rem;
    height: 5rem;
    background: var(--white-color);
    overflow:hidden;
}
 header form input{
    width: 100%;
    height: 100%;
    background: none;
    font-size: 1.7rem;
    color:var(--white-color);
    padding:0 2rem;
    text-transform: none;
}

 header form button{
    font-size: 2rem;
    padding-right: 2rem;
    color:var(--white-color);
    cursor: pointer;
}

header form button:hover{
    color:var(--orange);
}




    </style>
</head>

<header>

    <form action="" method="post">
    <input type="search" id="search-bar" name="search_txt" >
    <button for="search-bar"  name="btn_search" class="fas fa-search"></button> <!-- for="search-bar" -->
</form>
</header>
   
    
<!--
 <div class="container">
    <form action="" class="search-bar">
        <input type="text" placeholder="search here..." name="q">
        <button type="submit"><img src="search.webp"  alt=""></button>
    </form> -->
    
 </div>
 
  <body>
      
  






  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

     <!-- custom js file link -->
   <script src="js/script.js"></script>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>