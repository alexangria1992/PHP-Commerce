<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <title>M-Dev-Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">

</head>
<body>
<div id="top">
 <div class="container">
 <div class="col-md-6 offer">
     <a href="" class="btn btn-success btn-sn">Welcome</a>
     <a href="checkout.php">4 Items In Your Cart | Total Price: $300</a>
 </div>
 <div class="col-md-6">
     <ul class="menu">
         <li>
             <a href="customer_register.php">Register</a>
         </li>
         <li>
             <a href="customer/my_account.php">My Account</a>
         </li>
         <li>
             <a href="cart.php">Go to Cart</a>
         </li>
         <li>
             <a href="checkout.php">Login</a>
         </li>
     </ul>
 </div>
</div>

</div>
<div id="navbar" class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand home">
                <img src="images/1ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                <img src="images/1ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
            </a>
            <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle Naviagtion</span>
                <i class="fa fa-align-justify"></i>
            </button>
            <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                <span class="sr-only">Toggle Search</span>
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navigation">
            <div class="padding-nav">
                <ul class="nav navbar-nav left">
                    <li >
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">
                        <a href="shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="customer/my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                
                </ul>
            </div>
            <a href="cart.php" class="btn navbar-btn btn-primary right">
                <i class="fa fa-shopping-cart"></i>
                <span>4 Items In Your Cart</span>
            </a>
            <div class="navbar-collapse collapse right">
                <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                  <span class="sr-only">Toggle Search</span>
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
            <div class="collapse clearfix" id="search">
             <form method="get" action="results.php" class="navbar-form">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                  <span class="input-group-btn">
                  <button class="btn btn-primary" type="submit" name="search" value="Search">
                      <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                  </span>
              </div>
             </form>
            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>
                    Shop
                </li>
            </ul>
        </div>
        <div class="col-md-3">
        <?php

include("includes/sidebar.php");

?>

        </div>

        <div class="col-md-9">
            <div id="productMain" class="row">
                <div class="col-sm-6">
                    <div id="mainImage">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1" ></li>
                                <li data-target="#myCarousel" data-slide-to="2" ></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <center><img class="img-responsive" src="admin_area/product_images/Product-3a.jpg" alt="Product 3-a"></center>
                                </div>
                                <div class="item">
                                    <center><img class="img-responsive" src="admin_area/product_images/Product-3b.jpg" alt="Product 3-b" alt=""></center>
                                </div>
                                <div class="item">
                                    <center><img class="img-responsive" src="admin_area/product_images/Product-3c.jpg" alt="Product 3-c" alt=""></center>
                                </div>
                            </div>
                            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>

                            </a>
                            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="box">
                        <h1 class="text-center">M-Dev Polo Shirt Men</h1>
                        <form action="details.php" class="form-horizontal" method="post">
                            <div class="form-group">
                                <label for="" class="col-md-5 control-label">Products Quantity</label>
                                <div class="col-md-7">
                                    <select name="product_qty" id="" class="form-control">
                                        <option >1</option>
                                        <option >2</option>
                                        <option >3</option>
                                        <option >4</option>
                                        <option >5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 control-label">
                                    Product Size
                                </label>
                                <div class="col-md-7">
                                    <select name="product_size" class="form-control">
                                    <option >Select a Size</option>
                                        <option >Small</option>
                                        <option >Medium</option>
                                        <option >Large</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <p class="price">$50</p>
                            <p class="text-center">
                                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button></p>
                            </p>
                        </form>
                    </div>
                    <div class="row" id="thumbs">
                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                <img src="admin_area/product_images/product-3a.jpg" alt="product 1" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                <img src="admin_area/product_images/product-3b.jpg" alt="product 2" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                <img src="admin_area/product_images/product-3c.jpg" alt="product 4" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="box" id="details">
                <h4>Product Details</h4>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                </p>
                <h4>Size</h4>
                <ul>
                    <li>Small</li>
                    <li>Medium</li>
                    <li>Large</li>

                </ul>
               <hr>

            </div>
            <div id="row same-height-row">
                <div class="col-md-3 col-sm-6">
                    <div class="box same-height headline">
                        <h3 class="text-center">Products You Maybe Like</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 center-responsive">
                    <div class="product same-height">
                        <a href="details.php">
                            <img class="img-responsive"src="admin_area/product_images/Product-6a.jpg" alt="Product 6">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">M-Dev Singlet  Women</a></h3>
                        <p class="price">$40</p>
                    </div>
                </div>
                </div>
                <div class="col-md-3 col-sm-6 center-responsive">
                    <div class="product same-height">
                        <a href="details.php">
                            <img class="img-responsive"src="admin_area/product_images/Product-5a.jpg" alt="Product 5">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">M-Dev Street Shirt  Women</a></h3>
                        <p class="price">$45</p>
                    </div>
                </div>
                </div>
                <div class="col-md-3 col-sm-6 center-responsive">
                    <div class="product same-height">
                        <a href="details.php">
                            <img class="img-responsive"src="admin_area/product_images/Product-4a.jpg" alt="Product 6">
                    </a>
                    <div class="text">
                        <h3><a href="details.php">M-Dev Polo T-Shirt  Women</a></h3>
                        <p class="price">$50</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
<?php

include("includes/footer.php");

?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
</body>
</html>