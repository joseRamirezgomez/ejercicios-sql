<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Usuarios</title>
</head>

<body class="text-center">
    <?php require 'config.php';

    if (isset($_POST['Nombre']) && empty($_POST['Nombre']) == false) {

        $Nombre = addslashes($_POST['Nombre']);
        $Area = addslashes($_POST['Area']);
        $Tarea_asignada = addslashes($_POST['Tarea_asignada']);
        $date_end = addslashes($_POST['date_end']);


        $insertaralumno = "INSERT INTO usuarios SET Nombre = '$Nombre', Area = '$Area', Tarea_asignada = '$Tarea_asignada', date_end = '$date_end'";
        $pdo->query($insertaralumno);
        header("location: index.php");
    }
    ?>
    <form method="post" class="form-signin">
    <input type="text" class="form-control" placeholder="Alumno" name="Nombre" required autofocus>
    <input type="text" class="form-control" placeholder="Area" name="Area" required>
    <input type="text" class="form-control" placeholder="Tarea asignada" name="Tarea_asignada" required>
    <input type="date" class="form-control" placeholder="Fecha de entrega" name="date_end" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Asignar nueva tarea</button>
    <p class="mt-5 mb-3 text-muted">&copy;</p>
</form>


</body>

</html>