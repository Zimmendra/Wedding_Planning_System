<?php

    require('config.php');
    require('setCid.php');


    $newFid = $_POST["field0"];
    $newDesc = $_POST["field1"];

    $sql = "UPDATE feedback
            SET Description = '$newDesc'
            WHERE Fid = '$newFid'";

    if($con -> query($sql)){
        header("Location: feedback.php");
    }
    else{
        echo"<script>alert('Could not update feedback')</script>";
    }

    $con -> close();

?>