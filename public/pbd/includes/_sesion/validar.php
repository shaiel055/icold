<!--controlador-->
<?php

/**
 * Validacion de datos para poder iniciar sesion
 */
require_once ("../_db.php");
$errorCorreo = "";
$errorPassword = "";

$correo=$_POST['correo'];
$password=$_POST['password'];
session_start();
$_SESSION['correo']=$correo;


$conexion = mysqli_connect("localhost", "root", "", "tienda_unid");
$consulta = "SELECT * FROM user WHERE correo='$correo' AND password='$password'";
$resultado = mysqli_query($conexion, $consulta);
$filas = mysqli_num_rows($resultado);

if ($filas) {
    header('Location: ../../views/usuarios/index.php');
} else {
    $errorPassword = "Contraseña incorrecta";
    $errorCorreo = "Correo electrónico incorrecto";
    header('Location: ../../index.php');
    session_destroy();
}
?>
  
  <?php

  /**
   * Parte de registro de usuarios
   */
 if(isset ($_POST['registrar'])){
if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['telefono']) >= 1) {
$nombre = trim($_POST['nombre']);
      $correo = trim($_POST['correo']);
      $password = trim($_POST['password']);
      $telefono = trim($_POST['telefono']);

      $consulta = "INSERT INTO user (nombre, correo, telefono, password)
      VALUES ('$nombre', '$correo', '$telefono', '$password')";

     mysqli_query($conexion, $consulta);
     mysqli_close($conexion);

 }
}
?>







