<?php 

$id = $_GET['id'];

$con = mysqli_connect('localhost','root','Lasric.2018','contactos');
$sql = "DELETE FROM contactos WHERE ID_C=$id";
$result = mysqli_query($con,$sql);
header("Location:../Inicio/");
?>
