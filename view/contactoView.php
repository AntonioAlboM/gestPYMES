<?php 
include '/../css/inc/navbar.php';
?>
<header class="mapa">

    <div class="row">
        <div class="col-lg-12">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1809.5428910724436!2d-3.80517288567486!3d40.291824566221834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1526123709062"  height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

</header>
<section >
    <!-- Page Content -->
    <div class="container">

        <div class="row justify-content-around">
            <div class="col-sm-7 contacto rounded">

                <form>
                    <h4 class="h4formulario">Rellene el formulario para recibir información</h4>
                    <div class="form-row">
                        <label for="colFormLabel" class="col-form-label"><i class="fas fa-user-tie"></i></label>
                        <div class="form-group col-md-3">
                            <input class="form-control all-elements-tooltip" type="text" placeholder="Nombre" required name="nombre" data-toggle="tooltip"  title="Nombre" >
                        </div>
                        <label for="colFormLabel" class="col-form-label"><i class="fas fa-at"></i></label>
                        <div class="form-group col-md-3">

                            <input class="form-control all-elements-tooltip" type="email" class="form-control" required name="email" placeholder="e-mail" title="e-mail">
                        </div>
                        <label for="colFormLabel" class="col-form-label"><i class="fas fa-phone"></i></label>
                        <div class="form-group col-md-3">
                            <input class="form-control all-elements-tooltip" type="text" placeholder="Teléfono" required name="telefono" data-toggle="tooltip"  title="Teléfono" >
                        </div>
                    </div>
                    <div class="form-row">
                        <label  class="col-form-label">Escriba su mensaje:</label>
                        <div class="form-group col-md-10">
                            <textarea class="form-control all-elements-tooltip" id="exampleFormControlTextarea1" name="mensajecontacto" rows="6" data-toggle="tooltip"  title="Consulta">
                            </textarea>
                        </div></div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-sm-4 contacto rounded">
                <h4 class="h4formulario">Dirección</h4>
                <address>
                    <strong>GestPYMES</strong>
                    <br>Calle Mostoles
                    <br>Fuenlabrada, Madrid
                    <br>
                </address>
                <address>
                    <abbr title="Phone">P:</abbr>
                    91-243-46-12
                    <br>
                    <abbr title="Email">E:</abbr>
                    <a href="mailto:#">correo@gestpymes.es</a>
                </address>
            </div>
        </div>
        <!-- /.row -->



    </div>
</section>
<?php include 'css/inc/footer.php';?>   
