<?php
    session_start();
    include("server.php");

    if(isset($_POST["update"])){

        $name = $_POST["name"];
        $province = $_POST["province"];
        $start = $_POST["start"];
        $end = $_POST["end"];
        $detail = $_POST["detail"];
        $type = $_POST["projectType"];
        $budget = $_POST["budget"];
        $bs = $_POST["budgetSupport"];
        $id = $_SESSION["id"];

        if(!isset($_POST["project1"])){

            $project1 = "n" ;

        }else{
            $project1 = "y" ;
        }

        if(!isset($_POST["project2"])){

            $project2 = "n" ;

        }else{
            $project2 = "y" ;
        }

        if(!isset($_POST["project3"])){

            $project3 = "n" ;

        }else{
            $project3 = "y" ;
        }

        $query = mysqli_query($conn , "UPDATE data set name = '$name' , province = '$province' , startDate = '$start' , 
        endDate = '$end', detail = '$detail' , projectType = '$type', budget = '$budget' , budgetSupport = '$bs' ,
        improveP = '$project1' , innovationP = '$project2' , reasearchP = '$project3' where id = $id");

        header("location: index.php");

    }
?>