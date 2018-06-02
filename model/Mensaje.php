		<?php 
		
		class Mensaje extends EntidadBase{

				private $database;
				private $emisor; // nombre emisor
				private $idEmisor; //idUsuario con sesion iniciada
				private $cuerpoMensaje; //texto mensaje
				private $idReceptor; //idUsuario que lo recibe
				private $receptor; //nombre receptor


				public function __construct(){
					$table = "mensajes";
					parent::__construct($table);
				}

			public function getIdEmisor()
				{
				    return $this->idEmisor;
				}
				
				public function setIdEmisor($idEmisor)
				{
				    $this->idEmisor = $idEmisor;
				    return $this;
				}	

				public function getIdReceptor()
				{
				    return $this->idReceptor;
				}
				
				public function setIdReceptor($idReceptor)
				{
				    $this->idReceptor = $idReceptor;
				    return $this;
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
				$query = "INSERT INTO mensajes (id,emisor,idEmisor,cuerpoMensaje,idReceptor,receptor) VALUES ('".$this->id."',"
									."'".$this->emisor."',"
									."'".$this->idEmisor."',"
									."'".$this->cuerpoMensaje."',"
									."'".$this->idReceptor."',"
									."'".$this->receptor."'"
									.")";

				$guardar = $this->db()->prepare($query); //metodo db eheredado de EntidadBase,le pasamos la query
				$guardarMensaje = $guardar->execute();
				
				return $guardarMensaje;

			}
		}
		 ?>