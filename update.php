<?php
include 'db.php';


$id = $_GET['id'];

if($_SERVER ['REQUEST_METHOD']  == 'POST'){

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "UPDATE usuarios SET name = '$name', email = '$email' WHERE id = $id";

if ($conn -> query($sql) === true){
        echo " Atualização feita com sucesso!";

    }else{
        echo "Erro" . $sql . '<br>'.  $conn -> error;
    }
    $conn -> close();
}


?>