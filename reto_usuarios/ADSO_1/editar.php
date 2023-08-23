<?php require 'config.php';
$id = 0;


if(isset($_POST['Nombre']) && empty($_POST['Nombre']) == false){
    $id = $_POST['id'];
    $Nombre = addslashes($_POST['Nombre']);
    $email = addslashes($_POST['email']);
    $telefono = addslashes($_POST['telefono']);

    $actualizarusuario = "UPDATE usuarios SET Nombre = '$Nombre', email = '$email', telefono = '$telefono' WHERE id = '$id'";
    $pdo->query($actualizarusuario);
    header("location: index.php");
}    
?>
