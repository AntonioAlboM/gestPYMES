<?php 
session_start();
if (isset($_SESSION['gerente'])){
    include 'css/inc/navbarGerente.php';
    include'css/inc/prueba.php';
}
?>

<?php 
    $nombre = $datosEmpleado->nombre;
    $apellido = $datosEmpleado->apellidos;
    $pass = $datosEmpleado->pass;
    $localidad = $datosEmpleado->localidad;
    $calle = $datosEmpleado->calle;
    $id = $datosEmpleado->id;
    $piso = $datosEmpleado->piso;
    $letra = $datosEmpleado->letra;
    $cp = $datosEmpleado->cp;
    $provincia = $datosEmpleado->provincia;
    $fechaTabla = $datosEmpleado->fechaNacimiento;
    $fecha = date("d/m/Y", strtotime($fechaTabla));
    $dni = $datosEmpleado->dni;
    $numero = $datosEmpleado->numero;
    $id = $datosEmpleado->id;
?>


<section class="crearEmpleado">
    <div class="container">
        <div class="col-md-12 rounded">
            <div class="row justify-content-center">
                <h4 class="h4 tituloRegistroEmpleado"><i class="fas fa-redo-alt"></i>&nbsp;Formulario de modificación de empleado</h4>
            </div>
            <div class="form-row justify-content-center">
                <form action="<?php echo $helper->url('Empresa','modificarEmpleadoAction'); ?>" method="POST">


                    <div class="form-row ">
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  required name="nombreEmpleado" value="<?php echo $nombre; ?>" placeholder ="<?php echo $nombre; ?>" readonly title="Nombre" >
                            </div></div>
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  required name="apellidoEmpleado" value="<?php echo $apellido; ?>" placeholder ="<?php echo $apellido; ?>" readonly title="Apellidos">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-id-card"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  required name="dniEmpleado"  value="<?php echo $dni; ?>" placeholder ="<?php echo $dni; ?>" readonly title="DNI">
                            </div>                        
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  required name="passEmpleado" value="<?php echo $pass; ?>" placeholder ="<?php echo $pass; ?>"  title="contraseña">
                            </div>
                        </div>
                    </div>


                    <div class="form-row ">
                         <div class="col-md-3">

                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-info"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  required name="id" value="<?php echo $id; ?>" placeholder ="<?php echo $id; ?>" readonly title="id">
                            </div>
                        </div>
                        
                        <div class="col-md-3">

                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-location-arrow"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  required name="localidadEmpleado" value="<?php echo $localidad; ?>" placeholder ="<?php echo $localidad; ?>"  title="Localidad">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  required name="provinciaEmpleado" value="<?php echo $provincia; ?>" placeholder ="<?php echo $provincia; ?>"  title="Provincia">
                            </div>

                        </div>

                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-road"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  required name="calleEmpleado" value="<?php echo $calle; ?>" placeholder ="<?php echo $calle; ?>"  title="Calle">
                            </div></div>
                    </div>
                    <div class="form-row ">
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-sort-numeric-up"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="number"  required name="numeroEpleado" value="<?php echo $numero ;?>" placeholder ="<?php echo $numero; ?>"  title="Número">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-sort-numeric-up"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="number"   name="fas fa-sort-numeric-up" value="<?php echo $piso; ?>" placeholder ="<?php echo $piso; ?>"  title="Piso">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fab fa-amilia"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  name="letraEmpleado" value="<?php echo $letra; ?>" placeholder ="<?php echo $letra; ?>" title="Letra">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-address-book"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="number"  required name="cpEmpleado" value="<?php echo $cp; ?>" placeholder ="<?php echo $cp; ?>"  title="cp">
                            </div>
                        </div>
                    </div>

                    <div class="form-row ">  
                        <div class="col offset-md-9 ">
                            <input type="submit" name="registrarEmpresa" class="registrarEmpresa btn btn-primary" value="Modificar Empleado">
                        </div>
                    </div>
                </form> 
            </div> 
        </div>

    </div>
</section>




</div>





<?php include 'css/inc/footer.php';?>



