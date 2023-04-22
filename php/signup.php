<?php
include 'conection.php';
// Obtención de los valores enviados desde el formulario de inicio de sesión
$user = $_POST['user'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];

// Verificar si las contraseñas son iguales
if ($pass != $pass2) {
  echo '<script>alert("Las contraseñas no coinciden");
  window.location = "../view/signup.html";</script>';
} else {

  // generar hash de la contraseña
  $pass_hash = password_hash($pass, PASSWORD_DEFAULT);


  // Crear la consulta SQL para insertar los datos en la base de datos
  $sql = "INSERT INTO users (username, password_hash) VALUES ('$user', '$pass_hash')";

  // Ejecutar la consulta
  if (mysqli_query($conn, $sql)) {
    
  echo '<script>alert("Registro exitoso");
  window.location = "../index.html";</script>';

  } else {
    echo "Error al registrar: " . mysqli_error($conn);
  }
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>