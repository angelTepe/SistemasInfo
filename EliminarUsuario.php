<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="icon"  href ="img/icon.png" >
    <title>Elimina usuario</title>
    

</head>

<body>
    <h1 style=" text-align: center;" >Elimina usuario</h1>
    <form style=" text-align: center;" method="POST" action="deleteUsuario.php">

        <input  type="text" name="nombre_usuario" placeholder="nombre" />
        <br />
        <button type="submit">Eliminar usuario</button>

    </form>
    <h1>
    <a style="right:inherit"  class="waves-effect waves-light btn" href="./session_destroy.php">Salir</a>
    <h1>
    <a style="right:inherit"  class="waves-effect waves-light btn" href="./dashboard.php">Regresar</a>
    
</body>

</html>
