<?php 
session_start();
if (isset($_SESSION['nombreEmpleado'])){
    include 'css/inc/navbarEmpleado.php';
    include'css/inc/sidebarEmpleado.php';
}


?>




<div class="container inicio">
    <div class="row justify-content-center">
        <div class="col col-md-8">
            <div>
                <h1 class="tituloInicio">Bienvenido a su empresa <?php echo $_SESSION['nombreEmpleado']; ?></h1>

            </div>
            <div class="text-center">
                <img class=" rounded text-center" src="<?php echo $_SESSION['logo'];?>" alt="">

            </div>
        </div>
        <div class="container">
            <!-- Call to Action Well -->
            <div class="card text-white bg-secondary my-4 text-center">
                <div class="card-body">
                    <h2 class="text-white m-0">Inicio Rápido</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div>
                            <img class="img-fluid rounded" src="/gestpymes/css/img/sancion.jpg" alt="">
                        </div>
                        <div class="card-body">

                            <h2 class="card-title"><form action="<?php echo $helper->url('Empresa','cargarEmpleadosSanciones'); ?>" method="POST">
                            <button type = "submit" class="btn btn-secondary btn-lg btn-block"  name = "sancionarEmpleado" value="Sancionar">Sancionar</button>

                        </form></h2>
                            <p class="card-text text-justify">Sancione al empleado que ha cometido infracciones </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div>
                            <img class="img-fluid rounded" src="/gestpymes/css/img/registrar.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title"> <form action="<?php echo $helper->url('Empresa','irAformRegistrarEmpleado'); ?>" method="POST">
                            <button type = "submit" class=" btn btn-secondary  btn-lg btn-block" value = "Registrar empleado">Registrar
                            </button></form></h2>
                            <p class="card-text text-justify">Registre a nuevos empleados</p>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div>
                            <img class="img-fluid rounded" src="/gestpymes/css/img/comunicado.jpg" alt="">
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">  <form action="<?php echo $helper->url('Empresa','enviarComunicado'); ?>" method="POST">
                            <button type = "submit" class="btn btn-secondary btn-lg btn-block "  name = "NuevoComunicado" value = "Enviar">Comunicado</button>
                        </form></h2>
                            <p class="card-text text-justify">Emita un comunicado que llegará a toda su plantilla</p>

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