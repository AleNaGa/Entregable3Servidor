<?php

    include_once 'connection.php';
    $con = connection();

    $name = $_POST['nombre'];
    $age = $_POST['edad'];
    if($name == '' || $age == ''){
        Header("Location: ../index.php");
    }else{
        $sql = "INSERT INTO `portfolio_projects`.`alumnos`(nombreAlumnos, edad) VALUES('$name','$age')";
        $query = mysqli_query($con, $sql);

        if($query){
            Header("Location: ../index.php");
        }else{
            Header("Location: ../index.php");
        }
    }

?>
