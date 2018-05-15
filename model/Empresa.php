<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
class Empresa extends EntidadBase{

    private $database;
    //private $idEmpresa;
    private $fechaCreacion;
    private $tipoEmpresa;
    private $capitalSocial;
    private $sector;
    private $gerente;
    private $pass;
    private $logo;
    //private $id; //A.I

    public function __construct(){
        $table = "empresas";
        parent::__construct($table);
    }

    /*public function getIdEmpresa()
	{
	    return $this->$idEmpresa;
	}

	public function setIdEmpresa($idEmpresa)
	{
	    $this->$idEmpresa = $idEmpresa;
	    return $this;
	}*/

    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
        return $this;
    }

    public function getTipoEmpresa()
    {
        return $this->tipoEmpresa;
    }

    public function setTipoEmpresa($tipoEmpresa)
    {
        $this->tipoEmpresa = $tipoEmpresa;
        return $this;
    }

    public function getCapitalSocial()
    {
        return $this->capitalSocial;
    }

    public function setCapitalSocial($capitalSocial)
    {
        $this->capitalSocial = $capitalSocial;
        return $this;
    }

    public function getSector()
    {
        return $this->sector;
    }

    public function setSector($sector)
    {
        $this->sector = $sector;
        return $this;
    }

    public function getGerente()
    {
        return $this->gerente;
    }

    public function setGerente($gerente)
    {
        $this->gerente = $gerente;
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

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;
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
    public function guardarEmpresa(){

        if ((!empty($_FILES['logo']['tmp_name']))) {
            if (is_uploaded_file($_FILES['logo']['tmp_name'])) {
                if(!is_dir("../gestpymes/logo/")) {
                    mkdir("../gestpymes/logo/");
                }
                $directorio = "../gestpymes/logo/";
                $this->logo = $directorio.$_FILES['logo']['name'];
                if (!is_file($destino)) {
                    move_uploaded_file($_FILES['logo']['tmp_name'],$destino);}}}






        $query = "INSERT INTO empresas (fechaCreacion,tipoEmpresa,capitalSocial,sector,gerente,pass,logo,idEmpresa)". " VALUES('".$this->fechaCreacion."',"
            ."'".$this->tipoEmpresa."',"
            ."'".$this->capitalSocial."',"
            ."'".$this->sector."',"
            ."'".$this->gerente."',"
            ."'".$this->pass."',"
            ."'".$this->logo."',"
            ."'".$this->idEmpresa."'"
            .")";

        $guardar = $this->db()->prepare($query); //metodo db eheredado de EntidadBase,le pasamos la query
        $guardarEmp = $guardar->execute();
        return $guardarEmp;

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
            ."'".$this->localidad."',"
            ."'".$this->cp."',"
            ."'".$this->idEmpresa."',"
            ."'".$this->numSanciones."',"
            ."'".$this->fechaAlta."'"
            .")";

        $guardar = $this->db()->prepare($query); //metodo db eheredado de EntidadBase,le pasamos la query
        $guardarEmpleado = $guardar->execute();
        return $guardarEmpleado;

    }

    public function loguearEmpresa($gerente)
    {
        $consulta = $this->db()->prepare("SELECT gerente,pass,idEmpresa,logo FROM empresas WHERE gerente = '" . $gerente . "'");
        $consulta->execute();


        while ($fila = $consulta->fetch()) {
            $cuenta[] = $fila[0];
            $cuenta[] = $fila[1];
            $cuenta[] = $fila[2];
            $cuenta[] = $fila[3];
        }

        return $cuenta;

    }

    public function comprobarIdEmpresa($idEmpresa)
    {
        $consulta = $this->db()->prepare("SELECT idEmpresa FROM empresas WHERE idEmpresa = '" . $idEmpresa . "'");
        $consulta->execute();


        while ($fila = $consulta->fetch()) {
            $num = $fila[0];
        }

        return $num;

    }

}

?>