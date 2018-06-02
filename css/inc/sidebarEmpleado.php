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
            <p class="gerente"><?php echo $_SESSION['nombreEmpleado'] ; ?></p>
            <li class="">
                <a href="<?php echo "index.php?controller=Empresa&action=inicioEmpleado"; ?>" class="btn btn-dark btn-md btn-block" >Inicio</a>

            <li>
                <a href="#sancionesSubmenu" id="sanciones"data-toggle="collapse" class="btn btn-dark btn-md btn-block"aria-expanded="false">Sanciones</a>
                <ul class="collapse list-unstyled" id="sancionesSubmenu">
                    <li>
                        <form action="<?php echo $helper->url('Empresa','sancionesArchivadasEmpleado'); ?>" method="POST">
                            <button type = "submit" class="btn btn-secondary btn-sm btn-block"  name = "sancionarEmpleado" value="Sancionar">Mis Sanciones</button>

                        </form>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#comunicadosSubmenu" data-toggle="collapse" class="btn btn-dark btn-md btn-block"aria-expanded="false" id="comunicados">Comunicados</a>
                <ul class="collapse list-unstyled" id="comunicadosSubmenu">
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

