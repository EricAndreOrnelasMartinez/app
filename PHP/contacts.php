<?php 

session_start();

$con = mysqli_connect('localhost','root','Lasric.2018','contactos');
$aux = $_SESSION['ID'];
$sql = "SELECT * FROM contactos WHERE ID=$aux;";
$answere = mysqli_query($con, $sql);
echo json_encode(mysqli_fetch_all($answere, MYSQLI_ASSOC));
?>
