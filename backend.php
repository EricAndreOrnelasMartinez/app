

$nombre = $_POST['$Nombre'];
$apeido = $_POST['Apeido'];
$edad = $_POST['edad'];

if($nombre === '' || $apeido === '' || $edad === ''){
    echo json_encode('todo mal');
}else{
    echo json_encode('todo bien');
}