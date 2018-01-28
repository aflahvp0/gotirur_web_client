<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$sql = "select * from grantchild_category";
$result = $con->query($sql);
while ($row= mysqli_fetch_assoc($result))
{
    echo '<li><a href="#">'.$row['category_name'].'</a></li>';
             
}