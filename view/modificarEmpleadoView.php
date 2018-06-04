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
                <h4 class="d-flex justify-content-center text-center h4 tituloRegistroEmpleado title"><i class="fas fa-user-edit"></i>&nbsp;Escoja el empleado que desea modificar</h4>
                    </div>
        </div>
<!--            <div class="form-row justify-content-center">-->

                <form action="<?php echo $helper->url('Empresa','cargarDatosEmpleado'); ?>" method="POST">

                    <div class="form-row justify-content-center">
                        <div class="col">
                            <div class="input-group mb-12 ">
                            
                            <table class="table cargarEmpleados table-striped table-bordered table-hover  ">
                                <th class="title">Nombre</th>
                                <th class="title">Apellidos</th>
                                <th class="title">Selección</th>
                                <?php 

                                foreach ($empleados as $emp) {
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

                           <div class="form-row ">  
                        <div class="col offset-md-11 ">
                            <input type="submit" name="modificarEmpleado" class="siguiente btn btn-primary" value="Siguiente">
                               </div>
                            </div>
                            </div></div>
                    </div>
                </form>


            </div> 
















</section>




</div>





<?php include 'css/inc/footer.php';?>



