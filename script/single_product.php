<?php

include_once 'config.php';
//$sql = "select * from product where id=".$_GET['id'];
//echo $sql;

$sql = "select * from product where id=2";
$result = $con->query($sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="title"><a href="#">' . $row['product_name'] . '</a></div>
        <div class="brand">' . $row['company_name'] . '</div>
            <div class="prices">
            <div class="price-current">' . $row['discounted_amount'] . '</div>
            <div class="price-prev">' . $row['real_amount'] . '</div>
        </div>

       ';
}
