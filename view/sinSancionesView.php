<?php 
session_start();
if (isset($_SESSION['gerente'])){
    include 'css/inc/navbarGerente.php';
    include'css/inc/prueba.php';
}else if(isset($_SESSION['nombreEmpleado'])){
include 'css/inc/navbarEmpleado.php';
    include'css/inc/sidebarEmpleado.php';

}
?>


<div  class="container  enviarComunicado ">
    <div class="row justify-content-center">
        <div>
            <h4 class="h4 text-center tituloComunicado title justify-content-md-center"><i class="fas fa-envelope"></i>&nbsp;No existe ninguna sanción  archivada</h4>
        </div>

        

    </div>


</div>

</div>





<?php include 'css/inc/footer.php';?>


