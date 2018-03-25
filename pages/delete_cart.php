<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '/../config.php';

$sql = "DELETE FROM `cart` WHERE `id`=" . $_GET['id'];
//echo $sql;
if (!$con->query($sql)) {
    echo $con->error;
}
$con->query($sql);
echo '<script>alert("Deleted Successfully...")</script>';
echo '<script>window.location="../index.php?page=cart"</script>';


