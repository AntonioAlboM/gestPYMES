
<?php 
include 'css/inc/navbar.php';
?>
<script>
localStorage.clear()

</script>
<section id="intro">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-6">
                <h2 class="title"><strong>Gestione su negocio</strong></h2>
                <p class="lead">
                    Lorem ipsum dolor sit amet, qui corpora oportere cu. Usu et iudico maluisset, pro ut lobortis vituperatoribus, percipit aliquando efficiendi est ex.
                </p>
                <ul class="lead list">
                    <li class="oi oi-check">&nbsp;Gestione a sus empleados de una forma rápida</li>
                    <li class="oi oi-check">&nbsp;Ahorre tiempo en papeleos y trámites con sus empleados</li>
                    <li class="oi oi-check">&nbsp;Lorem ipsum dolor sit amet, qui corpora oportere cu.</li>
                </ul>
                <div class="row justify-content-end">
                  
                    <div class="col-md-4 mb-4">
                        <form action="<?php echo $helper->url('Empresa','irAformCrearEmpresa'); ?>" method="POST">
                            <button type="submit" class="btn btn-primary btn-lg botonRegistro" data-toggle="modal" data-target="#modalRegistro">
                                <i class="fas fa-user-plus"></i>&nbsp;Registro
                            </button>
                        </form>
                    </div>
                </div>


            </div>
            <div class="col-md-6 mb-6">
                <div id="carouselBussiness" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/gestpymes/css/img/business1.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/gestpymes/css/img/business2.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/gestpymes/css/img/business3.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</section>
<section id="contenido">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-6">
                <div class="icono">
                    <i class="fas fa-user"></i>
                </div> 
                <div class="features_content">
                    <h3 class="titular title">Empleado</h3>
                    <p class="descripcion">
                        Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                    </p>
                    <form action="<?php echo $helper->url('Empresa','empleado'); ?>" method="POST">
                        <button type="submit" class="btn btn-success" >
                            <i class="fas fa-user-tie"></i>&nbsp;Empleado
                        </button></form>
                </div>

            </div>
            <div class="col-md-6 mb-6">
                <div class="icono">
                    <i class="fas fa-users"></i>
                </div> 
                <div class="features_content">
                    <h3 class="titular title">Empresa</h3>
                    <p class="descripcion">
                        Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                    </p>
                    <form action="<?php echo $helper->url('Empresa','empresa'); ?>" method="POST">
                        <button type="submit" class="btn btn-success" >
                            <i class="fas fa-building"></i>&nbsp;Empresa
                        </button></form>
                </div>

            </div>
        </div>
    </div>
</section>
<?php include 'css/inc/footer.php';?>
</body>
</html>