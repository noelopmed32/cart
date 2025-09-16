<?php
//session_name("darling");
session_start();
include "include/connection.php";
$nombre =$_POST["nombre"];

$email  =$_POST["email"];
$comentario=$_POST["comentario"];

$fecha=date('Y-m-d H:i:s');
$consulta="insert into contacto (fecha,nombre,email,comentario) values ('$fecha','$nombre', '$email','$comentario')";
mysqli_query($connect,$consulta);

echo "Registro enviado, en breve nos pondremos en contacto con usted";


?>