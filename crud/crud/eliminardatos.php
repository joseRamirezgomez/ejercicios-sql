<?php
include ("../config/conexion.php");

$id = $_GET['id'];
$sql = "DELETE FROM productos WHERE idproducto = '$id'";

$query = mysqli_query($conexion,$sql);
if ($query === TRUE) {
    header("location: ../index.php");
}

?>