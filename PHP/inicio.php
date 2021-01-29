<?php 

session_start();

if(empty($_SESSION['name'])){
    echo json_encode('0');
}else{
    echo json_encode($_SESSION['name']);
}

?>