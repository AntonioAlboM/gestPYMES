<!--




<div class="row">
<div class="col-sm-2 mr-3 ">
<nav class="nav flex-column">
<a class="nav-link active" href="#">Active</a>
<a class="nav-link" href="#">Link</a>
<a class="nav-link" href="#">Link</a>
<a class="nav-link disabled" href="#">Disabled</a>
</nav>
</div>

<div class="col-sm-2 mr-3 ">
<nav class="nav flex-column">
<a class="nav-link active" href="#">Active</a>
<a class="nav-link" href="#">Link</a>
<a class="nav-link" href="#">Link</a>
<a class="nav-link disabled" href="#">Disabled</a>
</nav>
</div></div>-->
<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar" class=" ">
        <div class="sidebar-header">
            <img class="img-fluid rounded float-right" src="<?php $_SESSION['logo']; ?>" alt="">
        </div>

        <ul class="list-unstyled components navbar-nav ml-auto">
            <p><?php echo $_SESSION['gerente']; ?></p>
            <li class="">
                <a href="#empleadosSubmenu" data-toggle="collapse" aria-expanded="false">Empleados</a>
                <ul class="collapse  list-unstyled" id="empleadosSubmenu">
                    <li class="">
                        <form action="<?php echo $helper->url('Empresa','irAformRegistrarEmpleado'); ?>" method="POST">
                            <button type = "submit" class=" btn  btn-link" value = "Registrar empleado">Registrar
                            </button></form>
                    </li>


                    <li>
                        <form action="<?php echo $helper->url('Empresa','modificarEmpleado'); ?>" method="POST">
                            <input type = "submit" class=" btn  btn-link " name = "modificarEmpleado" value = "Modificar">
                        </form>
                    </li>
                    <li>
                        <form action="<?php echo $helper->url('Empresa','eliminarEmpleado'); ?>" method="POST">
                            <input type = "submit" class="nav-link btn navbar-brand btn-link " name = "eliminarEmpleado" value = "Eliminar">
                        </form>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#sancionesSubmenu" data-toggle="collapse" aria-expanded="false">Sanciones</a>
                <ul class="collapse list-unstyled" id="sancionesSubmenu">
                    <li>
                        <form action="<?php echo $helper->url('Empresa','prueba'); ?>" method="POST">
                            <input type = "submit" class="nav-link btn navbar-brand btn-link"  name = "sancionarEmpleado" value="Sancionar">
                            
                        </form>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#comunicadosSubmenu" data-toggle="collapse" aria-expanded="false">Comunicados</a>
                <ul class="collapse list-unstyled" id="comunicadosSubmenu">
                    <li>
                        <form action="<?php echo $helper->url('Empresa','nuevoComunicado'); ?>" method="POST">
                            <input type = "submit" class="nav-link btn navbar-brand btn-link "  name = "NuevoComunicado" value = "Enviar Comunicado">
                        </form>
                    </li>
                    <li>
                        <form action="<?php echo $helper->url('Empresa','comunicadosArchivados'); ?>" method="POST">
                            <input type = "submit" class="nav-link btn navbar-brand btn-link "  name = "comunicadosArchivados" value = "Comunicados Anteriores">
                        </form>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#mensajesSubmenu" data-toggle="collapse" aria-expanded="false">Mensajes</a>
                <ul class="collapse list-unstyled" id="mensajesSubmenu">
                    <li>
                        <form action="<?php echo $helper->url('Empresa','enviarMensaje'); ?>" method="POST">
                            <input type = "submit" class="nav-link btn navbar-brand btn-link "  name = "vacaciones" value = "Nuevo">
                        </form>
                    </li>
                    <li>
                        <form action="<?php echo $helper->url('Empresa','mensajesRecibidos'); ?>" method="POST">
                            <input type = "submit" class="nav-link btn navbar-brand btn-link "  name = "vacaciones" value = "Recibidos">
                        </form>
                    </li>

                    <li>
                        <form action="<?php echo $helper->url('Empresa','mensajesEnviados'); ?>" method="POST">
                            <input type = "submit" class="nav-link btn navbar-brand btn-link "  name = "permisos" value = "Enviados">
                        </form>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#calendarioSubmenu" data-toggle="collapse" aria-expanded="false">Calendario</a>
                <ul class="collapse list-unstyled" id="calendarioSubmenu">
                    <li>
                        <form action="<?php echo $helper->url('Empresa','vacaciones'); ?>" method="POST">
                            <input type = "submit" class="nav-link btn navbar-brand btn-link "  name = "vacaciones" value = "Vacaciones">
                        </form>
                    </li>
                    <li>
                        <form action="<?php echo $helper->url('Empresa','permisos'); ?>" method="POST">
                            <input type = "submit" class="nav-link btn navbar-brand btn-link "  name = "permisos" value = "Permisos">
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content">

        <h2>Collapsible Sidebar Using Bootstrap 3</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h2>Lorem Ipsum Dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="line"></div>

        <h3>Lorem Ipsum Dolor</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>

