<?php
if(isset($_POST["submit"])){

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "INSERT INTO tutorials_inf(name)VALUES ('".$_POST["name"]."')";

            if (mysqli_query($conn, $sql)) {
               echo "Registro ingresado correctamente";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
?>