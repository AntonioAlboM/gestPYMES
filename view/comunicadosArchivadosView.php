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

<div  class="container  comunicadosArchivados ">
    <div class="row justify-content-center">
        <div class="col col-md-12">
            <div>
                <h4 class="h4 title tituloComunicado  text-center"><i class="fas fa-paste"></i>&nbsp;Comunicados Anteriores</h4>
            </div>
        </div>
    </div>
    <div class="row  justify-content-center">
        <div class="col-10 offset-1">

            <div class="container ">
                <div class="row">
                    <div class="col-md-12">
                        <?php 

                        foreach ($comunicados as $comunicado) {
                            $titulo = $comunicado->titulo;
                            $cuerpo= $comunicado->cuerpo;
                            $id = $comunicado->id;
                            $fecha = $comunicado->fecha;

                        ?>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header bg-dark text-white" id="headingOne">
                                    <h5 class="mb-0">
                                        <div class=""data-toggle="collapse" data-target="#<?php echo $id;?>" aria-expanded="true" aria-controls="collapse">
                                            <div class="row justify-content-between">
                                            <div class=" title col-md-6">
                                                <?php  echo "$titulo";?>
                                            </div>
                                            <div class="col-md-3">
                                                <?php echo "$fecha";?>
                                            </div>
                                            </div> 
                                        </div>
                                    </h5>
                                </div>

                                <div id="<?php echo $id;?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <?php echo $cuerpo;?>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <?php } ?>
                    </div>
                </div>           



            </div> 

        </div>

    </div>


</div>


</div>





<?php include 'css/inc/footer.php';?>



