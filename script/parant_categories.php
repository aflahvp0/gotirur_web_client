<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$sql = "select * from parent_categories";
$result = $con->query($sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo ' <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">' . $row['category_name'] . '</a>
                        <ul class="dropdown-menu">
                            <li>';

    echo '<div class="yamm-content">
    <div class="row">';

//    require '/../../script/child_categories.php';
//    include_once 'config.php';
    $sql2 = "select * from child_categories where parent_category_id=" . $row['id'];
//    echo $sql2;
    $result2 = $con->query($sql2);
    while ($row2 = mysqli_fetch_assoc($result2)) {
        echo '<div class="col-xs-12 col-sm-4">
            <h2>' . $row2['category_name'] . '</h2>
            <ul>';
        $sql3 = "select * from grantchild_category where child_category_id=" . $row2['id'];
        $result3 = $con->query($sql3);
        while ($row3 = mysqli_fetch_assoc($result3)) {
            echo '<li><a href="#">' . $row3['category_name'] . '</a></li>';
        }
        echo '</ul>
        </div>';
    }
        
    echo '</div><!-- /.row -->
</div><!-- /.yamm-content -->';

    echo '</li>
                        </ul>
                    </li>';
}
