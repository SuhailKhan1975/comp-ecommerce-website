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
                       <li>
                           <a href="shop.php">Shop</a>
                       </li>
                       <li>
                           <a href="customer/my_account.php">My Account</a>
                       </li>
                       <li>
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                       <li class="active">
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
                    <li>Contact Us</li>
                </ul> <!--breadcrumb ends-->

            </div><!--col-md-12 end-->

        <div class="col-md-3"> <!--col-md-3 starts-->

        <?php
        include("includes/sidebar.php");
        ?>
        </div> <!--col-md-3 end-->

           <div class="col-md-9"><!-- col-md-9 Begin -->

               <div class="box"><!-- box Begin -->

                   <div class="box-header"><!-- box-header Begin -->

                       <center><!-- center Begin -->

                           <h2> Feel free to Contact Us</h2>

                           <p class="text-muted"><!-- text-muted Begin -->

                               If you have any questions, feel free to contact us. Our Customer Service work <strong>24/7</strong>

                           </p><!-- text-muted Finish -->

                       </center><!-- center Finish -->

                       <form action="contact.php" method="post"><!-- form Begin -->

                           <div class="form-group"><!-- form-group Begin -->

                               <label>Name</label>

                               <input type="text" class="form-control" name="name" required>

                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->

                               <label>Email</label>

                               <input type="text" class="form-control" name="email" required>

                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->

                               <label>Subject</label>

                               <input type="text" class="form-control" name="subject" required>

                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->

                               <label>Message</label>

                               <textarea name="message" class="form-control"></textarea>

                           </div><!-- form-group Finish -->

                           <div class="text-center"><!-- text-center Begin -->

                               <button type="submit" name="submit" class="btn btn-primary">

                               <i class="fa fa-user-md"></i> Send Message

                               </button>

                           </div><!-- text-center Finish -->

                       </form><!-- form Finish -->

                   </div><!-- box-header Finish -->

               </div><!-- box Finish -->

           </div><!-- col-md-9 Finish -->

       </div><!-- container Finish -->
   </div><!-- #content Finish -->

   <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>
</html>
