<?php 

session_start();

$user = $_SESSION['name'];

if(empty($user)){
    echo json_encode('0');
}else{
    echo json_encode($user);
}

?>