<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$name = $_POST['name'];
$tec = $_POST['technologies'];
$img = $_POST['img'];
$desc = $_POST['description'];
$enlace = $_POST['link'];

$sql="UPDATE projects SET name='$name', technologies='$tec', img='$img', description='$desc', link='$enlace' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{

}

?>