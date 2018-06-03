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

<section class="crearEmpleado">
    <div class="container">
        <div class="col-md-12 rounded">
            <div class="row justify-content-center">
                <h4 class="h4 tituloRegistroEmpleado"><i class="fas fa-comments"></i>&nbsp; Elija un empleado para comenzar el Chat</h4>
            </div>
            <div class="form-row justify-content-center">
                <form action="<?php echo $helper->url('Empresa','irAchatPrivado'); ?>" method="POST">
   <div class="form-row justify-content-center">
                        <div class="col">
                            <div class="input-group mb-12 ">
                            
                            <table class="table cargarEmpleados table-striped table-bordered table-hover  ">
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Selección</th>
                                <?php 

                                foreach ($EmpleadosEmpresa as $emp) {
                                    $nombre = $emp->nombre;
                                    $apellido= $emp->apellidos;
                                    $idEmpleado = $emp->id;
                                ?>
                                    <tr>
                                        <td scope="row"><?php echo $nombre; ?></td>
                                        <td><?php echo $apellido ;?></td>
                                        <td > <input type="radio" name="destinatario" value="<?php echo $idEmpleado; ?>"></td>
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
    </div>

    </div>
</section>




</div>





<?php include 'css/inc/footer.php';?>






