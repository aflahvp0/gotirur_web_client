<?php
include_once 'config.php';
$sql = "SELECT `product_id`,`product_name`, `company_name`, `real_amount`, `discounted_amount`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `product`.`id`, `long_description`, `short_description` FROM `best_products`,`product` WHERE `product`.`id`=`product_id` LIMIT 0,3";
$result = $con->query($sql);
while ($row= mysqli_fetch_assoc($result))
{
echo '<div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
    <div class="product-item">
        <div class="image">
             <img alt = "" src = "assets/images/blank.gif" data-echo = "assets/images/products/'.$row['image_1'].'" />
        </div>
        <div class="body">
            <div class="label-discount clear"></div>
            <div class="title">
                <a href="index.php?page=single-product&id='.$row['id'].'">'.$row['product_name'].'</a>
            </div>
            <div class = "brand">'.$row['company_name'].'</div>
        </div>
        <div class="prices">
            <div class = "price-current pull-right">Rs. '.$row['discounted_amount'].'</div>
        </div>
        <div class="hover-area">
            <div class="wish-compare">
                <a class="btn-add-to-wishlist" href="insertToWishlist.php?id='.$row['id'].'">Add to Wishlist</a>
            </div>
        </div>
    </div>
</div>';
}
