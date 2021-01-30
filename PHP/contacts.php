<?php 

session_start();

$con = mysqli_connect('localhost','root','','contactos');
$sql = "SELECT * FROM contactos;";
$answere = mysqli_query($con, $sql);
echo json_encode($answere);
?>