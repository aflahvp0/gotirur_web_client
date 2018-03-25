<?php
include_once '/../config.php';
if (isset($_GET['id'])) {
    $sql = "INSERT INTO `cart`(`product_id`, `counts`, `user_id`) VALUES ('" . $_GET['id'] . "',0,0)";
    //echo $sql;
    if (!$con->query($sql)) {
        echo $con->error;
    }
}

$sql = "SELECT `cart`.`id`,`product_name`, `product_id`, `counts`, `user_id`,`discounted_amount`,`company_name` FROM `cart`,`product` WHERE `product`.`id`=`product_id`";
//echo $sql;
$result = $con->query($sql);
?>

<section id="cart-page">
    <div class="container">
        <!-- ========================================= CONTENT ========================================= -->
        <div class="col-xs-12 col-md-9 items-holder no-margin">

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="row no-margin cart-item">
                            <div class="col-xs-12 col-sm-2 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img class="lazy" alt="" src="http://placehold.it/73x73" />
                                </a>
                            </div>
            
                            <div class="col-xs-12 col-sm-5 ">
                                <div class="title">
                                    <a href="#">' . $row['product_name'] . '</a>
                                </div>
                                <div class="brand">' . $row['company_name'] . '</div>
                            </div> 
            
                            <div class="col-xs-12 col-sm-3 no-margin">
                                <div class="quantity">
                                    <div class="le-quantity">
                                        <form>
                                            <a class="minus" href="#reduce"></a>
                                            <input name="quantity" readonly="readonly" type="text" value="' . $row['counts'] . '" />
                                            <a class="plus" href="#add"></a>
                                        </form>
                                    </div>
                                </div>
                            </div> 
            
                            <div class="col-xs-12 col-sm-2 no-margin">
                                <div class="price">
                                    Rs.' . $row['discounted_amount'] . '
                                </div>
                                <a class="close-btn" href="pages/delete_cart.php?id=' . $row['id'] . '"></a>
                            </div>
                        </div>';
            }
            ?>

            <!--            <div class="row no-margin cart-item">
                            <div class="col-xs-12 col-sm-2 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img class="lazy" alt="" src="http://placehold.it/73x73" />
                                </a>
                            </div>
            
                            <div class="col-xs-12 col-sm-5 ">
                                <div class="title">
                                    <a href="#">white lumia 9001</a>
                                </div>
                                <div class="brand">sony</div>
                            </div> 
            
                            <div class="col-xs-12 col-sm-3 no-margin">
                                <div class="quantity">
                                    <div class="le-quantity">
                                        <form>
                                            <a class="minus" href="#reduce"></a>
                                            <input name="quantity" readonly="readonly" type="text" value="1" />
                                            <a class="plus" href="#add"></a>
                                        </form>
                                    </div>
                                </div>
                            </div> 
            
                            <div class="col-xs-12 col-sm-2 no-margin">
                                <div class="price">
                                    $2000.00
                                </div>
                                <a class="close-btn" href="#"></a>
                            </div>
                        </div> /.cart-item 
            
                        <div class="row no-margin cart-item">
                            <div class="col-xs-12 col-sm-2 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img class="lazy" alt="" src="http://placehold.it/73x73" />
                                </a>
                            </div>
            
                            <div class="col-xs-12 col-sm-5">
                                <div class="title">
                                    <a href="#">white lumia 9001 </a>
                                </div>
                                <div class="brand">sony</div>
                            </div> 
            
                            <div class="col-xs-12 col-sm-3 no-margin">
                                <div class="quantity">
                                    <div class="le-quantity">
                                        <form>
                                            <a class="minus" href="#reduce"></a>
                                            <input name="quantity" readonly="readonly" type="text" value="1" />
                                            <a class="plus" href="#add"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col-xs-12 col-sm-2 no-margin">
                                <div class="price">
                                    $2000.00
                                </div>
                                <a class="close-btn" href="#"></a>
                            </div>
                        </div> /.cart-item 
            
                        <div class="row no-margin cart-item">
                            <div class="col-xs-12 col-sm-2 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img class="lazy" alt="" src="http://placehold.it/73x73" />
                                </a>
                            </div>
            
                            <div class="col-xs-12 col-sm-5">
                                <div class="title">
                                    <a href="#">white lumia 9001 </a>
                                </div>
                                <div class="brand">sony</div>
                            </div> 
            
                            <div class="col-xs-12 col-sm-3 no-margin">
                                <div class="quantity">
                                    <div class="le-quantity">
                                        <form>
                                            <a class="minus" href="#reduce"></a>
                                            <input name="quantity" readonly="readonly" type="text" value="1" />
                                            <a class="plus" href="#add"></a>
                                        </form>
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="col-xs-12 col-sm-2 no-margin">
                                <div class="price">
                                    $2000.00
                                </div>
                                <a class="close-btn" href="#"></a>
                            </div>
                        </div> /.cart-item 
            
                        <div class="row no-margin cart-item">
                            <div class="col-xs-12 col-sm-2 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img class="lazy" alt="" src="http://placehold.it/73x73" />
                                </a>
                            </div>
            
                            <div class="col-xs-12 col-sm-5">
                                <div class="title">
                                    <a href="#">white lumia 9001 </a>
                                </div>
                                <div class="brand">sony</div>
                            </div> 
            
                            <div class="col-xs-12 col-sm-3 no-margin">
                                <div class="quantity">
                                    <div class="le-quantity">
                                        <form>
                                            <a class="minus" href="#reduce"></a>
                                            <input name="quantity" readonly="readonly" type="text" value="1" />
                                            <a class="plus" href="#add"></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col-xs-12 col-sm-2 no-margin">
                                <div class="price">
                                    $2000.00
                                </div>
                                <a class="close-btn" href="#"></a>
                            </div>
                        </div>-->
            <!-- /.cart-item -->
        </div>
        <!-- ========================================= CONTENT : END ========================================= -->

        <!-- ========================================= SIDEBAR ========================================= -->

        <div class="col-xs-12 col-md-3 no-margin sidebar ">
            <div class="widget cart-summary">
                <h1 class="border">shopping cart</h1>
                <div class="body">
                    <ul class="tabled-data no-border inverse-bold">
                        <li>
                            <label>cart subtotal</label>
                            <div class="value pull-right">Rs.00</div>
                        </li>
                        <li>
                            <label>shipping</label>
                            <div class="value pull-right">free shipping</div>
                        </li>
                    </ul>
                    <ul id="total-price" class="tabled-data inverse-bold no-border">
                        <li>
                            <label>order total</label>
                            <div class="value pull-right">Rs.00</div>
                        </li>
                    </ul>
                    <div class="buttons-holder">
                        <a class="le-button big" href="<?php echo BASE_URL; ?>/index.php?page=checkout" >checkout</a>
                        <a class="simple-link block" href="<?php echo BASE_URL; ?>/index.php?page=home" >continue shopping</a>
                    </div>
                </div>
            </div><!-- /.widget -->

            <!--            <div id="cupon-widget" class="widget">
                            <h1 class="border">use coupon</h1>
                            <div class="body">
                                <form>
                                    <div class="inline-input">
                                        <input data-placeholder="enter coupon code" type="text" />
                                        <button class="le-button" type="submit">Apply</button>
                                    </div>
                                </form>
                            </div>
                        </div>-->
            <!-- /.widget -->
        </div><!-- /.sidebar -->

        <!-- ========================================= SIDEBAR : END ========================================= -->
    </div>
</section>