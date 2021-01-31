<?php
error_reporting(E_ALL);
ini_set('display_errors','1');
$con = mysqli_connect('localhost','root','','contactos');

$user = $_POST['user'];
$password = $_POST['password'];

$sql = "SELECT Contrasena FROM usuarios WHERE Mail='$user'";

$answeremysql = mysqli_query($con, $sql);

$turepass = implode(mysqli_fetch_assoc($answeremysql));

if(!empty($user) && !empty($password)){
if($password === $turepass){
    session_start();
    $sqlName = "SELECT Nombre FROM usuarios WHERE Mail='$user'";
    $answereName = mysqli_query($con, $sqlName);
    $_SESSION['name'] = implode(mysqli_fetch_assoc($answereName));
    $sqlLast = "SELECT Apeido FROM usuarios WHERE Mail='$user'";
    $answereLast = mysqli_query($con, $sqlLast);
    $_SESSION['last'] = implode(mysqli_fetch_assoc($answereLast));
    $sqlID = "SELECT ID FROM usuarios WHERE Mail='$user'";
    $answereID = mysqli_query($con, $sqlID);
    $_SESSION['ID'] = implode(mysqli_fetch_assoc($answereID));
    echo json_encode('1');
}else {
    echo json_encode('0');
}
}else{
    echo json_encode('0');
}
?>