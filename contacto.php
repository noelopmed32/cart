<?php

//session_name("darling");
session_start();
include "include/connection.php";



?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>catologoproductos</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!-- Custom styles for this template -->
<link href="footers.css" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<style>
  body {
  
  background-image: url(paisaje.jpg);
  color:blue;
}
</style>
</head>

<body style="background-color:#dfdfdf;">

<?php include("include/header.php"); ?>
  

 
      <h1>Contacto</h1>
    <form >
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombre" name="" placeholder="Teclee su nombre">
        </div>
      </div>
      
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Correo Electronico</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Teclee su Correo Electronico">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Comentario</label>
        <div class="col-sm-10">          
          <textarea class="form-control" id="comentario" placeholder="Indique sus comentarios"></textarea>
        </div>
      </div>
      
      
      
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="button" onclick="guardarcontacto();" class="btn btn-primary">Enviar Comentario</button>
        </div>
      </div>
    </form>
  </div>

 <!-- /.footer -->
 <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2021 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="30" height="32"><use xlink:href="#bootstrap"/></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  
  <script >
    function guardarcontacto(){
     var nombre=$('#nombre').val();
     var email=$('#email').val();
     var comentario=$('#comentario').val();
     
     $.ajax({
        type : "post",
        url : "guardarcontacto.php",
        data : {
            nombre : nombre,
            
            email  : email,
            comentario: comentario
        },
        dataType:'text',
        success : function( data ){                  
          alert(data);
          $('#nombre').val('');
         
          $('#email').val('');
          $('#comentario').val('');
        }
      });
    }
     

  </script>

</body>

</html>
