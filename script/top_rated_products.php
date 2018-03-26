<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$sql = "SELECT `product_name`, `company_name`, `real_amount`, `discounted_amount`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, product.`id`, `long_description`, `short_description` FROM `product`,top_rated_products WHERE product_id = product.id LIMIT 0,3";
$result = $con->query($sql);
while ($row= mysqli_fetch_assoc($result))
{
    echo '<li>
                <div class="row">
                    <div class="col-xs-12 col-sm-9 no-margin">
                        <a href="index.php?page=single-product&id='.$row['id'].'">'.$row['product_name'].'</a>
                        <div class="price">
                            <div class="price-prev">Rs. '.$row['real_amount'].'</div>
                            <div class="price-current">Rs. '.$row['discounted_amount'].'</div>
                        </div>
                    </div>  

                    <div class="col-xs-12 col-sm-3 no-margin">
                        <a href="#" class="thumb-holder">
                            <img alt="" src="assets/images/blank.gif" data-echo="assets/images/products/'.$row['image_1'].'" />
                        </a>
                    </div>

                </div>
            </li>';
}
