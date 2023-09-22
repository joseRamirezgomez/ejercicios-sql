<?php
include("../config/conexion.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verifica si los campos del formulario están definidos en $_POST
    if (isset($_POST['categoriaP'], $_POST['marcaP'], $_POST['precio'], $_POST['descripcion'], $_POST['nombre'], $_POST['cantidad'], $_POST['proveedor'], $_POST['producto'])) {
        $categoria = $_POST['categoriaP'];
        $marca = $_POST['marcaP'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $nombre = $_POST['nombre'];
        $cantidad = $_POST['cantidad'];
        $proveedor = $_POST['proveedor'];
        $producto = $_POST['producto'];

        // Realiza la inserción en la base de datos
        $sql1 = "INSERT INTO productos(categoriaid, marcaid, precio, descripcionproducto, nombre) VALUES('$categoria', '$marca', '$precio', '$descripcion', '$nombre')";
        $sql2 = "INSERT INTO ingresos(cantidad, idproveedor, idproducto) VALUES('$cantidad', '$proveedor', '$producto')";

        $resultado1 = mysqli_query($conexion, $sql1);
        $resultado2 = mysqli_query($conexion, $sql2);

        if ($resultado1 === TRUE && $resultado2 === TRUE) {
            header("location: ../index.php");
        } else {
            echo "Datos NO ingresados";
        }
    } else {
        echo "Faltan campos en el formulario.";
    }
}
?>

