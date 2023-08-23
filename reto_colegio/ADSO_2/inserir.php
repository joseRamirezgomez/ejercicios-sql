<?php 
require 'config.php';

if(isset($_POST['Nombre']) && empty($_POST['Nombre']) == false){

    $senha = '';
    
    $Nombre = addslashes($_POST['Nombre']);
        $Area = addslashes($_POST['Area']);
        $Tarea_asignada = addslashes($_POST['Tarea_asignada']);
        $date_end = addslashes($_POST['date_end']);

        $inserirusuario = "INSERT INTO usuarios SET Nombre = '$Nombre', Area = '$Area', Tarea_asignada = '$Tarea_asignada', date_end = '$date_end'";
    $pdo->query($inserirusuario);
    header("location: index.php");
}    
?>