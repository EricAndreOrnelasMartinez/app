<?php 

    session_start();
    if(empty($_POST['name'])){
    if(!empty($_SESSION['name'])){
        echo json_encode('1');
    }else{
        echo json_encode('0');
    }
}

    if(!empty($_POST['name'])){
        $con = mysqli_connect('localhost','root','','contactos');
        $id = $_SESSION['ID'];
        $name = $_POST['name'];
        $last = $_POST['last'];
        $mail = $_POST['Mail'];
        $phone = $_POST['phone'];
        $SQL = "INSERT INTO contactos(ID,Nombre,Apeido,Mail,Telefono) VALUES($id, '$name','$last','$mail','$phone');";
        $result = mysqli_query($con, $SQL);
        if($result){
            echo json_encode('1');
        }else{
            echo json_encode('0');
        }
    }



?>