<?php
$usuario= $_REQUEST['usuario'];
$contraseña= $_REQUEST['contraseña'];
$message = "Alumno cargado";


$mysqli = new mysqli("168.138.132.101", "AR_A213_SQL_S60", "xCvVG54%", "AR_A213_SQL_S60");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info ;
echo "<br>";


$sql = "INSERT INTO usuarios (Usuario, Clave) VALUES ('$nombre', '$apellido')";

if ($mysqli->query($sql)) {
  echo "<script type='text/javascript'>alert('$message');</script>";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$conn->close();
?>
