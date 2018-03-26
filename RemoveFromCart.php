
<?php

session_start();

include_once 'config.php';
$id = $_GET['id'];
$sql = "DELETE from `cart` where id=$id";

$con->query($sql);
echo '<script>alert("Deleted from Cart Successfully...")</script>';
echo '<script>window.location="index.php"</script>';


