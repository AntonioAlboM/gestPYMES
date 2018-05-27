<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>gestPYMES</title>
        <?php include 'link.php'; 
        session_start(); 
        
        $gerente = $_SESSION['gerente'];
        ?>

    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                        <form action="<?php echo $helper->url('Empresa','logueo'); ?>" method="POST">
                            <button type="submit" class="nav-link btn navbar-brand btn-link Nosotros" >
                                <h2 class="logo">gestPYMES</h2>
                            </button></form>

                        <ul class="navbar-nav ml-auto">
                           <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users"></i>&nbsp;Empleados</a>
                                <div class="dropdown-menu text-light bg-dark" aria-labelledby="servicios">
                                    
                                    <form action="<?php echo $helper->url('Empresa','irAformRegistrarEmpleado'); ?>" method="POST">
                                        <button type="submit" class="nav-link btn btn-link empresa" >
                                            <i class="fas fa-hand-point-up"></i>&nbsp;Registrar
                                        </button></form>
                                    <form action="<?php echo $helper->url('Empresa','modificarEmpleado'); ?>" method="POST">
                                        <button type="submit" class="nav-link btn btn-link empleado" >
                                            <i class="fas fa-pencil-alt"></i>&nbsp;Modificar
                                        </button></form>
                                    <form action="<?php echo $helper->url('Empresa','eliminarEmpleado'); ?>" method="POST">
                                        <button type="submit" class="nav-link btn btn-link empleado" >
                                            <i class="fas fa-trash-alt"></i>&nbsp;Eliminar
                                        </button></form>
                               </div></li>
                            <li class="nav-item">
                                <!--                                <a class="nav-link" href="#"><span class="oi oi-globe"></span>&nbsp;Nosotros</a>-->
                                <form action="<?php echo $helper->url('Empresa','prueba'); ?>" method="POST">
                                    <button type="submit" class="nav-link btn btn-link Nosotros" >
                                        <i class="fas fa-shield-alt"></i>&nbsp; Sancionar
                                    </button></form>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-envelope"></i>&nbsp;Comunicados</a>
                                <div class="dropdown-menu text-light bg-dark" aria-labelledby="servicios">
                                    <!--
<a class="dropdown-item text-muted" href="#"><i class="fas fa-user-tie"></i>&nbsp;Empresa</a>

-->

                                    <form action="<?php echo $helper->url('Empresa','empresa'); ?>" method="POST">
                                        <button type="submit" class="nav-link btn btn-link empresa" >
                                           <i class="fab fa-facebook-messenger"></i>&nbsp;Enviar 
                                        </button></form>
                                    <form action="<?php echo $helper->url('Empresa','empleado'); ?>" method="POST">
                                        <button type="submit" class="nav-link btn btn-link empleado" >
                                           <i class="fas fa-clock"></i>&nbsp;Anteriores
                                        </button></form>




                                </div>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-comment"></i>&nbsp;Mensajes</a>
                                <div class="dropdown-menu text-light bg-dark" aria-labelledby="servicios">
                                    
                                    <form action="<?php echo $helper->url('Empresa','nuevoMensaje'); ?>" method="POST">
                                        <button type="submit" class="nav-link btn btn-link empresa" >
                                            <i class="fas fa-comment-alt"></i>&nbsp;Nuevo
                                        </button></form>
                                    <form action="<?php echo $helper->url('Empresa','mensajesRecibidos'); ?>" method="POST">
                                        <button type="submit" class="nav-link btn btn-link empleado" >
                                            <i class="fas fa-comments"></i>&nbsp;Recibidos
                                        </button></form>
                                    <form action="<?php echo $helper->url('Empresa','mensajesEnviados'); ?>" method="POST">
                                        <button type="submit" class="nav-link btn btn-link empleado" >
                                            <i class="fas fa-bookmark"></i>&nbsp;Enviados
                                        </button></form>
                               </div></li>
                             <li class="nav-item">
                                <!--                                <a class="nav-link" href="#"><span class="oi oi-globe"></span>&nbsp;Nosotros</a>-->
                                <form action="<?php echo $helper->url('Empresa','index'); ?>" method="POST">
                                    <button type="submit" class="nav-link btn btn-link Nosotros" >
                                        <i class="fas fa-sign-out-alt"></i>&nbsp;Salir
                                    </button></form>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            
                
        </header>

