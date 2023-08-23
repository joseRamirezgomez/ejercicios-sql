<?php require 'config.php';

if(isset($_GET['id']) && empty($_GET['id']) == false){
    $id = addslashes($_GET['id']);
    $deletarusuario = "DELETE FROM usuarios WHERE id = '$id'";
    $pdo->query($deletarusuario);
    header("location: index.php");
}  else {
    header("location: index.php");
}  
?>