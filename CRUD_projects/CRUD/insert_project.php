<?php

include("connection.php");
$con = connection();

$id=0;
$name = $_POST['name'];
$tec = $_POST['technologies'];
$img = $_POST['img'];
$desc = $_POST['description'];
$enlace = $_POST['link'];

$sql = "INSERT INTO projects VALUES('$id','$name','$tec','$img','$desc','$enlace')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{
    
}

?>