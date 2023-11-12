<?php
    include("A3Connection.php");
    $item_name = $_POST['item_name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    //Insert into database
    $sql = "INSERT INTO product_tab (item_name, brand, price, category) 
    VALUES ('$item_name', '$brand', '$price', '$category')";   
    
    $result = $connect->query($sql);

    if ($result == FALSE)
    {
        echo "Error: ". $connect->error;
    }
    header('Location: index.php');
    exit;
?>
