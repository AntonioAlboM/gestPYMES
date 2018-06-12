<?php 

class Mensaje extends EntidadBase{

    private $database;
    private $emisor; // nombre emisor
    private $idEmisor; //idUsuario con sesion iniciada
    private $cuerpoMensaje; //texto mensaje
    private $idReceptor; //idUsuario que lo recibe
    private $receptor; //nombre receptor
    private $nuevo = 1;
    private $idEmpresa;
    
    public function __construct(){
        $table = "mensajes";
        parent::__construct($table);
    }
    public function getIdEmpresa(){
        return $this->idEmpresa;
    }
    public function setIdEmpresa($idEmpresa){
        $this->idEmpresa = ($idEmpresa);
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
        $query = "INSERT INTO mensajes (id,emisor,idEmisor,cuerpoMensaje,idReceptor,receptor,leido, idEmpresa) VALUES ('".$this->id."',"
            ."'".$this->emisor."',"
            ."'".$this->idEmisor."',"
            ."'".$this->cuerpoMensaje."',"
            ."'".$this->idReceptor."',"
            ."'".$this->receptor."',"
            ."'".$this->nuevo."',"
            ."'".$this->idEmpresa."'"
            .")";

        $guardar = $this->db()->prepare($query); //metodo db eheredado de EntidadBase,le pasamos la query
        $guardarMensaje = $guardar->execute();

        return $guardarMensaje;

    }

    public function comprobarMensajes($id){
       
        $query = $this->db()->prepare("select distinct idEmisor from mensajes where idReceptor = $id and leido >0 group by idEmisor");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }
    
    public function marcarLeidos($idReceptor, $idEmisor){
        $query = $this->db()->prepare("UPDATE mensajes SET leido = 0 WHERE idReceptor = $idReceptor and idEmisor=$idEmisor");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    
    }
    
}
?>