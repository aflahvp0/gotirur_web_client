<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$sql = "select * from parent_categories";
$result = $con->query($sql);
while ($row = mysqli_fetch_assoc($result))
{
    echo '<div class="title"><a href="#">'.$row['product_name'].'</a></div>
        <div class="brand">'.$row['company_name'].'</div>
            <div class="prices">
            <div class="price-current">'.$row['discounted_amount'].'</div>
            <div class="price-prev">'.$row['real_amount'].'</div>
        </div>

       ';
}
