<?php require 'config.php';
$id = 0;


if(isset($_POST['Nombre']) && empty($_POST['Nombre']) == false){
    $Nombre = addslashes($_POST['Nombre']);
        $Area = addslashes($_POST['Area']);
        $tareaasignada = addslashes($_POST['Tarea_asignada']);
        $dateend = addslashes($_POST['date_end']);

    $actualizarusuario = "UPDATE usuarios SET Nombre = '$Nombre', Area = '$Area', Tarea_asignada = '$tareaasignada', date_end = '$dateend WHERE id = '$id'";
    $pdo->query($actualizarusuario);
    header("location: index.php");
}    
?>
