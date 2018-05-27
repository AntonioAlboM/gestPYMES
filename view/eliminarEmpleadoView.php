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
                <h4 class="d-flex justify-content-center h4 tituloRegistroEmpleado "><i class="fas fa-trash-alt"></i>&nbsp;Escoja el empleado que desea despedir</h4>
            </div>
        </div>
        <!--            <div class="form-row justify-content-center">-->

        <form action="<?php echo $helper->url('Empresa','eliminarEmpleadoAction'); ?>" method="POST">

            <div class="form-row justify-content-center">
                <div class="col">
                    <div class="input-group mb-12 ">

                        <table class="table cargarEmpleados table-striped table-bordered table-hover  ">
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Selección</th>
                            <?php 

                            foreach ($empleados as $emp) {
                                $nombre = $emp->nombre;
                                $apellido= $emp->apellidos;
                                $idEmpleado = $emp->id;
                            ?>
                            <tr>
                                <td scope="row"><?php echo $nombre ;?></td>
                                <td><?php echo $apellido ;?></td>
                                <td ><input type="radio" name="destinatario" value="<?php echo $idEmpleado ;?>"></td>
                            </tr> 
                            <?php  
                            }
                            ?>
                        </table>
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



