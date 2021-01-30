<?php 

session_start();

$con = mysqli_connect('localhost','root','','contactos');
$sql = "SELECT * FROM contactos;";
$answere = mysqli_query($con, $sql);
while($send = mysqli_fetch_array($answere)){
    echo json_encode($send);
}
?>