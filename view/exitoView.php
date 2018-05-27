<?php 
session_start();
if (isset($_SESSION['gerente'])){
    include 'css/inc/navbarGerente.php';
    include'css/inc/prueba.php';
}
?>
<section class="modificarEmpleado">
    <div class="container">
        <div class="col  ">
            <div class="mb-4">
        <div class="row  justify-content-center">
            
                <div><h4>Su acción se realizó con éxito</h4></div>
            
        
            </div>
        
            <div class="row   justify-content-center"><img  src="/gestpymes/css/img/exito.jpg" alt=""></div>
</div>
       
    </div> 
</div>















</section>




</div>





<?php include 'css/inc/footer.php';?>


