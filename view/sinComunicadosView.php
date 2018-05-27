<?php 
session_start();
if (isset($_SESSION['gerente'])){
    include 'css/inc/navbarGerente.php';
    include'css/inc/prueba.php';
}
?>


<div  class="container  enviarComunicado ">
    <div class="row justify-content-center">
        <div>
            <h4 class="h4 tituloComunicado justify-content-md-center"><i class="fas fa-envelope"></i>&nbsp;No existe ningún comunicado archivado </h4>
        </div>

        

    </div>


</div>

</div>





<?php include 'css/inc/footer.php';?>


