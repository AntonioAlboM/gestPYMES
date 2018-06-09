<?php 
session_start();
if (isset($_SESSION['gerente'])){
    include 'css/inc/navbarGerente.php';
    include'css/inc/prueba.php';
}else{
    include 'css/inc/navbar.php';

}
?>



<div class="container enviarComunicado">
    <div class="row justify-content-center">
        <div>
            <h4 class="h4 title tituloComunicado justify-content-md-center text-center" >Ese correo ya está registrado</h4>
        </div>


    </div>
    <div class="text-center">
        <i class="red notfound fas fa-times-circle fa-10x "></i>
    </div>
<!--            <div class="form-row justify-content-center">-->
     <div class="row justify-content-center">
<div class="text-center">
    <form action="<?php echo $helper->url('Empresa','irAformRegistrarEmpleado'); ?>" method="POST">
        <button type = "submit" class=" btn btn-info btn-sm btn-block" value = "Registrar empleado">Volver
        </button></form>

</div>


</div>

</div>








</div>





<?php include 'css/inc/footer.php';?>




