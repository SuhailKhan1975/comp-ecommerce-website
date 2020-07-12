<?php
$active='Shop';
include("includes/header.php");

?>

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

            <?php

            if(!isset($_GET['p_cat'])){

                if(!isset($_GET['cat'])){

                    echo"
                    <div class='box'> <!--box begin-->
                        <h1>Shop</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Voluptates eligendi impedit quam provident sit ab placeat cumque,
                            reprehenderit recusandae optio dolor?
                            Autem provident dolores perspiciatis quaerat eos! Doloribus, sequi commodi.</p>
                    </div><!-- box end-->
                    ";
                }
        }
            ?>

            <div class="row"> <!-- row starts-->
            <?php
            if(!isset($_GET['p_cat'])){

            if(!isset($_GET['cat'])){

                $per_page=6;
                if(isset($_GET['page'])){
                    $page = $_GER['page'];}
                    else{
                        $page=1;
                    
                    }
                    $start_from = ($page-1) * $per_page;
                    $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                    $run_products = mysqli_query($con,$get_products);
                    while($row_products=mysqli_fetch_array($run_products)){
                        $pro_id=$row_products['product_id'];
                        $pro_title = $row_products['product_title'];
                        $pro_price = $row_products['product_price'];
                        $pro_img1 = $row_products['product_img1'];
                        echo"
                            <div class='col-md-4 col-sm-6 center-responsive'>
                                <div class='product'>
                                    <a href='details.php?pro_id=$pro_id'>
                                    
                                    <img  class='img-responsive' src='admin_area/product_images/$pro_img1'>

                                    </a>
                                    <div class='text'>
                                        <h3>
                                        <a href='details.php?pro_id=$pro_id'> $pro_title</a>
                                        </h3>
                                        <p class='price'>
                                            $$pro_price
                                        </p>
                                        <p class='buttons'>
                                            <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
                                            View Details
                                            </a>
                                            <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                            <i class='fa fa-shopping-cart'></i> Add To Cart
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        ";
                }
            
            ?>
            </div> <!-- row end-->

            <center>
                <uk class="pagination"> <!-- pagination begin-->
                <?php

                $query = "select * from products";
                $result = mysqli_query($con,$query);
                $total_records = mysqli_num_rows($result);
                $total_pages = ceil($total_records / $per_page);
                echo"
                    <li>
                        <a href='shop.php?page=1'>".'First Page'."</a>
                    
                    </li>
                
                ";

                for($i=1; $i<=$total_pages; $i++){
                    echo"
                    <li>
                        <a href='shop.php?page=".$i."'>".$i."</a>
                    
                    </li>
                
                ";

                };
                echo"
                    <li>
                        <a href='shop.php?page=$total_pages'>".'Last Page'."</a>
                    
                    </li>
                
                ";
            }
        }
                
                ?>   
                </uk> <!-- pagination end-->
            </center>
                <?php getpcatpro() ?>
            
            </div> <!-- row end-->

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
