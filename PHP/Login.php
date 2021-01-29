<?php
error_reporting(E_ALL);
ini_set('display_errors','1');
$con = mysqli_connect('localhost','root','','contactos');

$user = $_POST['user'];
$password = $_POST['password'];

$sql = "SELECT Contrasena FROM usuarios WHERE Mail='$user'";

$answeremysql = mysqli_query($con, $sql);

$turepass = implode(mysqli_fetch_assoc($answeremysql));

if($password === $turepass){
    session_start();
    $sqlName = "SELECT Nombre FROM usuarios WHERE Mail='$user'";
    $answereName = mysqli_query($con, $sqlName);
    $_SESSION['name'] = implode(mysqli_fetch_assoc($answereName));
    $sqlLast = "SELECT Apeido FROM usuarios WHERE Mail='$user'";
    $answereLast = mysqli_query($con, $sqlLast);
    $_SESSION['last'] = implode(mysqli_fetch_assoc($answereLast));
    echo json_encode('1');
}else {
    echo json_encode('0');
}

?>