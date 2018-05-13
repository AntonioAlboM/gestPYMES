<?php 
include '/../css/inc/navbar.php';
?>

<section class="crearEmpresa">
    <div class="container contenedorRegistro">
        <div class="row">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-5">
                        <p>We provide compiled CSS and JS (`bootstrap.*`), as well as compiled and minified CSS and JS (`bootstrap.min.*`). CSS [source maps](https://developers.google.com/web/tools/chrome-devtools/debug/readability/source-maps) (`bootstrap.*.map`) are available for use with certain browsers' developer tools. Bundled JS files (`bootstrap.bundle.js` and minified `bootstrap.bundle.min.js`) include [Popper](https://popper.js.org/), but not [jQuery](https://jquery.com/).

                        </p>
                    </div>
                    <div class="col-md-6 registro rounded">
                        <div class="row justify-content-center">
                            <h4 class="h4"><i class="fas fa-user-plus"></i>&nbsp;Formulario de registro</h4>
                        </div>
                        <div class="form-row justify-content-center">
                            <form action="<?php echo $helper->url('Empresa','registrarEmpresa'); ?>"  method="POST" enctype="multipart/form-data" >

                                <!-- <div class="form-row ">
<div class="input-group mb-4 mr-sm-4 col-md-12">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fas fa-address-card"></i></div>
</div>
<input class="form-control all-elements-tooltip" type="text" placeholder="Empresa" required name="empresa" data-toggle="tooltip"  title="Empresa" >
</div>
</div>-->
                                <div class="form-row ">
                                    <div class="input-group mb-4 mr-sm-4 col-md-12">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-clipboard"></i></div>
                                        </div>
                                        <input class="form-control all-elements-tooltip" type="text"  required name="tipoEmpresa" placeholder="Tipo de Empresa" title="Tipo de Empresa">
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="input-group mb-4 mr-sm-4 col-md-12">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-euro-sign"></i></div>
                                        </div>
                                        <input class="form-control all-elements-tooltip" type="number" placeholder="Capital social" required name="capitalSocial" data-toggle="tooltip"  title="Capital social" >
                                    </div>
                                </div>

                                <div class="form-row ">
                                    <div class="input-group mb-4 mr-sm-4 col-md-12">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-building"></i></div>
                                        </div>
                                        <input class="form-control all-elements-tooltip" type="text" placeholder="Sector" required name="sector" data-toggle="tooltip"  title="Sector" >
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="input-group mb-4 mr-sm-4 col-md-12">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-user-tie"></i></div>
                                        </div>
                                        <input class="form-control all-elements-tooltip" type="text" placeholder="Gerente" required name="gerente" data-toggle="tooltip"  title="Gerente" >
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="input-group mb-4 mr-sm-4 col-md-12">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                                        </div>
                                        <input class="form-control all-elements-tooltip" type="password" placeholder="Contraseña" required name="pass" data-toggle="tooltip"  title="Contraseña" >
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="input-group mb-4 mr-sm-4 col-md-12">

                                        <label class="btn btn-outline-secondary all-elements-tooltip" for="my-file-selector">
                                            <input id="my-file-selector" type="file" name="logo"style="display:none;">
                                            <i class="fas fa-images"></i>&nbsp;Logotipo
                                        </label>

                                        <!--                                    
<input class="form-control-file all-elements-tooltip" type="file" placeholder="Logotipo" required name="logo" data-toggle="tooltip"  title="Logotipo" >-->
                                    </div>
                                </div>




                                <input type="submit" name="registrarEmpresa" class= "btn btn-primary" value="Registrar Empresa">
                            </form> 
                        </div> 
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

<?php include 'css/inc/footer.php';?>
