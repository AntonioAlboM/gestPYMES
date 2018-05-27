<?php 
include '../css/inc/navbar.php';
    include'../css/inc/prueba.php';
?>
	<fieldset>
		<legend><h4>Registro de empleado</h4></legend>
		<form action="<?php echo $helper->url('Empresa','registrarEmpleado'); ?>" method="POST">
			<label>Nombre</label> <input type="text" name="nombreEmpleado" required><br>
				<label>Apellidos</label> <input type="text" name="apellidoEmpleado" required> <br>
				<label>DNI</label> <input type="text" name="dniEmpleado" required><br>
				<label>Contraseña</label> <input type="text" name="passEmpleado" required><br>
				<label>Fecha de Nacimiento</label> <input type="date" name="fechaNacimientoEmpleado" required><br>
				<label>Localidad</label> <input type="text" name="localidadEmpleado" required><br>
				<label>Provincia</label> <input type="text" name="provinciaEmpleado" required><br>
				<label>Calle</label> <input type="text" name="calleEmpleado" required>
				<label>Número</label> <input type="number" name="numeroEmpleado" maxlength="5" required>
				<label>Piso</label> <input type="text" name="pisoEmpleado" maxlength="3" required>
				<label>letra</label> <input type="text" name="letraEmpleado" maxlength="3"  required><br>
				<label>Código postal</label> <input type="text" name="cpEmpleado" maxlength="5" required><br>
				<input type="submit" name="registrarEmpleado" value="Registrar Empleado">
			</form>
			<form action="<?php echo $helper->url('Empresa','volverLogueo'); ?>" method="POST">
				<input type="submit" name="volverLogueo" value="Volver">
			</form>

	</fieldset>
		<?php include 'css/inc/footer.php'; ?>
