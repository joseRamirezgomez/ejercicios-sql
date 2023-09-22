<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Editar Producto</title>
</head>
<body>
    <h1 class="text-center" style="background-color: black; color:white; border-radius: 5px;">Editar Productos</h1>
    <br>
    <form action="../crud/editardatos.php" class="container" method="POST">
        <?php 
        include ('../config/conexion.php');

        $sql = "SELECT * FROM productos WHERE idproducto =".$_GET['id'];
        $resultado = $conexion->query($sql);

        $row = $resultado->fetch_assoc();
        
        ?>

        <input type="Hidden" class="form-control" name="id" value="<?php echo $row['idproducto']; ?>">

        <!--TRAER DATOS CATEGORIAS-->
        <label>Categorias</label>
        <select name="categorias" class="form-select mb-3" aria-label="Default select example">
            <option selected disabled>--Seleccione Categorias--</option>
            <?php 
            include ("../config/conexion.php");

            $sql1 = "SELECT * FROM categorias WHERE id=".$row['categoriaid'];
            $resultado1 = $conexion->query($sql1);

            $row1 = $resultado1->fetch_assoc();

            echo "<option selected value='".$row1['id']."'>".$row1['nombrecategoria']."</option>";

            $sql2 = "SELECT * FROM categorias";
            $resultado2 = $conexion->query($sql2);
            while ($Fila = $resultado2->fetch_array()) {
                echo "<option value='".$Fila['id']."'>".$Fila['nombrecategoria']."</option>";

            }
            ?>
        </select>
        <label>Marcas</label>
        <select name="marcas" class="form-select mb-3" aria-label="Default select example">
            <option selected disabled>--Seleccione marcas--</option>
            <?php 
            include ("../config/conexion.php");

            $sql3 = "SELECT * FROM marcas WHERE id=".$row['marcaid'];
            $resultado3 = $conexion->query($sql3);

            $row3 = $resultado3->fetch_assoc();

            echo "<option selected value='".$row3['id']."'>".$row3['nombremarca']."</option>";

            $sql4 = "SELECT * FROM marcas";
            $resultado4 = $conexion->query($sql4);

            while ($Fila = $resultado4->fetch_array()) {
                echo "<option value='".$Fila['id']."'>".$Fila['nombremarca']."</option>";
            }
            ?>
        </select>

        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" value="<?php echo $row['precio']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="<?php  echo $row['descripcionproducto']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre"  value="<?php echo $row['nombre']; ?>">
        </div>
        <div class="mb-3">
            <label class="text-center">
                <button type="submit" class="btn btn-danger">Agregar</button>
                <a href="../pages/productos.php" class="btn btn-dark">Regresar</a>
            </label>
        </div>
    </form>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>