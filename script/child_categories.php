<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$sql = "select * from child_categories";
$result = $con->query($sql);
while ($row= mysqli_fetch_assoc($result))
{
    echo '<div class="col-xs-12 col-sm-4">
            <h2>'.$row['category_name'].'</h2>
            <ul>
                <li><a href="#">Power Supplies Power</a></li>
                <li><a href="#">Power Supply Testers Sound</a></li>
                <li><a href="#">Sound Cards (Internal)</a></li>
                <li><a href="#">Video Capture &amp; TV Tuner Cards</a></li>
                <li><a href="#">Other</a></li>
            </ul>
        </div>';
}
