<?php

    $conn = mysqli_connect("localhost","root","","emtest");

    $name = "";
    $province = "";
    $id = 0 ;

    if(!$conn){
        echo "Disconnected" ;
    };

    $result = mysqli_query($conn , "SELECT * FROM data");

    $row = mysqli_fetch_array($result)

?>