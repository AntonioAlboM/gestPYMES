<?php 

if (isset($_SESSION['gerente'])){
    include 'css/inc/navbarGerente.php';
    include'css/inc/prueba.php';
}else if(isset($_SESSION['nombreEmpleado'])){
include 'css/inc/navbarEmpleado.php';
    include'css/inc/sidebarEmpleado.php';

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
                            <input type="submit" name="modificarEmpleado" class="siguiente btn btn-primary" value="Siguiente">
                               </div>
                            </div>
                            
                    
                </form>


    

           </div></section>

</div>

<?php include 'css/inc/footer.php'?>





