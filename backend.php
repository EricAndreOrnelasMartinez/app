<?php
include('con.php');
$nombre = $_POST['Nombre'];
$apeido = $_POST['Apeido'];
$edad = $_POST['edad'];

if($nombre === '' || $apeido === '' || $edad === ''){
    echo json_encode('completar campos');
}else{
    $result = mysqli_query("INSERT INTO personas(Nombre,Apeido,Edad) VALUES('$nombre','$apeido','$edad');", $con);
    if($result){
        echo json_encode('Registrado');
    }else{
        echo json_encode('algo falló');
    }

}

?>