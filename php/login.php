<?php
session_start();
include 'conection.php';
// Obtención de los valores enviados desde el formulario de inicio de sesión
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta a la base de datos para verificar si el usuario existe y la contraseña es correcta
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();

  if (password_verify($password, $row['password_hash'])) {

    // Si la contraseña es correcta, se crea una sesión de usuario y se redirige a otro archivo
    $_SESSION['username'] = $username;
    header('Location: ../view/home.php');
    exit();
  } else {

    // Si la contraseña es incorrecta, se muestra un mensaje de error
  echo '<script>alert("Contraseña incorrecta");
  window.location = "../index.html";</script>';
  }
} else {
  
  // Si el usuario no existe, se muestra un mensaje de error
echo '<script>alert("El usuario no existe");
window.location = "../index.html";</script>';
}

$conn->close();
?>
