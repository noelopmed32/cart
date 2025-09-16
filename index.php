<?php
include "include/connection.php"
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Shopping Cart</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

	<?php include("include/header.php"); ?>
    
	<div class="container">
		<div class="col-md-12">
			<div class="row show_cart my-5">
				
			</div>
		</div>
	</div>
<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		
		include "chatproyectomaestro/config.php"; 
		
		$sql="SELECT * FROM `chat`";

		$query = mysqli_query($conn,$sql);
    }
	
?>

<meta http-equiv="refresh" content="20">



<<div class="container">
  <center><h2>Bienvenid@ <span style="color:#dd7ff3;"><?php echo $_SESSION['name']; ?> !</span></h2>
	<label>Acá puedes hablar tranquil@</label>
  </center></br>
   <div class="display-chat" id = "display-chat">
<?php
	if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_assoc($query))	
		{
?>
		<div class="message">
			<p>
				<span><?php echo $row['name']; ?> :</span>
				<?php echo $row['message']; ?>
			</p>
		</div>
<?php
		}
	}
	else
	{
?>
<div class="message">
			<p>
				No hay ninguna conversación previa.
			</p>
</div>
<?php
	} 
?>

  </div>


  
  <form class="form-horizontal" method="post" action="chatproyectomaestro/sendMessage.php">
    <div class="form-group">
      <div class="col-sm-10">          
        <textarea name="msg" class="form-control" placeholder="Ingresa tu mensaje acá..."></textarea>
      </div>
	         
      <div class="col-sm-2">
        <button type="submit" class="btn btn-primary" >Enviar</button>
      </div>

    </div>
  </form>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
	
	$(document).ready(function(){
      
    show_cart();

	function show_cart(){
		$.ajax({
           method: "POST",
           url:"show_cart.php",
           success:function(data){
             $(".show_cart").html(data);
           }
		});	
	}


    $(document).on("click",".add",function(){
         var id = $(this).attr("id");
         var name = $("#name"+id+"").val();
         var price = $("#price"+id+"").val();
         var quantity = $("#quantity"+id+"").val();

         $.ajax({
            method:"POST",
            url: "add_to_cart.php",
            data:{id:id,name:name,price:price,quantity:quantity},
            success:function(data){
            	alert("you have add new item");
            }
         });
    });
	
	});


      $(document).ready(function(){
        // Set trigger and container variables
        var trigger = $('.container .display-chat '),
            container = $('#content');
        
        // Fire on click
        trigger.on('click', function(){
          // Set $this for re-use. Set target from data attribute
          var $this = $(this),
            target = $this.data('target');       
          
          // Load target page into container
          container.load(target + '.php');
          
          // Stop normal link behavior
          return false;
        });
      });
    
</script>
</body>
</html>
