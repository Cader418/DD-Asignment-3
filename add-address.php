<?php
    include("A3Connection.php");
    $aid = $_POST['aid'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $street_num = $_POST['street_num'];  

    //Insert into database
    $sql = "INSERT INTO address_tab (aid, state, city, street, street_num) 
    VALUES ('$aid', '$state', '$city', '$street', '$street_num')";   
    
    $result = $connect->query($sql);

    if ($result == FALSE)
    {
        echo "Error: ". $connect->error;
    }
    header('Location: index.php');
    exit;
?>
