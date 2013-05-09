<?php

function openConnection() {

// Create connection
    $con = mysqli_connect("localhost", "root", "adminadmin", "winestore");

// Check connection
    if (mysqli_connect_errno($con)) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        return null;
    }
    else
        return $con;
}

function closeConnection($con) {
    mysqli_close($con);
}

?>
