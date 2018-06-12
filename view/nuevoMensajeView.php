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
                <h4 class="h4 title tituloRegistroEmpleado text-center"><i class="fas fa-comments"></i>&nbsp; Elija un empleado para comenzar el Chat</h4>
            </div>
            <div class="form-row justify-content-center">
                <form action="<?php echo $helper->url('Empresa','irAchatPrivado'); ?>" method="POST">
   <div class="form-row justify-content-center">
                        <div class="col">
                            <div class="input-group mb-12 ">
                              <?php echo $paginar[1]; ?>
                       
                        <table class="table cargarEmpleados table-striped table-bordered table-hover">
                                <th class="title">Nombre</th>
                                <th class="title">Apellidos</th>
                                <th class="title">Selección</th>
                                
                            
                                
                                <tbody>
                                   
                                   <?php   $resultados = $paginar[0]; $nuevos = $paginar[2];?>
                                    <?php foreach ($resultados as $datos){?>
                                   <tr>
                                                <td><?php echo $datos->nombre;?></td>
                                                <td><?php echo $datos->apellidos;?></td>
                                       
                                            
                                        
                                      
                                       
                                       <td ><input type="radio" name="destinatario" value="<?php echo $datos->id;?>"></td>
                                          <?php foreach($nuevos as $id){
                                                   
                                                if($datos->id == $id->idEmisor){
                                       ?>
                                         <td><span class="badge badge-dark">Nuevos Mensajes</span></td>
                                             <?php }} ?>
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
                            </div></div>
                    </div>
                </form>
                
                
        </div> 
    </div>

    </div>
</section>




</div>





<?php include 'css/inc/footer.php';?>






