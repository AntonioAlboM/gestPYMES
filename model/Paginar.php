<?php

class Paginar extends EntidadBase {

    private $idEmpresa;
    private $limite = 5;
    private $pagina;
    private $total;
    private $accion;
    // private $idEmpresa = $_SESSION['idEmpresa'];

    public function __construct() {    
        $table = "empleados";
        parent::__construct($table);
        //$this->db = $this->getConectar();
        // $this->total = $respuesta->num_rows;   
    }

    public function setIdEmpresa($id){
        $this->idEmpresa = $id;
    }
    public function setAccion($accion){
        $this->accion = $accion;

    }

    public function consultar($inicio){
        $consulta = $this->db()->prepare("SELECT * FROM empleados where idEmpresa = $this->idEmpresa order by apellidos  asc limit $inicio, $this->limite ");
        $consulta->execute();

        $resultado =$consulta->fetchAll(PDO::FETCH_OBJ);


        return $resultado;

    }

    public function setTotal(){
        $this->total = count($this->getEmpleadosEmpresa($this->idEmpresa));

    }

    public function getDatos($p) {     
        $this->pagina = $p;
        $inicio = ( $this->pagina - 1 ) * $this->limite ;

        if($inicio < 0){
            $inicio = 0;
            $this->pagina = 1;
        }




        $respuesta = $this->consultar($inicio);




        return $respuesta ;
    }

    public function crearLinks( $enlaces ) {


        $ultimo  = ceil( $this->total / $this->limite);
        $comienzo = (($this->pagina - $enlaces) > 0) ? $this->pagina-$enlaces : 1;
        $fin  = (($this->pagina + $enlaces ) < $ultimo) ? $this->pagina+$enlaces : $ultimo;
        $clase = ($this->pagina == 1) ? 'page-item disabled' : "";
        $html = '
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="'.$clase.'">
                            <a class="page-link" href="?controller=Empresa&action='.$this->accion.'&page='.($this->pagina-1).'" tabindex="-1">&laquo;</a>
                </li>';

        if($comienzo > 1) {
            $html  .= '<li page-item">
                    <a class="page-link" href="?controller=Empresa&action='.$this->accion.'&page=1">1</a></li>';
            $html  .= '<li class="page-item active"><span>...</span></li>';
        }

        for($i = $comienzo ; $i <= $fin; $i++) {
            $clase  = ( $this->pagina == $i) ? "page-item active" : "";
            $html  .= '<li class="'.$clase.'"><a class="page-link" href="?controller=Empresa&action='.$this->accion.'&page='.$i.'">'.$i.'</a></li>';
        }

        if($fin < $ultimo) {
            $html  .= '<li class="disabled"><span>...</span></li>';
            $html  .= '<li><a class="page-link" href="?controller=Empresa&action='.$this->accion.'&page='.$ultimo.'">'.$ultimo.'</a></li>';
        }

        $clase  = ( $this->pagina == $ultimo ) ? "page-item disabled" : "enabled";
        $html  .= '<li class="'.$clase.'"><a class="page-link"  href="?controller=Empresa&action='.$this->accion.'&page='.($this->pagina+1).'">&raquo;</a></li></ul>
                </nav>';
        return $html;
    }
}
//$this->view("paginar", array());

?>


