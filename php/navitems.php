<?php
    
    require('setCid.php');


    $pid = $_GET['id'];
    $pid = intval($pid);
    echo $pid;

    $sql = "select Vid from package where Pid = '$pid'";
    $result = $con -> query($sql);
    $vid = $result -> fetch_assoc();

    $vid = intval($vid["Vid"]);

    $sql = "Update vendors SET Number_of_Clicks = Number_of_clicks + 1 where Vid = '$vid'";
    $result = $con -> query($sql);
   
    $sql = "INSERT INTO customer_package VALUES ('$cid','$pid') ";
    $result = $con -> query($sql);

    header("location:cart.php");

?>
