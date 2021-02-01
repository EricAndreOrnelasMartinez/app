<?php 

session_start();

if(!isset($_SESSION['name'])){
    header("Location:../../");
}else{
    $id = $_GET['id'];
    $con = mysqli_connect('localhost','root','','contactos');
    $sqlName = "SELECT Nombre FROM contactos WHERE ID_C=$id";
    $nameR = mysqli_query($con, $sqlName);
    $sqlLast = "SELECT Apeido FROM contactos WHERE ID_C=$id";
    $lastR = mysqli_query($con, $sqlLast);
    $sqlMail = "SELECT Mail FROM contactos WHERE ID_C=$id";
    $mailR = mysqli_query($con, $sqlMail);
    $sqlTel = "SELECT Telefono FROM contactos WHERE ID_C=$id";
    $telR = mysqli_query($con, $sqlTel);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilo.css">
    <title>Editar</title>
</head>
<body>
    <form id="form">
        <h4>Contacto</h4>
        <input type="hidden" name="ID_C" value="<?php echo $id?>">
        <input type="text" name="nombre" value="<?php echo implode(mysqli_fetch_assoc($nameR)) ?>">
        <input type="text" name="apeido" value="<?php echo implode(mysqli_fetch_assoc($lastR)) ?>">
        <input type="text" name="mail" value="<?php echo implode(mysqli_fetch_assoc($mailR)) ?>">
        <input type="text" name="phone" value="<?php echo implode(mysqli_fetch_assoc($telR)) ?>">
        <button type="submit">Modificar</button>
        <a href="../"><button type="button">volver</button></a>
        <h3 id="res"></h3>
    </form>
</body>
<script src="editar.js"></script>
</html>