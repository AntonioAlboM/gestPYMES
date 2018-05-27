<?php 
	include 'config/database.php';
	$consulta = "SELECT * FROM  mensajes WHERE idConversacion = 444 ORDER BY id";
	$ejecutar = $conexion->query($consulta);

	while ($fila = $ejecutar->fetch_array()) 
	{
?>

		<div id="datos-chat">
			<span style="color: #1c62c4"><?php echo $fila['emisor']; ?>:</span>
			<span style="color: #848484"><?php echo $fila['cuerpoMensaje']; ?></span>
			<!-- <span style="float: right;"><?php echo formatoFecha($fila['fecha']); ?></span>-->		</div>
				
<?php 

	}//cierre While

?>