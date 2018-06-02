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
            <h4 class="h4 tituloComunicado justify-content-md-center"><i class="fas fa-envelope"></i>&nbsp;Enviar comunicado</h4>
        </div>

        <div class="form-row  summernote justify-content-center">
            <div class="col-10 offset-1">
                <form action="<?php echo $helper->url('Empresa','guardarComunicado'); ?>" method="POST">

                    <div class="form-row ">
                        <div class="input-group mb-4 ">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-heading"></i></div>
                            </div>
                            <input class="form-control all-elements-tooltip" type="text"  required name="titulo" placeholder="Título" title="titulo">
                        
                    </div>
                    <div class="container summernote ">
                        <div class="row">
                            <div class="col-md-12">


                                <textarea id='summernote'  name="cuerpo"></textarea><br>
                            </div>
                        </div>
                    </div>           


                    <div class="form-row ">  
                        <div class="col offset-md-10 ">
                            <input type="submit" name="comunicado" class="comunicado btn btn-primary" value="Enviar comunicado">
                        </div>
                    </div>
                        </div>
                </form> 
            </div> 

        </div>

    </div>


</div>

</div>





<?php include 'css/inc/footer.php';?>


