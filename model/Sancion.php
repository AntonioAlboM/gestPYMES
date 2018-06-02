<?php 

class Sancion extends EntidadBase{

    private $database;
    private $idSancion; //idSancion
    private $idEmpresa; // identifica la empresa
    private $idEmpleado;
    private $sancion; //titulo comunicado
    private $fecha; //fecha receptor


    public function __construct(){
        $table = "sanciones";
        parent::__construct($table);
        setlocale(LC_TIME,'es_ES');
    }


    public function getIdSancion()
    {
        return $this->idSancion;
    }

    public function setSancion($sancion)
    {
        $this->sancion = $sancion;
        return $this;
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


    public function guardarSancion(){
        $query = "INSERT INTO sanciones (idEmpresa, idEmpleado, fecha, sancion) VALUES ('".$this->idEmpresa."',"
            ."'".$this->idEmpleado."',"
            ."'".$this->fecha."',"
            ."'".$this->sancion."'"
            .")";

        $guardar = $this->db()->prepare($query); //metodo db eheredado de EntidadBase,le pasamos la query
        $guardarSancion = $guardar->execute();


        $query = "UPDATE empleados set numSanciones = numSanciones +1 where id = '".$this->idEmpleado."'";


        $guardar = $this->db()->exec($query); //metodo db eheredado de EntidadBase,le pasamos la query
        return $guardarSancion;

    }


    public function devolverSanciones($idEmpresa){

        $consulta = ("SELECT T1.idEmpleado,T1.fecha, T1.idSancion, T1.sancion, T2.nombre, T2.apellidos, T2.numSanciones FROM sanciones T1, empleados T2 where 
        T1.idEmpleado = T2.id and T1.idEmpresa = $idEmpresa order  by T2.id desc");
        $query = $this->db()->prepare($consulta);
        $query->execute();
        $devolverSanciones = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $devolverSanciones;

    }



    public function devolverSancionesEmpleado($id){

        $consulta = ("Select * from sanciones where idEmpleado=$id order by idSancion desc");
        $query = $this->db()->prepare($consulta);
        $query->execute();
        $devolverSanciones = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $devolverSanciones;

    }

















    //    public function devolverComunicados($id){
    //        //                
    //        //                $query = $this->db()->prepare("SELECT * from comunicados");
    //        //                $comunicados = $query->execute();
    //        //                $comunicados = $query->fetch(PDO::FETCH_OBJ);
    //
    //        //                return $comunicados;
    //
    //
    //        $query = $this->db()->prepare("SELECT * FROM comunicados");
    //        $query->execute();
    //        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
    //        return $resultado;
    //
    //    }


}
?>