<?php 
session_start();
if (isset($_SESSION['gerente'])){
    include 'css/inc/navbarGerente.php';
    include'css/inc/prueba.php';
}
?>




<section class="modificarEmpleado">
    <div class="container">
        <div class="row justify-content-center">

        </div>
        <!--            <div class="form-row justify-content-center">-->
        <div class="col mb-12 ">
            <h4  justify-content-center ><i class="fas fa-comments"></i>&nbsp;Chat con <?php echo $_SESSION['destinatario'] ?></h4>
            <div id="chat">
                <div class="col mb-6 offset-4">
                    <div class=" ">

                        <?php 
    if(!isset($mensajesChat)){
        //echo "los mensajes son " .var_dump($mensajesChat);
        echo "<b>Aun no tienes mensajes con ". $_SESSION['destinatario'] ."</b>";
    }else{
        foreach ($mensajesChat as $msj) {
                        ?>

                        <div><span style="color: #1c62c4"><?php echo $msj->emisor; ?>:</span>
                            <span style="color: #848484"><?php echo $msj->cuerpoMensaje; ?></span></div>

                        <?php  
        }
    }
                        ?>
                    </div>
                    <form action="<?php echo $helper->url('Empresa','guardarMensajeChat'); ?>" method="POST">
                        <fieldset>
                            <textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
                            <input type="submit" name="btnEnviarPrivado" value="Enviar">



                        </fieldset>
                    </form>
                </div></div>


        </div> 


    </div>













</section>




</div>





<?php include 'css/inc/footer.php';?>


