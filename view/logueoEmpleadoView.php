<?php 
session_start();
if (isset($_SESSION['nombreEmpleado'])){
    include 'css/inc/navbarEmpleado.php';
    include'css/inc/sidebarEmpleado.php';
}


?>




<div class="container inicio">
    <div class="row justify-content-center">
        <div class="col col-md-12">
            <div>
                <h1 class="tituloInicio text-center title">Bienvenido  <?php echo $_SESSION['nombreEmpleado']; ?></h1>

            </div>
            <div class="text-center">
                <img class=" rounded text-center" src="<?php echo $_SESSION['logo'];?>" alt="">

            </div>
        </div>
        <div class="container">
            <!-- Call to Action Well -->
            <div class="card text-white bg-secondary my-4 text-center">
                <div class="card-body">
                    <h2 class="text-white title m-0">Inicio Rápido</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div>
<!--                            <img class="img-fluid rounded" src="/gestpymes/css/img/sancion.jpg" alt="">-->
                        </div>
                        <div class="card-body">

                            <h2 class="card-title title"><form action="<?php echo $helper->url('Empresa','sancionesArchivadasEmpleado'); ?>" method="POST">
                            <button type = "submit" class="btn btn-secondary  btn-lg btn-block"  name = "sancionarEmpleado" value="Sancionar">Mis Sanciones</button>

                        </form></h2>
                            <p class="card-text text-justify">Consulte las sanciones que le han sido impuestas</p>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div>
<!--                            <img class="img-fluid rounded" src="/gestpymes/css/img/calendar-pic.jpeg" alt="">-->
                        </div>
                        <div class="card-body">
                            <h2 class="card-title title"> <form action="<?php echo $helper->url('Empresa','irAformRegistrarEmpleado'); ?>" method="POST">
                            <button type = "submit" class=" btn btn-secondary  btn-lg btn-block" value = "Registrar empleado">Calendario
                            </button></form></h2>
                            <p class="card-text text-justify">Planifique la fecha de sus vacaciones o días de permiso</p>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div>
<!--                            <img class="img-fluid rounded" src="/gestpymes/css/img/comunicado.jpg" alt="">-->
                        </div>
                        <div class="card-body">
                            <h2 class="card-title title">  <form action="<?php echo $helper->url('Empresa','comunicadosArchivados'); ?>" method="POST">
                            <button type = "submit" class="btn btn-secondary btn-lg btn-block "  name = "NuevoComunicado" value = "Enviar">Comunicado</button>
                        </form></h2>
                            <p class="card-text text-justify">Lea los últimos comunicados emitidos por el gerente</p>

                    </div>
                </div>
                <!-- /.col-md-4 -->

            </div>
        </div>



    </div>

</div>
</div>
</div>



<?php include 'css/inc/footer.php';?>