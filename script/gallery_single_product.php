<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$sql = "select * from product";
$result = $con->query($sql);
while ($row = mysqli_fetch_assoc($result))
{
    echo '<div id="owl-single-product">
            <div class="single-product-gallery-item" id="slide1">
                <a data-rel="prettyphoto" href="/../products/img1.jpg">
                    <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-gallery-01.jpg" />
                </a>
            </div>
    <div id="owl-single-product">
            <div class="single-product-gallery-item" id="slide2">
                <a data-rel="prettyphoto" href="/../products/img2.jpg">
                    <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-gallery-01.jpg" />
                </a>
            </div>
            <div id="owl-single-product">
            <div class="single-product-gallery-item" id="slide3">
                <a data-rel="prettyphoto" href="/../products/img3.jpg">
                    <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-gallery-01.jpg" />
                </a>
            </div>
         </div>
         
      <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="/../products/img1.jpg">
                    <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                </a>
                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="/../products/img2.jpg">
                    <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                </a>
                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="/../products/img3.jpg">
                    <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                </a>
                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="/../products/img4.jpg">
                    <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                </a>
                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="/../products/img5.jpg">
                    <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                </a>
                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="/../products/img6.jpg">
                    <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                </a>
                </div>
';
}
