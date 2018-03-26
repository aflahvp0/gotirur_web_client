<?php

session_start();

include_once 'config.php';
$id = $_GET['id'];
$sql = "INSERT INTO `wishlist`(`item_ID`,`customer_id`) VALUES ($id," . $_SESSION["customer_id"] . ")";
//echo $sql;
$con->query($sql);
echo '<script>alert("Added to Wishlist Successfully...")</script>';
echo '<script>window.location="index.php"</script>';


