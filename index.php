<!DOCTYPE html>

<style>

.fuente{
    font-family:arial;
}

</style>
<html  lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="fuente">Welcome</title>
</head>
<body>
    
    <form action="validar.php" method="POST">
    <h1 class="fuente">Login</h1>
    <p class="fuente">Usuario <br><br><input type="text" placeholder="Ingresa tu nombre" name="usuario"></p>
    <p class="fuente">Constraseña <br><br> <input type="password" placeholder="Ingresa tu contraseña " name="password"> </p>
    <input type="submit" value="ingreso">
    </form>
</body>
</html>