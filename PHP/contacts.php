<?php 

session_start();

$con = mysqli_connect('localhost','root','','contactos');
$sql = "SELECT * FROM cotactos WHERE ID='$_SESSION['ID']';";
$answere = mysqli_query($con, $sql);
echo json_encode(mysqli_fetch_array($answere));
?>