<?php
    session_start();

    include("server.php");


    if(isset($_POST["submit"])){

        $name = $_POST["name"];
        $detail = $_POST["detail"];
        $projectType = $_POST["projectType"];
        $province = $_POST["province"];
        $start = $_POST["start"];
        $end = $_POST["end"];
        $budget = $_POST["budget"];
        $isSupport = $_POST["isSupport"];
        $budgetSupport = $_POST["budgetSupport"];

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

        $query = "insert into data(name,detail,projectType,province,startDate,endDate,budget,isSupport,budgetSupport,improveP,innovationP,reasearchP)
        value('$name','$detail','$projectType','$province','$start','$end','$budget','$isSupport','$budgetSupport','$project1','$project2','$project3')";

        $run = mysqli_query($conn,$query);

        if($run){
            echo "success" ;

            header("location: index.php") ;
        }

    };
?>