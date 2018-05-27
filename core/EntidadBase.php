<?php 

// clase de la cual heredara los modelos que representen entidades de la bbdd
// cada tabla es una entidad(usuarios,mensajes...) 

// de esta clase heredarán los modelos que representen entidades, en el constructor le pasaremos el nombre de la tabla y tendremos tantos métodos como queramos para ayudarnos con las peticiones a la BD a través de los objetos que iremos creando. Lo bueno que tiene es que estos métodos pueden ser reutilizados en otras clases ya que le indicamos la tabla en el constructor.


// las entidades que creemos,que seran modelos de tipo entidad
class EntidadBase{

    private $table, $db, $conectar;

    public function __construct($table){
        $this->table = (string) $table;

        require_once 'Conectar.php';
        $this->conectar = new Conectar();
        $this->db = $this->conectar->conexion();

        // $this->conectar = null;
        //       $this->db = $adapter;
    }


    public function getConectar(){
        // saca la conexion de la bbd de otros sitios que le llamemos
        return $this->conectar;

    }

    public function db(){
        // se podrá usar en las entidades que creemos
        return $this->db;

    }
    public function getEmpleados(){
        // consulta la tabla que le pasamos ordenado por el id
        $query = $this->db->prepare("SELECT * FROM $this->table");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;

    }

    public function getEmpleadosEmpresa($idEmpresa){
        // consulta la tabla que le pasamos ordenado por el id
        $query = $this->db->prepare("SELECT * FROM $this->table WHERE idEmpresa = $idEmpresa");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;

    }

    //Modificar la localidad del empleado
    public function actualizarLocalidadEmpleado($idEmpleado,$localidad){
        // consulta la tabla que le pasamos ordenado por el id
        $query = $this->db->prepare("UPDATE $this->table SET localidad = '$localidad' WHERE idEmpleado = $idEmpleado");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;

    }

    //Actualizar la provincia del empleado
    public function actualizarProvinciaEmpleado($idEmpleado,$provincia){
        // consulta la tabla que le pasamos ordenado por el id
        $query = $this->db->prepare("UPDATE $this->table SET provincia = '$provincia' WHERE idEmpleado = $idEmpleado");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;

    }

    //Actualizar la calle del empleado
    public function actualizarCalleEmpleado($idEmpleado,$calle){
        // consulta la tabla que le pasamos ordenado por el id
        $query = $this->db->prepare("UPDATE $this->table SET calle = '$calle' WHERE idEmpleado = $idEmpleado");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;

    }

    //Actualizar el numero del empleado
    public function actualizarNumeroEmpleado($idEmpleado,$numero){
        // consulta la tabla que le pasamos ordenado por el id
        $query = $this->db->prepare("UPDATE $this->table SET numero = '$numero' WHERE idEmpleado = $idEmpleado");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;

    }

    //Actualizar el piso del empleado
    public function actualizarPisoEmpleado($idEmpleado,$piso){
        // consulta la tabla que le pasamos ordenado por el id
        $query = $this->db->prepare("UPDATE $this->table SET piso = '$piso' WHERE idEmpleado = $idEmpleado");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;

    }

    //Actualizar la letra del piso del empleado
    public function actualizarLetraEmpleado($idEmpleado,$letra){
        // consulta la tabla que le pasamos ordenado por el id
        $query = $this->db->prepare("UPDATE $this->table SET letra = '$letra' WHERE idEmpleado = $idEmpleado");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;

    }

    //Actualizar sanciones del empleado
    //no hace falta 
    public function getSumarSancionEmpleado($idEmpleado){
        // consulta la tabla que le pasamos ordenado por el id
        $query = $this->db->prepare("UPDATE $this->table SET numSanciones = numSanciones + 1 WHERE idEmpleado = $idEmpleado");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;

    }
//Métodos creados por Antonio.
    

    public function borrarEmpleado($idEmpleado){
        $numero= $this->db->exec("DELETE from $this->table where id = $idEmpleado");
        
        if($numero == 1){
            return true;
        }else {
            return false;
        }

    }
    
    public function getDatosEmpleado($idEmpleado){
        $query = $this->db->prepare("SELECT * FROM $this->table where id = $idEmpleado");
        $query->execute();
        $resultado = $query->fetch(PDO::FETCH_OBJ);
        return $resultado;
        
    
    }

//======================================================================

//===================David==Gomez=====Mensajeria========================
public function mostrarMensajes(){
                // consulta la tabla que le pasamos ordenado por el id
        $query = $this->db->prepare("SELECT * FROM  $this->table ");
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

//======================================================================



}



?>