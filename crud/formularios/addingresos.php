<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Agregar Producto</title>
</head>
<body>
    <h1 class="bg-black p-2 text-white text-center">Agregar producto</h1>
    <br>
    <div class="container">
        <form action="../crud/insertardatos.php" method="POST">
            <label for="">Producto</label>
            <select name="producto" class="form-select mb-3">
                <option selected disabled>--Seleccionar producto--</option>
                <?php
                include ("../config/conexion.php");

                $sql = $conexion->query("SELECT * FROM PRODUCTOS");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='".$resultado['id']."'>".$resultado['nombre']."</option>";
                }
                ?>
            </select>
            <label for="">Proveedor</label>
            <select name="proveedor" class="form-select mb-3">
                <option selected disabled>--Seleccionar proveedor--</option>
                <?php 
                include ("../config/conexion.php");

                $sql = $conexion->query("SELECT * FROM proveedores");
                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='".$resultado['idproveedor']."'>".$resultado['nombre_proveedor']."</option>";
                }
                ?>
            </select>
            <div class="mb-3">
                <label class="form-label">Cantidad</label>
                <input type="text" class="form-control" name="cantidad">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-danger">Agregar</button>
                <a href="../index.php" class="btn btn-dark">Regresar</a>
            </div>
        </form>
    </div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>