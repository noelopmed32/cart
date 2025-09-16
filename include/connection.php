

<?php
$host = "localhost";
$usuario = "root";
$contrasenia = "kondor25";
$base_de_datos = "cart";
$connect = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if (!$connect) {
    die("connect failed".mysqli_connect_error());
}
echo "conectado satisfactoriamente";

?>