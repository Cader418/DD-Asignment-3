<?php
    include("A3Connection.php");
    $user_id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];  
    $phone_num = $_POST['phone_num'];
    $aid = $_POST['aid'];

    //Insert into database
    $sql = "INSERT INTO customer_tab (user_id, fname, lname, gender, age, phone_num, aid) 
    VALUES ('$user_id', '$fname', '$lname', '$gender', '$age', '$phone_num', '$aid')";   
    
    $result = $connect->query($sql);

    if ($result == FALSE)
    {
        echo "Error: ". $connect->error;
    }
    header('Location: index.php');
    exit;
?>
