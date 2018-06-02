<?php 
session_start();
if (isset($_SESSION['gerente'])){
    include 'css/inc/navbarGerente.php';
    include'css/inc/prueba.php';
}
?>





<div class="container enviarComunicado">
    <div class="row justify-content-center">
        <div>
            <h4 class="h4 tituloComunicado justify-content-md-center" ><i class="fas fa-comments"></i>&nbsp;Chat con <?php echo $_SESSION['nombreDestinatario'] ?></h4>
        </div>


        <!--            <div class="form-row justify-content-center">-->
        <div class="form-row   justify-content-center">
            <div class="col-10 offset-1">



                <form action="<?php echo $helper->url('Empresa','guardarMensajeChat'); ?>" method="POST">
                    <div class="form-row text-justify">
                        <div class="input-group mb-0">
<!--                            <div class="containe chat">-->
                                <dl >
                                <?php 
                                if(!isset($mensajesChat)){

                                    echo "<b>Aun no tienes mensajes con ". $_SESSION['nombreDestinatario'] ."</b>";
                                }else{
                                   
                                    foreach ($mensajesChat as $msj) {
                                ?>



                                
                                    <dt class="col-sm-3" style="color: #1c62c4"><?php echo $msj->emisor; ?>:</dt>
                                
                                
                                    <dd class="col-sm-12 text-justify" style="color: #848484"><?php echo $msj->cuerpoMensaje; ?></dd>
                            
                                <?php }}?>
                                </dl>
<!--                        </div>-->
                        <div class="container  ">
                            <div class="row">
                                <div class="col-md-12">


                                    <textarea name="mensaje" id='summernote' class="inline" placeholder="Ingresa tu mensaje"></textarea>

                                </div>
                            </div>      
                            <div class="form-row ">  
                                <div class="col offset-md-10 ">
                                    <input type="submit" name="enviar" class="botonChat btn btn-primary" value="Enviar Mensaje">
                                </div>
                            </div>
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











