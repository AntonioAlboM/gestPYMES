<?php 
session_start();

setlocale(LC_TIME,'es_ES');
class EmpresaController extends ControladorBase{

    public function __construct(){
        parent::__construct();
    }


    /* public function prueba(){
        $empleado = new Empleado(); 

        $allEmpleados = $empleado->getEmpleados(); //consigo todos los mensajes
        $this->view("sancionar", array(
            "allEmpleados" => $allEmpleados
        ));

    }
*/
    public function enviarComunicado(){
        // cargamos la vista del formulario de registro de empresa view/crearEmpresaView.php
        $this->view("enviarComunicado", array());
    }

    /* public function sancionarEmpleado(){

        $empleado = new Empleado();

        $empleadoSancionar = $_POST["empleadoAsancionar"];
        $motivo = $_POST["motivoSancion"];

        $empleado->setNombre($empleadoSancionar);

    }
*/

    //va al formulario para registrar la empresa 
    public function irAformCrearEmpresa(){
        // cargamos la vista del formulario de registro de empresa view/crearEmpresaView.php
        $this->view("crearEmpresa", array());
    }
    public function irAformRegistrarEmpleado(){
        // cargamos la vista del formulario de registro de empresa view/crearEmpresaView.php
        $this->view("crearEmpleado", array());

    }

    public function nosotros(){
        // cargamos la seccion "nosotros"
        $this->view("nosotros", array());
    }


    public function empresa(){
        // cargamos la seccion "nosotros"
        $this->view("empresa", array());
    }

    public function empleado(){
        // cargamos la seccion "nosotros"
        $this->view("empleado", array());
    }

    public function contacto(){
        // cargamos la seccion "nosotros"
        $this->view("contacto", array());
    }

    public function volverIndex(){
        $this->view("index", array());
    }

    public function volverLogueo(){
        $this->view("volverLogueo", array());
    }

    public function registrarEmpresa(){

        if($_POST['registrarEmpresa']){
            $empresa = new Empresa(); //creo instancia de Empresa

            // guardo lo que llega del formulario de registro de empresa

            $idEmpresaRepetido = true;
            $fechaCreacion = date("d.m.y");
            $tipoEmpresa = $_POST['tipoEmpresa'];
            $capitalSocial = $_POST['capitalSocial'];
            $sector = $_POST['sector']; 
            $gerente = $_POST['gerente'];
            $pass = $_POST['pass'];
            $logo = $_POST['logo'];
            $idEmpleado = $_POST['correoElectronico'];



            while ($idEmpresaRepetido == true) {
                $idEmpresa = mt_rand(1,100000);
                $empresa->setIdEmpresa($idEmpresa); 
                $idRegistroEmpresa = $empresa->getIdEmpresa();
                $idEmpresaBaseDatos = $empresa->comprobarIdEmpresa($idRegistroEmpresa);

                if($idRegistroEmpresa == $idEmpresaBaseDatos[0]){
                    $idEmpresaRepetido = true;
                }else{
                    $idEmpresaRepetido = false;
                }
            }

            $empresa->setIdCorreoElectronico($idEmpleado); //seteo el idUsuario
            $empresaQueSolicitaRegistrarse = $empresa->getIdCorreoElectronico(); //lo recojo
            $empresaEnBaseDeDatos = $empresa->loguearEmpresa($empresaQueSolicitaRegistrarse); //consulto a la base de datos el idUsuario introducido por el usuario


            if($empresaQueSolicitaRegistrarse == $empresaEnBaseDeDatos[3]){

                $this->view("repetido", array(
                ));
            }else{

                // llamo a los setter de la instancia y les paso las variables del formulario
                $empresa->setFechaCreacion($fechaCreacion);
                $empresa->setTipoEmpresa($tipoEmpresa);
                $empresa->setCapitalSocial($capitalSocial);
                $empresa->setSector($sector);
                $empresa->setGerente($gerente);
                $empresa->setPass($pass);
                $empresa->setLogo($logo);
                $empresa->setIdEmpresa($idRegistroEmpresa);
                $empresa->setIdCorreoElectronico($idEmpleado);
                $guardar = $empresa->guardarEmpresa();
                //                $guardarEmpGerente = $empresa->registrarEmpleadoGerente();

                // muestro la vista de REGISTRO OK
?>
<!--
<script type="text/javascript">
alert("Su empresa se ha registrado correctamente\nAhora puede iniciar sesion")
</script>
-->
<?php 
                $this->view("exito", array(
                ));
            }
        }

    }

    public function registrarEmpleado(){

        $empleado = new Empleado(); //creo instancia de Usuario

        // guardo lo que llega del formulario de registro
        $nombreEmpleado = $_POST['nombreEmpleado'];
        $apellidoEmpleado = $_POST['apellidoEmpleado'];
        $dniEmpleado = $_POST['dniEmpleado'];
        $passEmpleado = $_POST['passEmpleado'];
        $fechaNacimientoEmpleado = $_POST['fechaNacimientoEmpleado'];
        $localidadEmpleado = $_POST['localidadEmpleado'];
        $provinciaEmpleado = $_POST['provinciaEmpleado'];
        $calleEmpleado = $_POST['calleEmpleado'];
        $numeroEmpleado = $_POST['numeroEmpleado'];
        $pisoEmpleado = $_POST['pisoEmpleado'];
        $letraEmpleado = $_POST['letraEmpleado'];
        $cpEmpleado = $_POST['cpEmpleado'];
        $numeroEmpleado = $_POST['numeroEmpleado'];
        $numSanciones = 0;
        $fechaAlta = date("d.m.y"); 
        $idEmpleado = $_POST['correoElectronico'];

        /*   while ($idEmpleadoRepetido == true) {
            $idEmpleado = mt_rand(1,100000);
            $empleado->setIdEmpleado($idEmpleado); 
            $idRegistroEmpleado = $empleado->getIdEmpleado();
            $idEmpresaBaseDatos = $empleado->comprobarIdEmpleado($idRegistroEmpresa);

            if($idEmpresaBaseDatos == $idEmpleadoBaseDatos[0]){
                $idEmpleadoRepetido = true;
            }else{
                $idEmpleadoRepetido = false;
            }
        }*/
        // llamo a los setter de la instancia y les paso las variables del formulario
        $empleado->setIdCorreoElectronico($idEmpleado);
        $empleado->setNombre($nombreEmpleado);
        $empleado->setApellidos($apellidoEmpleado);
        $empleado->setDni($dniEmpleado);
        $empleado->setPass($passEmpleado);
        $empleado->setFechaNacimiento($fechaNacimientoEmpleado);
        $empleado->setLocalidad($localidadEmpleado);
        $empleado->setProvincia($provinciaEmpleado);
        $empleado->setCalle($calleEmpleado);
        $empleado->setNumero($numeroEmpleado);
        $empleado->setPiso($pisoEmpleado);
        $empleado->setLetra($letraEmpleado);
        $empleado->setCp($cpEmpleado);
        $empleado->setIdEmpresa($_SESSION['idEmpresa']);
        $empleado->setNumSanciones($numSanciones);
        $empleado->setFechaAlta($fechaAlta);


        $guardar = $empleado->registrarEmpleado();

        // redireccionamos al controlador usuarios y metodo registroOk


        $this->view("exito", array(
        ));
    }	

    public function index(){
        // cargamos la vista index y le pasamos valores
        $this->view("index", array());
    }



    public function irAformLogueo(){
        // cargamos la vista del formulario de registro de empresa view/crearEmpresaView.php
        $this->view("loguearCuenta", array());
    }

    // metodo modificado 02/06/2018 por Antonio.

    public function loguearCuenta(){
        $rol = $_POST['empresa']; //capturo el rol del radio

        if($rol == "Empresa"){
            $empresa = new Empresa();

            $usuario = $_POST['nombre-login']; //es el correo electronico
            $pass = $_POST['clave-login'];


            $empresa->setIdCorreoElectronico($usuario); //seteo el idUsuario
            $empresaQueSolicitaLoguearse = $empresa->getIdCorreoElectronico(); //lo recojo
            $empresaEnBaseDeDatos = $empresa->loguearEmpresa($empresaQueSolicitaLoguearse);

            if($empresaQueSolicitaLoguearse == $empresaEnBaseDeDatos[3] && $pass == $empresaEnBaseDeDatos[1]){


                $_SESSION['gerente'] = $empresaEnBaseDeDatos[0]; //guardo el usuario
                $_SESSION['passGerente'] = $empresaEnBaseDeDatos[1]; //guardo el pass
                $_SESSION['idEmpresa'] = $empresaEnBaseDeDatos[2]; //guardo idEmpresa
                $_SESSION['idEmpleado'] = $empresaEnBaseDeDatos[3]; //guardo idEmpleado
                $_SESSION['logo'] = $empresaEnBaseDeDatos[4];

                // redireccciono al controlador y el metodo logueo
                //$this->redirect("Empresa","logueo");

                // cargamos la vista registro y le pasamos valores
                $this->view("logueo", array());
            }else{

                //redireccciono al controlador y el metodo logueoNotFound
                $this->view("logueoNotFound", array());
            }
        }

        elseif($rol == "Empleado"){
            $empleado = new Empleado();

            $usuario = $_POST['nombre-login']; //es el correo electronico
            $pass = $_POST['clave-login'];


            $empleado->setIdCorreoElectronico($usuario); //seteo el idUsuario
            $empleadoQueSolicitaLoguearse = $empleado->getIdCorreoElectronico(); //lo recojo
            $empleadoEnBaseDeDatos = $empleado->loguearEmpleado($empleadoQueSolicitaLoguearse); //consulto a la base de datos el idUsuario introducido por el usuario

            if($empleadoQueSolicitaLoguearse == $empleadoEnBaseDeDatos[2] && $pass == $empleadoEnBaseDeDatos[1]){


                $_SESSION['nombreEmpleado'] = $empleadoEnBaseDeDatos[0]; //guardo el usuario
                $_SESSION['passEmpleado'] = $empleadoEnBaseDeDatos[1]; //guardo el pass
                $_SESSION['correoElectronico'] = $empleadoEnBaseDeDatos[2]; //guardo correo
                $_SESSION['apellidosEmpleado'] = $empleadoEnBaseDeDatos[3]; //guardo logo
                $_SESSION['idEmpresa'] = $empleadoEnBaseDeDatos[4]; //guardo idEmpresa
                $_SESSION['idEmpleado'] = $empleadoEnBaseDeDatos[5];
                $_SESSION['id']= $empleadoEnBaseDeDatos[5];// guardo el id del empleado
                $empresa = new Empresa();
                $logo = $empresa->obtenerLogo( $_SESSION['idEmpresa']); 
                $_SESSION['logo'] = $logo;


                // redireccciono al controlador y el metodo logueo
                //$this->redirect("Empresa","logueo");

                // cargamos la vista registro y le pasamos valores
                $this->view("logueoEmpleado", array());
            }else{

                //redireccciono al controlador y el metodo logueoNotFound
                $this->view("logueoNotFound", array());
            }
        }

    }


    //==========David Gómez========
    //     =====Mensajeria=====

    //elegir empleado al que escribir
    public function nuevoMensaje (){
        // cargamos la vista 
        $empleado = new Empleado(); 

        $allEmpleadosEmpresa = $empleado->getEmpleadosEmpresa($_SESSION['idEmpresa']); //consigo todos los mensajes
        $this->view("nuevoMensaje", array(
            "EmpleadosEmpresa" => $allEmpleadosEmpresa
        ));
    }

    //ventana del chat con el empleado
    public function irAchatPrivado(){
        // cargamos la vista del formulario de registro de empresa view/crearEmpresaView.php

        $empleado = new Empleado();
        //$_SESSION["destinatario"] = $_POST['destinatario'];
        $_SESSION["idDestinatario"] = $_POST['destinatario'];

        $Receptor = $empleado->getDatosEmpleado($_SESSION["idDestinatario"]);
        $nombreReceptor = $Receptor->nombre;
        $_SESSION['nombreDestinatario'] = $nombreReceptor;
        $emisor =  $_SESSION['idEmpleado'];
        $mensajes = new Mensaje();
        $mensajesChat = $mensajes->mostrarMensajes($_SESSION["idDestinatario"],$emisor);

        $this->view("chatPrivado", array(
            "mensajesChat" => $mensajesChat
        ));

    }

    public function guardarMensajeChat(){
        $mensaje = new Mensaje(); //creo instancia de Mensaje para chat

        // variables que quiero
        $cuerpoMensaje = $_POST['mensaje'];
        $receptor = $_SESSION['nombreDestinatario'];

        if(isset($_SESSION['gerente'])){
            $emisor =  $_SESSION['gerente'];
            $idEmisor = $_SESSION['idEmpresa'];    
            $_SESSION['idEmisor'] = $idEmisor;
        }
        elseif(isset($_SESSION['idEmpleado'])){
            $emisor =  $_SESSION['nombreEmpleado'];
            $idEmisor = $_SESSION['idEmpleado'];
            $_SESSION['idEmisor'] = $idEmisor;
        }
        // llamo a los setter de la instancia y les paso las variables 
        $mensaje->setEmisor($emisor);
        $mensaje->setIdEmisor($idEmisor);
        $mensaje->setCuerpoMensaje($cuerpoMensaje);
        $mensaje->setIdReceptor($_SESSION["idDestinatario"]);
        $mensaje->setReceptor($receptor);

        $guardar = $mensaje->guardarMensajePrivado();

        $this->redirect("Empresa","chatPrivado");
    }

    public function chatPrivado(){
        $mensajes = new Mensaje();
        $mensajesChat = $mensajes->mostrarMensajes($_SESSION["idDestinatario"],$_SESSION['idEmisor']);
        //var_dump($mensajesChat);
        $this->view("chatPrivado", array(
            "mensajesChat" => $mensajesChat
        ));
    }


    //======================CALENDARIO DAVID GOMEZ====================================

    public function vacaciones(){
        $this->view("calendarioVacaciones", array(
        
            // "eventos" => $eventos
        ));
    }

    //Métodos creados por Antonio. Copialos o Sustituyelos por otros mejores


    public function inicioGerente(){
        if (isset ($_SESSION['gerente'])){
            $this->view("logueo", array());
        }else{
            $this->view("index", array());
        }
    }
    public function modificarEmpleado(){
        $empleado = new Empleado(); 
        $empleados = $empleado->getEmpleadosEmpresa($_SESSION['idEmpresa']);
        $this->view("modificarEmpleado", array(
            "empleados" => $empleados
        ));
    }

    public function cargarDatosEmpleado(){
        $idEmpleado = $_POST['destinatario'];
        $empleado = new Empleado();
        $datosEmpleado = $empleado->getDatosEmpleado($idEmpleado);
        $this->view("preModificarEmpleado", array(
            "datosEmpleado" => $datosEmpleado
        ));

    }


    public function eliminarEmpleado(){
        $empleado = new Empleado(); 
        $empleados = $empleado->getEmpleadosEmpresa($_SESSION['idEmpresa']);
        $this->view("eliminarEmpleado", array(
            "empleados" => $empleados
        ));
    }


    public function eliminarEmpleadoAction(){
        $idEmpleado = $_POST['destinatario'];
        $empleado = new Empleado();
        $borrado = $empleado->borrarEmpleado($idEmpleado);

        if (borrado){
            $this->view("exito", array());
        }


    }


    public function modificarEmpleadoAction(){

        $empleado = new Empleado(); //creo instancia de Usuario

        // guardo lo que llega del formulario de modificación

        $nombreEmpleado = $_POST['nombreEmpleado'];
        $apellidoEmpleado = $_POST['apellidoEmpleado'];
        $dniEmpleado = $_POST['dniEmpleado'];
        $passEmpleado = $_POST['passEmpleado'];
        $localidadEmpleado = $_POST['localidadEmpleado'];
        $provinciaEmpleado = $_POST['provinciaEmpleado'];
        $calleEmpleado = $_POST['calleEmpleado'];
        $numeroEmpleado = $_POST['numeroEmpleado'];
        $pisoEmpleado = $_POST['pisoEmpleado'];
        $letraEmpleado = $_POST['letraEmpleado'];
        $cpEmpleado = $_POST['cpEmpleado'];
        $numeroEmpleado = $_POST['numeroEmpleado'];
        $idEmpleado = $_POST['id'];




        // llamo a los setter de la instancia y les paso las variables del formulario

        $empleado->setNombre($nombreEmpleado);
        $empleado->setApellidos($apellidoEmpleado);
        $empleado->setDni($dniEmpleado);
        $empleado->setPass($passEmpleado);
        $empleado->setId($idEmpleado);
        $empleado->setLocalidad($localidadEmpleado);
        $empleado->setProvincia($provinciaEmpleado);
        $empleado->setCalle($calleEmpleado);
        $empleado->setNumero($numeroEmpleado);
        $empleado->setPiso($pisoEmpleado);
        $empleado->setLetra($letraEmpleado);
        $empleado->setCp($cpEmpleado);
        $empleado->setIdEmpresa($_SESSION['idEmpresa']);




        $guardar = $empleado->modificarEmpleado();

        // redireccionamos al controlador usuarios y metodo registroOk

        $this->view("exito", array(
        ));
    }	


    // Antonio -> 26/05/2018




    public function guardarComunicado(){
        $comunicado = new Comunicado(); //creo instancia de Mensaje para chat

        // variables que quiero
        $titulo = $_POST['titulo'];
        $cuerpoComunicado = $_POST['cuerpo'];
        $idEmpresa = $_SESSION['idEmpresa'];


        // llamo a los setter de la instancia y les paso las variables 
        $comunicado->setTitulo($titulo);
        $comunicado->setCuerpo($cuerpoComunicado);
        $comunicado->setIdEmpresa($idEmpresa);

        $comunicado->setFecha (date('d/m/Y'));


        $guardar = $comunicado->guardarComunicado();
        if($guardar){
            $this->view("exito", array());
        }

    }

    public function comunicadosArchivados(){

        $idEmpresa = $_SESSION['idEmpresa'];

        $comunicado = new Comunicado();
        $comunicados = $comunicado->devolverComunicados($idEmpresa);
        if($comunicados){
            $this->view("comunicadosArchivados", array(
                "comunicados" => $comunicados
            ));
        }else{
            $this->view("sinComunicados",array());

        }



    }

    public function cargarEmpleadosSanciones(){
        $empleado = new Empleado(); 
        $allEmpleados = $empleado->getEmpleadosEmpresa($_SESSION['idEmpresa']);
        $this->view("sancionar", array(
            "allEmpleados" => $allEmpleados
        ));

    }

    public function sancionarEmpleado(){
        //        $empleado = new Empleado();


        $idEmpleado = $_POST["destinatario"];
        $sancion = $_POST['sancion'];
        $idEmpresa = $_SESSION['idEmpresa'];

        $sancionar = new Sancion();
        $sancionar->setIdEmpleado($idEmpleado);
        $sancionar->setSancion($sancion);
        $sancionar->setIdEmpresa($idEmpresa);
        $sancionar->setFecha(date('d/m/Y'));


        $guardar = $sancionar->guardarSancion();
        if($guardar){

            $this->view("exito", array());
        }
    }

    public function sancionesArchivadas(){
        $idEmpresa = $_SESSION['idEmpresa'];
        $sancionar = new Sancion();
        $sanciones = $sancionar->devolverSanciones($idEmpresa);
        if($sanciones){   

            $this->view("sancionesArchivadas", array(
                "sanciones" => $sanciones
            ));
        }else{
            $this->view("sinSanciones",array());

        }

    }

    public function sancionesArchivadasEmpleado(){
        $id = $_SESSION['id'];
        $sancionar = new Sancion();
        $sanciones = $sancionar->devolverSancionesEmpleado($id);
        if($sanciones){   

            $this->view("sancionesArchivadasEmpleado", array(
                "sanciones" => $sanciones
            ));
        }else{
            $this->view("sinSanciones",array());

        }
    }


    public function inicioEmpleado(){
        if (isset ($_SESSION['nombreEmpleado'])){
            $this->view("logueoEmpleado", array());
        }else{
            $this->view("index", array());
        }
    }

    public function salir(){
        session_destroy();
        $this->view("index",array());
    }

}


?>