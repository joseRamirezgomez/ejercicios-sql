<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <title>Crud Relacional</title>
</head>
<body>
    <br>
    <div class="container">
        <h1 class="text-center" style="background-color: black; color:white; border-radius: 5px;">INVENTARIO</h1>
    </div>
    <br>
    <div class="container">
        <table class="table table-bordered" id="tabla">
        <thead class="table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Categoria</th>
                <th scope="col">Marca</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require("../config/conexion.php");
            $sql = $conexion->query("SELECT * FROM ingresos
            INNER JOIN productos ON ingresos.idproducto = productos.idproducto
            INNER JOIN marcas ON productos.marcaid = marcas.id
            INNER JOIN proveedores ON ingresos.idproveedor = proveedores.idproveedor
            ");
            while ($resultado = $sql->fetch_assoc()) {
            ?>

            <tr>
                <th scope="row"><?php echo $resultado['idproducto']?></th>
                <th scope="row"><?php echo $resultado['nombre']?></th>
                <th scope="row"><?php echo $resultado['nombrecategoria']?></th>
                <th scope="row"><?php echo $resultado['nombremarca']?></th>
                <th scope="row"><?php echo $resultado['precio']?></th>
                <th scope="row"><?php echo $resultado['cantidad']?></th>
                <th scope="row"><?php echo $resultado['descripcionproducto']?></th>
                <th scope="row"><?php echo $resultado['nombre_proveedor']?></th>

                <th>
                    <a href="./formularios/editarform.php?id=<?php echo $resultado['idproducto']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="./crud/eliminardatos.php?id=<?php echo $resultado['idproducto']?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                </th>
            </tr>
            <?php
            }
            ?>

        </tbody>

        </table>
        <div class="container">
            <a href="../formularios/addingresos.php" class="btn btn-success"><i class="fa-solid fa-circle-plus"></i>  Agregar Producto</a>
        </div>
    </div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a5634d85fb.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>