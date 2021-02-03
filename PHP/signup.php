<?php 

$con = mysqli_connect('localhost','root','Lasric.2018','contactos');
$name = $_POST['name'];
$last = $_POST['last'];
$mail = $_POST['mail'];
$pass = $_POST['pass1'];
$sql = "INSERT INTO usuarios(Nombre, Apeido, Mail, Contrasena) VALUES('$name','$last','$mail','$pass');";
$result = mysqli_query($con, $sql);
if($result){
    echo json_encode('1');
}else{
    echo json_encode('0');
}
?>
