	<?php 

	class Empleado extends EntidadBase{

		private $database;
		private $idEmpleado; 
		private $nombre;
		private $apellidos;
		private $dni;
		private $pass;
		private $fechaNacimiento;
		private $localidad;
		private $provincia;
		private $calle;
		private $numero;
		private $piso;
		private $letra;
		private $cp;
		private $idEmpresa;
		private $numSanciones;
		private $fechaAlta;



		public function __construct(){
			$table = "empleados";
			parent::__construct($table);
		}

		public function getIdEmpleado()
		{
		    return $this->idEmpleado;
		}
		
		public function setIdEmpleado($idEmpleado)
		{
		    $this->idEmpleado = $idEmpleado;
		    return $this;
		}

		public function getNombre()
		{
		    return $this->nombre;
		}
		
		public function setNombre($nombre)
		{
		    $this->nombre = $nombre;
		    return $this;
		}

		public function getApellidos()
		{
		    return $this->apellidos;
		}
		
		public function setApellidos($apellidos)
		{
		    $this->apellidos = $apellidos;
		    return $this;
		}

		public function getDni()
		{
		    return $this->dni;
		}
		
		public function setDni($dni)
		{
		    $this->dni = $dni;
		    return $this;
		}

		public function getPass()
		{
		    return $this->pass;
		}
		
		public function setPass($pass)
		{
		    $this->pass = $pass;
		    return $this;
		}
		public function getFechaNacimiento()
		{
		    return $this->fechaNacimiento;
		}
		
		public function setFechaNacimiento($fechaNacimiento)
		{
		    $this->fechaNacimiento = $fechaNacimiento;
		    return $this;
		}

		public function getLocalidad()
		{
		    return $this->localidad;
		}
		
		public function setLocalidad($localidad)
		{
		    $this->localidad = $localidad;
		    return $this;
		}

		public function getProvincia()
		{
		    return $this->provincia;
		}
		
		public function setProvincia($provincia)
		{
		    $this->provincia = $provincia;
		    return $this;
		}

		public function getCalle()
		{
		    return $this->calle;
		}
		
		public function setCalle($calle)
		{
		    $this->calle = $calle;
		    return $this;
		}

		public function getNumero()
		{
		    return $this->numero;
		}
		
		public function setNumero($numero)
		{
		    $this->numero = $numero;
		    return $this;
		}

		public function getPiso()
		{
		    return $this->piso;
		}
		
		public function setPiso($piso)
		{
		    $this->piso = $piso;
		    return $this;
		}

		public function getLetra()
		{
		    return $this->letra;
		}
		
		public function setLetra($letra)
		{
		    $this->letra = $letra;
		    return $this;
		}

		public function getCp()
		{
		    return $this->cp;
		}
		
		public function setCp($cp)
		{
		    $this->cp = $cp;
		    return $this;
		}

		public function getIdEmpresa()
		{
		    return $this->idEmpresa;
		}
		
		public function setIdEmpresa($idEmpresa)
		{
		    $this->idEmpresa = $idEmpresa;
		    return $this;
		}

		public function getNumSanciones()
		{
		    return $this->numSanciones;
		}
		
		public function setNumSanciones($numSanciones)
		{
		    $this->numSanciones = $numSanciones;
		    return $this;
		}

		public function getFechaAlta()
		{
		    return $this->fechaAlta;
		}
		
		public function setFechaAlta($fechaAlta)
		{
		    $this->fechaAlta = $fechaAlta;
		    return $this;
		}


		public function registrarEmpleado(){

			$query = "INSERT INTO empleados (idEmpleado,nombre,apellidos,dni,pass,fechaNacimiento,localidad,provincia,calle,numero,piso,letra,cp,idEmpresa,numSanciones,fechaAlta)". " VALUES('".$this->idEmpleado."',"
							."'".$this->nombre."',"
							."'".$this->apellidos."',"
							."'".$this->dni."',"
							."'".$this->pass."',"
							."'".$this->fechaNacimiento."',"
							."'".$this->localidad."',"
							."'".$this->provincia."',"
							."'".$this->calle."',"
							."'".$this->numero."',"
							."'".$this->piso."',"
							."'".$this->letra."',"
							."'".$this->cp."',"
							."'".$this->idEmpresa."',"
							."'".$this->numSanciones."',"
							."'".$this->fechaAlta."'"
							.")";

					$guardar = $this->db()->prepare($query); //metodo db eheredado de EntidadBase,le pasamos la query
					$guardarEmpleado = $guardar->execute();
					return $guardarEmpleado;

		}

		public function sancionarEmpleado($nombre){
			//UPDATE `empleados` SET `numSanciones` =
			$consulta = $this->db()->prepare("SELECT nombre,numSanciones FROM usuarios WHERE nombre = '" . $nombre . "'");
    		$consulta->execute();

    			while ($fila = $consulta->fetch()) {
					$usuario[] = $fila[0];
					$usuario[] = $fila[1];
				}

				if($usuario[1] == 0){
					$usuario[1]+1;
				}

			$sancion = $this->db()->prepare("UPDATE empleados SET numSanciones='$usuario[1]' WHERE nombre='$usuario[0]'");
    		$sancion->execute();
    		return $sancion;

		}
		

		public function loguearUsuario($idUsuario)
    	{
    		$consulta = $this->db()->prepare("SELECT idUsuario,pass,nick FROM usuarios WHERE idUsuario = '" . $idUsuario . "'");
    		$consulta->execute();


    		while ($fila = $consulta->fetch()) {
				$usuario[] = $fila[0];
				$usuario[] = $fila[1];
				$usuario[] = $fila[2];
			}

			return $usuario;

    	}

    	public function getNicks()
     	{
     		$consulta = $this->db()->prepare("SELECT nick FROM usuarios");
     		$consulta->execute();


     		while ($fila = $consulta->fetch()) {
			 	$nicks[] = $fila[2];
			 }

			 return $nicks;

     	}

		

  	// 	public function actualizarNick($idUsuario,$nick){
			// $query = "UPDATE usuarios SET  nick = '$nick' WHERE idUsuario = '".$idUsuario."'";
		 // 	$resultado = $this->db()->prepare($query);
		 // 	$actualizacionNick = $resultado->execute();
		 // 	return $actualizacionNick;
		 // }

		
}


	 ?>