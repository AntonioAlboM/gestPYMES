<?php 
session_start();
if (isset($_SESSION['gerente'])){
    include 'css/inc/navbarGerente.php';
    include'css/inc/prueba.php';
}
?>


<section class="crearEmpleado">
    <div class="container">
        <div class="col-md-12 rounded">
            <div class="row justify-content-center">
                <h4 class="h4 tituloRegistroEmpleado"><i class="fas fa-user-plus"></i>&nbsp;Formulario de registro de empleado</h4>
            </div>
            <div class="form-row justify-content-center">
                <form action="<?php echo $helper->url('Empresa','registrarEmpleado'); ?>" method="POST">


                    <div class="form-row ">
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  required name="nombreEmpleado" placeholder="Nombre" title="Nombre">
                            </div></div>
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  required name="apellidoEmpleado" placeholder="Apellidos" title="Apellidos">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-id-card"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  required name="dniEmpleado" placeholder="DNI" title="DNI">
                            </div>                        
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  required name="passEmpleado" placeholder="Contraseña" title="contraseña">
                            </div>
                        </div>
                    </div>


                    <div class="form-row ">
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    <input type="date"  name="fechaNacimientoEmpleado"class="form-control all-elements-tooltip"  >

                                </div>
                            </div>
                        </div>

                        <div class="col">

                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-location-arrow"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  required name="localidadEmpleado" placeholder="Localidad" title="Localidad">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  required name="provinciaEmpleado" placeholder="Provincia" title="Provincia">
                            </div>

                        </div>

                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-road"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  required name="calleEmpleado" placeholder="Calle" title="Calle">
                            </div></div>
                    </div>
                    <div class="form-row ">
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-sort-numeric-up"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="number"  required name="numeroEmpleado" placeholder="Número" title="Número">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-sort-numeric-up"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="number"   name="pisoEmpleado" placeholder="Piso" title="Piso">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fab fa-amilia"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="text"  name="letraEmpleado" placeholder="Letra" title="Letra">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-4 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-address-book"></i></div>
                                </div>
                                <input class="form-control all-elements-tooltip" type="number"  required name="cpEmpleado" placeholder="Código Postal" title="cp">
                            </div>
                        </div>
                    </div>

                    <div class="form-row ">  
                        <div class="col offset-md-9 ">
                            <input type="submit" name="registrarEmpresa" class="registrarEmpresa btn btn-primary" value="Registrar Empleado">
                        </div>
                    </div>
                </form> 
            </div> 
        </div>

    </div>
</section>




</div>





<?php include 'css/inc/footer.php';?>










<!--

<form action="<?php echo $helper->url('Empresa','registrarEmpleado'); ?>" method="POST">
<label>Nombre</label> <input type="text" name="nombreEmpleado" required><br>
<label>Apellidos</label> <input type="text" name="apellidoEmpleado" required> <br>
<label>DNI</label> <input type="text" name="dniEmpleado" required><br>
<label>Contraseña</label> <input type="text" name="passEmpleado" required><br>
<label>Fecha de Nacimiento</label> <input type="date" name="fechaNacimientoEmpleado" required><br>
<label>Localidad</label> <input type="text" name="localidadEmpleado" required><br>
<label>Provincia</label> <input type="text" name="provinciaEmpleado" required><br>
<label>Calle</label> <input type="text" name="calleEmpleado" required>
<label>Número</label> <input type="number" name="numeroEmpleado" maxlength="5" required>
<label>Piso</label> <input type="text" name="pisoEmpleado" maxlength="3" required>
<label>letra</label> <input type="text" name="letraEmpleado" maxlength="3"  required><br>
<label>Código postal</label> <input type="text" name="cpEmpleado" maxlength="5" required><br>
<input type="submit" name="registrarEmpleado" value="Registrar Empleado">
</form>
<form action="<?php echo $helper->url('Empresa','volverLogueo'); ?>" method="POST">
<input type="submit" name="volverLogueo" value="Volver">
</form>

</fieldset>
<?php include 'css/inc/footer.php'; ?>
</body>
</html>-->