<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pedido</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!-- Custom styles for this template -->
<link href="footers.css" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<style>
  body {
  
  background-image: url(paisaje.jpg);
  color:blue;
}
  </style>
</head>
<body>
<!-- Navigation -->
<?php include("include/header.php"); ?>

<div class="container">
<div class="row">
<div class="col-md-7">

<!– Codigo Bootstrap Va AQUI –>
<h1>Registro del pedido</h1>
<form method="post" action="guardarpedido.php">
  <div class="form-group">       
<form class="row g-3 needs-validation"  novalidate>
<div class="col-md-4">
 <label for="validationCustom01" class="form-label">Recibe</label>
 <input type="text" class="form-control" id="recibe" required>
 
</div>

<div class="col-md-4">
 <label for="validationCustom01" class="form-label">Calle</label>
 <input type="text" class="form-control" id="calle" required>
 
</div>

<div class="col-md-4">
 <label for="validationCustom01" class="form-label">Colonia</label>
 <input type="text" class="form-control" id="colonia" required>
 
</div>

<div class="col-md-4">
 <label for="validationCustom01" class="form-label">Estado</label>
 <input type="text" class="form-control" id="estado" required>
 
</div>

<div class="col-md-4">
 <label for="validationCustom01" class="form-label">Municipio</label>
 <input type="text" class="form-control" id="municipio" required>
 
</div>

<div class="col-md-4">
 <label for="validationCustom01" class="form-label">Cp</label>
 <input type="text" class="form-control" id="cp" required>
 
</div>

<div class="col-md-4">
 <label for="validationCustom01" class="form-label">Telefono</label>
 <input type="text" class="form-control" id="telefono" required>
 
</div>

<hr>
<div class="col-12">
 <button class="btn btn-primary" type="button" >Generar Pedido</button>

 <a href="">link</a>
</div>
</form>
  </div>
  <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2021 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
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
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</div>
<script >

    function generarpedido(){
      var recibe=$('#recibe').val();
      var calle=$('#calle').val();
      var colonia=$('#colonia').val();
      var estado=$('#estado').val();
      var municipio=$('#municipio').val();
      var cp=$('#cp').val();
      var telefono=$('#telefono').val();

      $.ajax({
        type : "post",
        url : "guardarpedido.php",
        data : {
           recibe:recibe,
           calle:calle,
           colonia:colonia,
           estado:estado,
           municipio:municipio,
           cp:cp,
           telefono:telefono
        },
        dataType:'text',
        success : function( data ){                  
         alert(data);

          var url = "index.php";    
            $(location).attr('href',url);
          
        }
      });

    }
    

    function limpiarcarrito(){
       $.ajax({
        type : "post",
        url : "borrarproducto.php",
        data : {
           idproducto:0,
           opcion:2
        },
        dataType:'text',
        success : function( data ){                  
          location.reload();
          
        }
      });
    }

    

  </script>

</body>
</html>
