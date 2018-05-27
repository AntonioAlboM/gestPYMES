<?php 

class Comunicado extends EntidadBase{

    private $database;
    private $id; //idComunicado
    private $titulo; //titulo comunicado
    private $cuerpo; //texto mensaje
    private $idEmpresa; // identifica la empresa
    private $fecha; //fecha receptor


    public function __construct(){
        $table = "comunicados";
        parent::__construct($table);
        setlocale(LC_TIME,'es_ES');
    }


    public function getId()
    {
        return $this->id;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }

    public function setCuerpo($cuerpo){
        $this->cuerpo = $cuerpo;
        return $this;
    }

    public function getCuerpo()
    {
        return $this->cuerpo;
    }

    public function getIdEmprea()
    {
        return $this->idEmpresa;
    }

    public function setIdEmpresa($idEmpresa)
    {
        $this->idEmpresa = $idEmpresa;
        return $this;
    }


    public function setFecha($fecha){
        $this->fecha =$fecha ;

    }

    public function getFecha(){
        return $this->fecha;
    }


    public function guardarComunicado(){
        $query = "INSERT INTO comunicados (titulo, cuerpo, fecha, idEmpresa) VALUES ('".$this->titulo."',"
            ."'".$this->cuerpo."',"
            ."'".$this->fecha."',"
            ."'".$this->idEmpresa."'"
            .")";

        $guardar = $this->db()->prepare($query); //metodo db eheredado de EntidadBase,le pasamos la query
        $guardarComunicado = $guardar->execute();

        return $guardarComunicado;

    }
    public function devolverComunicados($id){
        //                
        //                $query = $this->db()->prepare("SELECT * from comunicados");
        //                $comunicados = $query->execute();
        //                $comunicados = $query->fetch(PDO::FETCH_OBJ);

        //                return $comunicados;


        $query = $this->db()->prepare("SELECT * FROM comunicados");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;

    }


}
?>