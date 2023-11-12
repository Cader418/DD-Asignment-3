<?php
    $connect = new mysqli("localhost", "root", "", "assignment-2");
    if($connect->connect_errno){
        die('Could not connect: ' . $connect->connect_errno);
    }
?>
