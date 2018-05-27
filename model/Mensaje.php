		<?php 
		
		class Mensaje extends EntidadBase{

				private $database;
				private $emisor; //idUsuario emisor
				private $idConversacion; //generada aleatoriamente
				private $cuerpoMensaje; //texto mensaje
				private $receptor; //idUsuario receptor

				public function __construct(){
					$table = "mensajes";
					parent::__construct($table);
				}

				
			public function getEmisor()
			{
			    return $this->emisor;
			}
			
			public function setEmisor($emisor)
			{
			    $this->emisor = $emisor;
			    return $this;
			}
				
			public function getIdConversacion()
			{
				return $this->idConversacion;
			}
				
			public function setIdConversacion($idConversacion)
			{			
				$this->idConversacion = $idConversacion;
				return $this;
			}	

			public function getCuerpoMensaje()
			{
			    return $this->cuerpoMensaje;
			}
			
			public function setCuerpoMensaje($cuerpoMensaje)
			{
			    $this->cuerpoMensaje = $cuerpoMensaje;
			    return $this;
			}

			public function getReceptor()
			{
			    return $this->receptor;
			}
			
			public function setReceptor($receptor)
			{
			    $this->receptor = $receptor;
			    return $this;
			}

			

			

			public function guardarMensajePrivado(){
				$query = "INSERT INTO mensajes (id,emisor,idConversacion,cuerpoMensaje,receptor) VALUES ('".$this->id."',"
									."'".$this->emisor."',"
									."'".$this->idConversacion."',"
									."'".$this->cuerpoMensaje."',"
									."'".$this->receptor."'"
									.")";

				$guardar = $this->db()->prepare($query); //metodo db eheredado de EntidadBase,le pasamos la query
				$guardarMensaje = $guardar->execute();
				
				return $guardarMensaje;

			}
		}
		 ?>