
 
	<?php
include "include/connection.php";
session_start();
if($_POST)
	{
		$email = $_POST['usuario'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM `login` where usuario = '".$email."' and password = '".$password."' ";
		$query =  mysqli_query($connect, $sql);
		if(mysqli_num_rows($query)>0)
		{
			$row = mysqli_fetch_assoc($query);
			session_start();
			$_SESSION['name'] = $row['name'];
			header('Location: index.php');
		}
		else
		{
			echo "<script> alert('Correo o contraseña incorrectas.'); </script>";
		}
	}
?>
 