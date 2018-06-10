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
            <h4 class="h4 tituloRegistroEmpleado text-center title justify-content-md-center"><i class="fas fa-comments"></i>&nbsp; Elija un empleado para Sancionar </h4>
        </div>
        <div class="fom-row justify-content-center">
            <div class="col-10 offset-1">
                <form action="<?php echo $helper->url('Empresa','sancionarEmpleado'); ?>" method="POST">

                    <div class="form-row ">

                        <div class="input-group mb-4 ">

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






