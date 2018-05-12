	<!DOCTYPE html>
	<html>
	<head>
		<title>FORMULARIO REGISTRO</title>
		<meta charset="utf-8">
	</head>
	<body>

	<fieldset>
		<legend><h3>Registro de empresa</h3></legend>
		
			<form action="<?php echo $helper->url('Empresa','registrarEmpresa'); ?>" method="POST">
				<label>Tipo de empresa</label> <input type="text" name="tipoEmpresa" required><br>
				<label>Capital social</label> <input type="number" name="capitalSocial" required> €<br>
				<label>Sector</label> <input type="text" name="sector" required><br>
				<label>Gerente</label> <input type="text" name="gerente" required><br>
				<label>Pass</label> <input type="text" name="pass" required><br>
				<label>Logo</label> <input type="file" name="logo" required><br>
				<input type="submit" name="registrarEmpresa" value="registrar Empresa">
			</form>
			<form action="<?php echo $helper->url('Empresa','volverIndex'); ?>" method="POST">
				<input type="submit" name="volverIndex" value="Volver">
			</form>

	</fieldset>
		
	</body>
	</html>