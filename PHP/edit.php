<?php 

$con = mysqli_connect('localhost','root','Lasric.2018','contactos');
$id = $_POST['ID_C'];
$name = $_POST['nombre'];
$last = $_POST['apeido'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$sql = "UPDATE contactos SET Nombre='$name', Apeido='$last', Mail='$mail', Telefono='$phone' WHERE ID_C=$id";
$result = mysqli_query($con, $sql);
if($result){
    echo json_encode('1');
}else{
    echo json_encode('0');
}
?>
