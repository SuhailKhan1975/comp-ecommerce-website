<?php

include("includes/db.php");
include("functions/functions.php");
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
                    <li class="<?php if($active=='Home') echo"active";?>">
                           <a href="index.php">Home</a>
                       </li>
                       <li class="<?php if($active=='Shop') echo"active";?>">
                           <a href="shop.php">Shop</a>
                       </li>
                       <li class="<?php if($active=='Account') echo"active";?>">
                           <a href="customer/my_account.php">My Account</a>
                       </li>
                       <li class="<?php if($active=='Cart') echo"active";?>">
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                       <li class="<?php if($active=='Contact') echo"active";?>">
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
    
    