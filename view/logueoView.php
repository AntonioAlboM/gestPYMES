<?php 
include '/../css/inc/navbar.php';
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title><?php echo "Perfil de ".$_SESSION['gerente'] ; ?></title>
		<meta charset="utf-8">
	</head>
	<body>
        
			<h1>Bienvenido a su empresa <?php echo $_SESSION['gerente']; ?></h1><br>
				<h5>¿Qué desea hacer?</h5><br>
			<form action="<?php echo $helper->url('Empresa','irAformRegistrarEmpleado'); ?>" method="POST">
				<input type = "submit" name = "registrarEmpleado" value = "Registrar empleado"><br>
			</form>
			<form action="<?php echo $helper->url('Empresa','prueba'); ?>" method="POST">
				<input type = "submit" name = "sancionarEmpleado" value = "Sancionar empleado"><br>
			</form>
				<input type = "submit" name = "enviarComunicado" value = "Enviar comunicado"><br>
				<input type = "submit" name = "enviarMensaje" value = "Enviar mensaje"><br>
				<input type = "submit" name = "irAmodificarDatos" value = "Modificar datos"><br><br>
				<input type = "submit" name = "cerrarSesion" value = "Cerrar sesion">
			
			
			

			

		
    </body>



    <br><br><br><br><br><br>
    <?php include 'css/inc/footer.php';?>
    </html>
