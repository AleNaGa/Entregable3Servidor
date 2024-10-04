<?php
    include_once 'connection.php';
    $con = connection();

    $id = $_POST['id'];
    $name = $_POST['nombre'];
    $age = $_POST['edad'];

    if($name == ''){
        $sql = "UPDATE alumnos SET edad = $age WHERE idAlumnos = $id";
    }elseif($age == ''){
        $sql = "UPDATE alumnos SET nombreAlumnos = '$name' WHERE idAlumnos = $id";
    }else{
        $sql = "UPDATE alumnos SET nombreAlumnos = '$name', edad = $age WHERE idAlumnos = $id";
    }

    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: ../index.php");
    }
    else{
        echo "Error al actualizar";
    }

?>
