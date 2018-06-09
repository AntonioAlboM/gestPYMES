<?php 

class Empleado extends EntidadBase{

    private $database;
    private $correoElectronico;  
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

    public function getIdCorreoElectronico()
    {
        return $this->correoElectronico;
    }

    public function setIdCorreoElectronico($correoElectronico)
    {
        $this->correoElectronico = $correoElectronico;
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

    public function getId()
    {
        return $this->$id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }


    public function registrarEmpleado(){

        $query = "INSERT INTO empleados (correoElectronico,nombre,apellidos,dni,pass,fechaNacimiento,localidad,provincia,calle,numero,piso,letra,cp,idEmpresa,numSanciones,fechaAlta)". " VALUES('".$this->correoElectronico."',"
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

    public function registrarGerenteEmpleado(){
        $query = "INSERT INTO empleados (correoElectronico,nombre,idEmpresa) VALUES('".$this->correoElectronico."',"
            ."'".$this->nombre."',"
            ."'".$this->idEmpresa."'"
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


    public function loguearEmpleado($correoElectronico)
    {
        $consulta = $this->db()->prepare("SELECT nombre, pass ,correoElectronico, apellidos, idEmpresa, id FROM empleados WHERE correoElectronico = '" . $correoElectronico . "'");
        $consulta->execute();


        while ($fila = $consulta->fetch()) {
            $cuenta[] = $fila[0]; //nombre
            $cuenta[] = $fila[1]; //pass
            $cuenta[] = $fila[2]; //correoElectronico
            $cuenta[] = $fila[3]; //apellidos
            $cuenta[] = $fila[4]; //idEmpresa
            $cuenta[] = $fila[5]; //id
        }

        return $cuenta;

    }

    public function comprobarGerente($correoElectronico){
        $consulta = $this->db()->prepare("SELECT correoElectronico FROM empleados WHERE correoElectronico = '" . $correoElectronico . "'");
        $consulta->execute();


        while ($fila = $consulta->fetch()) {
            $cuenta[] = $fila[0]; //correo

        }

        return $cuenta;

    }

    public function getIdGerente($correoElectronico){
        $consulta = $this->db()->prepare("SELECT id FROM empleados WHERE correoElectronico = '" . $correoElectronico . "'");
        $consulta->execute();


        while ($fila = $consulta->fetch()) {
            $cuenta[] = $fila[0]; //id

        }

        return $cuenta;
    }



    //  Métodos creados por Antonio

    public function modificarEmpleado(){


        $resultado = $this->db()->exec("UPDATE empleados SET 
        pass= '$this->pass', 
        localidad = '$this->localidad',
        provincia = '$this->provincia',
        calle = '$this->calle',
        numero = '$this->numero',
        piso = '$this->piso',
        letra = '$this->letra',
        cp = '$this->cp'
        WHERE id = '$this->id'");
        return $resultado;

    }


    public function comprobarIdEmpleado($idEmpleado)
    {
        $consulta = $this->db()->prepare("SELECT idEmpresa FROM empleados WHERE idEmpleado = '" . $idEmpleado . "'");
        $consulta->execute();


        while ($fila = $consulta->fetch()) {
            $num = $fila[0];
        }

        return $num;

    }


}


?>