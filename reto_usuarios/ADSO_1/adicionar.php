<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Usuarios</title>
</head>
<body class="text-center">
    <?php require 'config.php';

    if(isset($_POST['Nombre']) && empty($_POST['Nombre']) == false){

        $Nombre = addslashes($_POST['Nombre']);
        $email = addslashes($_POST['email']);
        $telefono = addslashes($_POST['telefono']);

        $insertarusuario = "INSERT INTO usuarios SET Nombre = '$Nombre', email = '$email', telefono = '$telefono'";
        $pdo->query($insertarusuario);
        header("location: index.php");
    }    
    ?>
    <form method="post" class="form-signin">
        <input type="nombre" class="form-control" placeholder="Nombre" require autofocus>
        <input type="email" class="form-control" placeholder="e-mail" require>
        <input type="number" class="form-control" placeholder="telefono" require>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar nuevo usuario</button>
        <p class="mt-5 mb-3 text-muted">&copy;</p>
    </form>
    
</body>
</html>