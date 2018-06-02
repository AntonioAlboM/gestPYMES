<?php 
//session_start();
 ?>
<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar" class="bg-dark ">
        <div class="sidebar-header">
            <img class="img-fluid rounded float-right" src="<?php echo $_SESSION['logo'];?>" alt="">
        </div>

        <ul class="list-unstyled components ml-auto">
            <p class="gerente"><?php echo $_SESSION['gerente']; ?></p>
            <li class="">
                <a href="<?php echo "index.php?controller=Empresa&action=inicioGerente"; ?>" class="btn btn-dark btn-md btn-block" >Inicio</a>
                <a href="#empleadosSubmenu" class="btn btn-dark btn-md btn-block" data-toggle="collapse" aria-expanded="false" id="Empleado">Empleados</a>
                <ul class="collapse  list-unstyled" id="empleadosSubmenu">
                    <li class="">
                        <form action="<?php echo $helper->url('Empresa','irAformRegistrarEmpleado'); ?>" method="POST">
                            <button type = "submit" class=" btn btn-secondary btn-sm btn-block" value = "Registrar empleado">Registrar
                            </button></form>
                    </li>


                    <li>
                        <form action="<?php echo $helper->url('Empresa','modificarEmpleado'); ?>" method="POST">
                            <button type = "submit" class=" btn btn-secondary btn-sm btn-block " name = "modificarEmpleado" value = "Modificar">Modificar
                            </button> </form>
                    </li>
                    <li>
                        <form action="<?php echo $helper->url('Empresa','eliminarEmpleado'); ?>" method="POST">
                            <button type = "submit" class="btn btn-secondary btn-sm btn-block " name = "eliminarEmpleado" value = "Eliminar">Eliminar</button>
                        </form>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#sancionesSubmenu" id="sanciones"data-toggle="collapse" class="btn btn-dark btn-md btn-block"aria-expanded="false">Sanciones</a>
                <ul class="collapse list-unstyled" id="sancionesSubmenu">
                    <li>
                        <form action="<?php echo $helper->url('Empresa','cargarEmpleadosSanciones'); ?>" method="POST">
                            <button type = "submit" class="btn btn-secondary btn-sm btn-block"  name = "sancionarEmpleado" value="Sancionar">Sancionar</button>

                        </form>
                    </li>
                    <li>
                        <form action="<?php echo $helper->url('Empresa','sancionesArchivadas'); ?>" method="POST">
                            <button type = "submit" class="btn btn-secondary btn-sm btn-block"  name = "sancionarEmpleado" value="Sancionar">Anteriores</button>

                        </form>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#comunicadosSubmenu" data-toggle="collapse" class="btn btn-dark btn-md btn-block"aria-expanded="false" id="comunicados">Comunicados</a>
                <ul class="collapse list-unstyled" id="comunicadosSubmenu">
                    <li>
                        <form action="<?php echo $helper->url('Empresa','enviarComunicado'); ?>" method="POST">
                            <button type = "submit" class="btn btn-secondary btn-sm btn-block "  name = "NuevoComunicado" value = "Enviar">Enviar</button>
                        </form>
                    </li>
                    <li>
                        <form action="<?php echo $helper->url('Empresa','comunicadosArchivados'); ?>" method="POST">
                            <button type = "submit" class="btn btn-secondary btn-sm btn-block "  name = "comunicadosArchivados" value = "Anteriores">Anteriores</button>
                        </form>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#mensajesSubmenu" id="mensajes" data-toggle="collapse" class="btn btn-dark btn-md btn-block"aria-expanded="false">Mensajes</a>
                <ul class="collapse list-unstyled" id="mensajesSubmenu">
                    <li>
                        <form action="<?php echo $helper->url('Empresa','nuevoMensaje'); ?>" method="POST">
                            <button type = "submit" class="btn btn-secondary btn-sm btn-block "  name = "nuevo" value = "Nuevo">Chat</button>
                        </form>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#calendarioSubmenu" id="calendario" data-toggle="collapse" class="btn btn-dark btn-md btn-block"aria-expanded="false">Calendario</a>
                <ul class="collapse list-unstyled" id="calendarioSubmenu">
                    <li>
                        <form action="<?php echo $helper->url('Empresa','vacaciones'); ?>" method="POST">
                            <button type = "submit" class="btn btn-secondary btn-sm btn-block"  name = "vacaciones" value = "Vacaciones">Vacaciones</button>
                        </form>
                    </li>
                    <li>
                        <form action="<?php echo $helper->url('Empresa','permisos'); ?>" method="POST">
                            <button type = "submit" class="btn btn-secondary btn-sm btn-block"  name = "permisos" value = "Permisos">Permisos</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>


    <!--<div id="content">

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
</div>-->

