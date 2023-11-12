<?php
    include ("A3Connection.php");

    $item_name_array = array();
    $brand_array = array();
    $price_array = array();
    $category_array = array();
    $sql3="SELECT * FROM product_tab";
    $result3=$connect->query($sql3);
    while($row3 = $result3->fetch_assoc()){
        $item_name_array[] = $row3['item_name'];
        $brand_array[] = $row3['brand'];
        $price_array[] = $row3['price'];
        $category_array[] = $row3['category'];
    }
?>
