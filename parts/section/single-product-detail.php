<?php
include_once '/../../script/config.php';
$sql = "select * from product where id=1";
$result = $con->query($sql);
$row = mysqli_fetch_assoc($result);
//while ($row = mysqli_fetch_assoc($result))
//{
//    echo '<div class="title"><a href="#">'.$row['product_name'].'</a></div>
//        <div class="brand">'.$row['company_name'].'</div>
//            <div class="prices">
//            <div class="price-current">'.$row['discounted_amount'].'</div>
//            <div class="price-prev">'.$row['real_amount'].'</div>
//        </div>
//
//       ';
//}
?>

<div class="no-margin col-xs-12 col-sm-7 body-holder">
    <div class="body">
        <div class="star-holder inline"><div class="star" data-score="4"></div></div>
        <div class="availability"><label>Availability:</label><span class="available">  in stock</span></div>

        <!--<div class="title"><a href="#">VAIO fit laptop - windows 8 SVF14322CXW</a></div>-->
        <div class="title"><a href="#"><?php echo $row['product_name']; ?></a></div>
        <div class="brand"><?php echo $row['company_name'] ?></div>

        <div class="social-row">
            <span class="st_facebook_hcount"></span>
            <span class="st_twitter_hcount"></span>
            <span class="st_pinterest_hcount"></span>
        </div><!--

        -->        <div class="buttons-holder">
            <a class="btn-add-to-wishlist" href="#">add to wishlist</a>
            <a class="btn-add-to-compare" href="#">add to compare list</a>
        </div><!--

        -->        <div class="excerpt">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare turpis non risus semper dapibus. Quisque eu vehicula turpis. Donec sodales lacinia eros, sit amet auctor tellus volutpat non.</p>
        </div>

        <div class="prices">
            <div class="price-current"><?php echo $row['discounted_amount']; ?></div>
            <div class="price-prev"><?php echo $row['real_amount'] ?></div>
        </div>



        <div class="qnt-holder">
            <div class="le-quantity">
                <form>
                    <a class="minus" href="#reduce"></a>
                    <input name="quantity" readonly="readonly" type="text" value="1" />
                    <a class="plus" href="#add"></a>
                </form>
            </div><!--
            -->            <a id="addto-cart" href="index.php?page=cart" class="le-button huge">add to cart</a>
            <?php
//            require_once '/../../script/single_product.php';
            ?>
        </div><!-- /.qnt-holder -->
    </div><!-- /.body -->

</div><!-- /.body-holder -->