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
            <div class="col mb-12 ">
                <h4 class="d-flex justify-content-center text-center h4 title tituloRegistroEmpleado "><i class="fas fa-trash-alt"></i>&nbsp;Escoja el empleado que desea despedir</h4>
            </div>
        </div>
        <!--            <div class="form-row justify-content-center">-->

        <form action="<?php echo $helper->url('Empresa','eliminarEmpleadoAction'); ?>" method="POST">

            <div class="form-row justify-content-center">
                <div class="col">
                    <div class="input-group mb-12 ">
                        <?php echo $paginar[1]; ?>
                        <table class="table cargarEmpleados table-striped table-bordered table-hover  ">
                            <th class="title">Nombre</th>
                            <th class="title">Apellidos</th>
                            <th class="title">Selección</th>

                            <tbody>

                                <?php   $resultados = $paginar[0];//for( $i = 0; $i < count($resultados); $i++ ): ?>
                                <?php foreach ($resultados as $datos){?>
                                <tr>
                                    <td><?php echo $datos->nombre;?></td>
                                    <td><?php echo $datos->apellidos; ?></td>

                                    <td ><input type="radio" name="destinatario" value="<?php echo $datos->id; ?>">

                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <ul class="pagination">
                            <?php echo $paginar[1]; ?>
                        </ul>
                        <br>









                        <div class="form-row ">  
                            <div class="col offset-md-11 ">
                                <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#eliminarModal">Despedir</button>
                            </div>
                        </div>
                    </div>
                </div>









                <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" text-center text-primary id="exampleModalLabel"><i class="fas fa-exclamation-triangle"></i>&nbsp;Eliminar Empleado</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <p>¿Estás seguro?</p>

                                <div class="modal-footer">
                                    <input type="submit" name="eliminar" class="siguiente btn btn-warning" value="Sí">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                </div>


                            </div>
                        </div> 
                    </div>


                </div>

            </div>
        </form>

    </div>

























</section>




</div>





<?php include 'css/inc/footer.php';?>



