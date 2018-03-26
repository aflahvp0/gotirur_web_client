<?php

session_start();

include_once 'config.php';
$id = $_GET['id'];
$sql = "DELETE from `wishlist` where id=$id";
$con->query($sql);
echo '<script>alert("Deleted from Wishlist Successfully...")</script>';
echo '<script>window.location="index.php"</script>';


 