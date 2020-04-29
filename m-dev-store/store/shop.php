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
                    <li><a href="customer/my_account.php"> My Account | </a></li>
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
                    <li>
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
                </div><!--navbar-collapse collapse right end-->

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

    <div id="content">  <!--content starts-->
        <div class="container"><!--container end-->
            <div class="col-md-12"> <!--col-md-12 start-->

                <ul class="breadcrumb"> <!--breadcrumb start-->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Shop</li>
                </ul> <!--breadcrumb ends-->

            </div><!--col-md-12 end-->

        <div class="col-md-3"> <!--col-md-3 starts-->
        <?php
        include("includes/sidebar.php");
        ?>
        </div> <!--col-md-3 end-->

        <div class="col-md-9">  <!--col-md-9 begin-->
            <div class="box"> <!--box begin-->
                <h1>Shop</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                     Voluptates eligendi impedit quam provident sit ab placeat cumque,
                      reprehenderit recusandae optio dolor?
                     Autem provident dolores perspiciatis quaerat eos! Doloribus, sequi commodi.</p>
            </div><!-- box end-->

            <div class="row"> <!-- row starts-->
                <div class="col-md-4 col-md-6 center-responsive"> <!-- col-md-4 col-md-6 center-responsive starts-->

                    <div class="product">
                    <a href="details.php" >
                    <img class = "img-responsive" src="admin_area/product_images/product1a.jpg" alt="Product 1" >
                    </a><!--admin_area end-->
                    <div class="text">
                        <h3><a href="details.php" >Our Signature Product</a></h3>
                        <p class="price">$200</p>
                        <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add To Cart</i>
                        </a>
                        </p><!--button end-->
                    </div><!--text end-->
                </div><!--product end-->

                </div> <!-- col-md-4 col-md-6 center-responsive end-->
                <div class="col-md-4 col-md-6 center-responsive"> <!-- col-md-4 col-md-6 center-responsive starts-->

                    <div class="product">
                    <a href="details.php" >
                    <img class = "img-responsive" src="admin_area/product_images/product2a.jpg" alt="Product 1" >
                    </a><!--admin_area end-->
                    <div class="text">
                        <h3><a href="details.php" >Our Signature Product</a></h3>
                        <p class="price">$200</p>
                        <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add To Cart</i>
                        </a>
                        </p><!--button end-->
                    </div><!--text end-->
                </div><!--product end-->

                </div> <!-- col-md-4 col-md-6 center-responsive end-->
                <div class="col-md-4 col-md-6 center-responsive"> <!-- col-md-4 col-md-6 center-responsive starts-->

                    <div class="product">
                    <a href="details.php" >
                    <img class = "img-responsive" src="admin_area/product_images/product3a.jpg" alt="Product 1" >
                    </a><!--admin_area end-->
                    <div class="text">
                        <h3><a href="details.php" >Our Signature Product</a></h3>
                        <p class="price">$200</p>
                        <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add To Cart</i>
                        </a>
                        </p><!--button end-->
                    </div><!--text end-->
                </div><!--product end-->

                </div> <!-- col-md-4 col-md-6 center-responsive end-->
                <div class="col-md-4 col-md-6 center-responsive"> <!-- col-md-4 col-md-6 center-responsive starts-->

                    <div class="product">
                    <a href="details.php" >
                    <img class = "img-responsive" src="admin_area/product_images/product4a.jpg" alt="Product 1" >
                    </a><!--admin_area end-->
                    <div class="text">
                        <h3><a href="details.php" >Our Signature Product</a></h3>
                        <p class="price">$200</p>
                        <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add To Cart</i>
                        </a>
                        </p><!--button end-->
                    </div><!--text end-->
                </div><!--product end-->

                </div> <!-- col-md-4 col-md-6 center-responsive end-->
                <div class="col-md-4 col-md-6 center-responsive"> <!-- col-md-4 col-md-6 center-responsive starts-->

                    <div class="product">
                    <a href="details.php" >
                    <img class = "img-responsive" src="admin_area/product_images/product5a.jpg" alt="Product 1" >
                    </a><!--admin_area end-->
                    <div class="text">
                        <h3><a href="details.php" >Our Signature Product</a></h3>
                        <p class="price">$200</p>
                        <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add To Cart</i>
                        </a>
                        </p><!--button end-->
                    </div><!--text end-->
                </div><!--product end-->

                </div> <!-- col-md-4 col-md-6 center-responsive end-->
                <div class="col-md-4 col-md-6 center-responsive"> <!-- col-md-4 col-md-6 center-responsive starts-->

                    <div class="product">
                    <a href="details.php" >
                    <img class = "img-responsive" src="admin_area/product_images/product6a.jpg" alt="Product 1" >
                    </a><!--admin_area end-->
                    <div class="text">
                        <h3><a href="details.php" >Our Signature Product</a></h3>
                        <p class="price">$200</p>
                        <p class="button">
                        <a href="details.php" class="btn btn-default">View Details</a>
                        <a href="details.php" class="btn btn-primary">
                            <i class="fa fa-shopping-cart">Add To Cart</i>
                        </a>
                        </p><!--button end-->
                    </div><!--text end-->
                </div><!--product end-->

                </div> <!-- col-md-4 col-md-6 center-responsive end-->
            </div> <!-- row end-->

            <center>
                <uk class="pagination">
                    <li><a href="#">First Page</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Last Page</a></li>
                </uk>
            </center>


            </div>  <!--col-md-9 end-->

        </div> <!--container end-->
    </div> <!--content end-->

    <?php
    include("includes/footer.php");
    ?>
    <script src = "js/jquery-331.min.js"></script>
    <script src = "js/bootstrap-337.min.js"></script>

</body>
</html>
