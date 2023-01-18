<?php
    // se definen variables para la conexión 

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "test";

    // se hace la conexión a la base de datos, en caso de no haber conexión se despliega un mensaje de no conexión 

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 

    if (!$conn)
    {
        die("No hay conexion: ".mysqli_connect_error());
    }

    // se concatenan las variables con los campos del HTML del formulario 
    $nombre = $_POST["txtusuario"];
    $pass = $_POST["password"];

    // se hace la consulta a la base de datos usando las variables definidas en un inicio 

    $query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$dbpass."'");

    // se definirá una nueva variable para almacenar los datos de la consulta

    $nr = mysqli_num_rows($query); 

    // entrada de una condicion para validad la conexion a la base de datos y el login 
    
    if ($nr == 1)
    {
        // header("Location: pagina.html")
        echo "bienvenido:" .$nombre;
    }
    else if($nr == 0)
    {
        echo "No ingreso";
    }






?>