<?php

$conexion = mysqli_connect("localhost", "root", "", "login_register_db");

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
   
?>