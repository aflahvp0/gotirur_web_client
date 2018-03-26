<!-- ========================================= BEST SELLERS ========================================= -->
<section id="bestsellers" class="color-bg wow fadeInUp">
    <div class="container">
        <h1 class="section-title">Best Sellers</h1>

        <div class="product-grid-holder medium">
            <div class="col-xs-12 col-md-7 no-margin">

                <div class="row no-margin">
                    <?php include 'best.php'; ?>
                </div><!-- /.row -->

                <div class="row no-margin">

                    <?php include 'best2.php'; ?>

                </div><!-- /.row -->
            </div><!-- /.col -->

            <?php
            include_once 'config.php';
            $sql = "SELECT `product_id`,`product_name`, `company_name`, `real_amount`, `discounted_amount`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `product`.`id`, `long_description`, `short_description` FROM `best_products`,`product` WHERE `product`.`id`=`product_id`";
            $result = $con->query($sql);
            $row = mysqli_fetch_assoc($result);
            ?>
            <div class="col-xs-12 col-md-5 no-margin">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                    <div id="best-seller-single-product-slider" class="single-product-slider owl-carousel">
                        <div class="single-product-gallery-item" id="slide1">
                            <a data-rel="prettyphoto" href="assets/images/products/<?php echo $row['image_1']; ?>">
                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/<?php echo $row['image_1']; ?>" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide2">
                            <a data-rel="prettyphoto" href="assets/images/products/<?php echo $row['image_2']; ?>">
                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/<?php echo $row['image_2']; ?>" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide3">
                            <a data-rel="prettyphoto" href="assets/images/products/<?php echo $row['image_3']; ?>">
                                <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/<?php echo $row['image_3']; ?>" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->
                    </div><!-- /.single-product-slider -->

                    <div class="gallery-thumbs clearfix">
                        <ul>
                            <li><a class="horizontal-thumb active" data-target="#best-seller-single-product-slider" data-slide="0" href="#slide1"><img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/<?php echo $row['image_1']; ?>" /></a></li>
                            <li><a class="horizontal-thumb" data-target="#best-seller-single-product-slider" data-slide="1" href="#slide2"><img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/<?php echo $row['image_2']; ?>" /></a></li>
                            <li><a class="horizontal-thumb" data-target="#best-seller-single-product-slider" data-slide="2" href="#slide3"><img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/<?php echo $row['image_3']; ?>" /></a></li>
                        </ul>
                    </div><!-- /.gallery-thumbs -->

                    <div class="body">
                        <div class="label-discount clear"></div>
                        <div class="title">
                            <a href="index.php?page=single-product"><?php echo $row['product_name']; ?></a>
                        </div>
                        <div class="brand">sony</div>
                    </div>
                    <div class="prices text-right">
                        <div class="price-current inline"><?php echo 'Rs. ' . $row['discounted_amount']; ?></div>
                        <a class="le-button big inline" href="insertToWishlist.php?id=<?php echo $row['id']; ?>">Add to Wishlist</a>
                    </div>
                </div><!-- /.product-item-holder -->
            </div><!-- /.col -->

        </div><!-- /.product-grid-holder -->
    </div><!-- /.container -->
</section><!-- /#bestsellers -->
<!-- ========================================= BEST SELLERS : END ========================================= -->