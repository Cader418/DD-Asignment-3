<?php
    include("A3Connection.php");
    $cart_id = $_POST['cart_id'];
    $item_name = $_POST['item_name'];
    $user_id = $_POST['user_id']; 

    //Insert into database
    $sql = "INSERT INTO cart_tab (cart_id, item_name, user_id) 
    VALUES ('$cart_id', '$item_name', '$user_id')";   
    
    $result = $connect->query($sql);

    if ($result == FALSE)
    {
        echo "Error: ". $connect->error;
    }
    header('Location: index.php');
    exit;
?>
