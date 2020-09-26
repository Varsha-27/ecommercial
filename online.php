<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
<title>Online Store</title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- font-->
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Dancing+Script:wght@500&family=Kaushan+Script&family=Krona+One&family=Pacifico&family=Permanent+Marker&family=Satisfy&display=swap" rel="stylesheet">
<!-- css-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- fontawesome-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!--carousel-->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!--stylesheet-->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
</head>
<body>
<header>
<div class="container">
<div class="col-md-4 col-12 text-center">
<h1 class="my-md-3 "><b>Shoppers Stop</b></h1>
</div>
</div>
</header>
  
<div class="sticky-top">
<nav class="navbar navbar-expand-lg navbar-light bg-light  mb-0">
  <a class="navbar-brand" href="#trend">Trending</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#brands">Brands</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Collections
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="women.html">Women's</a>
          <a class="dropdown-item" href="#">Men's</a>
          <a class="dropdown-item" href="#">Sportswear</a>
          <a class="dropdown-item" href="#">Kidswear</a>
          <a class="dropdown-item" href="#">Footwear</a>
          <a class="dropdown-item" href="#">Beauty & Grooming</a>
        </div>
      </li>
    </ul>
    <form class="form-inline">
    <div class="input">
    <input type="text" class="form-control " placeholder="Search for more products" aria-label="Search" aria-describedby="button-addon2">
    <button class="btn btn-dark" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
    </div>
    </form>
  </div>
  <div>
  <i class="fa fa-user px-4"></i>
  </div>
  <div>
  <a style="color:black;" href="shop.html"><i class="fa fa-shopping-bag px-4"></i></a>
  </div>
  <div>
  <div>
  <a style="color:black;" href="wishlist.html"><i class="fa fa-bookmark-o  px-4"></i></a>
  </div>
  </div>
 
<div class="col-md-4 col-12 ">
<p class="my-md-4 header-links">
<a href="login.php" class="px-2">Log In</a>
<a href="login.php" class="px-2">Sign Up</a>
</p>
</div>
</nav>
</div>

 <main>

  <div id="carouselExampleControls" class="carousel slide  " data-ride="carousel"> 
  <div class="carousel-inner " >
    <div class="carousel-item active">
      <img src="./images/banner1.png" height="430px" class="d-block w-100  " alt="banner1">
    </div>
    <div class="carousel-item">
      <img src="./images/banner6.png"  height="430px" class="d-block w-100 " alt="banner2">
    </div>
    <div class="carousel-item">
      <img src="./images/banner2.png"  height="430px" class="d-block w-100 " alt="banner3">
    </div>
   <div class="carousel-item">
      <img src="./images/taavi.jpg"  height="430px"  class="d-block w-100 " alt="banner3">
    </div>
    <div class="carousel-item">
      <img src="./images/banner5.png"  height="430px"  class="d-block w-100 " alt="banner3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="small-container  m-auto" id="deals">
  <h2 class="heading5"><b>Deals Of The Day</b></h2>
  <div class="row">
  <div class="col col-md-2 col-lg-2  col-sm-4 col-xsm-16" id="deal">
  <img src="./images/deal1.png" class="border" width="190px" height="220px">
   </div>
   <div class="col col-md-2 col-lg-2 col-sm-4 col-xsm-16" id="deal">
  <img src="./images/deal2.png"  class="border" width="180px" height="220px">
   </div>
   <div class="col col-md-2 col-lg-2 col-sm-4 col-xsm-16"id="deal">
  <img src="./images/deal3.png" class="border" width="190px" height="220px">
   </div>
   <div class="col  col-md-2 col-lg-2  col-sm-4 col-xsm-16" id="deal">
  <img src="./images/deal4.png" class="border" width="190px" height="220px">
   </div>
   <div class="col col-md-2 col-lg-2 col-sm-4 col-xsm-16" id="deal">
  <img src="./images/deal5.png" class="border" width="190px" height="220px">
   </div>
  </div>
  </div>

<div id="carouselExampleControls" class="carousel slide mt-5 " data-ride="carousel">
  <h2 class="ml-3"><b>CATEGORIES TO BAG</b></h2>
  <div class="carousel-inner p-3" >
    <div class="carousel-item active">
    <div class="row">
    <div class="col-3 p-5"> <img src="./images/C1.png" height="250px"  class="d-block w-100  " alt="banner1"></div>
    <div class="col-3 p-5 "> <img src="./images/C2.png" height="250px"  class="d-block w-100  " alt="banner1"></div>
    <div class="col-3 p-5"> <img src="./images/C3.png"  height="250px"  class="d-block w-100  " alt="banner1"></div>
    <div class="col-3 p-5"> <img src="./images/C4.png"  height="250px" class="d-block w-100  " alt="banner1"></div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="row">
    <div class="col-3 p-5 "> <img src="./images/C5.png"  height="250px" class="d-block w-100  " alt="banner1"></div>
    <div class="col-3 p-5 "> <img src="./images/C6.png" height="250px"  class="d-block w-100  " alt="banner1"></div>
    <div class="col-3 p-5"> <img src="./images/C7.png" height="250px" class="d-block w-100  " alt="banner1"></div>
    <div class="col-3 p-5"> <img src="./images/C8.png" height="250px" class="d-block w-100  " alt="banner1"></div>
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="sm-container p-2" >
  <h2 id="new">New Arrivals</h2>
  <div class="row">
  <div class="col-4">
  <div class="product-top">
     <img src="./images/product-1.jpg" width="200px" height="250px">
     <div class="overlay">
     <button  type="button" class="btn btn-secondary"><i class="fa fa-eye"></i></button>
     <button  type="button" class="btn btn-secondary"><i class="fa fa-heart-o"></i></button>
     <button  type="button" class="btn btn-secondary"><i class="fa fa-shopping-cart"></i></button>
     </div>
  </div>
   <div class="product-bottom ">
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star-o"></i>
   <h3>Red T-shirt</h3>
   <h5>Rs.459</h5>
   </div>
  </div>
  <div class="col-4">
  <div class="product-top">
     <img src="./images/product-2.jpg" width="200px" height="250px">
     <div class="overlay">
     <button  type="button" class="btn btn-secondary"><i class="fa fa-eye"></i></button>
     <button  type="button" class="btn btn-secondary"><i class="fa fa-heart-o"></i></button>
     <button  type="button" class="btn btn-secondary"><i class="fa fa-shopping-cart"></i></button>
     </div>
  </div>
   <div class="product-bottom ">
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class=" fa fa-star-half"></i>
   <i class="fa fa-star-o"></i>
   <h3>Shoes</h3>
   <h5>Rs.759</h5>
   </div>
  </div>
  <div class="col-4">
  <div class="product-top">
     <a href="productDetail.html" ><img src="./images/main.png"  width="200px" height="250px"></a>
     <div class="overlay">
     <button  type="button" class="btn btn-secondary"><i class="fa fa-eye"></i></button>
     <button  type="button" class="btn btn-secondary"><i class="fa fa-heart-o"></i></button>
     <button  type="button" class="btn btn-secondary"><i class="fa fa-shopping-cart"></i></button>
     </div>
  </div>
   <div class="product-bottom ">
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star-half"></i>
   <h3>Campus Sutra</h3>
   <h5>Rs.489</h5>
   </div>
  </div>
  <div class="col-4" >
  <div class="product-top">
     <img src="./images/kurti.jpeg" width="200px" height="250px">
     <div class="overlay">
     <button  type="button" class="btn btn-secondary"><i class="fa fa-eye"></i></button>
     <button  type="button" class="btn btn-secondary"><i class="fa fa-heart-o"></i></button>
     <button  type="button" class="btn btn-secondary"><i class="fa fa-shopping-cart"></i></button>
     </div>
  </div>
   <div class="product-bottom ">
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star"></i>
   <i class="fa fa-star-half"></i>
   <h3>Kurti</h3>
   <h5>Rs.659</h5>
   </div>
  </div>
  </div>
  </div>
  
  <img src="./images/freec.png" width="100%" height="135px">

  <div class="small-container" id="trend">
    <h2 class="trending p-3"><b>TRENDING IN ACCESSORIES</b></h2>
    <div class="row ">
    <div class="col col-md-2 col-lg-2  col-sm-4 ">
    <img src="./images/A5.png" class="border" width="180px" height="200px">
    </div>
    <div class="col col-md-2 col-lg-2  col-sm-4 ">
    <img src="./images/A2.png" class="border" width="180px" height="200px">
    </div>
    <div class="col col-md-2 col-lg-2  col-sm-4 ">
    <img src="./images/A3.png" class="border" width="180px" height="200px">
    </div>
    <div class="col col-md-2 col-lg-2  col-sm-4 ">
    <img src="./images/A4.png" class="border" width="180px" height="200px">
    </div>
    <div class="col col-md-2 col-lg-2  col-sm-4 ">
    <img src="./images/A6.png" class="border" width="180px" height="200px">
    </div>
    </div>
    </div>
    
    <div class="small-container" id="trend">
    <h2 class="trending p-3"><b>TRENDING IN INDIAN WEAR</b></h2>
    <div class="row ">
    <div class="col col-md-2 col-lg-2  col-sm-4 ">
    <img src="./images/I1.png" class="border" width="180px" height="200px">
    </div>
    <div class="col col-md-2 col-lg-2  col-sm-4 ">
    <img src="./images/I2.png" class="border" width="180px" height="200px">
    </div>
    <div class="col col-md-2 col-lg-2  col-sm-4 ">
    <img src="./images/I3.png" class="border" width="180px" height="200px">
    </div>
    <div class="col col-md-2 col-lg-2  col-sm-4 ">
    <img src="./images/I4.png" class="border" width="180px" height="200px">
    </div>
    <div class="col col-md-2 col-lg-2  col-sm-4 ">
    <img src="./images/I5.png" class="border" width="180px" height="200px">
    </div>
    </div>
    </div>
    
<div class="sm-container " id="brands">
<h2 class="heading2">Most Loved Brands</h2>
<div class="row">
<div class="col-4" id="brand">
<img src="./images/nike.png"  width="210px" height="320px">
 </div>
 <div class="col-4 " id="brand">
<img src="./images/shoe.png"  width="210px" height="320px">
 </div>
 <div class=" col-4"id="brand">
<img src="./images/wrogn.png" width="210px" height="320px">
 </div>
 <div class="col-4 " id="brand">
<img src="./images/high.png"  width="210px" height="320px">
 </div>
 <div class="col-4 " id="brand">
<img src="./images/shooes.png"  width="210px" height="320px">
 </div>
 <div class="col-4" id="brand">
<img src="./images/road.png"  width="210px" height="320px">
 </div>
 <div class="col-4" id="brand">
<img src="./images/harbour.png"  width="210px" height="320px">
 </div>
 <div class="col-4 " id="brand">
<img src="./images/flying.png"  width="210px" height="320px">
 </div>
 <div class="col-4 " id="brand">
<img src="./images/gap.png"  width="210px" height="320px">
 </div>
 <div class="col-4" id="brand">
<img src="./images/hrx.png"  width="210px" height="320px">
 </div>
 </div>
 </div>
 
 <div class="small-container1" id="shop">
<h2 class="heading3">Shop By Category</h2>
<div class="row ">

<div class="col col-md-2 col-lg-2  col-sm-4 ">
<h5><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>Loungewear 30-60% Off</h5>
<img src="./images/loungewear.jpg" width="180px" height="200px">
 </div>
 <div class="col col-md-2 col-lg-2  col-sm-4 ">
 <h5><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg> Western 50-60% Off</h5>
<img src="./images/western.jpg" width="180px" height="200px">
 </div>
 <div class="col col-md-2 col-lg-2  col-sm-4 ">
 <h5><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>Jewellery UpTo 70% Off</h5>
<img src="./images/jewellery.jpg" width="180px" height="200px">
 </div>
 <div class="col col-md-2 col-lg-2  col-sm-4 ">
 <h5><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>Beauty Up To 60% Off</h5>
<img src="./images/beauty.jpg" width="180px" height="200px">
 </div>
 <div class="col col-md-2 col-lg-2  col-sm-4 ">
 <h5><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>Kid's Wear 50-70% Off</h5>
<img src="./images/kidswear.jpg" width="180px" height="200px">
 </div>
 <div class="col col-md-2 col-lg-2  col-sm-4 ">
 <h5><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg> Home 40-70% Off</h5>
<img src="./images/home.jpg" width="180px" height="200px">
 </div>
 <div class="col col-md-2 col-lg-2  col-sm-4 ">
 <h5><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>Men's Casual 40-70% Off</h5>
<img src="./images/casual.jpg" width="180px" height="200px">
 </div>
 <div class="col col-md-2 col-lg-2  col-sm-4 ">
 <h5><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg> Bags 40-70% Off</h5>
<img src="./images/bags.jpg" width="180px" height="200px">
 </div>
 <div class="col col-md-2 col-lg-2  col-sm-4 ">
 <h5><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg> Watches Up To 70% Off</h5>
<img src="./images/watches.jpg" width="180px" height="200px">
 </div>
 <div class="col col-md-2 col-lg-2  col-sm-4 ">
 <h5><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>PlusSizes Up To 60% Off</h5>
<img src="./images/plussize.jpg" width="180px" height="200px">
 </div>  
</div>
</div>


<div class="small-container" id="more">
<h2 class="heading4"><b>Shop More brands</b></h2>
<div class="row ">
<div class="col col-md-2 col-lg-2  col-sm-4 ">
<img src="./images/wrangler.png" class="border" width="180px" height="200px">
</div>
<div class="col col-md-2 col-lg-2  col-sm-4 ">
<img src="./images/raymond.png" class="border" width="180px" height="200px">
</div>
<div class="col col-md-2 col-lg-2  col-sm-4 ">
<img src="./images/h.png" class="border" width="180px" height="200px">
</div>
<div class="col col-md-2 col-lg-2  col-sm-4 ">
<img src="./images/polo.png" class="border" width="180px" height="200px">
</div>
<div class="col col-md-2 col-lg-2  col-sm-4 ">
<img src="./images/lee.png" class="border" width="180px" height="200px">
</div>
<div class="col col-md-2 col-lg-2  col-sm-4 ">
<img src="./images/sztori.png" class="border" width="180px" height="200px">
</div>
<div class="col col-md-2 col-lg-2  col-sm-4 ">
<img src="./images/spykar.png" class="border" width="180px" height="200px">
</div>
<div class="col col-md-2 col-lg-2  col-sm-4 ">
<img src="./images/invictus.png" class="border" width="180px" height="200px">
</div>
</div>
</div>


</main>


<footer>
<div class="container py-3">
<div class="row-f">
<div class=" col-2 col-lg-2  col-sm-6">
<h5 style="color:white;">ONLINE SHOPPING</h5>
<p>Men</p>
<p>Women</p>
<p>Kidswear</p>
<p>Home & Living</p>
<p>Offers</p>
<p>Gift Cards</p>
<p>Myntra Insider</p>
</div>
<div class=" col-2 col-lg-2 col-sm-6">
<h5 style="color:white;">USEFUL LINKS</h5>
<p>Contact Us</p>
<p>FAQ</p>
<p>T&C</p>
<p>Terms Of Use</p>
<p>Track Orders</p>
<p>Shipping</p>
<p>Returns</p>
<p>Whitehat</p>
<p>Blog</p>
<p>Careers</p>
<p>Privacy policy</p>
<p>Site Map</p>
</div>
<div class=" col-4 col-lg-4  col-sm-6">
<h6 style="color:white;">EXPERIENCE APP ON MOBILE</h6>
<div class="grid">
<img src="./images/google.png"  width="100px" height="40px" >
<img src="./images/apple.png"  width="100px" height="40px">
</div>
<p style="color:white;">KEEP IN TOUCH</p>
<div>
<i class="fa fa-facebook fa-2x px-2" style="color:white;"></i>
<i class="fa fa-youtube fa-2x px-2" style="color:white;"></i>
<i class="fa fa-instagram fa-2x px-2" style="color:white;"></i>
<i class="fa fa-twitter fa-2x px-2" style="color:white;"></i>
</div>
</div>
<div class=" col-4 col-lg-4  col-sm-6">
<p><i class="fa fa-check-circle fa-3x p-2" style="color:white;"></i>100% ORIGINAL guarantee for all products at shoppers_stop.com</p>
<p><i class="fa fa-exchange fa-3x p-2"style="color:white;" ></i>Return within 30days of receiving your order</p>
<p><i class="fa fa-truck fa-3x p-2" style="color:white;"></i>Get free delivery for every order above Rs.799</p>
</div>
</div>
</div>
<div class="col-11 mx-auto">
 <h5 style="color:white;">POPULAR SEARCHES</h5>
  <p> Makeup | Dresses For Girls | T-Shirts | Sandals | Headphones | Babydolls | Blazers For Men | Handbags | Ladies | Watches | Bags | Sport Shoes | Reebok Shoes | Puma Shoes | Boxers | Wallets | Tops | Earrings |Fastrack Watches|  Kurtis | Nike | Smart Watches | Titan Watches | Designer Blouse|  Gowns  Rings | Cricket Shoes | Forever 21 | Eye Makeup | Photo Frames | Punjabi Suits|  Bikini | Myntra Fashion Show | Lipstick | Saree | Watches | Dresses | Lehenga | Nike Shoes  |Goggles | Bras | Suit | Chinos  |Shoes | Adidas Shoes | Woodland Shoes | Jewellery | Designers Sarees
     </p>
    <div class="row">
      <div class="col-6">
        <p>In case of any concern,<strong style="color:white;">Contact Us</strong>
      </div>
      <div class="col-6">
        <p>© 2020 www.myntra.com. All rights reserved</p>
      </div>
      </div>
      <br>
    <div class="row">
    <div class="col-6">
   <p><strong style="color:white;">Registered Office Address</strong></p>
   <p>Buildings Alyssa,</p>
   <p>Begonia and Clover situated in Embassy Tech Village,</p>
   <p>Outer Ring Road,</p>
   <p>Devarabeesanahalli Village,</p>
   <p>Varthur Hobli,</p>
   <p>Bengaluru – 560103, India</p>
  </div>
  <div class="col-6">
    <p>CIN: U72300KA2007PTC041799</p>
   <p>Telephone:<strong style="color:white;">+91-80-61561999</strong></p>
  </div>
  </div>
</div>
</footer>



<!-- JS,Popper.js,and jQuery-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- carousel-->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--js-->
<script src="java.js"></script>



</body>
