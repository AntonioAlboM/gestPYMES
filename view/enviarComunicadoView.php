<?php 
include '/../css/inc/navbar.php';
include'/../css/inc/prueba.php';
?>


<section class="enviarComunicado col-md-10">
    
        <div class="col rounded">
            <div class="row justify-content-center">
                <h4 class="h4 tituloComunicado"><i class="fas fa-envelope"></i>&nbsp;Enviar comunicado</h4>
            </div>
            <div class="form-row justify-content-center">
                <form action="<?php echo $helper->url('Empresa','enviarComunicado'); ?>" method="POST">


                    <div class="form-row ">
                        <div class="col">
                            <textarea id="summernote" name="comunicado"></textarea><br>
                           
                        </div>
                    </div>

                    <div class="form-row ">  
                        <div class="col offset-md-9 ">
                            <input type="submit" name="comunicado" class="comunicado btn btn-primary" value="Enviar comunicado">
                        </div>
                    </div>
                </form> 
            </div> 
      

    </div>
</section>




</div>





<?php include 'css/inc/footer.php';?>


