<?php
    include("A3Connection.php");
    $sales_id = $_POST['sales_id'];
    $item_name = $_POST['item_name'];
    $user_id = $_POST['user_id'];

    //Insert into database
    $sql = "INSERT INTO sales_tab (sales_id, item_name, user_id) 
    VALUES ('$sales_id', '$item_name', '$user_id')";   
    
    $result = $connect->query($sql);

    if ($result == FALSE)
    {
        echo "Error: ". $connect->error;
    }
    header('Location: index.php');
    exit;
?>
