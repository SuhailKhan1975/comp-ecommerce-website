<?php

include("includes/db.php");

 ?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>


</head>
<body>

    <div id="top">
        <div class="container">
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-sm btn-success">Wellcome</a>
                <a href="checkout.php">4 items in your cart | Total price is 300$ </a>
            </div><!--col-md-6 offer end-->
            <div class="col-md-6">

                <ul class="menu">
                    <li><a href="customer_register.php"> Register | </a></li>
                    <li><a href="checkout.php"> My Account | </a></li>
                    <li><a href="cart.php"> Go To Cart | </a></li>
                    <li><a href="checkout.php"> Login Page</a></li>

                </ul><!--menu end-->

            </div><!--col-md-6 end-->
        </div><!-- container-end-->
    </div><!--Top End-->

    <div id = "navbar" class="navbar navbar-default">
        <div class="container">
            <div class = "navbar-header">
                <a href="index.php" class="navbar-brand home">
                <img src="images/ecom-store-logo.png" alt="Site logo" class = "hidden-xs">
                <img src="images/ecom-store-logo-mobile.png" alt="Site logo" class="visible-xs">
                </a><!--navbar-brand home end-->
                <button class="navbar-toggle" data-toggle = "collapse" data-target="#navigation">
                    <span class = "sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>

                <button class="navbar-toggle" data-toggle = "collapse" data-target="#search">
                    <span class = "sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>

            </div><!--navbar-header end-->

            <div class="navbar-collapse collapse" id="navigation">
                <div class="padding-nav">
                    <ul class="nav navbar-nav left">
                    <li class="active">
                           <a href="index.php">Home</a>
                       </li>
                       <li>
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
                </div><!--padding-nav end-->
                <a href="cart.php" class="btn navbar-btn btn-primary right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 Items In Your Cart </span>
                </a>
                <div class="navbar-collapse collapse right">
                    <button class="btn btn-primary navbar-btn" type = "button" data-toggle = "collapse" data-target = "#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button><!--btn btn-primary navbar-btn end-->
                </div><!--navbar-col lapse collapse right end-->

                <div class="collapse clearfix" id="search">
                    <form action="result.php" method = "get" class="navbar-form">
                        <div class="input-group">
                            <input type="text" class="form-control" name = "user_query" placeholder = "search" required>
                            <span class="input-group-btn">
                            <button type = "submit" name = "search" value = "search" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                            </button><!--btn btn-primary end-->
                            </span><!--input-group-btn end-->
                        </div><!--input-group-->
                    </form><!--navbar-form end-->
                </div><!--collapse clearfix end-->

            </div><!--navbar-collapse collapse end--->
        </div><!--container end-->
    </div><!--navbar end-->
    <div class="container" id="slider">
        <div class="col-md-12">
            <div class="carousel slide" id = "myCarousel" data-ride = "carousel">
                <ol class="carousel-indicators">
                    <li class = "active" data-target = "#myCarousel" data-slide-to = "0"></li>
                    <li data-target = "#myCarousel" data-slide-to = "1"></li>
                    <li data-target = "#myCarousel" data-slide-to = "2"></li>
                    <li data-target = "#myCarousel" data-slide-to = "3"></li>
                </ol><!--carousel-indicator end-->
                <div class="carousel-inner">

                  <?php
                  $get_slides="select * from slider LIMIT 0,1";
                  $run_slides =mysqli_query($con,$get_slides);
                  while($row_slides=mysqli_fetch_array($run_slides)){
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];

                    echo "
                    <div class='item active'>

                      <img src='admin_area/slides_images/$slide_image'>

                    </div>
                    ";
                  }
                  $get_slides="select * from slider LIMIT 1,3";
                  $run_slides =mysqli_query($con,$get_slides);
                  while($row_slides=mysqli_fetch_array($run_slides)){
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];

                    echo "
                    <div class='item'>

                      <img src='admin_area/slides_images/$slide_image'>

                    </div>
                    ";
                  }
                   ?>

                </div><!--carousel-inner end-->
                <a href="#myCarousel" class="left carousel-control" data-slide = "prev">
                    <span class="glyphicon glyphicon-chevron-left"></span><!--glyphicon glyphicon-cevron-left end-->
                    <span class="sr-only">Previous</span>
                </a><!--left carousel-control end-->

                <a href="#myCarousel" class="right carousel-control" data-slide = "next">
                    <span class="glyphicon glyphicon-chevron-right"></span><!--glyphicon glyphicon-cevron-right end-->
                    <span class="sr-only">Next</span>
                </a><!--right carousel-control end-->
            </div><!--carousel slide end-->
        </div><!--col-md-12 end-->
    </div><!--container end-->

    <div id="advantages">
        <div class="container">
            <div class="same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div><!--icon end-->
                        <h3><a href="#" >We Love Our Customer</a></h3>
                        <p>We know to provide the best Services ever</p>
                    </div><!--nox same-height end-->
                </div><!--col-sm-4 end -->
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-tag"></i>
                        </div><!--icon end-->
                        <h3><a href="#" >Best Prices</a></h3>
                        <p>Compare us with another store site, who have best prices.</p>
                    </div><!--nox same-height end-->
                </div><!--col-sm-4 end -->
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-thumbs-up"></i>
                        </div><!--icon end-->
                        <h3><a href="#" >100% Original Products</a></h3>
                        <p>We provide you 100% original products</p>
                    </div><!--nox same-height end-->
                </div><!--col-sm-4 end -->

            </div><!--same-height-row end-->

        </div><!--container end-->
    </div><!--advantages end-->

    <div id="hot">
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>Our Latest Products</h2>
                </div><!--col-md-12 end-->
            </div><!--container end-->

        </div><!--box end-->

    </div><!--hot end-->

    <div id="content" class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-4 single">
                <div class="product">
                    <a href="details.php" >
                    <img class = "img-responsive" src="admin_area/product_images/Product1.png" alt="Product 1" >
                    </a><!--admin_area end-->
                    <div class="text">
                        <h3><a href="details.php" >Our Signature Product</a></h3>
                        <p class="price">Rs.47,500</p>
                        <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add To Cart</i>
                        </a>
                        </p><!--button end-->
                    </div><!--text end-->
                </div><!--product end-->

            </div><!--col-sm-6 col-sm-4 single end-->
            <div class="col-sm-6 col-sm-4 single">
                <div class="product">
                    <a href="details.php" >
                    <img class = "img-responsive" src="admin_area/product_images/Product2.jpg" alt="Product 1" >
                    </a><!--admin_area end-->
                    <div class="text">
                        <h3><a href="details.php" >Our Signature Product</a></h3>
                        <p class="price">Rs.35,900</p>
                        <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add To Cart</i>
                        </a>
                        </p><!--button end-->
                    </div><!--text end-->
                </div><!--product end-->

            </div><!--col-sm-6 col-sm-4 single end-->
            <div class="col-sm-6 col-sm-4 single">
                <div class="product">
                    <a href="details.php" >
                    <img class = "img-responsive" src="admin_area/product_images/Product3.png" alt="Product 1" >
                    </a><!--admin_area end-->
                    <div class="text">
                        <h3><a href="details.php" >Our Signature Product</a></h3>
                        <p class="price">Rs.54,500</p>
                        <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add To Cart</i>
                        </a>
                        </p><!--button end-->
                    </div><!--text end-->
                </div><!--product end-->

            </div><!--col-sm-6 col-sm-4 single end-->
            <div class="col-sm-6 col-sm-4 single">
                <div class="product">
                    <a href="details.php" >
                    <img class = "img-responsive" src="admin_area/product_images/Product4.jpg" alt="Product 1" >
                    </a><!--admin_area end-->
                    <div class="text">
                        <h3><a href="details.php" >Our Signature Product</a></h3>
                        <p class="price">Rs.50,900</p>
                        <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add To Cart</i>
                        </a>
                        </p><!--button end-->
                    </div><!--text end-->
                </div><!--product end-->

            </div><!--col-sm-6 col-sm-4 single end-->
        </div><!--row end-->
        <div class="row">
            <div class="col-sm-6 col-sm-4 single">
                <div class="product">
                    <a href="details.php" >
                    <img class = "img-responsive" src="admin_area/product_images/Product1.png" alt="Product 1" >
                    </a><!--admin_area end-->
                    <div class="text">
                        <h3><a href="details.php" >Our Signature Product</a></h3>
                        <p class="price">Rs.47,500</p>
                        <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add To Cart</i>
                        </a>
                        </p><!--button end-->
                    </div><!--text end-->
                </div><!--product end-->

            </div><!--col-sm-6 col-sm-4 single end-->
            <div class="col-sm-6 col-sm-4 single">
                <div class="product">
                    <a href="details.php" >
                    <img class = "img-responsive" src="admin_area/product_images/Product2.jpg" alt="Product 1" >
                    </a><!--admin_area end-->
                    <div class="text">
                        <h3><a href="details.php" >Our Signature Product</a></h3>
                        <p class="price">Rs.35,900</p>
                        <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add To Cart</i>
                        </a>
                        </p><!--button end-->
                    </div><!--text end-->
                </div><!--product end-->

            </div><!--col-sm-6 col-sm-4 single end-->
            <div class="col-sm-6 col-sm-4 single">
                <div class="product">
                    <a href="details.php" >
                    <img class = "img-responsive" src="admin_area/product_images/Product3.png" alt="Product 1" >
                    </a><!--admin_area end-->
                    <div class="text">
                        <h3><a href="details.php" >Our Signature Product</a></h3>
                        <p class="price">Rs.54,500</p>
                        <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add To Cart</i>
                        </a>
                        </p><!--button end-->
                    </div><!--text end-->
                </div><!--product end-->

            </div><!--col-sm-6 col-sm-4 single end-->
            <div class="col-sm-6 col-sm-4 single">
                <div class="product">
                    <a href="details.php" >
                    <img class = "img-responsive" src="admin_area/product_images/Product4.jpg" alt="Product 1" >
                    </a><!--admin_area end-->
                    <div class="text">
                        <h3><a href="details.php" >Our Signature Product</a></h3>
                        <p class="price">Rs.50,900</p>
                        <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add To Cart</i>
                        </a>
                        </p><!--button end-->
                    </div><!--text end-->
                </div><!--product end-->

            </div><!--col-sm-6 col-sm-4 single end-->
        </div><!--row end-->

    </div><!--container end-->

    <?php
    include("includes/footer.php");
    ?>
    <script src = "js/jquery-331.min.js"></script>
    <script src = "js/bootstrap-337.min.js"></script>





</body>
</html>
