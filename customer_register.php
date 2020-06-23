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
             <a href="checkout.php">My Account</a>
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
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li >
                        <a href="shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Shopping Cart</a>
                    </li>
                    <li >
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
                    Register
                </li>
            </ul>
        </div>
        <div class="col-md-3">
        
        <?php

include("includes/sidebar.php");

?>
        </div>
        <div class="col-md-9">
            <div class="box">
                <div class="box-header">
                    <center>
                        <h2> Register a new account</h2>
                     
                    </center>
                    <form action="customer_register.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" class="form-control" name="c_name" required>
                        </div>
                        <div class="form-group">
                            <label>Your Email</label>
                            <input type="text" class="form-control" name="c_email" required>
                        </div>
                        <div class="form-group">
                            <label>Your Password</label>
                            <input type="password" class="form-control" name="c_pass" required>
                        </div>
                        <div class="form-group">
                            <label>Your Country</label>
                            <input type="text" class="form-control" name="c_country" required>
                        </div>
                        <div class="form-group">
                            <label>Your City</label>
                            <input type="text" class="form-control" name="c_city" required>
                        </div>
                        <div class="form-group">
                            <label>Your Contact</label>
                            <input type="text" class="form-control" name="c_contact" required>
                        </div>
                        <div class="form-group">
                            <label>Your Address</label>
                            <input type="text" class="form-control" name="c_address" required>
                        </div>
                        <div class="form-group">
                            <label>Your Profile Picture</label>
                            <input type="file" class="form-control" name="c_image" required>
                        </div>
                    
                    
                        <div class="text-center">
                            <button type="submit" name="register" class="btn btn-primary">
                            <i class="fa fa-user-md">Register</i>
                            </button>
                        </div>
                    </form>
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