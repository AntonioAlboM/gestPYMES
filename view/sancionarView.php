<?php 
session_start();
if (isset($_SESSION['gerente'])){
    include 'css/inc/navbarGerente.php';
    include'css/inc/prueba.php';
}
?>




<div class="container sancionarEmpleado">
    <div class="row justify-content-center">
        <div>
            <h4 class="h4 tituloRegistroEmpleado justify-content-md-center"><i class="fas fa-comments"></i>&nbsp; Elija un empleado para Sancionar </h4>
        </div>
        <div class="fom-row justify-content-center">
            <div class="col-10 offset-1">
                <form action="<?php echo $helper->url('Empresa','sancionarEmpleado'); ?>" method="POST">

                    <div class="form-row ">

                        <div class="input-group mb-4 ">

                            <table class="table cargarEmpleados table-striped table-bordered table-hover  ">
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Selección</th>
                                <?php 

                                foreach ($allEmpleados as $emp) {
                                    $nombre = $emp->nombre;
                                    $apellido= $emp->apellidos;
                                    $idEmpleado = $emp->id;
                                ?>
                                <tr>
                                    <td scope="row"><?php echo $nombre; ?></td>
                                    <td><?php echo $apellido ;?></td>
                                    <td ><input type="radio" name="destinatario" value="<?php echo $idEmpleado; ?>"></td>
                                </tr> 
                                <?php  
                                }
                                ?>
                            </table>
                            <br>
                            <div class="container summernote ">
                                <div class="row">
                                    <div class="col-md-12">


                                        <textarea id='summernote'  name="sancion"></textarea><br>
                                    </div>
                                </div>
                            </div>           


                            <div class="form-row ">  
                                <div class="col offset-10 ">
                                    <input type="submit" name="sancionar" class="comunicado btn btn-primary" value="Sancionar">
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






