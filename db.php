<?php

$conexion=mysqli_connect("localhost", "root", "", "login");


if ($conexion = 1)
{
    echo "Inicio Sesión satisfactoriamente";
}
else ($conexion = 0);
{
    echo "error, favor de veridicar los datos";
}






?>