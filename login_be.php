<?php
   session_start();
   include 'conexion_be.php';

   $correo = $_POST['correo'];
   $clave = $_POST['clave'];
   $clave = hash('sha512', $clave);

   $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo' and clave='$clave'");

   if(mysqli_num_rows($validar_login) >0){
    $_SESSION['usuario'] = $correo;
    header("location: inicio.html");
    exit();
   }else{
    echo '
    <script>
       alert("Usuario No Existente, Verifique Los Datos Introducidos");
       window.location = "index.html";
    </script>
    ';
   }
?>
