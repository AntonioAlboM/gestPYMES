<?php 
include '/../css/inc/navbar.php';
    include'/../css/inc/prueba.php';
?>




<div id="content">
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
			
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       
    </div>
 
</div>





<?php include 'css/inc/footer.php';?>