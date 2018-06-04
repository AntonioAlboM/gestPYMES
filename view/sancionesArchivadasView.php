<?php 
session_start();
if (isset($_SESSION['gerente'])){
    include 'css/inc/navbarGerente.php';
    include'css/inc/prueba.php';
}
?>

<div  class="container  comunicadosArchivados ">
    <div class="row justify-content-center">
        <div class="col col-md-12 ">
            <div>
                <h4 class="h4 tituloComunicado text-center justify-content-md-center"><i class="fas fa-paste"></i>&nbsp;Sanciones</h4>
            </div>
        </div>
    </div>
    <div class="row  justify-content-center">
        <div class="col-10 offset-1">

            <div class="container ">
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                        $a= 0;
                        $contador = 0;
                        foreach ($sanciones as $sancion) {


                            if($sancion->idEmpleado != $a){
                                if($contador != 0){
                                    echo "</div> </div>  </div> </div>";}
                                $a = $sancion->idEmpleado ;
                                $contador++;
                        ?>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header title bg-dark text-white" id="headingOne">
                                    <h5 class="mb-0">
                                        <div class="" data-toggle="collapse" data-target="#<?php echo "$sancion->idEmpleado";?>" aria-expanded="true" aria-controls="collapse">
                                            <div class="row justify-content-between">

                                                <?php echo "$sancion->nombre"."&nbsp"."$sancion->apellidos";?>


                                            </div> 
                                        </div>
                                    </h5>
                                </div>

                                <div id="<?php echo "$sancion->idEmpleado";?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <?php } ?>

                                        <div class="fechaSancion title"> <?php echo $sancion->fecha;?></div>

                                        <div><?php echo $sancion->sancion;?></div>

                                        <?php if($sancion->idEmpleado != $a) continue?>


                                        <?php   }   ?>                                    

                                    </div>
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
             </div> 
            </div> 
     </div> 
 </div> 














            <?php include 'css/inc/footer.php';?>



