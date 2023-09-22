<?php 
include_once("../config/conexion.php");

$id = $_POST['id'];
$categoria = $_POST['categorias'];
$marcas = $_POST['marcas'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$nombre = $_POST['nombre'];

$sql = "UPDATE productos SET 
                categoriaid='".$categoria."',
                marcaid='".$marcas."',
                precio='".$precio."',
                descripcionproducto='".$descripcion."',
                nombre='".$nombre."' WHERE idproducto =".$id."";
if ($resultado = $conexion->query($sql)) {
    header("location:../index.php");
}
?>