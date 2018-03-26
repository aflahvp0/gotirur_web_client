<?php
$carouselID = isset($carouselID) ? $carouselID : 'owl-recently-viewed';
$containerClass = isset($containerClass) ? $containerClass : 'container';
$productItemSize = isset($productItemSize) ? $productItemSize : 'size-small';
?>
<!-- ========================================= RECENTLY VIEWED ========================================= -->
<section id="recently-reviewd" class="wow fadeInUp">
    <div class="<?php echo $containerClass; ?>">
        <div class="carousel-holder hover">

            <div class="title-nav">
                <h2 class="h1">Recently Viewed</h2>
                <div class="nav-holder">
                    <a href="#prev" data-target="#<?php echo $carouselID; ?>" class="slider-prev btn-prev fa fa-angle-left"></a>
                    <a href="#next" data-target="#<?php echo $carouselID; ?>" class="slider-next btn-next fa fa-angle-right"></a>
                </div>
            </div> <!--.title-nav--> 

            <div id="<?php echo $carouselID; ?>" class="owl-carousel product-grid-holder">

                












                <?php
                include_once '/../../script/config.php';

                $sql = "SELECT `product_id`, `last_view`,`product_name`, `company_name`, `real_amount`, `discounted_amount`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `product`.`id`, `long_description`, `short_description` FROM `recent_view`,`product` WHERE `user_id`=0 AND `product`.`id`=`recent_view`.`product_id` ORDER BY `recent_view`.`last_view` DESC";
                $result = $con->query($sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="no-margin carousel-item product-item-holder '.$productItemSize.' hover">
                    <div class="product-item">
                        <div class="ribbon red"><span>sale</span></div> 
                        <div class="image">
                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/'.$row['image_1'].'" />
                        </div>
                        <div class="body">
                            <div class="title">
                                 <a href="index.php?page=single-product&id='.$row['id'].'">'.$row['product_name'].'</a>
                            </div>
                            <div class="brand">'.$row['company_name'].'</div>
                        </div>
                        <div class="prices">
                            <div class="price-current text-right">Rs. '.$row['discounted_amount'].'</div>
                        </div>
                        <div class="hover-area">
                  
                            <div class="wish-compare">
                                <a class="btn-add-to-wishlist" href="insertToWishlist.php?id='.$row['id'].'">Add to Wishlist</a>
                            </div>
                        </div>
                    </div> <!--.product-item--> 
                </div> <!--.product-item-holder--> ';
                }
                ?>


            </div> <!--#recently-carousel-->

        </div><!-- /.carousel-holder -->
    </div><!-- /.container -->
</section><!-- /#recently-reviewd -->
<!-- ========================================= RECENTLY VIEWED : END ========================================= -->