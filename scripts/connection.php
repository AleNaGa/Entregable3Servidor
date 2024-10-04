<?php
function connection(){
$host = 'localhost';
$user = 'root';
$pass = 'root';
$bd = 'portfolio_projects';

$connect = mysqli_connect($host, $user, $pass, $bd);
mysqli_select_db($connect, $bd);
if($connect -> connect_error){
    die("Connection failed: " . $connect->connect_error);
}
return $connect;
}
?>
