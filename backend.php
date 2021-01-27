<?php
$con = mysqli_connect('localhost','root','Lasric.2018','api1');
$nombre = $_POST['Nombre'];
$apeido = $_POST['Apeido'];
$edad = intval($_POST['edad']);

if($nombre === '' || $apeido === '' || $edad === ''){
    echo json_encode('completar campos');
}else{
    $result = mysqli_query($con,"INSERT INTO personas(Nombre,Apeido,Edad) VALUES('$nombre','$apeido',$edad);");
    if($result){
        echo json_encode('Registrado');
    }else{
        echo json_encode('algo falló');
    }

}

?>