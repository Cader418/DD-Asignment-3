<?php
    include ("A3Connection.php");

    $user_id_array = array();
    $fname_array = array();
    $lname_array = array();
    $gender_array = array();
    $age_array = array();
    $phone_num_array = array();
    $aid_array = array();
    $sql2="SELECT * FROM customer_tab";
    $result2=$connect->query($sql2);
    while($row2 = $result2->fetch_assoc()){
        $user_id_array[] = $row2['user_id'];
        $fname_array[] = $row2['fname'];
        $lname_array[] = $row2['lname'];
        $gender_array[] = $row2['gender'];
        $age_array[] = $row2['age'];
        $phone_num_array[] = $row2['phone_num'];
        $aid_array[] = $row2['aid'];
    }
?>
