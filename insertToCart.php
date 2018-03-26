<?php

session_start();

include_once 'config.php';
$qty = $_POST['qty'];
$id = $_GET['id'];
$sql = "INSERT INTO `cart`(`item_ID`, `QUANTITY`,`customer_id`) VALUES ($id,$qty," . $_SESSION["customer_id"] . ")";
$con->query($sql);
echo '<script>alert("Added to Cart Successfully...")</script>';
echo '<script>window.location="index.php"</script>';


