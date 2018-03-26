<div class="top-cart-row-container">
<!--    <div class="wishlist-compare-holder">
        <div class="wishlist ">
            <a href="#"><i class="fa fa-heart"></i> wishlist <span class="value"></span> </a>
        </div>
       
    </div>-->

    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
    <div class="top-cart-holder dropdown animate-dropdown">

        <div class="basket">

            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="basket-item-count">
                    
                <?php
                include_once 'config.php';
                $sql = "SELECT wishlist.id as cart_id,`product`.`id`, `product_name`, `discounted_amount`,`image_1` FROM `product`,`wishlist` WHERE `item_ID`=`product`.`id` AND `customer_id`=" . $_SESSION["customer_id"];
//                echo $sql;
                $result = $con->query($sql);
                if (mysqli_num_rows($result) != 0) {
                    
                    echo '<span class="count">'.mysqli_num_rows($result).'</span>
                    <img src="assets/images/icon-cart.png" alt="" />
                </div>

                
            </a>

            <ul class="dropdown-menu">';
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li>
                    <div class="basket-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin text-center">
                                <div class="thumb">
                                    <img alt="" src="assets/images/products/' . $row['image_1'] . '" />
                                </div>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <div class="title">' . $row['product_name'] . '</div>
                                <div class="price">Rs. ' . $row['discounted_amount'] . '</div>
                            </div>
                        </div>
                        <a class="close-btn" href="RemoveFromWishlist.php?id=' . $row['cart_id'] . '"></a>
                    </div>
                </li>';
                    }
                }
 else {
     echo '<span class="count">0</span>
                    <img src="assets/images/icon-cart.png" alt="" />
                </div>

                <div class="total-price-basket"> 
                    <span class="lbl">your cart:</span>
                    <span class="total-price">
                        <span class="sign">Rs.</span><span class="value">00</span>
                    </span>
                </div>
            </a>

            <ul class="dropdown-menu">';
 }
                ?>

               

            </ul>
        </div><!-- /.basket -->
    </div><!-- /.top-cart-holder -->
</div><!-- /.top-cart-row-container -->
<!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->

<div class="top-cart-holder dropdown animate-dropdown">

        <div class="basket">

            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="basket-item-count">
                    
                <?php
                include_once 'config.php';
                $sql = "SELECT cart.id as cart_id,`product`.`id`, `product_name`, `discounted_amount`,`image_1`,`counts` FROM `product`,`cart` WHERE `product_id`=`product`.`id` AND `user_id`=" . $_SESSION["customer_id"];
//                echo $sql;
                $result = $con->query($sql);
                if (mysqli_num_rows($result) != 0) {
                    
                    echo '<span class="count">'.mysqli_num_rows($result).'</span>
                    <img src="assets/images/icon-cart.png" alt="" />
                </div>

                <div class="total-price-basket"> 
                    <span class="lbl">your cart:</span>
                    <span class="total-price">
                        <span class="sign">Rs.</span><span class="value">00</span>
                    </span>
                </div>
            </a>

            <ul class="dropdown-menu">';
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<li>
                    <div class="basket-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin text-center">
                                <div class="thumb">
                                    <img alt="" src="assets/images/products/' . $row['image_1'] . '" />
                                </div>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <div class="title">' . $row['product_name'] . '</div>
                                <div class="price">Rs. ' . $row['discounted_amount'] . '</div>
                            </div>
                        </div>
                        <a class="close-btn" href="RemoveFromCart.php?id=' . $row['cart_id'] . '"></a>
                    </div>
                </li>';
                    }
                }
 else {
     echo '<span class="count">0</span>
                    <img src="assets/images/icon-cart.png" alt="" />
                </div>

                <div class="total-price-basket"> 
                    <span class="lbl">your cart:</span>
                    <span class="total-price">
                        <span class="sign">Rs.</span><span class="value">00</span>
                    </span>
                </div>
            </a>

            <ul class="dropdown-menu">';
 }
                ?>

               

            </ul>
        </div><!-- /.basket -->
    </div><!-- /.top-cart-holder -->
</div>