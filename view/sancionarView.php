<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="<?php echo $helper->url('Empresa','sancionarEmpleado'); ?>" method="POST">
		<fieldset>
			<legend><h4>Sanción a empleado</h4></legend>
			<label>Elija el empleado a sancionar</label>
				<select name="empleadoAsancionar">
				<?php 

					foreach ($allEmpleados as $emp) {
				?>
						<option> <?php echo $emp->nombre; ?></option>	 
				<?php  
					}
				?>
				</select><br>
			<label>Indique el motivo de la sanción por favor</label><br>
			<textarea name="motivoSancion"></textarea><br>
			<input type="submit" name="btnSancionar" value="Poner Sancion">
		</fieldset>
        
        <?php echo $_SESSION['idEmpresa']; ?>
	</form>
</body>
</html>